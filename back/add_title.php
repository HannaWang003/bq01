<?php
$type = "網站標題";
?>
<h2 class="cent">新增<?= $type ?></h2>
<hr>
<form action="./api/add_title.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
    <div class="cent"><span><?= $type ?>圖片:</span><input type="file" name="img"></div>
    <div class="cent"><span><?= $type ?>替代文字:</span><input type="text" name="text"></div>
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>