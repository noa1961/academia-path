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
    <h1 class="mt-5">Edit College</h1>
    <form method="POST" action="<?php echo route('colleges/'.$college->id);?>">
      <input type="hidden" name="_method" value="PATCH">
      <div class="form-group">
        <input type="text" class="form-control" name="nome" value="<?php echo $college->name; ?>" required>
      </div>
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
      <div class="form-group">
        <input type="text" class="form-control" name="pags" value="<?php echo $livro->pags; ?>" required>
      </div>
        <button type="submit" class="btn btn-danger">Gravar</button>
    </form>
    </div>
</body>
</html>

