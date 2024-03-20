<?php
$type = ($_GET['do'] == 'ad') ? "動態文字廣告" : "最新消息資料";
?>
<h2 class="cent">新增<?= $type ?></h2>
<hr>
<form action="./api/add_text.php?do=<?= $_GET['do'] ?>" method="post">
    <div class="cent"><span style='vertical-align:top'><?= $type ?>:</span>
        <?php
        echo ($_GET['do'] == 'ad') ? "<input type='text' name='text'>" : "<textarea name='text' style='width:50%;height:100px;'></textarea>"
        ?>
    </div>
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>