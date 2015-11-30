<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$images = (glob("images/*"));
?>
<div class="container">
    <?php
    foreach ($images as $image) {
        echo "<img src=" . $image . " />";
    };
    ?>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php
        print ("<li data-target='#myCarousel' data-slide-to='0' class='active'></li>");

        for ($i = 1; $i < count($images); $i++) {
            print("<li data-target='#myCarousel' data-slide-to='[$i]'></li>");
        }
        ?>
    </ol>

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
    <?php
    print ("<div class='item active'><img src='$images[0]'></div>");
    for ($i = 1; $i < count($images); $i++) {
        print ("<div class='item'><img src='{$images[$i]}'></div>");
    }
    ?>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>


</div>
</body>
</html>


