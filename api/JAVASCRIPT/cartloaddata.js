import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
import { getDatabase, query, orderByChild, equalTo, ref, get, push, set, onValue, child } from 'https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js';
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
 /* firebase.initializeApp(firebaseConfig); */

  // Get a reference to the database
/*     const database = firebase.database(); */

// Get the current user's UID
/* const a = auth.currentUser.uid;
 *//* const currentUserId = currentUser ? currentUser.uid : null;
 */

 function populateCartTable() {
    const cartTable = $('#cartTable').DataTable();
    const selectedProductsRef =ref(database, 'selectedProducts');


    onValue(selectedProductsRef,    (snapshot) => {
        cartTable.clear().draw();
        snapshot.forEach(function(userSnapshot) {
            userSnapshot.forEach(function(productSnapshot) {
                const product = productSnapshot.val();
                cartTable.row.add([product.productName, product.quantity]).draw(false);
            });
        });
    });
}

// Call the function to populate the DataTable
$(document).ready(function() {
    populateCartTable();
});