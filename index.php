<?php 
 include "includes/config.php" ;


 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PT DUA SAHABAT MENDUNIA </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 09:00-17:00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>082132519475</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
        <div style="font-family: Arial Black; font-size: 25px;
        -webkit-text-stroke: 2px grey; color: blue;">PT. DUA SAHABAT MENDUNIA</div>
      
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?menu=about">About Us<span class="sr-only">(current)</span></a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="index.php?menu=galeri">Gallery</a>
              </li>                          
              <li class="nav-item">
                <a class="nav-link" href="index.php?menu=produk">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?menu=artikel">Article</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="index.php?menu=contact">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
         <?php 
            if (empty($_GET['menu']))
            {
                include"home.php";
            }
            elseif ($_GET['menu']=='about')
            {
                include"about.php";
            }
            elseif ($_GET['menu']=='galeri')
            {
                include"galeri.php";
            }
            elseif ($_GET['menu']=='contact')
            {
                include"contact.php";
            }
            elseif ($_GET['menu']=='produk')
            {
                include"produk.php";
            }
            elseif ($_GET['menu']=='artikel')
            {
                include"artikel.php";
            }
         ?>
         <footer class="py-4">
           <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <p>Copyright &copy; 2021 PT Dua Sahabat Mendunia 
            
             <a rel="nofollow noopener" href="https://templatemo.com" target="_blank"></a><br>
            <a rel="nofollow noopener" href="https://themewagon.com" target="_blank"></a>
          </p>
            </div>
          </div>
        </div>
         </footer>
        

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>