<?php
include_once "../api/db.php";
$type = "主選單";
?>
<h2 class="cent">新增<?= $type ?></h2>
<hr>
<form action="../api/add_submenu.php?big_id=<?= $_GET['id'] ?>" method="post">
    <table id="subtable">
        <tr>
            <td>次選單名稱</td>
            <td>次選單連結網址</td>
            <td>刪除</td>
        </tr>
        <?php
        if (($Menu->count(['big_id' => $_GET['id']])) > 0) {
            $subs = $Menu->all(['big_id' => $_GET['id']]);
            foreach ($subs as $sub) {
        ?>
                <tr>
                    <td><input type="text" name="text" value="<?= $sub['text'] ?>"></td>
                    <td><input type="text" name="url" value="<?= $sub['url'] ?>"></td>
                    <td><input type="checkbox" name="del[]" value="<?= $sub['id'] ?>"></td>
                    <input type="hidden" name="id[]" value="<?= $sub['id'] ?>">
                </tr>

        <?php
            }
        }
        ?>
    </table>
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"><input type="button" value="更多次選單"></div>
</form>
<script>
    $('input[type=button]').on('click', function() {
        let html = `
        <tr>
            <td><input type="text" name="add_text[]" id=""></td>
            <td><input type="text" name="add_url[]" id=""></td>
        </tr>
        `
        $('#subtable').append(html);
    })
</script>