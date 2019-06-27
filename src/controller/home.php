<?php
$users = include('../src/model/get_users_teams');
var_dump($users);
include('../src/view/home.html');
