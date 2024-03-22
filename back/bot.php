<h1 class="cent">頁尾版權資料管理</h1>
<hr>
<form action="./api/edit.php?do=bot" method="post">
    <table style="margin:auto">
        <tr class="yel">
            <td style="width:50%;text-align:start;">頁尾版權資料:</td>
            <th><input type="text" name="bot" value="<?= $Bot->find(1)['bot'] ?>"></th>
        </tr>
    </table>
    <div class="cent"><input type="submit" value="修改確認"><input type="reset" value="重置"></div>
</form>