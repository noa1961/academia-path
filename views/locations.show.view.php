<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Academia Path</title>
  <link rel="icon" type="image/x-icon" href="/img/favicon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/styles/styles.css">
</head>
  <?php include 'views/header.php'; ?>
  <body>
      <div class="container mb-5">
    <h1 class="display-4 mt-5 mb-5">
    </h1>
    <ul class="list-group mt-5">
      <?php
        foreach($colleges as $college) {
          ?>
          <li class="list-group-item">
            <a style="color: black;" href="<?php echo route('colleges/'.$college->id);?>"><?php echo $college->name; ?></a>
            <span>-></span>
            <span class="badge badge-dark badge-pill p-2">TOP <?php echo $college->ranking; ?></span>
          </li>
          <?php
        }
      ?>
    <a class="back-to-top" href="<?php echo route('colleges');?>">
      <img src="/img/up-arrow.png">
    </a>
    </div>
  </body>
</html>