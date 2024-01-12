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
    <div class='fixed w-full flex mt-6'>
      <div class='bg-blue-800 p-6 rounded-full  w-full mx-6 flex justify-between items-center'>
        <span class='text-[antiquewhite] text-xl'>ระบบยืม-คืน อุปกรณ์สโตร์ สาขาเทคโนโลยีสารสนเทศ</span>
        <div class='flex gap-2 justify-center items-center text-[antiquewhite]'>
        <sl-dropdown>
          <sl-button slot="trigger" pill caret>หมวดหมู่</sl-button>
          <sl-menu>
            <sl-menu-item>Dropdown Item 1</sl-menu-item>
            <sl-menu-item>Dropdown Item 2</sl-menu-item>
            <sl-menu-item>Dropdown Item 3</sl-menu-item>
            <sl-divider></sl-divider>
            <sl-menu-item type="checkbox" checked>Checkbox</sl-menu-item>
            <sl-menu-item disabled>Disabled</sl-menu-item>
            <sl-divider></sl-divider>
            <sl-menu-item> Prefix <sl-icon slot="prefix" name="gift"></sl-icon>
            </sl-menu-item>
            <sl-menu-item> Suffix Icon <sl-icon slot="suffix" name="heart"></sl-icon>
            </sl-menu-item>
          </sl-menu>
        </sl-dropdown>
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
        </div>
      </div>
    </div>

    <div class='pt-32 flex flex-col items-center justify-center'>
    <span class='text-2xl font-bold mb-4'>คีมปากจิ้งจก</span>
    <img class='border-2 border-black' src="assets/คีม.png"  />
    <span class='mt-2 text-2xl font-bold'>แนะนำการใช้งาน</span>
    <span class='w-[40%] mt-2'>ใช้สำหรับจับโลหะแบนหรือสายไฟ ปากคีมมีลักษณะเรียวแหลม 
และ มีขนาดเล็ก เหมาะกับการใช้งานในที่แคบ และ งานไฟฟ้า</span>

    <div class='flex flex-row mt-8 items-center justify-between gap-4'>
        <div class='flex flex-col items-center justify-center gap-8'>
            <span>จำนวนยอดคงเหลือ</span>
            <span>จำนวนที่ต้องการ</span>
        </div>

        <div class='flex flex-col items-center justify-center gap-4'>
            <sl-input type="number" value="12" style="max-width: 180px;" readonly pill></sl-input>
            <sl-input type="number" value="1" style="max-width: 180px;" pill></sl-input>
        </div>
    </div>

    <div class='flex gap-4 mt-8'>
        <sl-button variant="primary" href="/api/index.php" >ย้อนกลับ</sl-button>
    
        
        <sl-button variant="primary" href="/api/index.php">ตกลง</sl-button>
    </div>

</div>
</body>
</html>
