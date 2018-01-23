<html>
<meta charset="utf-8">
<body>
<html>
 
<body>
</br>
<form action="upload.php" method="post" enctype="multipart/form-data">
    스킨 이미지를 선택해주세요 (스킨 등록) : 
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="스킨 등록(업로드)" name="submit">
</form>
 </br>
<link href="gallery.css" rel="stylesheet">
<div class="row center">
    <ul>
        <?php
            $dirname = "../skins/";
            $images = scandir($dirname);
            $ignore = array(".", "..");
            foreach($images as $curimg) {
                if (!in_array($curimg, $ignore) && strtolower(pathinfo($curimg, PATHINFO_EXTENSION)) == "png") {
        ?>
        <li class="skin" onclick="$('#nick').val($(this).find('.title').text());" data-dismiss="modal">
            <div class="circular" style='background-image: url("./<?php echo $dirname.$curimg ?>")'></div>
            <h4 class="title"><?php echo pathinfo($curimg, PATHINFO_FILENAME); ?></h4>
        </li>
        <?php
                }
            }                 
        ?>
    </ul>
</div>
