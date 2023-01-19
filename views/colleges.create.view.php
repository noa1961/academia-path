<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Path</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1 class="mt-5">New College</h1>
    <form method="POST" action="<?php echo route('colleges'); ?>">
      <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Input the college name" required>
      </div>
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
      <div class="form-group">
        <input type="text" class="form-control" name="ranking" placeholder="Insert the college ranking" required>
      </div>
      <div class="from-group">
        <input type="text" class="form-control" name="description" placeholder="Insert the college description">
      </div>
        <div class="from-group">
            <input type="number" class="form-control mt-3" name="acceptanceRate" placeholder="Insert the college Acceptance Rate">
        </div>
        <div class="from-group">
            <input type="number" class="form-control mt-3" name="graduationRate" placeholder="Insert the college Graduation  Rate">
        </div>
        <div class="from-group">
            <input type="number" class="form-control mt-3" name="tuitionCost" placeholder="Insert the college Tuition Cost">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add</button>
    </form>
    </div>
</body>
</html>