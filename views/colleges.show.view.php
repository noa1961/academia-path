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
  <div class="container">
    <section id="info" class="mt-5">
      <div class="row">
        <div class="col-sm">
          <h1 class="display-4 pb-3"><?php echo $college->name; ?></h1>
          <span class="badge badge-dark badge-pill p-2 mb-2">TOP <?php echo $college->ranking; ?></span>
          <span>-></span>
          <a href="<?php echo route("locations/{$college->location_id}"); ?>">
            <p class="d-inline" style="color: #1e1e1e; text-decoration: underline;" ><?php echo $college->location->state; ?>, <?php echo $college->location->abbreviation?></p>
          </a>
        </div>
        <div class="col-2">
          <div class="imageWrapper">
            <img class="img-fluid rounded mx-auto d-block" src="<?php echo route("img/upload/logos/$id.png"); ?>">
          </div>
        </div>
      </div>
    </section>
    <hr />
    <section id="overview">
      <div class="row">
        <div class="col-6">
          <h2 class="mb-3">Overview</h2>
          <p>
            <b>
              4-year • <?php echo $college->type->type?>
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
          <p class="mb-3">
            <b>
              <?php echo $college->cost?>K
            </b>
            average per year after aid
          </p>
        </div>
        <div class="col-sm">
          <section id="description">
            <p>
              <?php echo $college->description; ?>
            </p>
          </section>
        </div>
      </div>
    </section>
    <hr>
    <section id="infoImage">
      <div class="row">
        <div class="col-sm">
            <img class="img-fluid rounded mx-auto d-block mb-5 mt-3" src="<?php echo route("img/upload/campus/$id.png"); ?>">
        </div>
        <div class="col-sm">
        </div>
      </div>
    </section>
    <a class="back-to-top" href="<?php echo route("admin/colleges") ?>">
      <img src="/img/up-arrow.png">
    </a>
  </div>
</body>
</html>
