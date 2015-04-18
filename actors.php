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
echo '<h1 align="center">Actors</h1>';
echo '<p></p>';
?>
<div class="row">
  <div class="small-2 large-4 columns">
    <ul class="side-nav">
  <li><a href="#" data-reveal-id="firstModal" class="radius button"><font color = "white">Add a actor</font></a></li>
</ul>
  </div>
  <div class="small-4 large-4 columns"></div>
  <div class="small-6 large-4 columns"></div>
</div>
<?php
$result = mysql_query("SELECT * from actors");

echo '<table align="center" width="50%" border = "1">';
echo '<thead>';
echo '<tr>';
echo '<th align="left">ID</th>';
echo '<th align="left">Name</th>';
echo '<th align="left">Age</th>';
echo '<th align="left">Gender</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>'; 
while ($row = mysql_fetch_array($result)) {
   
echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
   echo '<td>'.$row['name'].'</td>';
   echo '<td>'.$row['movie'].'</td>';
   if($row['gendor'] == "Actor")
   {
        echo '<td>male</td>';
   }
   else
   {
        echo '<td>female</td>';
   }
echo '</tr>';

}
echo '</tbody>';
echo '</table>';


//Add a actor pop up.
echo '<div id="firstModal" class="reveal-modal" data-reveal>';
echo '<h2>Add a Actor</h2>';

echo '<form action="add_actor.php" method="POST">';
echo '<div class="row">';
    echo '<div class="small-8">';
      echo '<div class="row">';
      
        echo '<div class="small-3 columns">';
          echo '<label for="right-label" class="right inline" name="name">Name:</label>';
        echo '</div>';
        echo '<div class="small-9 columns">';
          echo '<input type="text" id="right-label" placeholder="Enter name">';
        echo '</div>';
        
        echo '<div class="small-3 columns">';
          echo '<label for="right-label" class="right inline" name="movie">movie:</label>';
        echo '</div>';
        echo '<div class="small-9 columns">';
          echo '<input type="text" id="right-label" placeholder="Enter movie">';
        echo '</div>';
        
        echo '<div class="small-3 columns">';
          echo '<label for="right-label" class="right inline" name="gendor">Gender:</label>';
        echo '</div>';
        echo '<div class="small-9 columns">';
          echo '<input type="text" id="right-label" placeholder="actor or actress">';
        echo '</div>';
        
        echo '<input type="submit" value="Submit" class="button [radius round]">';
        
      echo '</div>';
    echo '</div>';
  echo '</div>';
echo '</form>';

  echo '<a class="close-reveal-modal"></a>';
echo '</div>';

mysql_close($dbhandle);
?>

<script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>