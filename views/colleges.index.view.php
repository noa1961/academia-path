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
<body>
  <div class="container mb-5">
    <h1 class="display-4 d-flex justify-content-center mt-5 mb-5">Admin Dashboard</h1>
    <ul class="list-group mt-5">
      <?php
        foreach($colleges as $college) {
          ?>
          <li class="list-group-item">
            <a style="color: black;" href="<?php echo route('colleges/'.$college->id);?>"><?php echo $college->name; ?> (<?php echo $college->type->type; ?>)</a>
            <span class="badge badge-dark badge-pill">TOP <?php echo $college->ranking; ?></span>
            <form class="m-1 form-inline float-right" method="POST" action="<?php echo route('admin/colleges/'.$college->id);?>">
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a class="m-1 btn btn-dark float-right pr-4 pl-4" href="<?php echo route('admin/colleges/edit/'.$college->id);?>" role="button">Edit</a>
          </li>
          <?php
        }
      ?>
    </ul>
    <div class="d-flex justify-content-center">
      <a class="btn btn-dark mt-3 pr-4 pl-4" href="<?php echo route('admin/colleges/create'); ?>" role="button">+</a>
    </div>
    </div>
</body>
</html>