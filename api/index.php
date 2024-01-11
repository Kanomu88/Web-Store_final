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
            </sl-menu-item>v
          </sl-menu>
        </sl-dropdown>
        <a href="https://github.com/shoelace-style/shoelace" title="View Shoelace on GitHub" class="external-link" rel="noopener noreferrer" target="_blank">
        <sl-icon name="shift" aria-hidden="true" library="default">
        </sl-icon>
      </a>
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