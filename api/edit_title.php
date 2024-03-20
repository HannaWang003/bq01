<?php
include_once "db.php";
foreach ($_POST['id'] as $key => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $Title->del($id);
    } else {
        $row = $Title->find($id);
        if (isset($_POST['sh']) && in_array($id, $_POST['sh'])) {
            $row['sh'] = 1;
        } else {
            $row['sh'] = 0;
        }
        $row['text'] = $_POST['text'][$key];
        $Title->save($row);
    }
}
to("../back.php?do=title");
