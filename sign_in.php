<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign in</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.css" rel="stylesheet">

    <link href="css/clean-blog.min.css" rel="stylesheet">
    <link href="css/clean-blog-2.css" rel="stylesheet">


  </head>

  <body>
    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
      
              <div class="px-5 ms-xl-4">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                <span class="h1 fw-bold mb-0"></span>
              </div>
      
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
      
                <form style="width: 23rem;" action="process-login.php" method="post">
      
                  <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar Sesion</h3>
      
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Correo Electronico" required/>
                  </div>
      
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" name="pwd" id="pwd" class="form-control form-control-lg" placeholder="Contraseña" required/>
                  </div>
      
                  <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                  </div>
      
                  <!-- <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p> -->
                  <p><a href="index.php" class="link-info">Inicio</a></p>

                  <p>¿No tienes cuenta? <a href="register.html" class="link-info">Registrate aqui</a></p>
      
                </form>
      
              </div>
      
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="img/bird-8336583_1280.jpg"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
          </div>
        </div>
      </section>
  </body>

</html>
