<!DOCTYPE html>

<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.11.0/cdn/themes/light.css" />
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.11.0/cdn/shoelace-autoloader.js"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.12.0/cdn/components/button/button.js"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.12.0/cdn/components/button-group/button-group.js"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.12.0/cdn/shoelace.js"></script>

    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/main.css">
<style>
  .card-overview {
    max-width: 300px;
  }

  .card-overview small {
    color: var(--sl-color-neutral-500);
  }

  .card-overview [slot='footer'] {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
</style>
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


    <div class='pt-32 grid grid-cols-4 items-center gap-y-4'>
        <div class='flex items-center justify-center'>
        <sl-card class="card-overview">
  <img
    slot="image"
    src="https://images.unsplash.com/photo-1559209172-0ff8f6d49ff7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
    alt="A kitten sits patiently between a terracotta pot and decorative grasses."
    
  />
  <strong>Mittens</strong><br />



  <div slot="footer">
  <sl-dialog id="dialog1" label="Dialog" class="dialog-overview">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
  <br /><br />
  <div class="format-number-overview">

  <sl-input type="number" value="0" label="Number to Format" style="max-width: 180px;"></sl-input>
  </div>

<style>
  .button-group-toolbar sl-button-group:not(:last-of-type) {
    margin-right: var(--sl-spacing-x-small);
  }
</style>
 
  <sl-button id="addbutton" slot="footer" variant="primary">Add</sl-button>
</sl-dialog>

<sl-button id="openDialogButton1" variant="primary" pill>More Info </sl-button>

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
  <sl-dialog id="dialog2" label="Dialog" class="dialog-overview">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
  <br /><br />
  <div class="button-group-toolbar">
  <sl-button-group label="Formatting">
    <sl-tooltip content="ลดจำนวน">
    <sl-button id="de1" onclick="decreaseProductCount()"><sl-icon name="dash-lg"></sl-icon></sl-button>
    <sl-tooltip>

    <sl-tooltip content="จำนวน">
      <sl-button><p><span id="productCount2"> 0  </span></p> 
      <sl-tooltip>
</sl-button>
    </sl-tooltip>
    <sl-tooltip content="เพิ่มจำนวน">
    <sl-button id="plus1" onclick="increaseProductCount()"><sl-icon name="plus-lg"></sl-icon></sl-button>
    </sl-tooltip>
  </sl-button-group>

  
</div>
<style>
  .button-group-toolbar sl-button-group:not(:last-of-type) {
    margin-right: var(--sl-spacing-x-small);
  }
</style>
 
  <sl-button id="addButton" slot="footer" variant="primary">Add</sl-button>
</sl-dialog>

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
  <sl-dialog id="dialog3" label="Dialog" class="dialog-overview">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
  <br /><br />
  <div class="button-group-toolbar">
  <sl-button-group label="Formatting">
    <sl-tooltip content="ลดจำนวน">
    <sl-button id="de2" onclick="decreaseProductCount()"><sl-icon name="dash-lg"></sl-icon></sl-button>
    <sl-tooltip>

    <sl-tooltip content="จำนวน">
      <sl-button><p><span id="productCount3"> 0  </span></p> 
      <sl-tooltip>
</sl-button>
    </sl-tooltip>
    <sl-tooltip content="เพิ่มจำนวน">
    <sl-button id="plus2" onclick="increaseProductCount()"><sl-icon name="plus-lg"></sl-icon></sl-button>
    </sl-tooltip>
  </sl-button-group>

  
</div>
<style>
  .button-group-toolbar sl-button-group:not(:last-of-type) {
    margin-right: var(--sl-spacing-x-small);
  }
</style>
 
  <sl-button id="addButton" slot="footer" variant="primary">Add</sl-button>
</sl-dialog>

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
  <sl-dialog id="dialog4" label="Dialog" class="dialog-overview">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
  <br /><br />
  <div class="button-group-toolbar">
  <sl-button-group label="Formatting">
    <sl-tooltip content="ลดจำนวน">
    <sl-button id="de3" onclick="decreaseProductCount()"><sl-icon name="dash-lg"></sl-icon></sl-button>
    <sl-tooltip>

    <sl-tooltip content="จำนวน">
      <sl-button><p><span id="productCount4"> 0  </span></p> 
      <sl-tooltip>
</sl-button>
    </sl-tooltip>
    <sl-tooltip content="เพิ่มจำนวน">
    <sl-button id="plus3" onclick="increaseProductCount()"><sl-icon name="plus-lg"></sl-icon></sl-button>
    </sl-tooltip>
  </sl-button-group>

  
</div>
<style>
  .button-group-toolbar sl-button-group:not(:last-of-type) {
    margin-right: var(--sl-spacing-x-small);
  }
</style>
 
  <sl-button id="addButton" slot="footer" variant="primary">Add</sl-button>
</sl-dialog>

<sl-button id="openDialogButton4" variant="primary" pill>More Info </sl-button>
<span>คงเหลือ 20 ชิ้น</span>
  </div>
</sl-card>

</div>

    </div>
    
  </body>
  <script type="module">
  function setupDialog(dialogId, openButtonId, addButtonId, productCountId, decreaseButtonId, plusButtonId) {
    const dialog = document.getElementById(dialogId);
    const openButton = document.getElementById(openButtonId);
    const addButton = document.getElementById('addButton');
    const productCountSpan = document.getElementById(productCountId);
    const formatter = document.getElementById('formattedValue');
    const input = document.querySelector('.format-number-overview sl-input');
    let productCount = 0;
    
    

    openButton.addEventListener('click', () => {
      dialog.show();
    });

    addButton.addEventListener('click', () => {
      const subtractedValue = formatter.value - (parseInt(input.value) || 0);
      formatter.value = subtractedValue;
      dialog.hide();
    });

    window[`increaseProductCount${plusButtonId}`] = function() {
      productCount++;
      updateProductCount();
    };

    window[`decreaseProductCount${decreaseButtonId}`] = function() {
      if (productCount > 0) {
        productCount--;
        updateProductCount();
      }
    };

    function updateProductCount() {
      productCountSpan.textContent = productCount;
    }
  }
  setupDialog('dialog1', 'openDialogButton1', 'addbutton', 'productCount', 'de', 'plus',);
  setupDialog('dialog2', 'openDialogButton2', 'addButton', 'productCount2', 'de1', 'plus1');
  setupDialog('dialog3', 'openDialogButton3', 'addButton', 'productCount3', 'de2', 'plus2');
  setupDialog('dialog4', 'openDialogButton4', 'addButton', 'productCount4', 'de3', 'plus3');
</script>
</html>
<?php
phpinfo();