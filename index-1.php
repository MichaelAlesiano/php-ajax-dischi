<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="dist/style.css">
  <link rel="stylesheet" href="dist/framework.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <title>Raccolta dischi musicali utilizzando PHP-Vue.js</title>
</head>

<header>
  <div class="">
    <img src="https://i.pinimg.com/originals/1d/f4/6e/1df46e5b59ceaf54b63302e95644fd80.png" alt="logo">
  </div>
</header>

<main>

  <div class="centro container">

    <?php foreach ($dischi as $disco) { ?>
      <div class="box">
        <img src=" <?php echo $disco['copertina']; ?> " alt="">
        <h2> <?php echo $disco['titolo']; ?> </h2>
        <p> <?php echo $disco['artista']; ?> </p>
        <span> <?php echo $disco['anno']; ?> </span>
        <span> <?php echo $disco['genere']; ?> </span>
      </div>
    <?php } ?>

  </div>

</main>

<script src="dist/app.js" charset="utf-8"></script>

</html>
