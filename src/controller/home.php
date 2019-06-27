<?php
$users = include('../src/model/get_users_teams.php');
var_dump($users);
include('../src/view/home.html');
