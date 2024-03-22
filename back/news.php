<?php
$type = "最新消息資料";
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?= $type ?>管理</p>
    <form method="post" action="./api/edit_text.php?do=<?= $_GET['do'] ?>">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="80%"><?= $type ?></td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                </tr>
                <?php
                $total = $News->count(['sh' => 1]);
                $div = 5;
                $now = ($_GET['p']) ?? 1;
                $pages = ceil($total / $div);
                $start = ($now - 1) * $div;
                $num = $start;

                $rows = $News->all(['sh' => 1], "limit $start,$div");
                foreach ($rows as $row) {
                ?>
                    <tr>
                        <td width="23%"><textarea name="text[]" style="width:90%;height:50px;"><?= $row['text'] ?></textarea>
                        </td>
                        <td class="cent" width="7%"><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
                        <td class="cent" width="7%"><input type="checkbox" name="del[]" value="<?= $row['id'] ?>" id="">
                        </td>
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
                echo "<a href='?do=news&p=$pre'> < </a>";
            }

            for ($i = 1; $i <= $pages; $i++) {
                $style = ($now == $i) ? "style='font-size:20px;color:skyblue;'" : "";
                echo "<a href='?do=news&p=$i' $style>$i</a>";
            }
            if ($now + 1 <= $pages) {
                $next = $now + 1;
                echo "<a href='?do=news&p=$next'> > </a>";
            }
            ?>

        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./back/add_text.php?do=<?= $_GET['do'] ?>')" value="新增<?= $type ?>">
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>