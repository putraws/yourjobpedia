<?php
session_start();
require_once('config.php');
if (isset($_POST['tp'])) {
    if (file_exists("../mod/" . $_POST['tp'] . ".php")) {
        include("../mod/" . $_POST['tp'] . ".php");
    } else {
        include("../mod/404.php");
    }
} else {
    include("../mod/404.php");
}
