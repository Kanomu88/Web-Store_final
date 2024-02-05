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
  // Initialize Firebase
// Function to retrieve and display selected products
function displaySelectedProducts(receiptNumber) {
  const productList = document.getElementById('product-list');

  // Reference to selected products for the specific receipt number
  const selectedProductsRef = database.ref('selectedProducts').orderByChild('receiptNumber').equalTo(receiptNumber);

  // Listen for changes in the selected products
  selectedProductsRef.on('value', (snapshot) => {
    productList.innerHTML = ''; // Clear the product list before adding new items

    snapshot.forEach((childSnapshot) => {
      const product = childSnapshot.val();

      // Create HTML elements to display the product
      const productItem = document.createElement('div');
      productItem.innerHTML = `
        <p>Name: ${product.name}</p>
        <p>Quantity: ${product.quantity}</p>
      `;

      // Append the product item to the product list
      productList.appendChild(productItem);
    });
  });
}

// Function to save selected products to Firebase Realtime Database
function saveSelectedProducts(receiptNumber) {
  const selectedProductsRef = database.ref('selectedProducts');

  // Get the selected products from the DOM or wherever they are stored
  // For example, you might have stored them in an array or retrieved them from another source

  // Save the selected products to Firebase Realtime Database
  selectedProducts.forEach((product) => {
    selectedProductsRef.push({
      receiptNumber: receiptNumber,
      name: product.name,
      quantity: product.quantity
    });
  });
}
  // Function to retrieve and display selected products
 /*  function displaySelectedProducts(receiptNumber) {
    const productList = document.getElementById('product-list');
  
    // Reference to selected products for the specific receipt number
    const selectedProductsRef = database.ref('selectedProducts').orderByChild('receiptNumber').equalTo(receiptNumber);
  
    // Listen for changes in the selected products
    selectedProductsRef.on('value', (snapshot) => {
      productList.innerHTML = ''; // Clear the product list before adding new items
  
      snapshot.forEach((childSnapshot) => {
        const product = childSnapshot.val();
  
        // Create HTML elements to display the product
        const productItem = document.createElement('div');
        productItem.innerHTML = `
          <p>Name: ${product.name}</p>
          <p>Quantity: ${product.quantity}</p>
        `;
  
        // Append the product item to the product list
        productList.appendChild(productItem);
      });
    });
  }
  
  // Function to save selected products to Firebase Realtime Database
  function saveSelectedProducts(receiptNumber) {
    const selectedProductsRef = database.ref('selectedProducts');
  
    // Get the selected products from the DOM or wherever they are stored
    // For example, you might have stored them in an array or retrieved them from another source
  
    // Save the selected products to Firebase Realtime Database
    selectedProducts.forEach((product) => {
      selectedProductsRef.push({
        receiptNumber: receiptNumber,
        name: product.name,
        quantity: product.quantity
      });
    });
  } */
  