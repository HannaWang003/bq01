<?php
include_once "./api/db.php";
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>卓越科技大學校園資訊系統</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
</head>

<body>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>
    <iframe style="display:none;" name="back" id="back"></iframe>
    <div id="main">
        <a title="" href="./index.php">
            <?php
$img = $Title->find(['sh'=>1])['img'];
            ?>
            <div class="ti" style="background:url('./img/<?=$img?>'); background-size:cover;"></div>
            <!--標題-->
        </a>
        <div id="ms">
            <div id="lf" style="float:left;">
                <div id="menuput" class="dbor">
                    <!--主選單放此-->
                    <span class="t botli">主選單區</span>


                    <style>
                    a {
                        text-decoration: none;
                    }

                    .title {
                        width: 200px;
                        height: 35px;
                        background: url('./icon/menu.fw.png');
                        margin: 10px;
                        text-align: center;
                        line-height: 35px;
                        position: relative;
                    }

                    .title:hover {
                        background: url('./icon/menu2.fw.png');
                    }

                    .alt {
                        width: 200px;
                        height: 35px;
                        background: url('./icon/menu3.fw.png');
                        margin: 2px;
                        text-align: center;
                        line-height: 35px;
                        position: relative;
                        top: -20px;
                        left: 20%;
                        display: none;
                        z-index: 100;
                    }

                    .alt:hover {
                        background: url('./icon/menu4.fw.png');
                    }
                    </style>
                    <?php
                    $menus = $Menu->all(['sh' => 1, 'big_id' => 0]);
                    foreach ($menus as $menu) {
                    ?>
                    <div class="sswww">
                        <div class="title"><a href="<?= $menu['url'] ?>"><?= $menu['text'] ?></a></div>
                        <?php
                            $subs = $Menu->all(['sh' => 1, 'big_id' => $menu['id']]);
                            foreach ($subs as $sub) {
                            ?>
                        <div class="alt"><a href="<?= $sub['url'] ?>"><?= $sub['text'] ?></a></div>
                        <?php
                            }
                            ?>
                    </div>
                    <?php
                    }
                    ?>
                    <script>
                    $(".sswww").hover(
                        function() {
                            $('.alt').hide();
                            $(this).children('.alt').show();
                        },
                        function() {
                            $('.alt').hide();
                        })
                    </script>




                </div>
                <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
                    <span class="t">進站總人數 :
                        <?php
                        echo $Total->find(1)['total'];
                        ?>
                    </span>
                </div>
            </div>
            <div class="di"
                style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
                <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
                </marquee>
                <div style="height:32px; display:block;"></div>
                <?php
                $do = ($_GET['do']) ?? "main";
                $file = "./front/$do.php";
                if (file_exists(($file))) {
                    include $file;
                } else {
                    include "./front/main.php";
                }

                ?>
            </div>
            <div id="alt"
                style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
            </div>
            <div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
                <!--右邊-->
                <button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
                    onclick="lo('?do=login')">管理登入</button>
                <div style="width:89%; height:480px;" class="dbor">
                    <span class="t botli">校園映象區</span>
                    <div
                        style="display:flex;flex-direction:column;align-items:center;justify-content:center;margin:5px;">
                        <img src="./img/01E01.jpg" onclick="pp(1)">
                        <?php
                        $images = $Image->all(['sh' => 1]);
                        foreach ($images as $idx => $img) {
                        ?>
                        <img class="im" id="ssaa<?= $idx ?>" src="./img/<?= $img['img'] ?>"
                            style="width:150px;height:100px;border:10px solid orange;margin:5px;">
                        <?php
                        }
                        ?>
                        <img src="./img/01E02.jpg" onclick="pp(2)">
                    </div>

                    <script>
                    var nowpage = 0,
                        num = <?= $Image->count(['sh' => 1]) ?>;

                    function pp(x) {
                        var s, t;
                        if (x == 1 && nowpage - 1 >= 0) {
                            nowpage--;
                        }
                        if (x == 2 && (nowpage + 1) * 3 <= num * 1 + 3) {
                            nowpage++;
                        }
                        $(".im").hide()
                        for (s = 0; s <= 2; s++) {
                            t = s * 1 + nowpage * 1;
                            $("#ssaa" + t).show()
                        }
                    }
                    pp(1)
                    </script>
                </div>
            </div>
        </div>
        <div style="clear:both;"></div>
        <div
            style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
            <span class="t" style="line-height:123px;"><?php
             echo $Bot->find(1)['bot'];
            ?></span>
        </div>
    </div>

</body>

</html>