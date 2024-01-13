<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
<!--     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
 -->    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
.user-area .dropdown-toggle:before {

    width: 7px;
    height: 7px;

    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a ><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">UI elements</li><!-- /.menu-title -->
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-title">Icons</li><!-- /.menu-title -->
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-title">Sytem</li><!-- /.menu-title -->
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Logout </a>
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
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
  
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated-fadeIn">
                <!-- Widgets  -->
                <div class="container">

                <div class="row">
                    <div class='grid grid-cols-4 items-center'>
                        <div class='flex items-center justify-center'>
                        <sl-card class="card-overview">
                  <img
                    slot="image"
                    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
                    
                  />
                  <strong>Mittens</strong><br />
                
                
                
                  <div slot="footer">
                 
                
                <sl-button variant="primary" href= "tool/tool.php" pill>More Info </sl-button>
                
                <span>คงเหลือ   <sl-format-number id="formattedValue" value="50"></sl-format-number>
                 ชิ้น</span>
                
                  </div>
                </sl-card>
                </div>
                
                <div class='flex items-center justify-center'>
                        <sl-card class="card-overview">
                  <img
                    slot="image"
                    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
                    
                  />
                  <strong>Mittens</strong><br />
                
                
                
                  <div slot="footer">
                
                
                <sl-button id="openDialogButton2" variant="primary" pill>More Info </sl-button>
                <span>คงเหลือ 20 ชิ้น</span>
                  </div>
                </sl-card>
                </div>
                
                <div class='flex items-center justify-center'>
                        <sl-card class="card-overview">
                  <img
                    slot="image"
                    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
                    
                  />
                  <strong>Mittens</strong><br />
                
                
                
                  <div slot="footer">
                 
                <sl-button id="openDialogButton3" variant="primary" pill>More Info </sl-button>
                <span>คงเหลือ 20 ชิ้น</span>
                  </div>
                </sl-card>
                </div>
                
                <div class='flex items-center justify-center'>
                        <sl-card class="card-overview">
                  <img
                    slot="image"
                    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
                    
                  />
                  <strong>Mittens</strong><br />
                
                
                
                  <div slot="footer">
                 
                <sl-button id="openDialogButton4" variant="primary" pill>More Info </sl-button>
                <span>คงเหลือ 20 ชิ้น</span>
                  </div>
                </sl-card>
                
                </div>
                
                    </div>
                </div>
                <div class="row">
                    <div class='grid grid-cols-4 items-center'>
                        <div class='flex items-center justify-center'>
                        <sl-card class="card-overview">
                  <img
                    slot="image"
                    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
                    
                  />
                  <strong>Mittens</strong><br />
                
                
                
                  <div slot="footer">
                 
                
                <sl-button variant="primary" href= "tool/tool.php" pill>More Info </sl-button>
                
                <span>คงเหลือ   <sl-format-number id="formattedValue" value="50"></sl-format-number>
                 ชิ้น</span>
                
                  </div>
                </sl-card>
                </div>
                
                <div class='flex items-center justify-center'>
                        <sl-card class="card-overview">
                  <img
                    slot="image"
                    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
                    
                  />
                  <strong>Mittens</strong><br />
                
                
                
                  <div slot="footer">
                
                
                <sl-button id="openDialogButton2" variant="primary" pill>More Info </sl-button>
                <span>คงเหลือ 20 ชิ้น</span>
                  </div>
                </sl-card>
                </div>
                
                <div class='flex items-center justify-center'>
                        <sl-card class="card-overview">
                  <img
                    slot="image"
                    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
                    
                  />
                  <strong>Mittens</strong><br />
                
                
                
                  <div slot="footer">
                 
                <sl-button id="openDialogButton3" variant="primary" pill>More Info </sl-button>
                <span>คงเหลือ 20 ชิ้น</span>
                  </div>
                </sl-card>
                </div>
                
                <div class='flex items-center justify-center'>
                        <sl-card class="card-overview">
                  <img
                    slot="image"
                    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
                    
                  />
                  <strong>Mittens</strong><br />
                
                
                
                  <div slot="footer">
                 
                <sl-button id="openDialogButton4" variant="primary" pill>More Info </sl-button>
                <span>คงเหลือ 20 ชิ้น</span>
                  </div>
                </sl-card>
                
                </div>
                
                    </div>
                </div>
                <div class="row">
                    <div class='grid grid-cols-4 items-center'>
                        <div class='flex items-center justify-center'>
                        <sl-card class="card-overview">
                  <img
                    slot="image"
                    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
                    
                  />
                  <strong>Mittens</strong><br />
                
                
                
                  <div slot="footer">
                 
                
                <sl-button variant="primary" href= "tool/tool.php" pill>More Info </sl-button>
                
                <span>คงเหลือ   <sl-format-number id="formattedValue" value="50"></sl-format-number>
                 ชิ้น</span>
                
                  </div>
                </sl-card>
                </div>
                
                <div class='flex items-center justify-center'>
                        <sl-card class="card-overview">
                  <img
                    slot="image"
                    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
                    
                  />
                  <strong>Mittens</strong><br />
                
                
                
                  <div slot="footer">
                
                
                <sl-button id="openDialogButton2" variant="primary" pill>More Info </sl-button>
                <span>คงเหลือ 20 ชิ้น</span>
                  </div>
                </sl-card>
                </div>
                
                <div class='flex items-center justify-center'>
                        <sl-card class="card-overview">
                  <img
                    slot="image"
                    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
                    
                  />
                  <strong>Mittens</strong><br />
                
                
                
                  <div slot="footer">
                 
                <sl-button id="openDialogButton3" variant="primary" pill>More Info </sl-button>
                <span>คงเหลือ 20 ชิ้น</span>
                  </div>
                </sl-card>
                </div>
                
                <div class='flex items-center justify-center'>
                        <sl-card class="card-overview">
                  <img
                    slot="image"
                    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
                    
                  />
                  <strong>Mittens</strong><br />
                
                
                
                  <div slot="footer">
                 
                <sl-button id="openDialogButton4" variant="primary" pill>More Info </sl-button>
                <span>คงเหลือ 20 ชิ้น</span>
                  </div>
                </sl-card>
                
                </div>
                
                    </div>
                </div>
                <div class="row">
                    <div class='grid grid-cols-4 items-center'>
                        <div class='flex items-center justify-center'>
                        <sl-card class="card-overview">
                  <img
                    slot="image"
                    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
                    
                  />
                  <strong>Mittens</strong><br />
                
                
                
                  <div slot="footer">
                 
                
                <sl-button variant="primary" href= "tool/tool.php" pill>More Info </sl-button>
                
                <span>คงเหลือ   <sl-format-number id="formattedValue" value="50"></sl-format-number>
                 ชิ้น</span>
                
                  </div>
                </sl-card>
                </div>
                
                <div class='flex items-center justify-center'>
                        <sl-card class="card-overview">
                  <img
                    slot="image"
                    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
                    
                  />
                  <strong>Mittens</strong><br />
                
                
                
                  <div slot="footer">
                
                
                <sl-button id="openDialogButton2" variant="primary" pill>More Info </sl-button>
                <span>คงเหลือ 20 ชิ้น</span>
                  </div>
                </sl-card>
                </div>
                
                <div class='flex items-center justify-center'>
                        <sl-card class="card-overview">
                  <img
                    slot="image"
                    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
                    
                  />
                  <strong>Mittens</strong><br />
                
                
                
                  <div slot="footer">
                 
                <sl-button id="openDialogButton3" variant="primary" pill>More Info </sl-button>
                <span>คงเหลือ 20 ชิ้น</span>
                  </div>
                </sl-card>
                </div>
                
                <div class='flex items-center justify-center'>
                        <sl-card class="card-overview">
                  <img
                    slot="image"
                    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
                    
                  />
                  <strong>Mittens</strong><br />
                
                
                
                  <div slot="footer">
                 
                <sl-button id="openDialogButton4" variant="primary" pill>More Info </sl-button>
                <span>คงเหลือ 20 ชิ้น</span>
                  </div>
                </sl-card>
                
                </div>
                
                    </div>
                </div>
                </div>

                
 
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
<!--     <script src="https://cdn.tailwindcss.com"></script>
 -->

</body>
</html>
