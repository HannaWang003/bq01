<?php
$type = "動畫圖片";
?>
<h2 class="cent">新增<?= $type ?></h2>
<hr>
<form action="./api/add_mvim.php" method="post" enctype="multipart/form-data">
    <div class="cent"><span><?= $type ?>:</span><input type="file" name="img"></div>
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>