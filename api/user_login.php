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
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-white">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="https://www.cdti.ac.th/wp-content/uploads/2023/06/Asset-1eme.svg" alt="">
                    </a>
                </div>
                <div class="login-form">
                <form onsubmit="login(event)">
                        <div class="form-group">
                            <label>รหัสนักเรียน</label>    
                            <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input  class="form-control" type="text" name="" placeholder="Email" id="email">
                            </div>
                            </div>
                        <div class="form-group" >
                            <label>รหัสผ่าน</label>
                            <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                            <input  class="form-control" type="password" name="" placeholder="Password" id="password" >
                        </div>
                        </div>

<!--                         <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            

                        </div> -->
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" id="signupinp" value="Sign Up">Sign in</button>
                        
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="user_register.php  "> Sign Up Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>

    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.0.5/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore-compat.js"></script>
    

</body>
<script src="JAVASCRIPT/login.js" type="module"></script>
<script src="assets/js/main.js"></script>
<script type ="module">
    jQuery(document).ready(function($) {
    // โค้ดของคุณที่ใช้ jQuery ทั้งหมดจะต้องถูกเข้าถึงโดยใช้ `$` แทน `jQuery`
});

</script>
</html>
