  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
  import { getDatabase, ref, get, push, set } from 'https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js';
  import {
    getAuth,
    createUserWithEmailAndPassword,
  } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-auth.js";

  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

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
/*   const database = firebase.database();
 */ 
/*  const productsRef = database.ref('products');
 */ const productsRef = ref(database, 'products');




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
function createProductCard(name, quantity, imageURL) {
    const flexDiv = document.createElement('div');
    flexDiv.classList.add('flex', 'items-center', 'justify-center');

    const card = document.createElement('sl-card');
    card.classList.add('card-overview');

    const image = document.createElement('img');
    image.slot = 'image';
    image.src = imageURL;
    image.alt = 'Product Image';

    const strong = document.createElement('strong');
    strong.textContent = name;

    const footerDiv = document.createElement('div');
    footerDiv.slot = 'footer';

    const quantitySpan = document.createElement('span');
    quantitySpan.textContent = 'คงเหลือ ' + quantity + ' ชิ้น';

    footerDiv.appendChild(quantitySpan);
    card.appendChild(image);
    card.appendChild(strong);
    card.appendChild(footerDiv);
    flexDiv.appendChild(card);

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

            if (count === 0 || count % 4 === 0) {
                currentRow = createRow(productList);
                currentGrid = createGrid(currentRow);
            }

            const productCard = createProductCard(productName, productQuantity, productImageURL);
            currentGrid.appendChild(productCard);
            count++;

            if (count === 4) {
                count = 0;
            }
        }
    });
});

