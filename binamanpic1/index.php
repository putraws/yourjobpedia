<?php
session_start();
date_default_timezone_set("Asia/Jakarta");
require_once('include/config.php');
require_once('include/function.php');

if (isset($_SESSION['login'])) {
    if (isset($_GET['logout']) && $_GET['logout']) {
        session_destroy();
        echo ("<META HTTP-EQUIV=Refresh CONTENT=\"0.1;URL=./\">");
    } else {
        include('template/headerlogin.php');
        if (!empty($_GET['page'])) {
            if (file_exists("page/" . $_GET['page'] . ".php")) {
                include("page/" . $_GET['page'] . ".php");
            } else {
                include("page/errors_404.php");
            }
        } else {
            include('page/beranda.php');
        }
        include('template/footer.php');
    }
} else {
    include('template/header.php');
    if (!empty($_GET['page'])) {
        if (file_exists("page/" . $_GET['page'] . ".php")) {
            include("page/" . $_GET['page'] . ".php");
        } else {
            include("page/errors_404.php");
        }
    } else {
        include('page/beranda.php');
    }
    include('template/footer.php');
}

$pdo = null;
