<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cavicchioli phpAjakDischi</title>
  <link rel="stylesheet" href="style.css">
  <?php
    include "data.php";
  ?>

</head>
<body>
<!--
- stampa integrale in PHP attraverso l'include
-->
<div class="page">
  <header>

  </header>

  <div class="containerDisco">
    <?php
      foreach ($database as $key => $value) {
    ?>
      <div class="disco">

        <div class="poster">
          <?php
            echo
            '<img src="'
            . $value['poster']
            . '" >';
          ?>
        </div>
        <div class="title"><?php echo $value['title']; ?></div>
        <div class="author"><?php echo $value['author']; ?>:</div>
        <div class="year"><?php echo $value['year']; ?></div>
      </div>
    <?php
      }
    ?>
  </div>

</div>



</body>
</html>
