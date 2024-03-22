<h1 class="cent">進站總人數管理</h1>
<hr>
<form action="./api/edit.php?do=total" method="post">
    <table style="margin:auto">
        <tr class="yel">
            <td style="width:50%;text-align:start;">進站總人數:</td>
            <th><input type="text" name="total" value="<?= $Total->find(1)['total'] ?>"></th>
        </tr>
    </table>
    <div class="cent"><input type="submit" value="修改確認"><input type="reset" value="重置"></div>
</form>