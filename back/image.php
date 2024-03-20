<?php
$type = "校園映像圖片";
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?= $type ?>管理</p>
    <form method="post" action="./api/edit_image.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="60%"><?= $type ?></td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $rows = $Image->all();
                foreach ($rows as $row) {
                ?>
                    <tr style="text-align:center">
                        <td width="45%"><img src="./img/<?= $row['img'] ?>" style="width:150px;height:100px"></td>
                        <td width="7%"><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
                        <td width="7%"><input type="checkbox" name="del[]" value="<?= $row['id'] ?>" id=""></td>
                        <td><input type="button" onclick="op('#cover','#cvr','./back/edit_img.php?id=<?= $row['id'] ?>')" value="更新圖片"></button></td>
                    </tr>
                    <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                <?php
                }
                ?>

            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./back/add_img.php')" value="新增<?= $type ?>">
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>