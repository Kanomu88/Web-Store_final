// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
import { getDatabase, ref, get, push } from 'https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js';
import { getAuth } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-auth.js";

// Your web app's Firebase configuration
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
const auth = getAuth()
const database = getDatabase(app);

// Reference to your database
const productsRef = ref(database, 'products');

// Function to create a new row
function createRow(parent) {
  const row = document.createElement('div');
  row.classList.add('row');
  parent.appendChild(row);
  return row;
}

// Function to create a new grid container
function createGrid(parent) {
  const grid = document.createElement('div');
  grid.classList.add('grid', 'grid-cols-4', 'items-center');
  parent.appendChild(grid);
  return grid;
}

// Function to create a new flex container with product data
// Function to create a new flex container with product data
function createProductCard(name, quantity, imageURL, key, title) {
  const flexDiv = document.createElement('div');
  flexDiv.classList.add('flex', 'items-center', 'justify-center');

  const card = document.createElement('sl-card');
  card.classList.add('card-overview');
  card.setAttribute('key', key); // Set the product key as an attribute

  const image = document.createElement('img');
  image.slot = 'image';
  image.src = imageURL;
  image.alt = 'Product Image';

  const strong = document.createElement('strong');
  strong.textContent = name;

  const titleSpan = document.createElement('span');
  titleSpan.textContent = title;

  const titleBr = document.createElement('br'); // Create line break element
  const titleBr2 = document.createElement('br'); // Create another line break element

  const footerDiv = document.createElement('div');
  footerDiv.slot = 'footer';

  const moreInfoButton = document.createElement('sl-button');
  moreInfoButton.textContent = 'More Info';
  moreInfoButton.slot = 'footer';
  moreInfoButton.pill = true;
  moreInfoButton.variant = 'primary';

  const quantitySpan = document.createElement('span');
  quantitySpan.textContent = 'คงเหลือ ' + quantity + ' ชิ้น';
  footerDiv.slot = 'footer';

  footerDiv.appendChild(moreInfoButton);
  footerDiv.appendChild(quantitySpan);

  card.appendChild(image);
  card.appendChild(strong);
  card.appendChild(titleBr); // Append line break
  card.appendChild(titleBr2); // Append another line break
  card.appendChild(titleSpan); // Append title
  card.appendChild(footerDiv);
  flexDiv.appendChild(card);

  // Create a "More Info" button
  moreInfoButton.addEventListener('click', () => {
    const dialog = document.getElementById('dialog');
    dialog.label = name; // Set the dialog label to the product name
    dialog.show();
  });

  // Add click event listener to the card
  card.addEventListener('click', () => {
    // Remove 'selected' class from all cards
    document.querySelectorAll('sl-card').forEach(c => c.classList.remove('selected'));
    // Add 'selected' class to the clicked card
    card.classList.add('selected');
  });

  return flexDiv;
}

// Listen for changes in the database
get(productsRef).then((snapshot) => {
  const productList = document.getElementById('product-list');
  let currentRow, currentGrid, count = 0;

  snapshot.forEach((itemSnapshot) => {
    const products = itemSnapshot.val();
    for (const key in products) {
      const product = products[key];
      const productName = product.name;
      const productQuantity = product.quantity;
      const productImageURL = product.imageURL;
      const productt = product.title;


      if (count === 0 || count % 4 === 0) {
        currentRow = createRow(productList);
        currentGrid = createGrid(currentRow);
      }

      const productCard = createProductCard(productName, productQuantity, productImageURL, key,productt);
      currentGrid.appendChild(productCard);
      count++;

      if (count === 4) {
        count = 0;
      }
    }
  });
}).catch((error) => {
  console.error('Error getting product list: ', error);
});

// Function to create the sl-dialog
function createDialog() {
  const dialog = document.createElement('sl-dialog');
  dialog.id = 'dialog';
  dialog.label = 'productName';
  dialog.classList.add('dialog-overview');

/*   const content = document.createTextNode('Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
  dialog.appendChild(content); */

  const formatNumberDiv = document.createElement('div');
  formatNumberDiv.classList.add('format-number-overview');

  const slInput = document.createElement('sl-input');
  slInput.type = 'number';
  slInput.value = '0';
  slInput.label = 'Number to Format';
  slInput.style.maxWidth = '180px';

  formatNumberDiv.appendChild(slInput);
  dialog.appendChild(formatNumberDiv);

  const styleTag = document.createElement('style');
  styleTag.textContent = `
    .button-group-toolbar sl-button-group:not(:last-of-type) {
      margin-right: var(--sl-spacing-x-small);
    }
    #dialog::part(footer) {
      display: flex;
      flex-direction: row-reverse;
      align-items: center;
    }
  `;
  dialog.appendChild(styleTag);

  const addButton = document.createElement('sl-button');
  addButton.id = 'addbutton';
  addButton.slot = 'footer';
  addButton.variant = 'primary';
  addButton.textContent = 'Add';

  addButton.addEventListener('click', () => {
    const selectedQuantity = parseInt(slInput.value); // Convert value to integer
    const selectedCard = document.querySelector('sl-card.selected');

    if (!selectedCard) {
      console.error('No sl-card with the "selected" class found!');
      return;
    }

    const productNameElement = selectedCard.querySelector('strong');
    if (!productNameElement) {
      console.error('No strong element found inside the selected sl-card!');
      return;
    }

    const productName = productNameElement.textContent;
    const productKey = selectedCard.getAttribute('key'); // Get the product key from attribute

    // Get the product quantity from Firebase
    const productRef = ref(database, 'products/products/' + productKey);

    get(productRef).then((snapshot) => {
      const productData = snapshot.val();
      const productQuantity = productData.quantity;

      // Check if selectedQuantity is valid
      if (selectedQuantity <= 0) {
        alert('กรุณาใส่จำนวนสินค้าที่ถูกต้อง');
        return;
      }

      // Compare selectedQuantity with productQuantity
      if (selectedQuantity > productQuantity) {
        alert('จำนวนสินค้าที่เลือกมากกว่าจำนวนสินค้าที่มีอยู่');
        return;
      }

      // Save selected product data to the database
      const selectedProductData = {
        timestamp: new Date().toISOString(),
        productName: productName,
        quantity: selectedQuantity
      };
      const userSelectedProductsRef = ref(database, 'selectedProducts/' + auth.currentUser.uid + '/products/');
      push(userSelectedProductsRef, selectedProductData)
        .then(() => {
          alert('เพิ่มรายการสินค้าสำเร็จ');

          console.log('New product node added successfully!');
        })
        .catch((error) => {
          console.error('Error adding new product node: ', error);
        });
    }).catch((error) => {
      console.error('Error fetching product data: ', error);
    });

    dialog.hide();
    slInput.value = '0';
  });

  dialog.appendChild(addButton);

  return dialog;
}

// Append the dialog to the body
document.body.appendChild(createDialog());

