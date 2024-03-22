<?php
include_once "db.php";
foreach ($_POST['id'] as $key => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $Admin->del($id);
    } else {
        $row = $Admin->find($id);
        $row['acc'] = $_POST['acc'][$key];
        $row['pw'] = $_POST['pw'][$key];
        $Admin->save($row);
    }
}
to("../back.php?do=admin");
