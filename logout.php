<?php

require 'classes/classes.php';

use Classes\User;

$user = new User();
$user->logout();

header("Location: login.php");
exit();
?>