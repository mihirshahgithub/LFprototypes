<!-- index_select.php -->
<?php
require('mysql_connect.php');
 $query="SELECT * FROM `todo_items(FS2)` WHERE `user_id`='3'";

$result=mysqli_query($conn, $query);
//print_r($result);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $output[]=$row;
    }
    print_r($output)
}

