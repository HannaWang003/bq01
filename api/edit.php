<?php
include_once "db.php";
$do = $_GET['do'];
$DB = ${ucfirst($do)};
$_POST['id'] = 1;
$DB->save($_POST);
to("../back.php?do=$do");
