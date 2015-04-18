<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Millet DB Project Movies</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/modernizr.js"></script>
  </head>
  <body>

<?php
include 'connection/conn.php';
require_once('header.php');
echo '<h1 align="center">Subquery query</h1>';
echo '<p></p>';

//execute the SQL query and return records
$result = mysql_query("Select
  genre.type,
  movies.title,
  director.name
From
  movies Inner Join
  genre On genre.type = movies.genre Inner Join
  director On director.name = movies.director
Group By
  genre.type, movies.title, director.name");
//fetch tha data from the database

echo '
<h2>The query below joins the movies, directors and genre table to show the type of genres each director did.</h2><br />

<h3><b>Query:</b> Select
  genre.type,
  movies.title,
  director.name<br />
From
  movies Inner Join
  genre <br />On genre.type = movies.genre Inner Join
  director <br />On director.name = movies.director<br />
Group By
  genre.type, movies.title, director.name</h3><br />';

echo '<table align="center" width="85%" border = "1">';
echo '<thead>';
echo '<tr>';
echo '<th align="left">Type</th>';
echo '<th align="left">Title</th>';
echo '<th align="left">Director</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>'; 
while ($row = mysql_fetch_array($result)) {
   
echo '<tr>';

   echo '<td>'.$row['type'].'</a></td>';
   echo '<td>'.$row['title'].'</td>';
   echo '<td>'.$row['name'].'</td>';
echo '</tr>';

}
echo '</tbody>';
echo '</table>';
mysql_close($dbhandle);
?>
  
<script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>