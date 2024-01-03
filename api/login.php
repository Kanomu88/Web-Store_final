<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.11.0/cdn/themes/light.css" />
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.11.0/cdn/shoelace-autoloader.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/main.css">
    <title>Document</title>
</head>
<body class='bg-[antiquewhite] h-screen'>
    <div class='fixed flex w-full justify-between mt-4'>
        <img src='./assets/cdti.png' class='absolute left-16 w-32 h-32'>
        <div class='flex mx-auto items-center justify-center'>
            <div class='bg-blue-800 p-6 rounded-full mt-6'>
                <span class='text-white text-xl'>ระบบยืม-คืน อุปกรณ์สโตร์ สาขาเทคโนโลยีสารสนเทศ</span>
            </div>
        </div>
    </div>

    <div class='flex flex-col justify-center items-center h-full'>
        <h1 class='text-4xl mb-8'>เข้าสู่ระบบ</h1>
        <div class='flex gap-6'>
        <div class='flex flex-col justify-center gap-6'>
            <span class='text-xl'>User</span>
            <span class='text-xl'>Password</span>
        </div>
        <div class='flex flex-col justify-center items-center gap-4 w-full'>
            <sl-input type="text" class='w-full' pill></sl-input>
            <sl-input type="password" password-toggle pill></sl-input>
        </div>

</div>
<div class='flex mt-4 gap-4'>
<span class='text-xl' >*หมายเหตุUserใส่เลขประจำตัวนักเรียน*</span>
</div>
<div class='flex mt-4 gap-4'>
    
        <sl-button variant="primary">ตกลง</sl-button>
        <sl-button variant="primary">สมัครสมาชิก</sl-button>
</div>

    </div>
</body>
</html>
