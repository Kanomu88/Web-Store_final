<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>เว็ปไซต์ยืมคืนอุปกรณ์ สโตร์</title>                                                     
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://www.cdti.ac.th/wp-content/uploads/2023/08/Artboard-1-copy-2-1.png">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.11.0/cdn/themes/light.css" />
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.11.0/cdn/shoelace-autoloader.js"></script>


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->
    <style>
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
.buttom-click {
    text-align: center;
    margin-bottom: 2rem;    
}

    </style>
<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                    <a href="admin_main_menu.php" id='menuToggle'class='menuToggle'><i class="menu-icon fa fa-bars"></i>Home </a>
                    </li>
                    <li class="menu-title">Equipment</li><!-- /.menu-title -->
                    <li>
                        <a href="admin_list_borrowers.php"> <i class="menu-icon fa fa-id-card-o"></i>รายชื่อผู้ยืม</a>
                    </li>
                    <li>
                        <a href="admin_list_equipment.php"> <i class="menu-icon fa fa-cogs"></i>อุปกรณ์ทั้งหมด</a>
                    </li>
                    <li>
                        <a href="admin_list_History.php"> <i class="menu-icon fa fa-tasks"></i>ประวัติการยืม</a>
                    </li>

                    <li class="menu-title">Sytem</li><!-- /.menu-title -->
                    <li>
                        <a href="#" onclick="logout()"> <i class="menu-icon fa fa-sign-in"></i>Logout </a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="https://www.cdti.ac.th/wp-content/uploads/2023/06/Asset-1eme.svg" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"></a>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>History Page</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">ตารางแสดงประวัติการยืม - คืน</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Receipt Number</th>
                                    <th>Email</th>
                                    <th>product</th>
                                    <th>quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<!--     <div id='buttom-click' class='buttom-click'>
        <sl-button variant="primary" href="/api/index.php" >ย้อนกลับ</sl-button>
    
        
        <sl-button variant="primary" href="/api/index.php">ตกลง</sl-button>
    </div> -->

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    

    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>
    <script src="JAVASCRIPT/logout.js" type="module"></script>
    <script src="JAVASCRIPT/loadgisturt.js" type="module"></script>


    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
import { getDatabase, ref, onValue, get, remove } from 'https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js';

const firebaseConfig = {
    apiKey: "AIzaSyAL8OSkYagZe97HqUt5WEaTmuE4mbrHDqI",
    authDomain: "store-54a2b.firebaseapp.com",
    databaseURL: "https://store-54a2b-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "store-54a2b",
    storageBucket: "store-54a2b.appspot.com",
    messagingSenderId: "403258094698",
    appId: "1:403258094698:web:f0892482122b12356c0613",
    measurementId: "G-1N0ZTDCH26"
};

const app = initializeApp(firebaseConfig);
const database = getDatabase(app);
const databaseRef = ref(database, 'datauser');
function deleteReceipt(userId, productId) {
    const userRef = database.ref('datauser').child(userId).child(productId);
    userRef.remove()
        .then(() => {
            console.log("Document successfully deleted!");
        })
        .catch((error) => {
            console.error("Error removing document: ", error);
        });
}

function approveReceipt(userId, productId) {
    const userRef = database.ref('datauser').child(userId).child(productId);
    const productRef = database.ref('products').child(productId);
    
    // Start a transaction
    database.ref().transaction(function(transaction) {
        if (transaction) {
            // ดึงข้อมูล quantity ของสินค้าใน datauser
            const userQuantity = transaction.datauser[userId][productId].quantity;
            
            // ดึงข้อมูล quantity ของสินค้าใน products
            const productQuantity = transaction.products[productId].quantity;
            
            // ตรวจสอบว่ามีจำนวนสินค้าพอหรือไม่
            if (userQuantity > 0 && productQuantity > 0) {
                // ลบค่า quantity ของสินค้าใน datauser และ products
                transaction.datauser[userId][productId].quantity = userQuantity - 1;
                transaction.products[productId].quantity = productQuantity - 1;
            }
        }
        return transaction;
    }).then(function(transactionResult) {
        if (transactionResult.committed) {
            console.log('Transaction committed successfully.');
        } else {
            console.log('Transaction aborted.');
        }
    }).catch(function(error) {
        console.error('Transaction failed: ', error);
    });
}


  </script>


</body>
</html>
