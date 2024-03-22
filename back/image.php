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

                $total = $Image->count(['sh' => 1]);
                $div = 3;
                $now = ($_GET['p']) ?? 1;
                $pages = ceil($total / $div);
                $start = ($now - 1) * $div;
                $num = $start;

                $rows = $Image->all(['sh' => 1], "limit $start,$div");
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
        <div class="t">
            <?php
            if ($now - 1 > 0) {
                $pre = $now - 1;
                echo "<a href='?do=image&p=$pre'> < </a>";
            }

            for ($i = 1; $i <= $pages; $i++) {
                $style = ($now == $i) ? "style='font-size:20px;color:skyblue;'" : "";
                echo "<a href='?do=image&p=$i' $style>$i</a>";
            }
            if ($now + 1 <= $pages) {
                $next = $now + 1;
                echo "<a href='?do=image&p=$next'> > </a>";
            }
            ?>

        </div>
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