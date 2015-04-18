
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
?>
    
<h1 align="center">Millett Movies Database Application</h1>
<p></p>

<div class="row">
  <div class="small-2 large-4 columns">
    <ul class="side-nav">
  <li><a href="allMovies.php">Movies</a></li>
  <li><a href="studio.php">Studios</a></li>
  <li><a href="directors.php">Directors</a></li>
  <li><a href="actors.php">Actors</a></li>
  <li><a href="genre.php">Genre</a></li>
</ul>
  </div>
  <div class="small-4 large-4 columns"></div>
  <div class="small-6 large-4 columns"></div>
</div>

<div class="row">
  <div class="small-2 large-4 columns"><a href="query1.php" class="button [radius round]">1st multi-table query</a></div>
  <div class="small-4 large-4 columns"><a href="query2.php" class="button [radius round]">2nd multi-table query</a></div>
  <div class="small-6 large-4 columns"><a href="query3.php" class="button [radius round]">Subquery query</a></div>
</div>

<div class="row">
  <div class="small-2 large-4 columns"><a href="query4.php" class="button [radius round]">1st SQL aggregate functions query</a></div>
  <div class="small-4 large-4 columns"><a href="query5.php" class="button [radius round]">2nd SQL aggregate functions query</a></div>
  <div class="small-6 large-4 columns"><a href="query6.php" class="button [radius round]">NULL search condition query</a></div>
</div>

<div class="row">
  <div class="small-2 large-4 columns"><a href="#" data-reveal-id="firstModal" class="button [radius round]">E-R Diagram and Relational Schema</a></div>
</div>


<?php
//<!-- Reveal Modals begin -->
echo '<div id="firstModal" class="reveal-modal" data-reveal>';
echo '<h1>E-R Diagram</h1>';
echo '<img src="img/erdiagram.png"><br />';
echo '<img src="img/relationalSchema.png">';
echo '<a class="close-reveal-modal"></a>';
echo '</div>';
//<!-- Reveal Modals end -->

?>

<script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>