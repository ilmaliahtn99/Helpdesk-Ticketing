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

</head>

<body>
  <section id="container">
    <!-- ********************************************************************************************************************************************************** TOP BAR CONTENT & NOTIFICATIONS *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">

    <!--logo start-->
    <a href="index.html" class="logo"><img src="img/logo_wika.png" style="width: 60px; margin-right: 12px; font-family: sans-serif; margin-bottom: 10px;"><b>Helpdesk</b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html" style="margin-top: 25px; font-family: sans-serif;">Sign In</a></li>
        </ul>
      </div>
      <div class="nav notify-row" id="top_menu" style="float: right;">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <nav style="margin-right: 100px; margin-top: -50px;">
            <a href="v_isi.php" style="color: #fff; margin-right: 18px; margin-left: 30px;">Home </a> 
            <a href="check_ticket.html" style="color: #fff; margin-right: 15px; font-family: sans-serif;">Check Ticket Status </a> 
            <a href="open_new_ticket.php" style="color: #fff; font-family: sans-serif; margin-right: 14px;">Open New Ticket </a> 
          </nav>
         </div>
        </header>

   <div class="container">
    
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!-- page start-->
        <div class="row mt">
          <div class="col-sm-9">
            <section class="panel" style="margin-left: 50px;">

                <header class="panel-heading wht-bg">
                  <h4 class="gen-case" style="color: #0000ff">Open New Ticket</h4>
                  <h6>Please fill in the form below to open a new ticket.</h6>
                </header>

                <div class="panel-body">
                  <form action="connect.php" method="post" class="form-horizontal form-bordered">
                    <div class="form-horizontal form-bordered">
                     </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="inputDefault">Email Address</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" id="emailaddress" name="emailaddress">
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Full Name</label>
                         <div class="col-md-6">
                          <input type="text" class="form-control" id="fullname" name="fullname">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Phone Number</label>
                         <div class="col-md-6">
                          <input type="text" class="form-control" id="phonenumber" name="phonenumber">
                        </div>
                      </div>

                    <div class="form-group">
                      <label class="col-md-3 control-label" for="inputSuccess">Divisi</label>
                        <div class="col-md-6">
                          <select class="form-control input-sm mb-md">

                            <?php 
                              $result= mysqli_query ($koneksi,"SELECT*FROM divisi"); 
                              foreach($result as $k){echo '<option value="'.$k['id_divisi'].'">'.$k['nama_divisi'].'</option>';}  
                            ?>
                            
                          </select>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-md-3 control-label" for="inputSuccess">Help Topic</label>
                         <div class="col-md-6">
                          <select class="form-control input-sm mb-md">
                            <?php 
                              $result= mysqli_query ($koneksi,"SELECT*FROM helptopic"); 
                              foreach($result as $k){echo '<option value="'.$k['id_topic'].'">'.$k['topic'].'</option>';}  
                            ?>

                          </select>
                        </div>
                      </div>

                       <div class="form-group" style="margin-left: 2px">
                        <h4 style="color: #000;">Proyek</h4>
                         </div>

                      <div class="form-group">
                       <label class="col-md-3 control-label" for="inputDefault">Kode SPK</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" id="kodespk" name="kodespk">
                        </div>
                      </div>
                   
                      <div class="form-group">
                       <label class="col-md-3 control-label" for="inputDefault">Nama Proyek</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" id="namaproyek" name="namaproyek">
                        </div>
                      </div>

                      <div class="form-group" style="margin-left: 5px">
                       <h4 style="color: #000;">Ticket Details</h4>
                        <h6>Please Describe Your Issue</h6>
                        </div>

                       <div class="form-group">
                        <label class="col-md-3 control-label" for="inputSuccess">Jabatan</label>
                         <div class="col-md-6">
                          <select class="form-control input-sm mb-md">

                            <?php 
                              $result= mysqli_query ($koneksi,"SELECT*FROM jabatan"); 
                              foreach($result as $k){echo '<option value="'.$k['id_jabatan'].'">'.$k['jabatan'].'</option>';}  
                            ?>
  
                          </select>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-md-3 control-label" for="inputSuccess">Dampak</label>
                         <div class="col-md-6">
                          <select class="form-control input-sm mb-md">

                             <?php 
                              $result= mysqli_query ($koneksi,"SELECT*FROM dampak"); 
                              foreach($result as $k){echo '<option value="'.$k['id_dampak'].'">'.$k['dampak'].'</option>';}  
                             ?>

                          </select>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-md-3 control-label" for="inputSuccess">Issue Categories</label>
                         <div class="col-md-6">
                          <select class="form-control input-sm mb-md">

                            <?php 
                              $result= mysqli_query ($koneksi,"SELECT*FROM issue_categories"); 
                              foreach($result as $k){echo '<option value="'.$k['id_issue'].'">'.$k['nama_issue'].'</option>';}  
                            ?>
                            
                          </select>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Issue Summary</label>
                         <div class="col-md-6">
                          <input type="text" class="form-control" id="issuesummary" name="issuesummary">
                        </div>
                      </div>
                   </div>  

                  <?php 
                     $query ="SELECT * FROM sla
                      INNER JOIN ticket ON new_ticket.no_ticket = user.id_user";
                  ?> 

                <?php while ($row=mysqli_fetch_assoc($result)): ?>

                  <tbody>
                  <tr>
                    <td><input type="checkbox" class=""></td>
                    <td><a href="view_ticket.html"><?php echo $row["no_ticket"]; ?></a></td>
                    <td><?php echo $row["create_date"]; ?></td>
                    <td><?php echo $row["subject"]; ?></td>
                    <td><?php echo $row["from"]; ?></td>
                    <td><?php echo $row["priority"]; ?></td>
                    <td><?php echo $row["assigned_to"]; ?></td>
                    <td><?php echo $row["nama_team"]; ?></td>
                  </tr>
                   
               </tbody>
               <?php endwhile; ?>

              <div class="panel-body">
                
          <div class="compose-mail">      
            <div class="compose-editor">
              <textarea class="wysihtml5 form-control" rows="9"></textarea>
                <input type="file" class="default">
               </div>
                <input type="submit" value="Create Ticket" style="width: 100px; height: 35px; background-color: #64c3c2; color: #fff; border-radius: 5px; margin-left: 250px; margin-top: 30px; border-color: #64c3c2;"><a href="open_ticket.php"></a>
            <button type="button" class="btn btn-default" style="margin-top: 30px; margin-left: 8px;"><a href="v_isi.php">Cancel</a></button>
             </div>
              </div>
            </section>
          </div>
        </div>
      </section>
    </form>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!-- ======= Footer ======= -->
    <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright" style="font-size: 12px; margin-left: 450px;">
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
