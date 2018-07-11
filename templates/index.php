<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" />
  <link href="../css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
  <div class="navbar-fixed">
      <nav class="" role="navigation" style="background-color:#ff1744;">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#">Navbar Link</a></li>
          </ul>

          <ul id="nav-mobile" class="sidenav">
            <li><a href="#">Navbar Link</a></li>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
      </nav>
</div>

  <div class="container">
  <div class="carousel carousel-slider">

    <a class="carousel-item" href="#one!"><img src="..\img\a1.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/400/food/3"></a>
    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
  </div>

</div>
<div class="container">
  <div class="section">

    <!--   Icon Section   -->
    <div class="row" style="color:white;">
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center red-text"><i class="material-icons">flash_on</i></h2>
          <h5 class="center">Speeds up development</h5>

          <p class="light">ult stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center red-text"><i class="material-icons">group</i></h2>
          <h5 class="center">User Experience Focused</h5>

          <p class="light">ble to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center red-text"><i class="material-icons">settings</i></h2>
          <h5 class="center">Easy to work with</h5>

          <p class="light"> to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
        </div>
      </div>
    </div>

  </div>
  <br><br>
</div>

<!-- Contato -->

<div style="background-color:#ff1744; width:100%; padding:10%;">
  <h3 class="font" >Contatos</h3>
  <br>
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6 red-text">
          <input placeholder="" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="input-field">
        <textarea class="materialize-textarea"></textarea>
        <label for="message">Message</label>
        <a class="waves-effect waves-light white black-text btn-large">Enviar</a>
      </div>
      </form>
    </div>
</div>


<footer class="page-footer orange">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Company Bio</h5>
        <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


      </div>
      <div class="col l3 s12">
        <h5 class="white-text">Settings</h5>
        <ul>
          <li><a class="white-text" href="#!">Link 1</a></li>
          <li><a class="white-text" href="#!">Link 2</a></li>
          <li><a class="white-text" href="#!">Link 3</a></li>
          <li><a class="white-text" href="#!">Link 4</a></li>
        </ul>
      </div>
      <div class="col l3 s12">
        <h5 class="white-text">Connect</h5>
        <ul>
          <li><a class="white-text" href="#!">Link 1</a></li>
          <li><a class="white-text" href="#!">Link 2</a></li>
          <li><a class="white-text" href="#!">Link 3</a></li>
          <li><a class="white-text" href="#!">Link 4</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="footer-copyright">
    <div class="container">
    Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
    </div>
  </div>
</footer>







  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script>

    M.AutoInit();

  </script>

  </body>
</html>
