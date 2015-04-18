<?php
include 'connection/conn.php';
$id = $_GET['id'];
//echo 'ID: '.$id;
$title = $_POST['title'];
$year = $_POST['year'];
$director = $_POST['director'];
$genre = $_POST['genre'];
$runtime = $_POST['runtime'];
$gross = $_POST['gross'];
$starring = $_POST['starring'];
$url = $_POST['url'];

$update = mysql_query("update movies set title = '$title' where idmovies = '$id'");
$update2 = mysql_query("update movies set year = '$year' where idmovies = '$id'");
$update3 = mysql_query("update movies set director = '$director' where idmovies = '$id'");
$update4 = mysql_query("update movies set genre = '$genre' where idmovies = '$id'");
$update5 = mysql_query("update movies set runtime = '$runtime' where idmovies = '$id'");
$update6 = mysql_query("update movies set gross = '$gross' where idmovies = '$id'");
$update7 = mysql_query("update movies set starring = '$starring' where idmovies = '$id'");
$update8 = mysql_query("update movies set url = '$url' where idmovies = '$id'");
mysql_close($dbhandle);

header("Location: selected_movie.php?id=$id"); /* Redirect browser */
exit();
?>