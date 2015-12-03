<?php
session_start();
//print_r($_SESSION);
if(empty($_SESSION)){
    $_SESSION['name']='';
    $_SESSION['age']='';
    $_SESSION['occupation']='';
}
?>
<form action="session_reader.php" method="POST">
    <input type="text" name="name" placeholder="Name" value="<?php if(isset($_SESSION['name'])) print($_SESSION['name']); ?>">
    <input type="text" name="age" placeholder="Age" value="<?php if(isset($_SESSION['age'])) print($_SESSION['age']);?>">
    <input type="text" name="occupation" placeholder="Occupation" value="<?php if(isset($_SESSION['occupation'])) print($_SESSION['occupation']);?>">
    <button type="submit" value="button">Submit</button>
<?php
if(isset($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $values) {
        print("<p>{$values}</p>");
    }
}

?>
</form><!-- Session Setter -->
