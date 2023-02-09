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
  <div class="container">
    <section id="info" class="mt-5">
      <h1 class="display-4 pb-3"><?php echo $college->name; ?></h1>
      <span class="badge badge-dark badge-pill p-2 mb-2">TOP <?php echo $college->ranking; ?></span>
      <span>-></span>
      <p class="d-inline"><?php echo $college->location->state; ?>, <?php echo $college->location->abbreviation?></p>
    </section>
    <hr />
    <section id="overview">
      <div class="row">
        <div class="col-10">
          <h2 class="mb-3">Overview</h2>
          <p>
            <b>
              4-year • <?php echo $college->type->type?> •
            </b>
          </p>
          <p>
            <b>
              <?php echo $college->graduation_rate?>%
            </b>
            graduation rate
          </p>
          <p>
            <b>
              <?php echo $college->acceptance_rate?>%
            </b>
            acceptance rate
          </p>
          <p class="mb-5">
            <b>
              <?php echo $college->cost?>K
            </b>
            average per year after aid
          </p>
        </div>
        <div class="col">
          <img class="img-fluid rounded mx-auto d-block" src="<?php echo route("img/upload/logos/$id.png"); ?>">
        </div>
      </div>
    </section>
    <section id="infoImage">
      <div class="row">
        <div class="col-sm">
          <img class="img-fluid rounded mx-auto d-block mb-4" src="<?php echo route("img/upload/campus/$id.png"); ?>">
        </div>
        <div class="col-sm">
          <img class="img-fluid rounded mx-auto d-block mb-4" src="<?php echo route("img/upload/campus/$id.png"); ?>">
        </div>
      </div>
    </section>
    <section id="description">
      <div class="mt-3">
        <p class="lead"><?php echo $college->description; ?></p>
      </div>
    </section>
  </div>
</body>
</html>
