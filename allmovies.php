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
echo '<h1 align="center">All Movies</h1>';
echo '<p></p>';
//execute the SQL query and return records
$result = mysql_query("SELECT * from movies");
//fetch tha data from the database

echo '<table align="center" width="85%" border = "1">';
echo '<thead>';
echo '<tr>';
echo '<th align="left">Title</th>';
echo '<th align="left">Director</th>';
echo '<th align="left">Year</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>'; 
while ($row = mysql_fetch_array($result)) {
   
echo '<tr>';

   echo '<td><a href="selected_movie.php?id='.$row['idmovies'].'">'.$row['title'].'</a></td>';
   echo '<td>'.$row['director'].'</td>';
   echo '<td>'.$row['year'].'</td>';
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