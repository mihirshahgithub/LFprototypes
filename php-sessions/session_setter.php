<?php
session_start();
?>
<form action="session_reader.php" method="POST">
    <input type="text" name="name" placeholder="Name" value="<?php print($_SESSION['value']['name'])?>"><br>
    <input type="text" name="age" placeholder="Age" value="<?php print($_SESSION['value']['age'])?>"><br>
    <input type="text" name="occupation" placeholder="Occupation" value="<?php print($_SESSION['value']['occupation'])?>"><br>
    <button type="submit" value="button">Submit</button>
</form><!-- Session Setter -->