<?php
// เชื่อมต่อกับ Firebase Realtime Database
$firebaseDatabaseURL = 'https://store-54a2b-default-rtdb.asia-southeast1.firebasedatabase.app/';
$firebaseSecretKey = 'AIzaSyAL8OSkYagZe97HqUt5WEaTmuE4mbrHDqI'; // ใส่คีย์เซ็นสำหรับการเชื่อมต่อกับ Firebase Realtime Database
$firebaseAppURL = $firebaseDatabaseURL . 'selectedProducts.json?auth=' . $firebaseSecretKey;

// ตรวจสอบว่าผู้ใช้คลิกที่ปุ่ม "ตกลง" หรือไม่
if (isset($_POST['submit'])) {
    // สร้างเลขที่ใบเสร็จใหม่
    $receiptNumber = generateReceiptNumber();

    // บันทึกข้อมูลสินค้าที่เลือกลงใน Firebase Realtime Database
    saveSelectedProducts($receiptNumber);

    // Redirect ไปยังหน้า user_cart-list.php หรือหน้าอื่น ๆ ตามที่ต้องการ
    alert("Successfully");
    header('index.php');
    exit;
}

// ฟังก์ชันสร้างเลขที่ใบเสร็จใหม่
function generateReceiptNumber() {
    // ตัวอย่างการสร้างเลขที่ใบเสร็จ โดยใช้เวลาปัจจุบัน
    return 'RECEIPT_' . date('YmdHis');
}

// ฟังก์ชันบันทึกข้อมูลสินค้าลงใน Firebase Realtime Database
function saveSelectedProducts($receiptNumber) {
    // รับข้อมูลสินค้าจาก form หรือจากต้นทางอื่น ๆ
    // เช่น $_POST['product_name'], $_POST['product_quantity']

    // ส่งข้อมูลสินค้าไปยัง Firebase Realtime Database
    // ตัวอย่างเพียงแสดงการส่งข้อมูลในรูปแบบ JSON
    $data = array(
        'name' => $_POST['product_name'],
        'quantity' => $_POST['product_quantity'],
        'receiptNumber' => $receiptNumber
    );

    $jsonData = json_encode($data);

    // ส่งข้อมูลไปยัง Firebase Realtime Database โดยใช้ cURL
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $firebaseAppURL);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $response = curl_exec($curl);
    curl_close($curl);

    // ตรวจสอบการส่งข้อมูล
    if ($response === false) {
        alert("Successfully faild");

        // การส่งข้อมูลไม่สำเร็จ
        // คุณสามารถจัดการข้อผิดพลาดตามที่ต้องการ
    } else {
        alert("Successfully send");

        // การส่งข้อมูลสำเร็จ
        // คุณสามารถดำเนินการต่อไปตามที่ต้องการ
    }
}
?>

<!-- โค้ด HTML ของ user_cart-list.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- โค้ดส่วนหัวของหน้าเว็บ -->
</head>
<body>
    <!-- โค้ดส่วนเนื้อหาของหน้าเว็บ -->
    <form method="post" action="">
        <!-- ส่วนอื่น ๆ ของฟอร์ม -->
        <input type="hidden" name="product_name" value="Product Name" />
        <input type="hidden" name="product_quantity" value="Product Quantity" />
        <button type="submit" name="submit">ตกลง</button>
    </form>
</body>
</html>


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
                        <a id='menuToggle'class='menuToggle'><i class="menu-icon fa fa-bars"></i>Home </a>
                    </li>
                    <li class="menu-title">Equipment</li><!-- /.menu-title -->
                    <li>
                        <a href="index.php"> <i class="menu-icon fa fa-tasks"></i>ยืม-คืนอุปกรณ์ </a>
                    </li>

                    <li class="menu-title">System</li><!-- /.menu-title -->
                    <li>
                        <a href="#" onclick="logout()"> <i class="menu-icon fa fa-sign-in"></i>Logout </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
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
        <!-- 
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">ตารางสรุปรายการ</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered " data-toggle="true">
                                    <thead>
                                        <tr>
                                            <th>ชื่อสินค้า</th>
                                            <th>จำนวน</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // เชื่อมต่อกับ Firebase Realtime Database
                                        $firebaseDatabaseURL = 'https://store-54a2b-default-rtdb.asia-southeast1.firebasedatabase.app/';
                                        $firebaseSecretKey = 'YOUR_FIREBASE_SECRET_KEY'; // ใส่คีย์เซ็นสำหรับการเชื่อมต่อกับ Firebase Realtime Database
                                        $firebaseAppURL = $firebaseDatabaseURL . 'selectedProducts.json?auth=' . $firebaseSecretKey;

                                        $firebaseResponse = file_get_contents($firebaseAppURL);
                                        $firebaseData = json_decode($firebaseResponse, true);

                                        // ถ้ามีข้อมูลใน Firebase Realtime Database
                                        if (!empty($firebaseData)) {
                                            foreach ($firebaseData as $product) {
                                                echo "<tr>";
                                                echo "<td>{$product['name']}</td>";
                                                echo "<td>{$product['quantity']}</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            // ถ้าไม่มีข้อมูล
                                            echo "<tr><td colspan='2'>No products in the cart.</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div id='buttom-click' class='buttom-click'>
            <sl-button variant="primary" href="/api/index.php" >ย้อนกลับ</sl-button>


            <sl-button variant="primary" href="/api/index.php">ตกลง</sl-button>
        </div>

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
    <script src="JAVASCRIPT/logout.js" type="module"></script>
    <script src="JAVASCRIPT/cartdata.js" type="module"></script>

<!--     <script src="JAVASCRIPT/cartloaddata.js" type="module"></script>
 -->

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


    <script type="text/javascript">
        $(document).ready(function(){ 
            // Initialize jQuery DataTable
            if (!$.fn.DataTable.isDataTable('#bootstrap-data-table')) {
                $('#bootstrap-data-table').DataTable({
                    pageLength: 25,
                    columnDefs: [
                        {
                            orderable: false,
                            targets: 7              
                        },
                        {
                            className: 'hide',
                            visible: false,
                            targets: [7] // Specify the target column index for visibility
                        }
                    ],      
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: 'Search...'
                    },
                    paging: true,
                    lengthChange: true,
                    searching: true,
                    ordering: true,
                    info: true,
                    autoWidth: true
                }); 

                $('#bootstrap-data-table').DataTable().columns('.hide').visible(false);

                // Initialize bootstrapToggle
                initToggle();
                $('#bootstrap-data-table_wrapper').click(function(){
                    initToggle();
                });        
                $('#bootstrap-data-table_filter').keyup(function(){
                    initToggle();
                });

                function initToggle(){ 
                    $('.cb').find('input[type=checkbox][data-toggle=toggle]').each(function(){
                        $(this).bootstrapToggle();
                    });
                }
            }
        });

    </script>


</body>
</html>
