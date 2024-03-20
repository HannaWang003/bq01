<script>
    <?php
    if (isset($_GET['error'])) {
        echo "alert('{$_GET['error']}')";
    }
    ?>
</script>
<h3 style="text-align:center">管理登入</h3>
<hr>
<form action="./api/login.php" method="post">
    <div style="text-align:center"><span>帳號:</span><input type="text" name="acc"></div>
    <div style="text-align:center"><span>密碼:</span><input type="password" name="pw"></div>
    <div style="text-align:center"><input type="submit" 　val="送出"><input type="reset" value="清除"></div>
</form>