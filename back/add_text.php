<?php
$type = ($_GET['do'] == 'ad') ? "動態文字廣告" : "最新消息資料"
?>
<h2 class="cent">新增<?= $type ?></h2>
<hr>
<form action="./api/add_text.php?do=<?= $_GET['do'] ?>" method="post">
    <div class="cent"><span><?= $type ?>:</span><input type="text" name="text"></div>
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>