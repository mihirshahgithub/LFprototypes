<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<div id="image_container"></div>
<?php
$images = (glob("images/*"));
foreach ($images as $image) {
    echo "<img src=" . $image . " />";
}; ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
   <ol>
    <?php
for($i=0;$i<count($images);$i++){
    //    print_r('<li data-target="#myCarousel" data-slide-to=' . "$i" . 'class="active">');
//    print_r('<li data-target="#myCarousel" data-slide-to=' . "$i" . '>');
    if($i===0){
        print('<li data-target="#myCarousel" data-slide-to=' . "$i" . 'class="active">');
    }else{
        print('<li data-target="#myCarousel" data-slide-to=' . "$i" . '>');
    }



}
    ?>
       </ol>



</body>
</html>