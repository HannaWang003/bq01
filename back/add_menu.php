<?php
$type = "主選單";
?>
<h2 class="cent">新增<?= $type ?></h2>
<hr>
<form action="./api/add_menu.php" method="post">
    <div class="cent"><span style='vertical-align:top'>主<?= $type ?>名稱:</span>
        <input type='text' name='text'>

    </div>
    <div class="cent"><span style='vertical-align:top'><?= $type ?>連結網址:</span>
        <input type='text' name='url'>

    </div>
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>