<?php
session_start();

$authenticated = false;

if (isset($_SESSION["email"])) {
  $authenticated = true;

  if ($_SESSION["nombre"] == "admin") {
    
    require_once "connection.php";

    $query = "SELECT id, nombre, apellido, email, telefono, pais, comida, artista, lugar, color, pwd, imagen FROM users;";

    $stmt = $pdo->prepare($query);

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


  }



}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Inicio</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
    type='text/css'>
  <link
    href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php">Ipsum Technology</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.html">Sample Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li> -->

          <?php
            if ($authenticated == false) {
          ?>
            <li class="nav-item">
            <a class="nav-link" href="sign_in.php">Iniciar Sesion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.html">Registrarse</a>
          </li>

          <?php
          } else {

          
          ?>
          <li class="nav-item">
            <a class="nav-link" href="log_out.php">Log out</a>
          </li>

          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/ai-generated-8520565_1280.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Prueba IPSUM</h1>

            <?php
            if ($authenticated == true) {
            ?>


            <span class="subheading">Bienvenido <?= $_SESSION["nombre"] ?></span>

            <?php
            } else {
            ?>

            <span class="subheading">Favor de Iniciar Sesion</span>

            <?php
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">



    <?php
            if ($authenticated == true && $_SESSION["nombre"] == "admin") {
          ?>

            <div class="card-body center col-lg-100 col-md-100 mx-auto">
              <table class="table table-bordered text-center center">
                <tr class="bg-dark text-white">
                  <td>Id</td>
                  <td>Nombre</td>
                  <td>Apellido</td>
                  <td>Email</td>
                  <td>Telefono</td>
                  <td>Pais</td>
                  <td>Comida</td>
                  <td>Artista</td>
                  <td>Lugar</td>
                  <td>color</td>


          


                </tr>

                <tr>
                <?php
                  foreach ($results as $row) {

                ?>
                    <td><?= $row["id"];  ?></td>
                    <td><?= $row["nombre"];  ?></td>
                    <td><?= $row["apellido"];  ?></td>
                    <td><?= $row["email"];  ?></td>
                    <td><?= $row["telefono"];  ?></td>
                    <td><?= $row["pais"];  ?></td>
                    <td><?= $row["comida"];  ?></td>
                    <td><?= $row["artista"];  ?></td>
                    <td><?= $row["lugar"];  ?></td>
                    <td><?= $row["color"];  ?></td>

                </tr>
                <?php
                }
              
                ?>

              </table>
            </div>
            <?php
                }
              
                ?>





      <div class="col-lg-8 col-md-10 mx-auto">


          <?php
            if ($authenticated == true && $_SESSION["nombre"] != "admin") {
          ?>
          

        <div class="post-preview">
          <a>
            <h2 class="post-title">
              Datos del usuario: #<?= $_SESSION["id"] ?>
            </h2>
            <h3 class="post-subtitle">
              Nombre: <?= $_SESSION["nombre"] ?>
            </h3>
            <h3 class="post-subtitle">
              Apellido: <?= $_SESSION["apellido"] ?>
            </h3>
            <h3 class="post-subtitle">
              Email: <?= $_SESSION["email"] ?>
            </h3>
            <h3 class="post-subtitle">
              Telefono: <?= $_SESSION["telefono"] ?>
            </h3>
            <h3 class="post-subtitle">
              Pais: <?= $_SESSION["pais"] ?>
            </h3>
            <h3 class="post-subtitle">
              Comida Favorita: <?= $_SESSION["comida"] ?>
            </h3>
            <h3 class="post-subtitle">
              Artista Favorito: <?= $_SESSION["artista"] ?>
            </h3>
            <h3 class="post-subtitle">
              Lugar Favorito: <?= $_SESSION["lugar"] ?>
            </h3>
            <h3 class="post-subtitle">
              Color Favorito: <?= $_SESSION["color"] ?>
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on September 24, 2018
          </p>
        </div>

          <?php
            }
          ?>

        
            <!-- Page Header -->






            <!-- Page Header -->



        <hr>
        <hr>
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              Lorem Ipsum
            </h2>
            <h3 class="post-subtitle">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."            </h3>
          </a>
          <p class="post-meta">Publicado por
            <a href="#">admin</a>
            27/08/2024
          </p>
        </div>
        <hr>
        <hr>
        <!-- Pager -->
        <!--<div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>-->
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>