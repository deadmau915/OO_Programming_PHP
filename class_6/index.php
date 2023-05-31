<?php

require 'User.php';
require 'Admin.php';

$user = new User;
$user->type = new Admin();

echo $user->type->greet();

?>