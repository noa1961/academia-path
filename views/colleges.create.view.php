<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Path</title>
    <script src="https://cdn.tiny.cloud/1/w7vfoqwcydbaq6fu605jp23tfctwleo99swlki5mpgmrgbl3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <link rel="icon" type="image/x-icon" href="/src/img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <h1 class="mt-5 mb-5">New College</h1>
    <form class="mb-5" enctype="multipart/form-data" method="POST" action="<?php echo route('colleges'); ?>">

      <!-- College Name -->
      <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Input the College Name" required>
      </div>

      <!-- College Acceptance Rate -->
      <div class="from-group">
          <input type="number" class="form-control mt-3" name="acceptanceRate" placeholder="Input the College Acceptance Rate">
      </div>

      <!-- College Graduation Rate -->
      <div class="from-group">
          <input type="number" class="form-control mt-3 mb-3" name="graduationRate" placeholder="Input the College Graduation Rate">
      </div>

      <!-- College Tuition Cost -->
      <div class="from-group">
          <input type="number" class="form-control mt-3 mb-3" name="tuitionCost" placeholder="Input the College Tuition Cost">
      </div>

      <!-- College Ranking -->
      <div class="form-group">
        <input type="number" class="form-control" name="ranking" placeholder="College Ranking" required>
      </div>

      <!-- College Logo -->
      <div class="custom-file mb-3">
        <input type="file" class="custom-file-input" name="collegeLogo" required>
        <label class="custom-file-label" style="color: gray;" for="validatedCustomFile1">Upload a College Logo...</label>
      </div>

      <!-- College Image -->
      <div class="custom-file mb-3">
        <input type="file" class="custom-file-input" name="collegeImage" required>
        <label class="custom-file-label" style="color: gray;" for="validatedCustomFile2">Upload a College Image...</label>
      </div>

      <!-- College Type -->
      <div class="form-group">
        <select class="custom-select" name="type_id">
          <?php
            foreach($types as $type) {
              ?>
              <option value="<?php echo $type->id; ?>"><?php echo $type->type; ?></option>
              <?php
            }
          ?>
        </select>
      </div>

      <!-- College Location -->
      <div class="form-group">
        <select class="custom-select" name="location_id">
          <?php
            foreach($locations as $location) {
              ?>
              <option value="<?php echo $location->id; ?>"><?php echo $location->state; ?></option>
              <?php
            }
          ?>
        </select>
      </div>

      <!-- College Description -->
      <div class="from-group mb-3">
        <textarea class="form-control" name="description" placeholder="Input the College Description"></textarea>
      </div>

        <button type="submit" class="btn btn-dark mt-3">Add</button>
        <a class="btn btn-danger mt-3 ml-2" href="<?php echo route('colleges'); ?>" role="button">Cancel</a>
    </form>
    </div>
</body>
</html>