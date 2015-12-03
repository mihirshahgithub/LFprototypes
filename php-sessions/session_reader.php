<?php
session_start();
$_SESSION['errors']=[];

//print_r($_POST);
$_SESSION['value']=$_POST;
//print_r($_SESSION);

$formName='/^.{2,}$/';
$formAge='/^\d+$/';
$formOccupation='/^.\w+$/';

$_SESSION['name'] = $_POST['name'];
if(preg_match($formName,$_POST['name'])){

}
else{
    $_SESSION['errors']['name']="Name Must be More than One Character";
}
$_SESSION['age'] = $_POST['age'];
if(preg_match($formAge,$_POST['age'])){

}
else{
    $_SESSION['errors']['age']="Age must be a number";
}
$_SESSION['occupation'] = $_POST['occupation'];
if(preg_match($formOccupation,$_POST['occupation'])){

}
else{
    $_SESSION['errors']['occupation']="Name needs to be more than 1 character";
}
header('location: session_setter.php');
?>

