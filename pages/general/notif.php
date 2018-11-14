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
      .tabbuy {
        background-color: #748194;
        color: black;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 26px;
        font-size: 17px;
        width: 20%;
      }
      .tabcontentbuy {
          color: white;
          display: none;
          padding: 60px 20px;
          height: 100%;
      }
      .tabsell {
        background-color: #748194;
        color: black;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 26px;
        font-size: 17px;
        width: 16.66%;
      }
      .tabcontentsell {
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
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <?php
             session_start();
             if(!$_SESSION['role']=='user') {
              header('location:../general/logout.php');
             }
        ?>
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
            <a href="women.php">
                <span class="title">Women's Stuff</span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-female"></i></span>
          </li>
            <li class="">
            <a href="men.php">
                <span class="title">Men's Stuff</span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-male"></i></span>
          </li>
          <li class="">
            <a href="../general/journals.php"><span class="title">Others</span></a>
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
            <button class="tablink" onclick="openPage('Buy', this, '#748194')" id="defaultOpen">Buy</button>
            <button class="tablink" onclick="openPage('Sell', this, '#748194')">Sell</button>

          <div id="Buy" class="container-fluid container-fixed-lg text-center tabcontent">
            <!-- BEGIN PlACE PAGE CONTENT HERE -->
            <button class="tabbuy" onclick="openPageBuy('NotYetPaid', this, 'white')" id="defaultOpenBuy">Not Yet Paid</button>
            <button class="tabbuy" onclick="openPageBuy('Unsent', this, 'white')">Unsent</button>
            <button class="tabbuy" onclick="openPageBuy('NotYetReceived', this, 'white')">Not Yet Received</button>
            <button class="tabbuy" onclick="openPageBuy('Finished', this, 'white')">Finished</button>
            <button class="tabbuy" onclick="openPageBuy('Cancel', this, 'white')">Cancel</button>
            <div id="NotYetPaid" class="tabcontentbuy">
              <div class="container-fluid container-fixed-lg" style="background-color:white;">
                  <h3>HAHAHAHA</h3>
              </div>
            </div>
            <div id="Unsent" class="tabcontentbuy">
              <div class="container-fluid container-fixed-lg" style="padding-top:80px;">
                <img src="../../img/no-order.png" height="180px" width="250px">
                <p style="color:black;">There are no orders</p>
              </div>
            </div>
            <div id="NotYetReceived" class="tabcontentbuy">
              <div class="container-fluid container-fixed-lg" style="padding-top:80px;">
                <img src="../../img/no-order.png" height="180px" width="250px">
                <p style="color:black;">There are no orders</p>
              </div>
            </div>
            <div id="Finished" class="tabcontentbuy">
              <div class="container-fluid container-fixed-lg" style="padding-top:80px;">
                <img src="../../img/no-order.png" height="180px" width="250px">
                <p style="color:black;">There are no orders</p>
              </div>
            </div>
            <div id="Cancel" class="tabcontentbuy">
              <div class="container-fluid container-fixed-lg" style="padding-top:80px;">
                <img src="../../img/no-order.png" height="180px" width="250px">
                <p style="color:black;">There are no orders</p>
              </div>
            </div>

				  </div>
          <div id="Sell" class="tabcontent">
            <button class="tabsell" onclick="openPageSell('NotYetPaid', this, 'white')" id="defaultOpenSell">Not Yet Paid</button>
            <button class="tabsell" onclick="openPageSell('NeedSent', this, 'white')">Need To Be Sent</button>
            <button class="tabsell" onclick="openPageSell('Sent', this, 'white')">Sent</button>
            <button class="tabsell" onclick="openPageSell('Finished', this, 'white')">Finished</button>
            <button class="tabsell" onclick="openPageSell('Canceled', this, 'white')">Canceled</button>
            <button class="tabsell" onclick="openPageSell('Returned', this, 'white')">Returned</button>
            <div id="NotYetPaid" class="tabcontentsell">
              <div class="container-fluid container-fixed-lg" style="padding-top:80px;">
                <img src="../../img/no-order.png" height="180px" width="250px">
                <p style="color:black;">There are no orders</p>
              </div>
            </div>
            <div id="NeedSent" class="tabcontentsell">
              <div class="container-fluid container-fixed-lg" style="padding-top:80px;">
                <img src="../../img/no-order.png" height="180px" width="250px">
                <p style="color:black;">There are no orders</p>
              </div>
            </div>
            <div id="Sent" class="tabcontentsell">
              <div class="container-fluid container-fixed-lg" style="padding-top:80px;">
                <img src="../../img/no-order.png" height="180px" width="250px">
                <p style="color:black;">There are no orders</p>
              </div>
            </div>
            <div id="Finished" class="tabcontentsell">
              <div class="container-fluid container-fixed-lg" style="padding-top:80px;">
                <img src="../../img/no-order.png" height="180px" width="250px">
                <p style="color:black;">There are no orders</p>
              </div>
            </div>
            <div id="Canceled" class="tabcontentsell">
              <div class="container-fluid container-fixed-lg" style="padding-top:80px;">
                <img src="../../img/no-order.png" height="180px" width="250px">
                <p style="color:black;">There are no orders</p>
              </div>
            </div>
            <div id="Returned" class="tabcontentsell">
              <div class="container-fluid container-fixed-lg" style="padding-top:80px;">
                <img src="../../img/no-order.png" height="180px" width="250px">
                <p style="color:black;">There are no orders</p>
              </div>
            </div>
          </div>
            <!-- END PLACE PAGE CONTENT HERE -->
        </div>
          <!-- END CONTAINER FLUID -->
      </div>
        <!-- END PAGE CONTENT -->
        

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
      function openPageBuy(pageName,elmnt,color){
        var i, tabcontentbuy, tabbuy;
          tabcontentbuy = document.getElementsByClassName("tabcontentbuy");
          for (i = 0; i < tabcontentbuy.length; i++) {
              tabcontentbuy[i].style.display = "none";
          }
          tabbuy = document.getElementsByClassName("tabbuy");
          for (i = 0; i < tabbuy.length; i++) {
              tabbuy[i].style.backgroundColor = "";
          }
          document.getElementById(pageName).style.display = "block";
          elmnt.style.backgroundColor = color;
      }
      function openPageSell(pageName,elmnt,color){
        var i, tabcontentsell, tabsell;
          tabcontentsell = document.getElementsByClassName("tabcontentsell");
          for (i = 0; i < tabcontentsell.length; i++) {
              tabcontentsell[i].style.display = "none";
          }
          tabsell = document.getElementsByClassName("tabsell");
          for (i = 0; i < tabsell.length; i++) {
              tabsell[i].style.backgroundColor = "";
          }
          document.getElementById(pageName).style.display = "block";
          elmnt.style.backgroundColor = color;
      }
      document.getElementById("defaultOpen").click();
      document.getElementById("defaultOpenBuy").click();
      document.getElementById("defaultOpenSell").click();
    </script>
  </body>
</html>
