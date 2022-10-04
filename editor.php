<?php
require_once './config/config.php';


// $id = $_SESSION['id'];
// $user_name = $_SESSION['user_name'];
$id = '1';
$user_name = 'hal';
$prj = $_SESSION['project'] = 'project';


require_once './api/route.php';
require_once './tpl/editor.php';
