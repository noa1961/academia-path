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
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/styles/styles.css">
</head>
<body>
  <div class="container">
    <h1 class="display-4 d-flex justify-content-center mt-5 mb-5">New College</h1>
    <form class="mb-5" enctype="multipart/form-data" method="POST" action="<?php echo route('admin/colleges'); ?>">

      <!-- College Name -->
      <div class="form-inline">
        <label for="name">Name</label>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="name" id="name" placeholder="Input the College Name" required>
      </div>

      <div class="row">
        <div class="col">
          <!-- College Acceptance Rate -->
          <div class="form-inline">
            <label for="acceptanceRate">Acceptance Rate (%)</label>
          </div>
          <div class="from-group">
            <input type="number" min="0" class="form-control mb-3" name="acceptanceRate" id="acceptanceRate" placeholder="Input the College Acceptance Rate" required>
          </div>
        </div>

        <div class="col">
          <!-- College Graduation Rate -->
          <div class="form-inline">
            <label for="graduationRate">Graduation Rate (%)</label>
          </div>
          <div class="from-group">
            <input type="number" min="0" class="form-control mb-3" name="graduationRate" id="graduationRate" placeholder="Input the College Graduation Rate" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <!-- College Tuition Cost -->
          <div class="form-inline">
            <label for="tuitionCost">Tuition Cost ($USD)</label>
          </div>
          <div class="from-group">
            <input type="number" min="0" class="form-control mb-3" name="tuitionCost" id="tuitionCost" placeholder="Input the College Tuition Cost" required>
          </div>
        </div>

        <div class="col">
          <!-- College Ranking -->
          <div class="form-inline">
            <label for="ranking">Ranking (#)</label>
          </div>
          <div class="form-group">
            <input type="number" min="1" class="form-control mb-3" name="ranking" id="ranking"placeholder="College Ranking" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <!-- College Logo -->
          <div class="form-inline">
            <label for="collegeLogo">Logo</label>
          </div>
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="collegeLogo" id="collegeLogo" required>
              <label class="custom-file-label" style="color: gray;" for="validatedCustomFile1">Upload a College Logo...</label>
            </div>
          </div>
        </div>

        <div class="col">
          <!-- College Image -->
          <div class="form-inline">
            <label for="collegeImage">Campus Image</label>
          </div>
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="collegeImage" id="collegeImage" required>
              <label class="custom-file-label" style="color: gray;" for="validatedCustomFile2">Upload a College Image...</label>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <!-- College Type -->
          <div class="form-inline">
            <label for="type_id">Type</label>
          </div>
          <div class="form-group">
            <select class="custom-select" name="type_id" id="type_id">
              <?php
                foreach($types as $type) {
                  ?>
                  <option value="<?php echo $type->id; ?>"><?php echo $type->type; ?></option>
                  <?php
                }
              ?>
            </select>
          </div>
        </div>

        <div class="col">
          <!-- College Location -->
          <div class="form-inline">
            <label for="location_id">Location</label>
          </div>
          <div class="form-group mb-3">
            <select class="custom-select" name="location_id" id="location_id">
              <?php
                foreach($locations as $location) {
                  ?>
                  <option value="<?php echo $location->id; ?>"><?php echo $location->state; ?></option>
                  <?php
                }
              ?>
            </select>
          </div>
        </div>
      </div>

      <!-- College Description -->
      <div class="form-inline">
        <label for="description">Description</label>
      </div>
      <div class="from-group mb-3">
        <textarea class="form-control" name="description" id="description" placeholder="Input the College Description"></textarea>
      </div>
      <div class="buttonSection d-flex justify-content-center">
        <button type="submit" class="btn btn-dark mt-3 pl-5 pr-5">Add</button>
        <a class="btn btn-danger mt-3 ml-2 pl-5 pr-5" href="<?php echo route('admin/colleges'); ?>" role="button">Cancel</a>
      </div>
    </form>
    </div>
</body>
</html>