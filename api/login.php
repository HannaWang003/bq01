<?php
include_once "db.php";
$res = $Admin->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);
if ($res > 0) {
    to("../back.php");
    $_SESSION['admin'] = $_POST['acc'];
} else {
    to("../index.php?do=login&error=帳號或密碼錯誤");
}
