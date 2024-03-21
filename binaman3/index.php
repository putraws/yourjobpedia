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
    if (!empty($_GET['page'])) {
        if ($_GET['page']=='loginjs') {
            include('template/header.php');
            include('page/loginjs.php'); 
            include('template/footerlogin.php');
        } else if ($_GET['page']=='logincompany') {
            include('template/header.php');
            include('page/logincompany.php'); 
            include('template/footerlogin.php');
        } else if ($_GET['page']=='login') {
            include('template/header.php');
            include('page/login.php'); 
            include('template/footerlogin.php');
        } else if ($_GET['page']=='register') {
            include('template/header.php');
            include('page/register.php'); 
            include('template/footerlogin.php');
        } else if ($_GET['page']=='regisjs') {
            include('template/header.php');
            include('page/regisjs.php'); 
            include('template/footerlogin.php');
        } else if ($_GET['page']=='regiscompany') {
            include('template/header.php');
            include('page/regiscompany.php'); 
            include('template/footerlogin.php');
        } else {
            include('template/header.php');
        if (file_exists("page/" . $_GET['page'] . ".php")) {
            include("page/" . $_GET['page'] . ".php");
        } else {
            include("page/errors_404.php");

        }
        include('template/footer.php');
    }
    } else {
        include('template/header.php');
        include('page/beranda.php');
        include('template/footer.php');
    }
    
}

$pdo = null;
