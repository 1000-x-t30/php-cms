<?php
require_once './config/config.php';

if(!isset($_SESSION)) {
    header('Location: ./index.php');
    exit;
}

// $user_name = $_SESSION['user_name'];

require_once './tpl/projects.php';