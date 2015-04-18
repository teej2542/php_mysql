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
echo '<h1 align="center">2nd SQL aggregate functions query</h1>';
echo '<p></p>';

//execute the SQL query and return records
$result = mysql_query("Select
  Max(movies.votes),
  movies.title
From
  movies
Order By
  Max(movies.votes) Desc,
  Count(Distinct movies.year) Desc");
//fetch tha data from the database

echo '
<h2>The query below shows the movie with the max votes</h2><br />

<h3><b>Query:</b>Select
  Max(movies.votes),
  movies.title<br />
From
  movies<br />
Order By
  Max(movies.votes) Desc,
  Count(Distinct movies.year) Desc</h3><br />';

echo '<table align="center" width="85%" border = "1">';
echo '<thead>';
echo '<tr>';
echo '<th align="left">Max Votes/th>';
echo '<th align="left">Title</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>'; 
while ($row = mysql_fetch_array($result)) {
   
echo '<tr>';

   echo '<td>'.$row['Max(movies.votes)'].'</a></td>';
   echo '<td>'.$row['title'].'</td>';
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