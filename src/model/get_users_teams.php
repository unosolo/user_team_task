<?php

$sql = 'SELECT * FROM users';
$users_result = mysqli_query($db, $sql);
if (mysqli_num_rows($users_result) > 0) {
  $sql = 'SELECT t.name 
  FROM teams_users as tu INNER JOIN teams as t ON tu.team_id = t.id
  WHERE user_id=?';
  $query_team_stmt = mysqli_prepare($db, $sql);

  $users = [];
  while ($user = mysqli_fetch_assoc($users_result)) {
    mysqli_stmt_bind_param($query_team_stmt, "s", $user['id']);

    mysqli_stmt_execute($query_team_stmt);

    mysqli_stmt_bind_result($query_team_stmt, $team);

    /* fetch teams for the current user */
    $teams = '';
    $separator = '';
    while (mysqli_stmt_fetch($query_team_stmt)) {
      if ($team) {
        $teams .= $separator . $team;
      }
      $separator = ', ';
    }

    $user['teams'] = $teams;
    $users[] = $user;
  }

  mysqli_stmt_close($stmt);
}

return $users;
