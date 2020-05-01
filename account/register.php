<?php include("server.php") ?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Fitness First</title>
  <meta name="description" content="Online Store for Gym Equipment" />
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="../styles/style.css" />
</head>

<body>
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark pl-0 pr-0">
        <a class="navbar-brand" href="#"><img src="../assets/common/logo.png" alt="Fitness First" height="23"
            width="170" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav justify-content-end w-100">
            <li class="nav-item">
              <a class="nav-link" href="../"><i class="fas fa-fw fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../shop/"><i class="fas fa-fw fa-shopping-bag"></i> Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./login.html"><i class="fas fa-fw fa-user"></i> Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pr-0" href="../basket/"><i class="fas fa-fw fa-shopping-cart"></i> Basket</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <main style="height: 93vh;">
    <div class="container h-100">
      <div class="row p-0 m-0 h-100 justify-content-center align-items-center">
        <form method="POST" action="register.php">
            <?php include('errors.php') ?>
          <div class="col-12 p-1">
            <h1>Sign up for an account</h1>
          </div>
          <div class="col-12 p-1">
            <input type="text" style="width: 100%; height: 6vh;" class="pl-1 pr-1" placeholder="Email" />
          </div>
          <div class="col-12 p-1">
            <input type="password" style="width: 100%; height: 6vh;" class="pl-1 pr-1" placeholder="Password" />
          </div>
          <div class="col-12 p-1">
            <input type="password" style="width: 100%; height: 6vh;" class="pl-1 pr-1" placeholder="Repeat Password" />
          </div>
          <div class="col-12 p-1">
            <button style="
                  width: 100%;
                  height: 6vh;
                  border: 0px;
                  background-color: #fa4251;
                  color: white;
                  font-weight: bold;
                ">
              Register
            </button>
          </div>
          <div class="col-12 p-1" style="text-align: right !important;">
            <a href="login.html" class="justify-content-end w-100">Already a User? Login Here</a>
          </div>
        </form>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>