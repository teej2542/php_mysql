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
echo '<h1 align="center">2nd multi-table query</h1>';
echo '<p></p>';

//execute the SQL query and return records
$result = mysql_query("Select
  actors.name,
  movies.title,
  director.name As director
From
  actors Inner Join
  movies On actors.movie = movies.title Inner Join
  director On director.name = movies.director");
//fetch tha data from the database

echo '
<h2>The query below joins the movies, actors and directors table to show which actors and directors work together.</h2><br />

<h3><b>Query:</b> Select
  actors.name,
  movies.title,
  director.name As director<br />
From
  actors Inner Join
  movies <br />On actors.movie = movies.title Inner Join
  director On director.name = movies.director</h3><br />';

echo '<table align="center" width="85%" border = "1">';
echo '<thead>';
echo '<tr>';
echo '<th align="left">Name</th>';
echo '<th align="left">Title</th>';
echo '<th align="left">Director</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>'; 
while ($row = mysql_fetch_array($result)) {
   
echo '<tr>';

   echo '<td>'.$row['name'].'</a></td>';
   echo '<td>'.$row['title'].'</td>';
   echo '<td>'.$row['director'].'</td>';
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