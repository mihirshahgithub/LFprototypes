<div id="image_container"></div>
<?php
$images=(glob("images/*"));
foreach ($images as $image) {
    echo "<img src=".$image." />";
};?>