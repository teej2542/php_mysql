<?php
include 'connection/conn.php';
$name = $_POST['name'];
$movie = $_POST['movie'];
$gendor = $_POST['gendor'];


$update = mysql_query("insert into actors (name, movie, gendor) values ('$name', '$movie', '$gendor')");

mysql_close($dbhandle);

header("Location: actors.php"); /* Redirect browser */
exit();
?>