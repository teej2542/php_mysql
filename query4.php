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
echo '<h1 align="center">1st SQL aggregate functions query</h1>';
echo '<p></p>';

//execute the SQL query and return records
$result = mysql_query("Select
  Avg(movies.runtime),
  movies.title,
  movies.genre
From
  movies
Group By
  movies.title, movies.genre");
//fetch tha data from the database

echo '
<h2>The query below is the movie table that returns the average runtime (length) of the movie.</h2><br />

<h3><b>Query:</b> Select
  Avg(movies.runtime),
  movies.title,
  movies.genre<br />
From
  movies<br />
Group By
  movies.title, movies.genre</h3><br />';

echo '<table align="center" width="85%" border = "1">';
echo '<thead>';
echo '<tr>';
echo '<th align="left">Avg Time</th>';
echo '<th align="left">Title</th>';
echo '<th align="left">Genre</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>'; 
while ($row = mysql_fetch_array($result)) {
   
echo '<tr>';

   echo '<td>'.$row['Avg(movies.runtime)'].'</a></td>';
   echo '<td>'.$row['title'].'</td>';
   echo '<td>'.$row['genre'].'</td>';
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