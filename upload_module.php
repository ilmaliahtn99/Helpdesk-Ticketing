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
    <a href="index.html" class="logo"><img src="img/logo_wika.png" style="width: 60px; margin-right: 12px; font-family: sans-serif;"><b>Helpdesk</b></a>
        </header>

  <div class="container">
    
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!-- page start-->
        <div class="row mt">
          <div class="col-sm-9" style="margin-left: 50px;">
            <section class="panel">

                <header class="panel-heading wht-bg">
                  <h4 class="gen-case" style="color: #000"> Tambah Data </h4>
                  <h6>Please fill in the form below to upload a new module.</h6>
                </header>

                <div class="panel-body">
                  <form action="connect.php" method="post" class="form-horizontal form-bordered">
                    <div class="form-horizontal form-bordered">
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="inputDefault">Title</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" id="title" name="title">
                        </div>
                      </div>
                   
                       <div class="form-group">
                        <label class="col-md-3 control-label" for="inputSuccess">Category</label>
                         <div class="col-md-6">
                          <select class="form-control input-sm mb-md">
                            <?php 
                              $result= mysqli_query ($koneksi,"SELECT*FROM helptopic"); 
                              foreach($result as $k){echo '<option value="'.$k['id_topic'].'">'.$k['topic'].'</option>';}  
                            ?>

                          </select>
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
                <input type="submit" value="Submit" style="width: 100px; height: 30px; background-color: #64c3c2; color: #fff; border-radius: 5px; margin-left: 370px; margin-top: 30px; border-color: #64c3c2;"><a href="open_ticket.php"></a>
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
      <div class="copyright" style="font-size: 14px; margin-left: 500px;">
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
