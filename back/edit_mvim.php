<?php
$type = "動畫圖片";
?>
<h2 class="cent">更新<?= $type ?></h2>
<hr>
<form action="./api/edit_mvim_img.php?id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
    <div class="cent"><span><?= $type ?>:</span><input type="file" name="img"></div>
    <div class="cent"><input type="submit" value="更新"><input type="reset" value="重置"></div>
</form>