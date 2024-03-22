<?php
$type = "管理者帳號";
?>
<h2 class="cent">新增<?= $type ?></h2>
<hr>
<table style="margin:auto;">
    <tr>
        <td><?= $type ?>:</td>
        <td><input type='text' name='acc' id="acc"></td>
    </tr>
    <tr>
        <td>密碼:</td>
        <td><input type='password' name='pw' id="pw"></td>
    </tr>
    <tr>
        <td>再次確認密碼:</td>
        <td><input type='password' name='pw2' id="pw2"></td>
    </tr>
</table>
<div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
<script>
    $("input[type=submit]").on('click', function() {
        let pw = $('#pw').val();
        let pw2 = $('#pw2').val();
        if (pw == pw2) {
            let acc = $('#acc').val();
            if (acc == "") {
                alert("未輸入管理帳號");
            } else {
                $.post('../api/add_admin.php', {
                    acc,
                    pw
                }, function(res) {
                    location.href = "../back.php?do=admin";
                })
            }
        } else {
            alert('密碼不一致，請重新輸入');
        }
    })
    $("input[type=reset]").on('click', function() {
        $("input[type=text],input[type=password]").val("");
    })
</script>