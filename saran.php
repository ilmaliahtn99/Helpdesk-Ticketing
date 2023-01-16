<?php

  //koneksi ke database
  $koneksi =mysqli_connect("localhost","root","","sla");

  //ambil data dari tabel ticket
  $result= mysqli_query ($koneksi,"SELECT*FROM new_ticket")
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Helpdesk - DSI</title>

   <!-- Favicons -->
  <link href="img/logo_wika.png" rel="icon">
  <link href="img/logo_wika.png" rel="logo_wika">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

<body>
  <section id="container">
    <!-- ********************************************************************************************************************************************************** TOP BAR CONTENT & NOTIFICATIONS *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">

      <!--logo start-->
      <a href="index.html" class="logo"><img src="img/logo_wika.png" style="width: 50px; margin-right: 12px; font-family: sans-serif;"><b>Helpdesk</b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html" style="margin-top: 10px; font-family: sans-serif;">Sign In</a></li>
        </ul>
      </div>
      <div class="nav notify-row" id="top_menu" style="float: right;">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <nav>
            <a href="v_isi.php" style="color: #fff; margin-right: 18px; font-family: sans-serif;">Home </a> 
            <a href="check_ticket.html" style="color: #fff; margin-right: 15px; font-family: sans-serif;">Check Ticket Status </a> 
          </nav>
      </div>
    </header>

  <div class="container">
    
     <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Saran</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Input Saran</h4>
            <div id="message"></div>
            <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

              <div class="form-group">
                <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>

              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Send Message</button>
              </div>

            </form>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Contact Details</h4>
            <ul class="contact_details">
              <li><i class="fa fa-envelope-o"></i> https://www.wika.co.id</li>
              <li><i class="fa fa-phone-square"></i>  +6221 8067 9200</li>
              <li><i class="fa fa-home"></i> JL. D.I. Panjaitan Kav. 9-10, Jakarta 13340</li>
            </ul>
            <!-- contact_details -->
          </div>
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->

    <br>
   <!-- ======= Footer ======= -->
    <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright" style="font-size: 12px; margin-left: 450px; margin-top: 100px;">
        &copy;Copyright <strong><span>2022 Departemen Sistem Informasi</span></strong> All Rights Reserved.
      </div>
      <div class="credits">
    </div>
    <!-- <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a> -->
    </footer>
  <!-- End Footer -->

  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript" src="lib/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
  <script type="text/javascript" src="lib/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

  <script type="text/javascript">
    //wysihtml5 start

    $('.wysihtml5').wysihtml5();

    //wysihtml5 end
  </script>
</body>

</html>
