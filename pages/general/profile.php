<!DOCTYPE html>
<html>
  <head>
    <title>MININATO</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="../../style/pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../style/pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../style/pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../style/pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="../../style/favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="../../style/style.css" rel="stylesheet" type="text/css" />
    <link href="../../style/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="../../style/style.css" rel="stylesheet" type="text/css" />
    <link href="../../style/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../lib/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../../style/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../../style/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../../style/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../../style/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../../style/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="../../style/pages/css/pages.css" rel="stylesheet" type="text/css" />
    <style>
    .tablink {
        background-color: #2e353e;
        color: white;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 26px;
        font-size: 17px;
        width: 50%;
      }

      .tablink:hover {
        background-color: #777;
      }
      .tabcontent {
          color: white;
          display: none;
          padding: 60px 20px;
          height: 100%;
      }
    </style>
  </head>
  <body class="fixed-header ">
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
        <?php
             session_start();
             if(!$_SESSION['role']=='user') {
              header('location:../general/logout.php');
             }
        ?>
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
          <span class="sidebar-title-header"><b>MININATO</b></span>
          <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30">
            <a href="../user/women.php">
                <span class="title">Women's Stuff</span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-female"></i></span>
          </li>
            <li class="">
            <a href="../user/men.php">
                <span class="title">Men's Stuff</span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-male"></i></span>
          </li>
          <li class="">
            <a href="../user/others.php"><span class="title">Others</span></a>
            <span class="icon-thumbnail"><i class="pg-bag"></i></span>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE CONTROLS -->
        <div class="container-fluid relative">
          <!-- LEFT SIDE -->
          <div class="pull-left full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
                <span class="icon-set menu-hambuger"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
          <div class="pull-center hidden-md hidden-lg">
            <div class="header-inner">
              <div class="brand inline">
                <h3>MININATO</h3>
              </div>
            </div>
          </div>
          <!-- RIGHT SIDE -->
          <div class="pull-right full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
                <span class="icon-set menu-hambuger-plus"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
        </div>
        <!-- END MOBILE CONTROLS -->
        <div class=" pull-left sm-table hidden-xs hidden-sm">
          <div class="header-inner">
            <div class="brand inline">
              <h4><b>MININATO</b></h4>
            </div>
              <?php
                // Create connection
                $conn = mysqli_connect("localhost","root","","elibrary");
                $query = "select nama from anggota where username = '".$_SESSION['uname']."'";
                $result = mysqli_query($conn,$query);
                if (! $result){
                   throw new My_Db_Exception('Database error: ' . mysql_error());
                }

                while($row = $result->fetch_assoc()){
                  echo "<span  class='semi-bold'>You are logged in as " . $row['nama'] . "</span>";
                }
            ?>
          </div>
        </div>
        <div class=" pull-right">
          <!-- START User Info-->
          <div class="visible-lg visible-md m-t-10">
            <div class="dropdown pull-right">
                <span class="thumbnail-wrapper d32 inline m-t-5">
                    <a href="../user/usr.php"><i class="pg-home size-header"></i></a>
                </span>
                <span class="thumbnail-wrapper d32 inline m-t-5">
                    <a href="../general/notif.php"><i class="fa fa-bell size-header"></i></a>
                </span>
                <span class="thumbnail-wrapper d32 inline m-t-5">
                    <a href="../general/profile.php"><i class="fa fa-user size-header"></i></a>
                </span>
                <span class="thumbnail-wrapper d32 inline m-t-5">
                    <a href="../general/cart.php"><i class="fa fa-cart-plus size-header"></i></a>
                </span>
                <span class="thumbnail-wrapper d32 inline m-t-5">
                    <a href="../general/logout.php"><i class="fa fa-sign-out size-header"></i></a>
                </span>
            </div>
          </div>
          <!-- END User Info-->
        </div>
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->

      <div class="page-content-wrapper ">

        <!-- START PAGE CONTENT -->
        <div class="content" style="padding-top:30px;">
          <!-- START CONTAINER FLUID -->
            <button class="tablink" onclick="openPage('Profile', this, '#748194')" id="defaultOpen">Profile</button>
            <button class="tablink" onclick="openPage('Product', this, '#748194')">Product</button>

          <div id="Profile" class="container-fluid container-fixed-lg text-center tabcontent">

            <!-- BEGIN PlACE PAGE CONTENT HERE -->
              <?php
                    //update profil orang
                     if($_POST) {
                      $username=$_SESSION['uname'];
                      $password=$_POST['password'];
                      $confpassword=$_POST['confpassword'];
                      $alamat=$_POST['addr'];
                      $notelp=$_POST['phone'];
                      $conn = new mysqli("localhost","root","","elibrary");

                      $sql = "UPDATE `anggota` SET Password='$password', Alamat='$alamat', No_telp='$notelp' WHERE Username='$username'";
                      if($password==$confpassword) {
                          if ($conn->query($sql) === TRUE) {
                           echo "<span class='red-color'><b>PROFILE UPDATED</b></span>";
                          }
                            else {
                           echo "Error updating record: " . $conn->error;
                          }
                      }
                      else {
                          echo "<span class='red-color'><b>your new password and confirmation password did not match</b></span>";
                      }
                     }
                ?>
              <h1 class="text-center header-of-page">Profile</h1>
              <div class="update-profile">
                <div class="card share text-center">
                    <div class="card-content">
                        <img alt="Quote" src="../../img/profile.jpg">
                    </div>
                    <div class="card-description text-center">
                        <button class="btn btn-success btn-cons" data-target="#myModal" data-toggle="modal">Update User Info</button>
                    </div>
                </div>
              </div>
            <!-- END PLACE PAGE CONTENT HERE -->
          </div>
          <!-- END CONTAINER FLUID -->
            <div class="modal fade stick-up" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content text-center">
                <div class="modal-header clearfix text-center">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                  </button>
                  <h3>Update User Info</h3>
                    <?php
                        $conn = mysqli_connect("localhost","root","","elibrary");
                        $query = "select nama from anggota where username = '".$_SESSION['uname']."'";
                        $result = mysqli_query($conn,$query);
                        if (! $result){
                           throw new My_Db_Exception('Database error: ' . mysql_error());
                        }

                        while($row = $result->fetch_assoc()){
                          echo "<p> Name: " . $row['nama'] . "</p>";
                        }
                    ?>
                </div>
                <div class="modal-body">
                  <form role="form" method="POST">
                    <div class="form-group-attached">
                      <?php
                            $db_handle = mysql_connect("localhost", "root", "");
                            $db_found = mysql_select_db("elibrary", $db_handle);
                            if ($db_found) {
                                $username = $_SESSION['uname'];
                                $SQL = "SELECT Password,No_telp,Alamat FROM anggota WHERE Username='$username'";
                                $result = mysql_query($SQL);

                                while ( $row = mysql_fetch_assoc($result) ) {

                                    echo "<div class='row'>
                                        <div class='col-sm-12'>
                                          <div class='form-group form-group-default'>
                                            <label>Password</label>
                                            <input type='password' id='pass' name='password' class='form-control form-control-update'>
                                            <script>
                                              var pass = document.getElementById('pass');
                                              pass.value = ".$row['Password'].";
                                            </script>
                                          </div>
                                        </div>
                                      </div>
                                      <div class='row'>
                                        <div class='col-sm-12'>
                                          <div class='form-group form-group-default'>
                                            <label>Confirm Password</label>
                                            <input type='password' name='confpassword' id='confpass' class='form-control form-control-update'>
                                          </div>
                                        </div>
                                      </div>
                                      <div class='row'>
                                        <div class='col-sm-12'>
                                          <div class='form-group form-group-default'>
                                            <label>Phone Number</label>
                                            <input type='text' name='phone' id='phone' class='form-control form-control-update'>
                                            <script>
                                              var phone = document.getElementById('phone');
                                              phone.value = ".$row['No_telp'].";
                                            </script>
                                          </div>
                                        </div>
                                      </div>
                                      <div class='row'>
                                        <div class='col-sm-12'>
                                          <div class='form-group form-group-default'>
                                            <label>Address</label>
                                            <input type='text' name='addr' id='addr' class='form-control form-control-update'>
                                            <script>
                                              var addr = document.getElementById('addr');
                                              addr.value = ".$row['Alamat'].";
                                            </script>
                                          </div>
                                        </div>
                                      </div>";

                                }
                                mysql_close($db_handle);
                                }
                        ?>

                    </div>
                      <div class="row">
                        <div class="cart-btn mt-100" style="padding: 20px;">
                            <a href="profile.php" class="btn btn-success btn-cons">Update Profile</a>
                        </div>
                  </div>
                  </form>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
        </div>
        <!-- END PAGE CONTENT -->

        <div id="Product" class="container-fluid container-fixed-lg text-center tabcontent">
            <h1 class="text-center header-of-page">Product List</h1>
            <?php
                    //update profil orang
                     if($_POST) {
                      $kode=$_SESSION['kode'];
                      $namabarang=$_POST['namabarang'];
                      $harga=$_POST['harga'];
                      $foto=$_POST['foto'];
                      $kondisi=$_POST['kondisi'];
                      $conn = new mysqli("localhost","root","","elibrary");

                      $sql = "INSERT INTO `others` (kode, namabarang, harga, foto, kondisi) VALUES ('$kode', '$namabarang', '$harga', '$foto', '$kondisi')";
                      
                          if ($conn->query($sql) === TRUE) {
                           echo "<span class='red-color'><b>PRODUCT ADDED</b></span>";
                          }
                            else {
                           echo "Error updating record: " . $conn->error;
                          }
                     }
                ?>
              
                    <div class="card-description">
                        <button class="btn btn-success" data-target="#myModalProduct" data-toggle="modal">Add Product</button>
                    </div>
                
          <!-- END CONTAINER FLUID -->
            <div class="modal fade stick-up" id="myModalProduct" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content text-center">
                <div class="modal-header clearfix text-center">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                  </button>
                  <h3>Add Product</h3>
                    <?php
                        $conn = mysqli_connect("localhost","root","","elibrary");
                        $query = "select nama from anggota where username = '".$_SESSION['uname']."'";
                        $result = mysqli_query($conn,$query);
                        if (! $result){
                           throw new My_Db_Exception('Database error: ' . mysql_error());
                        }

                        while($row = $result->fetch_assoc()){
                          echo "<p> Name: " . $row['nama'] . "</p>";
                        }
                    ?>
                </div>
                <div class="modal-body">
                  <form role="form" method="POST">
                    <div class="form-group-attached">
                      <?php
                            $db_handle = mysql_connect("localhost", "root", "");
                            $db_found = mysql_select_db("elibrary", $db_handle);
                            if ($db_found) {
                                $username = $_SESSION['uname'];
                                $SQL = "SELECT Kode,NamaBarang,Harga,Foto,Kondisi FROM others WHERE Username='$username'";
                                $result = mysql_query($SQL);

                                while ( $row = mysql_fetch_assoc($result) ) {

                                    echo "<div class='row'>
                                        <div class='col-sm-12'>
                                          <div class='form-group form-group-default'>
                                            <label>Code</label>
                                            <input type='text' id='code' name='code' class='form-control form-control-update'>
                                            <script>
                                              var code = document.getElementById('code');
                                              code.value = ".$row['Kode'].";
                                            </script>
                                          </div>
                                        </div>
                                      </div>
                                      <div class='row'>
                                        <div class='col-sm-12'>
                                          <div class='form-group form-group-default'>
                                            <label>Product Name</label>
                                            <input type='text' name='nameproduct' id='nameproduct' class='form-control form-control-update'>
                                            <script>
                                              var nameproduct = document.getElementById('nameproduct');
                                              nameproduct.value = ".$row['NamaBarang'].";
                                            </script>
                                          </div>
                                        </div>
                                      </div>
                                      <div class='row'>
                                        <div class='col-sm-12'>
                                          <div class='form-group form-group-default'>
                                            <label>Price</label>
                                            <input type='text' name='price' id='price' class='form-control form-control-update'>
                                            <script>
                                              var price = document.getElementById('price');
                                              price.value = ".$row['Harga'].";
                                            </script>
                                          </div>
                                        </div>
                                      </div>
                                      <div class='row'>
                                      <div class='col-sm-12'>
                                        <div class='form-group form-group-default'>
                                          <label>Product Name</label>
                                          <input type='file' name='photo' id='photo' class='form-control form-control-update'>
                                          <script>
                                            var photo = document.getElementById('photo');
                                            photo.value = ".$row['Foto'].";
                                          </script>
                                        </div>
                                      </div>
                                    </div>
                                    <div class='row'>
                                    <div class='col-sm-12'>
                                      <div class='form-group form-group-default'>
                                        <label>Condition</label>
                                        <input type='text' name='condition' id='condition' class='form-control form-control-update'>
                                        <script>
                                          var condition = document.getElementById('condition');
                                          condition.value = ".$row['Kondisi'].";
                                        </script>
                                      </div>
                                    </div>
                                  </div>";

                                }
                                mysql_close($db_handle);
                                }
                        ?>

                    </div>
                      <div class="row">
                        <div class="cart-btn mt-100" style="padding: 20px;">
                            <a href="profile.php" class="btn btn-success btn-cons">Add</a>
                        </div>
                  </div>
                  </form>
                </div>
                </div>
                </div>
                </div>
            <div class="panel panel-transparent">
              <div class="panel-body">
                <table class="table table-hover demo-table-dynamic" id="tableWithDynamicRows" style="color:black;">
                  <thead>
                    <tr>
                      <th>Code</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Photo</th>
                      <th>Condition</th>
                      <th>Category</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                     $user_name = "root";
                     $password = "";
                     $database = "elibrary";
                     $server = "localhost";

                     $db_handle = MySQLi_connect($server, $user_name, $password, $database);
                     $db_found = true;
                        if($_POST) {
                            $search = $_POST['search'];
                            $searchby = $_POST['searchby'];
                            $db_handle = mysqli_connect("localhost", "root", "");
                            $db_found = mysqli_select_db("elibrary", $db_handle);

                            if ($db_found == true) {

                                $SQL =  "SELECT * FROM others JOIN kategori ON others.Id_kategori=kategori.Id_Kategori WHERE ".$_POST['searchby']." LIKE '%".$_POST['search']."%'";
                                $result = MySQLi_query($SQL);
                                if (! $result){
                                   throw new My_Db_Exception('Database error: ' . mysql_error());
                                }
                                while ( $row = MySQLi_fetch_assoc($result) ) {
                                    echo "<tr>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['Kode'] . "</p>
                                                </td>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['NamaBarang'] . "</p>
                                                </td>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['Harga'] . "</p>
                                                </td>
                                                <td class='v-align-middle'>
                                                    <a><img src=" . $row['Foto'] . "></a>
                                                </td>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['Kondisi'] . "</p>
                                                </td>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['Kategori'] . "</p>
                                                </td>
                                            </tr>";
                                }
                                MySQLi_close($db_handle);
                                }
                        }
                        else {
                            if ($db_found == true) {
                              $SQL = "SELECT * FROM pria JOIN kategori ON pria.Id_kategori=kategori.Id_Kategori";
                              $result = MySQLi_query($db_handle, $SQL);

                              while ( $row = MySQLi_fetch_assoc($result) ) {
                                    echo "<tr>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['Kode'] . "</p>
                                                </td>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['NamaBarang'] . "</p>
                                                </td>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['Harga'] . "</p>
                                                </td>
                                                <td class='v-align-middle'>
                                                    <a><img src=" . $row['Foto'] . "></a>
                                                </td>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['Kondisi'] . "</p>
                                                </td>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['Kategori'] . "</p>
                                                </td>
                                            </tr>";

                              }

                              mysqli_close($db_handle);

                              }
                            else {
                                echo "tidak ada";
                            }
                        }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
        </div>


        
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <div class="container-fluid container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="small no-margin pull-left sm-pull-reset">
              <span class="hint-text">Copyright &copy; 2018 </span>
              <span class="font-montserrat">MININATO</span>.
              <span class="hint-text">All rights reserved. </span>
            </p>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->


    <!-- BEGIN VENDOR JS -->
    <script src="../../style/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="../../style/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="../../style/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="../../style/assets/plugins/bootstrap-select2/select2.min.js"></script>
    <script type="text/javascript" src="../../style/assets/plugins/classie/classie.js"></script>
    <script src="../../style/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="../../style/pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="../../style/assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    <script>
      function openPage(pageName,elmnt,color) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < tablinks.length; i++) {
              tablinks[i].style.backgroundColor = "";
          }
          document.getElementById(pageName).style.display = "block";
          elmnt.style.backgroundColor = color;
      }
      document.getElementById("defaultOpen").click();
    </script>
  </body>
</html>
