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
<!--     <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo route(''); ?>">
                <img src="<?php echo route($appLogo); ?>"  width="35" height="40" class="d-inline-block align-text-top">
            </a>
        </div>
    </nav>
    <a class="btn btn-lg btn-outline-dark" href="<?php echo route('admin/colleges'); ?>">Admin View</a> -->
    <nav class="navbar navbar-fixed-top navbar-expand-lg px-0 py-3">
        <div class="container-xl">
            <!-- Logo -->
            <a class="navbar-brand" href="<?php echo route(''); ?>">
                <img class="mb-2" width="40" height="40" src="<?php echo route("/img/favicon.png"); ?>">
            </a>

            <!-- Navbar toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <!-- Nav -->
                <div class="navbar-nav mx-lg-auto">
                    <a class="nav-link active" style="color: black;" href="<?php echo route("colleges") ?>" aria-current="page">All Colleges</a>
                    <a class="nav-link" style="color: black;" href="#">Example 2</a>
                    <a class="nav-link" style="color: black;" href="#">Example 3</a>
                    <a class="nav-link" style="color: black;" href="#">Example 4</a>
                </div>

                <!-- Right navigation -->
                <div class="navbar-nav ms-lg-4 pr-3">
                    <a class="btn btn-light w-full w-lg-auto" href="<?php echo route("login") ?>">Log In</a>
                </div>

                <!-- Action -->
                <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
                    <a href="<?php echo route("register") ?>" class="btn btn btn-dark w-full w-lg-auto">
                    Register
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>