<h2 class="cent">更新標題區圖片</h2>
<hr>
<form action="./api/edit_title_img.php?id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
    <div class="cent"><span>標題區圖片:</span><input type="file" name="img"></div>
    <div class="cent"><input type="submit" value="更新"><input type="reset" value="重置"></div>
</form>