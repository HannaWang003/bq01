<div style="width:95%; padding:2px; height:190px; margin-top:10px; padding:5px 10px 5px 10px; position:relative;">
    <span class="t botli">更多最新消息顯示區
        <div style="text-align:end;">
            <?php
            $total = $News->count(['sh' => 1]);
            $div = 5;
            $now = ($_GET['p']) ?? 1;
            $pages = ceil($total / $div);
            $start = ($now - 1) * $div;
            $num = $start;
            $news = $News->all(['sh' => 1], "limit $start,$div");
            ?>
        </div>
    </span>
    <ul class="ssaa" style="list-style-type:none;">
        <?php
        $news = $News->all(['sh' => 1], "limit 0,5");
        foreach ($news as $n) {
            $num++;
        ?>
            <li><?= $num ?>.&nbsp;&nbsp;<?= mb_substr($n['title'], 0, 10); ?>
                <div class="all" style="display:none"><?= $n['text'] ?></div>
            </li>
        <?php
        }
        ?>

    </ul>
    <div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
    </div>
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
    <script>
        $(".ssaa li").hover(
            function() {
                $("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
                $("#altt").show()
            }
        )
        $(".ssaa li").mouseout(
            function() {
                $("#altt").hide()
            }
        )
    </script>
</div>