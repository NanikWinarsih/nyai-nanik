<?php
if(isset($_POST["name"] || $_POST["age"])==$_POST["simpan"])
{
echo "Welcome ". $_POST['name']. "<br />";
echo "You are ". $_POST['age']. " years old.";
exit();
}
?>
<html>
<body>
<form action="<?php $_PHP_SELF ?>" method="POST">
Name: <input type="text" name="name" />
Age: <input type="text" name="age" />
<input type="submit" name="simpan"/>
</form>
</body>
</html>