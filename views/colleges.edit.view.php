<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Academia Path</title>
  <script src="https://cdn.tiny.cloud/1/w7vfoqwcydbaq6fu605jp23tfctwleo99swlki5mpgmrgbl3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
  <link rel="icon" type="image/x-icon" href="/img/favicon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1 class="mt-5 mb-5">Edit College</h1>
    <form method="POST" action="<?php echo route('colleges/'.$college->id);?>">
    <input type="hidden" name="_method" value="PATCH">
    <!-- Fetch College Name -->
      <div class="form-group">
        <input type="text" class="form-control" name="name" value="<?php echo $college->name; ?>" required>
      </div>

      <!-- Fetch College Acceptance Rate -->
      <div class="form-group">
        <input type="text" class="form-control" name="acceptanceRate" value="<?php echo $college->acceptance_rate; ?>" required>
      </div>

      <!-- Fetch College Graduation Rate -->
      <div class="form-group">
        <input type="text" class="form-control" name="graduationRate" value="<?php echo $college->graduation_rate; ?>" required>
      </div>

      <!-- Fetch College Tuition Cost -->
      <div class="form-group">
        <input type="text" class="form-control" name="graduationRate" value="<?php echo $college->cost; ?>" required>
      </div>

      <!-- Fetch College Ranking -->
      <div class="form-group">
        <input type="text" class="form-control" name="ranking" value="<?php echo $college->ranking; ?>" required>
      </div>

      <!-- Fetch College Image -->

      <!-- Fetch College Type -->
      <div class="form-group">
        <select class="custom-select" name="type_id">
          <?php
            foreach($types as $type) {
              ?>
              <option
                <?php echo ($college->type_id==$type->id)?'selected':'';?>
                value="<?php echo $type->id; ?>"><?php echo $type->type; ?>
              </option>
              <?php
            }
          ?>
        </select>
      </div>

      <!-- Fetch College Location -->
      <div class="form-group">
        <select class="custom-select" name="location_id">
          <?php
            foreach($locations as $location) {
              ?>
              <option
                <?php echo ($college->location_id==$location->id)?'selected':'';?>
                value="<?php echo $location->id; ?>"><?php echo $location->state; ?>
              </option>
              <?php
            }
          ?>
        </select>
      </div>

      <!-- Fetch College Description -->
      <div class="form-group">
        <textarea class="form-control" name="description" required><?php echo $college->description; ?></textarea>
      </div>

        <button type="submit" class="btn btn-dark mt-3 mb-5">Save Changes</button>
        <a class="btn btn-danger mt-3 ml-2 mb-5" href="<?php echo route('colleges'); ?>" role="button">Cancel</a>
    </form>
    </div>
</body>
</html>

