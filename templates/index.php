<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>IFCON</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" />
  <link href="../css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
  <div class="navbar-fixed">
      <nav class="" role="navigation" style="background-color:#01579b;">
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



<!-- Tap Target Structure -->

 <div class="tap-target" data-target="menu">
   <div class="tap-target-content">
     <h5>Title</h5>
     <p>A bunch of text</p>
   </div>
 </div>


  <div class="carousel carousel-slider" style="height:500px;">
      <a class="carousel-item" href="#one!"><img src="../img/a1.jpg"></a>
      <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
      <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/400/food/3"></a>
      <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
    </div>



<!-- Contato -->

<div style="background-color:#0277bd; width:100%; padding:10%;">
  <!-- Galeria -->
  <h2 class="font" style="margin-top:-3%;" align="center">Galeria</h2>
  <br>
  <div class="row">
     <div class="col s6">
       <img class="materialboxed" width="450" src="../img/a1.jpg">
     </div>
     <div class="col s6">
       <img class="materialboxed" width="450" src="../img/a1.jpg">
     </div>
   </div>
   <div class="row">
      <div class="col s6">
        <img class="materialboxed" width="450" src="../img/a1.jpg">
      </div>
      <div class="col s6">
        <img class="materialboxed" width="450" src="../img/a1.jpg">
      </div>
    </div>
    <br>


    <!-- Contato -->
  <h2 class="font" style="margin-top:15%;" >Contato</h2>
  <br>
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate">
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
