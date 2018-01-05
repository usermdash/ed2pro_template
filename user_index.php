<?php
  session_start();

  if (!isset($_SESSION['u_id'])) {

      header("Location: login.php");
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Programming,learn code online">
  <meta name="author" content="Manoranjan Dash">

  <title>Welcome | Ed2pro.com</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- MDB CSS -->
  <link href="css/mdb.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Courgette|Lato|Montserrat|Muli|Open+Sans|Roboto|Roboto+Slab|Ubuntu" rel="stylesheet">

  <!-- Font Awesome CDN -->
  <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
  <!-- Custom Style  -->
  <link href="css/userstyle.css" rel="stylesheet">

  <!-- Animate CSS -->
  <!-- <link href="css/animate.css" rel="stylesheet"> -->

  <!-- <script src="js/wow.min.js"></script> -->
  <script>
    // new WOW().init();
  </script>

  <!-- Smooth Scrolling -->
  <script src="./js/scrollreveal.js"></script>



  <style>
  </style>
  <script>
    // window.addEventListener('load', function() {
    //   var mspreload = document.getElementById("mspreload");
    //   // document.body.removeChild("mspreloader");
    //   mspreload.style.display = 'none';
    //   // setTimeout(mspreload, 4000);
    // })
  </script>

</head>


<body>
  <header>
    <div class="container-fluid d-flex justify-content-between">
      <a class="h1 special-color-text" href="user_index.php">Ed2pro <span class="green-text">.com</span></a>
      <div class="search-box">
        <form class="form-inline">
          <input id="search" class="form-control search my-sm-0 green-text" type="text" placeholder="Search" aria-label="Search" accesskey="s">
        </form>
      </div>
    </div>
  </header>

  <div class="clearfix"></div>

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark green sticky-top">

    <!-- Navbar brand -->


    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">JavaScript</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">C</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Java</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PHP</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
          <div class="dropdown-menu special" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Programming Facts</a>
            <a class="dropdown-item" href="#">Special Videos</a>
            <!-- <a class="dropdown-item" href="#"></a> -->
          </div>
        </li>

      </ul>
      <!-- Links -->

      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
          <a href="#" class="nav-link waves-effect waves-light">
            0
            <i class="fa fa-envelope"></i>
          </a>
        </li>

        <li class="nav-item avatar dropdown">
          <a href="" class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="images/no-photo.jpg" width="30" height="30" alt="" class="img-fluid rounded-circle z-depth-0">
          </a>

          <div class="dropdown-menu dropdown-menu-right special" aria-labelledby="navbarDropdownMenuLink-5" style="position: absolute;">
            <a href="#" class="dropdown-item waves-effect waves-light"><i class="fab fa-leanpub"></i> My Course</a>
            <a href="#" class="dropdown-item waves-effect waves-light"><i class="fa fa-user"></i> Account</a>
            <a href="logout.php" class="dropdown-item waves-effect waves-danger"><i class="fas fa-sign-out-alt"></i> Sign Out </a>
          </div>
        </li>

      </ul>
      <!-- Search form -->
      <!-- <form class="form-inline">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </form> -->
    </div>
    <!-- Collapsible content -->

  </nav>
  <!--/.Navbar-->

  <section id="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2 content z-depth-1">
          <div class="vh">
          <aside class="sidebar-left" id="sidebar-left">
            <div class="sidebar-content">
              <ul class="list-group">
                <a href="" class="side-item hoverable waves-effect waves-light">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Learn Javascript
                    <span class="badge badge-primary badge-pill green">4</span>
                  </li>
                </a>
                <a href="" class="side-item hoverable waves-effect waves-light">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Learn C
                    <span class="badge badge-primary badge-pill green">4</span>
                  </li>
                </a>
                <a href="" class="side-item hoverable waves-effect waves-light">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Learn Java
                    <span class="badge badge-primary badge-pill green">4</span>
                  </li>
                </a>
                <a href="" class="side-item hoverable waves-effect waves-light">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Learn PHP
                    <span class="badge badge-primary badge-pill green">4</span>
                  </li>
                </a>
              </ul>
            </div>
          </aside>
          </div>
        </div>
        <div class="col-12 col-sm-10 offset-sm-1">
          <section class="content-area cards">
            <div class="container">
              <div class="row">
                <div class="col-12 col-sm-4 mt-4">
                  <a href="#">
                    <div class="mycard d-flex justify-content-center align-items-center ripple">
                      <p>C Programming</p>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-sm-4 mt-4">
                  <a href="#">
                    <div class="mycard d-flex justify-content-center align-items-center ripple">
                      <p>Java Programming</p>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-sm-4 mt-4">
                  <a href="#">
                    <div class="mycard d-flex justify-content-center align-items-center ripple">
                      <p>PHP Programming</p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="row mt-4">
                <div class="col-12 col-sm-6 mx-auto text-center">
                  <a href="#">
                    <div class="mycard d-flex justify-content-center align-items-center javascript ripple" style="border-left: 8px solid #f9f047; border-right: 8px solid #f9f047; border-top: 0px solid #4CAF50;">
                      <p>JavaScript</p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="row my-4">
                <div class="col-12 col-sm-4 mx-auto text-center">
                  <a href="#">
                    <div class="mycard d-flex justify-content-center align-items-center ripple">
                      <p>Programming Blogs</p>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-sm-4 mx-auto text-center">
                  <a href="#">
                    <div class="mycard d-flex justify-content-center align-items-center ripple">
                      <p>Special Videos</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>





  <!-- Bootstrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- <script src="./js/manualscroll.js"></script> -->
</body>
<!-- Smooth Scrooling  -->
<script>
  $(function() {
    // Smooth Scrolling
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
</script>

<!-- /.Smooth Scrolling -->

</html>