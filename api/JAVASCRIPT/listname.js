import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
import { getDatabase, ref, get, onValue } from 'https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js';

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
const databaseRef = ref(database, 'datauser');

const tableBody = document.getElementById('table-body');



// แก้ไขฟังก์ชัน renderData() เพื่อเรียกใช้ deleteReceipt() ที่ถูกนิยามไว้ด้านบน
function renderData(snapshot) {
    tableBody.innerHTML = ''; // Clear existing data

    snapshot.forEach(userSnapshot => {
        const userId = userSnapshot.key;

        userSnapshot.forEach(productSnapshot => {
            const productId = productSnapshot.key;
            const productData = productSnapshot.val();
            const products = productData.products;

            // ถ้าใบเสร็จมีข้อมูลหลายอัน จะ join เฉพาะใบเสร็จนี้
            if (products.length > 1) {
                const combinedProducts = products.map(product => `${product.productName}`).join('<br>');
                const combinedQuantities = products.map(product => product.quantity).join('<br>');
                const email = products[0].email; // เข้าถึงอีเมลโดยตรง
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${email}</td>
                    <td>${combinedProducts}</td>
                    <td>${combinedQuantities}</td>
                `;
                tableBody.appendChild(row);
            } else {
                // ถ้าใบเสร็จมีข้อมูลเพียงอันเดียว ให้แสดงแต่ละสินค้าเป็นแถวแยกกัน
                products.forEach(product => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${product.email}</td>
                        <td>${product.productName}</td>
                        <td>${product.quantity}</td>
                    `;
                    tableBody.appendChild(row);
                });
            }
        });
    });
}

// Listen for data changes in "datauser"
onValue(databaseRef, snapshot => {
  renderData(snapshot);
});
