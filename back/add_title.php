<h2 class="cent">新增標題區圖片</h2>
<hr>
<form action="./api/add_title.php" method="post" enctype="multipart/form-data">
    <div class="cent"><span>標題區圖片:</span><input type="file" name="img"></div>
    <div class="cent"><span>標題區替代文字:</span><input type="text" name="text"></div>
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>