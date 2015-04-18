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
$id = $_GET['id'];
//echo 'ID: '.$id;
$result = mysql_query("SELECT * from movies where idmovies = '$id'");
while ($row = mysql_fetch_array($result)) {
echo '<h1 align="center">Movie Data For: '.$row['title'].'</h1>';
echo '<p></p>';

echo '<table align="center" border = "0">';
echo '<tr>';
echo '<th>Title</th>';
echo '<td>'.$row['title'].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th>Year</th>';
echo '<td>'.$row['year'].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th>Director</th>';
echo '<td>'.$row['director'].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th>Genre</th>';
echo '<td>'.$row['genre'].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th>Run Time</th>';
echo '<td>'.$row['runtime'].'</td>';
echo '</tr>';
echo '<tr>';
echo '<th>Gross</th>';
echo '<td>dg</td>';
echo '</tr>';
echo '<tr>';
echo '<th>Starring</th>';
echo '<td>Stars</td>';
echo '</tr>';
echo '<tr>';
echo '<th>URL</th>';
echo '<td><a href="'.$row['url'].'">IMDB info for '.$row['title'].'</a></td>';
echo '</tr>';
echo'<tr><td><a href="#" data-reveal-id="firstModal" class="radius button">Edit Movie Information</a></td></tr>';
echo '</table>';

//<!-- Reveal Modals begin -->
echo '<div id="firstModal" class="reveal-modal" data-reveal>';
echo '<h2>Edit Movie Information: '.$row['title'].'</h2>';

echo '<form action="edit_movie.php?id='.$row['idmovies'].'" method="POST">';
  echo '<div class="row">';
    echo '<div class="small-8">';
      echo '<div class="row">';
        echo '<div class="small-3 columns">';
          echo '<label for="right-label" class="right inline">Title</label>';
        echo '</div>';
        echo '<div class="small-9 columns">';
          echo '<input type="text" name="title" id="right-label" value="'.$row['title'].'">';
        echo '</div>';
        
        echo '<div class="small-3 columns">';
          echo '<label for="right-label" class="right inline">Year</label>';
        echo '</div>';
        echo '<div class="small-9 columns">';
          echo '<input type="text" name="year" id="right-label" value="'.$row['year'].'">';
        echo '</div>';
        
        echo '<div class="small-3 columns">';
          echo '<label for="right-label" class="right inline">Director</label>';
        echo '</div>';
        echo '<div class="small-9 columns">';
          echo '<input type="text" name="director" id="right-label" value="'.$row['director'].'">';
        echo '</div>';
        
        echo '<div class="small-3 columns">';
          echo '<label for="right-label" class="right inline">Genre</label>';
        echo '</div>';
        echo '<div class="small-9 columns">';
          echo '<input type="text" name="genre" id="right-label" value="'.$row['genre'].'">';
        echo '</div>';
        
        echo '<div class="small-3 columns">';
          echo '<label for="right-label" class="right inline">Run Time</label>';
        echo '</div>';
        echo '<div class="small-9 columns">';
          echo '<input type="text" name="runtime" id="right-label" value="'.$row['runtime'].'">';
        echo '</div>';
        
        echo '<div class="small-3 columns">';
          echo '<label for="right-label" class="right inline">Gross</label>';
        echo '</div>';
        echo '<div class="small-9 columns">';
          echo '<input type="text" name="gross" id="right-label" value="Gross">';
        echo '</div>';
        
        echo '<div class="small-3 columns">';
          echo '<label for="right-label" class="right inline">Starring</label>';
        echo '</div>';
        echo '<div class="small-9 columns">';
          echo '<input type="text" name="starring" id="right-label" value="Stars">';
        echo '</div>';
        
        echo '<div class="small-3 columns">';
          echo '<label for="right-label" class="right inline">URL</label>';
        echo '</div>';
        echo '<div class="small-9 columns">';
          echo '<input type="text" name="url" id="right-label" value="'.$row['url'].'">';
        echo '</div>';
        
        echo '<input type="submit" value="Submit" class="button [radius round]">';
        
      echo '</div>';
    echo '</div>';
  echo '</div>';
echo '</form>';

  echo '<a class="close-reveal-modal"></a>';
echo '</div>';
//<!-- Reveal Modals end -->



}





mysql_close($dbhandle);
?>

<script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>