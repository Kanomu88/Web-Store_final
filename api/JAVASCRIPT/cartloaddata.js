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
const productsRef = ref(database, 'products');

 /* firebase.initializeApp(firebaseConfig); */

  // Get a reference to the database
/*     const database = firebase.database(); */

// Get the current user's UID
/* const a = auth.currentUser.uid;
 *//* const currentUserId = currentUser ? currentUser.uid : null;
 */
// หากคุณต้องการแสดงข้อมูลในตาราง HTML
const table = document.getElementById('bootstrap-data-table');

// ลบข้อมูลทั้งหมดออกจากตารางก่อนที่จะแสดงข้อมูลใหม่
table.innerHTML = '';

// ดึงข้อมูลจาก Firebase Realtime Database
get(productsRef).then((snapshot) => {
  snapshot.forEach((itemSnapshot) => {
    const products = itemSnapshot.val();
    for (const key in products) {
      const product = products[key];
      const productName = product.name;
      const productQuantity = product.quantity;
      
      // สร้างแถวใหม่ในตาราง
      const newRow = table.insertRow();
      
      // เพิ่มชื่อสินค้าลงในเซลล์แรกของแถว
      const productNameCell = newRow.insertCell();
      productNameCell.textContent = productName;
      
      // เพิ่มจำนวนสินค้าลงในเซลล์ที่สองของแถว
      const productQuantityCell = newRow.insertCell();
      productQuantityCell.textContent = productQuantity;
    }
  });
}).catch((error) => {
  console.error('Error getting product list: ', error);
});
