<?php
session_start();
if(!empty($_SESSION["userId"])) {
    require_once './dashboard.php';
} else {
    require_once './login-form.php';
}
?>