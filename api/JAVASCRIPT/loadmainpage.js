import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
import { getDatabase, ref, get, onValue } from 'https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js';
import { getAuth, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-auth.js";

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
const database = getDatabase(app);
const auth = getAuth();
const productsRef = ref(database, 'products'+'/products');
const datauserRef = ref(database, 'datauser');

let userCount = 0;

onAuthStateChanged(auth, (user) => {
  if (user) {
    // เมื่อมีผู้ใช้ลงทะเบียน (ล็อกอิน)
    userCount++;
  }

  const userCountSpan = document.getElementById('UserCount');
  if (userCountSpan) {
    userCountSpan.textContent = userCount;
  }
});
// ดึงข้อมูลและนับจำนวนข้อมูล
onValue(productsRef, snapshot => {
    const data = snapshot.val();
    const productCount = Object.keys(data).length;
    const countSpan = document.getElementById('productCount');
    countSpan.textContent = productCount;
  });
  
  onValue(datauserRef, snapshot => {
    const data = snapshot.val();
    const dataCount = Object.keys(data).length;
    const countSpan = document.getElementById('dataCount');
    countSpan.textContent = dataCount;
  });
  const dataUserRef = ref(database, 'datauser');

// สร้าง timestamp สำหรับเริ่มต้นและสิ้นสุดของวันนี้
const today = new Date();
const startOfDay = new Date(today.getFullYear(), today.getMonth(), today.getDate(), 0, 0, 0);
const endOfDay = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 1, 0, 0, 0);

// แปลง timestamp ให้เป็น milliseconds
const startOfDayTimestamp = startOfDay.getTime();
const endOfDayTimestamp = endOfDay.getTime();

// ดึงข้อมูลทั้งหมดในโหนด "datauser"
onValue(dataUserRef, snapshot => {
    const data = snapshot.val();
    let productCount = 0;
    if (data) {
        // วนลูปผ่านข้อมูลของแต่ละผู้ใช้
        Object.values(data).forEach(user => {
            // วนลูปผ่านข้อมูลสินค้าของแต่ละผู้ใช้
            Object.values(user).forEach(userInfo => {
                const products = userInfo.products;
                // กรองสินค้าที่มี timestamp อยู่ในช่วงของวันนี้
                const todayProducts = products.filter(product => {
                    const productTimestamp = new Date(product.timestamp).getTime();
                    return productTimestamp >= startOfDayTimestamp && productTimestamp < endOfDayTimestamp;
                });
                // เพิ่มจำนวนสินค้าที่มี timestamp อยู่ในช่วงของวันนี้
                productCount += todayProducts.length;
            });
        });
    }
    const countSpan = document.getElementById('dataproductCount');
    if (countSpan) {
        countSpan.textContent = productCount;
    }
});

function populateTable() {
  const tableBody = document.querySelector('.table tbody');
  
  // Clear table body
  tableBody.innerHTML = '';

  // Populate table with user data
  onValue(dataUserRef, snapshot => {
      let serialNumber = 1;
    
      snapshot.forEach(userSnapshot => {
          const userData = userSnapshot.val();
          const userName = Object.keys(userData)[0]; // Get user email
          const products = userData[userName].products;

          products.forEach(product => {
              const { productName, quantity, timestamp } = product; // Extract timestamp
              const receiptNumber = userSnapshot.key;
              
              const row = document.createElement('tr');
              row.innerHTML = `
                  <td class="serial">${serialNumber}</td>
                  <td><span class="receiptNumber">${receiptNumber}</span></td> 
                  <td><span class="name">${userName}</span></td>
                  <td><span class="product">${productName}</span></td>
                  <td><span class="quantity">${quantity}</span></td>
              `;
              
              tableBody.appendChild(row);
              serialNumber++;
          });
      });
  });
}

  
  // Call populateTable function to populate the table once the page loads
  document.addEventListener('DOMContentLoaded', populateTable);

