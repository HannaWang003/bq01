<?php
include_once "db.php";
if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $key => $id) {
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $Menu->del($id);
        } else {
            $row = $Menu->find($id);
            if (isset($_POST['sh']) && in_array($id, $_POST['sh'])) {
                $row['sh'] = 1;
            } else {
                $row['sh'] = 0;
            }
            $row['text'] = $_POST['text'][$key];
            $row['url'] = $_POST['url'][$key];
            $Menu->save($row);
        }
    }
}
if (isset($_POST['add_text'])) {
    foreach ($_POST['add_text'] as $key => $text) {
        $sub['text'] = $text;
        $sub['url'] = $_POST['add_url'][$key];
        $sub['big_id'] = $_GET['big_id'];
        $sub['sh'] = 1;
        $Menu->save($sub);
    }
}

to("../back.php?do=menu");
