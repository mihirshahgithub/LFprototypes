<!-- index_insert.php -->

<?php
require('mysql_connect.php');
//$query="INSERT INTO `todo_items(FS2)`(`ID`, `TITLE`, `DETAILS`, `TIMESTAMP`, `USER_ID`) VALUES ('{$id}','{$title}','{$details}',NOW())";
//print_r($query);
//mysqli_query($conn,$query);
?>
<?php

if(!empty($_POST)){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $details=$_POST['details'];
    $query="INSERT INTO `todo_items(FS2)`(`ID`, `TITLE`, `DETAILS`) VALUES ('{$id}','{$title}','{$details}')";
    mysqli_query($conn,$query);
}
?>


<?php
if(mysqli_affected_rows($conn)>0){
    $output="I'm the shit";
    print_r($output);
}

print_r($_POST);
    ?>
