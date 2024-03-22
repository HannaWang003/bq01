<?php
include_once "db.php";
$_POST['sh'] = 1;
$_POST['big_id'] = 0;
$Menu->save($_POST);
to("../back.php?do=menu");
