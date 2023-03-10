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
  <link rel="stylesheet" type="text/css" href="/styles/styles.css">
</head>
<?php include 'views/header.php'; ?>
<body>
  <div class="container">
    <h1 class="display-4 mt-5 mb-5">Edit</h1>
    <form method="POST" enctype="multipart/form-data" action="<?php echo route('admin/colleges/'.$college->id);?>">
    <input type="hidden" name="_method" value="PATCH">

    <!-- Fetch College Name -->
      <div class="form-inline">
        <label for="name">Name</label>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="University" value="<?php echo $college->name; ?>" required>
      </div>

      <div class="row">
        <div class="col">
          <!-- Fetch College Acceptance Rate -->
          <div class="form-inline">
            <label for="acceptanceRate">Acceptance Rate (%)</label>
          </div>
          <div class="form-group">
            <input type="number" min="0" max="100" class="form-control" name="acceptanceRate" id="acceptanceRate" placeholder="1-100%" value="<?php echo $college->acceptance_rate; ?>" required>
          </div>
        </div>

        <div class="col">
          <!-- Fetch College Graduation Rate -->
          <div class="form-inline">
            <label for="graduationRate">Graduation Rate (%)</label>
          </div>
          <div class="form-group">
            <input type="number" min="0" max="100" class="form-control" name="graduationRate" id="graduationRate" placeholder="1-100%" value="<?php echo $college->graduation_rate; ?>" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <!-- Fetch College Tuition Cost -->
          <div class="form-inline">
            <label for="tuitionCost">Tuition Cost ($USD)</label>
          </div>
          <div class="form-group">
            <input type="number" min="0" max="999" class="form-control" name="tuitionCost" id="tuitionCost"  placeholder="50K" value="<?php echo $college->cost; ?>" required>
          </div>
        </div>

        <div class="col">
          <!-- Fetch College Ranking -->
          <div class="form-inline">
            <label for="ranking">Ranking (#)</label>
          </div>
          <div class="form-group">
            <input type="number" min="1" class="form-control" name="ranking" id="ranking" placeholder="1#" value="<?php echo $college->ranking; ?>" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <!-- Fetch College Logo -->
          <div class="form-inline">
            <label for="collegeLogo">Logo</label>
          </div>
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="collegeLogo" id="collegeLogo">
              <label class="custom-file-label" style="color: gray;" for="validatedCustomFile1">Upload Logo</label>
            </div>
          </div>
        </div>

        <div class="col">
          <!-- Fetch College Image -->
          <div class="form-inline">
            <label for="collegeImage">Campus Image</label>
          </div>
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="collegeImage" id="collegeImage">
              <label class="custom-file-label" style="color: gray;" for="validatedCustomFile2">Upload Campus</label>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <!-- Fetch College Type -->
          <div class="form-inline">
            <label for="type_id">Type</label>
          </div>
          <div class="form-group">
            <select class="custom-select" name="type_id" id="type_id">
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
        </div>

        <div class="col">
          <!-- Fetch College Location -->
          <div class="form-inline">
            <label for="location_id">Location</label>
          </div>
          <div class="form-group">
            <select class="custom-select" name="location_id" id="location_id">
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
        </div>
        </div>

      <!-- Fetch College Description -->
      <div class="form-inline">
        <label for="description">Description</label>
      </div>
      <div class="form-group">
        <textarea class="form-control" name="description" id="description"  placeholder="Description" required><?php echo $college->description; ?></textarea>
      </div>
      <div class="buttonSection d-flex justify-content-center mb-5">
        <button type="submit" class="btn btn-dark mt-3 pl-5 pr-5">Save</button>
        <a class="btn btn-danger mt-3 ml-2 pl-5 pr-5" href="<?php echo route('admin/colleges'); ?>" role="button">Cancel</a>
      </div>
    </form>
    <a class="back-to-top" href="<?php echo route("admin/colleges") ?>">
      <img src="/img/up-arrow.png">
    </a>
    </div>
</body>
</html>