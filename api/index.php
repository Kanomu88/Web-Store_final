<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>เว็ปไซต์ยืมคืนอุปกรณ์ สโตร์</title>                                                     
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://www.cdti.ac.th/wp-content/uploads/2023/08/Artboard-1-copy-2-1.png">

    <script src="JAVASCRIPT/logout.js" type="module"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
<!--     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
 -->    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.11.0/cdn/themes/light.css" />
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.11.0/cdn/shoelace-autoloader.js"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.12.0/cdn/components/button/button.js"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.12.0/cdn/components/button-group/button-group.js"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.12.0/cdn/shoelace.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }
        .grid-cols-4 {
    grid-template-columns: repeat(4, minmax(0, 1fr));
        }
        .grid {
    display: grid;
        }
        .row {
            margin-top: 3rem;
        }
         .card-overview {
    max-width: 300px;
        }
  .right-panel .navbar-brand {
    width: 140px;
    margin-top: 1rem;
      }
    .animated-fadeIn{
        row-gap: 1rem;
         column-gap: 1rem;
    }
    .user-area .user-avatar {
    border-radius: 50%!important;
}
.user-area .count {
    position: absolute;
    top: 1.8rem;
    left: 3rem;
}
.user-area .user-avatar {
  margin-top: 5px;
}
.navbar .navbar-nav > li.active {
    background: none;
}
.card-overview span {
  margin-left: 1.5rem;
}
.card-overview img {
    height: 20rem;
}

    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                    <a id='menuToggle'class='menuToggle'><i class="menu-icon fa fa-bars"></i>Home </a>
                    </li>
                    <li class="menu-title">Equipment</li><!-- /.menu-title -->
                    <li>
                        <a href="user_main_menu.php"> <i class="menu-icon fa fa-tasks"></i>Menu</a>
                    </li>

                    <li class="menu-title">Sytem</li><!-- /.menu-title -->
                    <li>
                        <a href="#" onclick="logout()"> <i class="menu-icon fa fa-sign-in"></i>Logout </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="https://www.cdti.ac.th/wp-content/uploads/2023/06/Asset-1eme.svg" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                </div>
            </div>
            <div class="user-area dropdown float-right">
                        <a href="user_cart-list.php"> <!-- <span class="count"></span> -->
                            <img class="user-avatar rounded-circle" src="https://e7.pngegg.com/pngimages/772/45/png-clipart-shopping-cart-shopping-centre-icon-shopping-cart-text-retail.png" alt="User Avatar">
                        
                          </a>
                    </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated-fadeIn">
                <!-- Widgets  -->

 
                        <div id="product-list">
            <!-- Product items will be dynamically added here -->


                </div>
                </div>
                </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="JAVASCRIPT/cartdata.js" type="module"></script>

</body>
</html>
