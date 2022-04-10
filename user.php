<?php
$username = $_POST['username'];
$con = new mysqli('localhost', 'root','', 'db.sql');
$sql1 = "select * from ajax where username='$username'";
$result = $con->query($sql1);
if ($result->num_rows > 0) {
echo "<span style=color:red>That username already taken! Try Another!</span>";
}
else{
echo "<span style=color:green>$username is Available!!!</span>";
}
?>
