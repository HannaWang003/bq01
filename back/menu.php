<?php
$type = "選單";
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?= $type ?>管理</p>
    <form method="post" action="./api/edit_menu.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="25%">主<?= $type ?>名稱</td>
                    <td width="40%"><?= $type ?>連結網址</td>
                    <td width="10%">次<?= $type ?>數</td>
                    <td width="5%">顯示</td>
                    <td width="5%">刪除</td>
                    <td width="15%"></td>
                </tr>
                <?php
                $rows = $Menu->all(['big_id' => 0]);
                foreach ($rows as $row) {
                    $num = $Menu->count(['big_id' => $row['id']]);
                ?>
                    <tr>
                        <td><input type="text" name="text[]" value="<?= $row['text'] ?>">
                        </td>
                        <td><input type="text" name="url[]" value="<?= $row['url'] ?>">
                        </td>
                        <td><?= $num ?></td>
                        <td class="cent"><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? "checked" : "" ?>>
                        </td>
                        <td class="cent"><input type="checkbox" name="del[]" value="<?= $row['id'] ?>" id="">
                        </td>
                        <td>
                            <input type="button" onclick="op('#cover','#cvr','./back/edit_submenu.php?id=<?= $row['id'] ?>')" value="編輯次選單">
                        </td>
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
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./back/add_menu.php')" value="新增主<?= $type ?>">
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>