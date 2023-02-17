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
<header>
<?php include 'views/header.php'; ?>
<body>
  <div class="container mb-5">
    <h1 class="display-4 d-flex justify-content-center mt-5 mb-5">Log In</h1>
    <form class="mb-5" enctype="multipart/form-data" method="POST" action="<?php echo route('login'); ?>">
      <!-- Registration Form -->
      <div>
          <div>
              <div class="row">
                  <div class="col-sm">
                      <!-- Username -->
                      <div class="form-inline">
                          <label for="name">Username</label>
                      </div>

                      <div class="form-group d-flex justify-content-center">
                          <input type="text" class="form-control" name="username" id="username" style="width: 125%;" placeholder="User" required>
                      </div>
                  </div>

              </div>

              <!-- Password -->
              <div class="form-inline">
                  <label for="name">Password</label>
              </div>
              <div class="form-group d-flex justify-content-center">
                  <input type="password" class="form-control" name="password" id="password" style="width: 125%;" placeholder="Password" required>
              </div>
          </div>
      </div>
      <div class="buttonSection d-flex justify-content-center">
          <button type="submit" class="btn btn-dark mt-3 pl-5 pr-5">Log In</button>
        </div>
        <a class="d-flex justify-content-center btn btn-light mt-3 ml-2 pl-5 pr-5" href="<?php echo route('register'); ?>" role="button">Don't have an account?</a>
    </form>
    <a class="back-to-top" href="<?php echo route("") ?>">
      <img src="/img/up-arrow.png">
    </a>
</body>
</html>