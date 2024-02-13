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

// Function to render data in the table
// นิยามฟังก์ชัน deleteReceipt() ในส่วนของ JavaScript ที่สามารถเข้าถึงได้ทุกที่
// นิยามฟังก์ชัน deleteReceipt() ในส่วนของ JavaScript ที่สามารถเข้าถึงได้ทุกที่
function deleteReceipt(userId, productId) {
    const userRef = database.ref('datauser').child(userId).child(productId);
    userRef.remove()
        .then(() => {
            console.log("Document successfully deleted!");
        })
        .catch((error) => {
            console.error("Error removing document: ", error);
        });
}

function approveReceipt(userId, productId) {
    const userRef = database.ref('datauser').child(userId).child(productId);
    const productRef = database.ref('products').child(productId);
    
    // Start a transaction
    database.ref().transaction(function(transaction) {
        if (transaction) {
            // ดึงข้อมูล quantity ของสินค้าใน datauser
            const userQuantity = transaction.datauser[userId][productId].quantity;
            
            // ดึงข้อมูล quantity ของสินค้าใน products
            const productQuantity = transaction.products[productId].quantity;
            
            // ตรวจสอบว่ามีจำนวนสินค้าพอหรือไม่
            if (userQuantity > 0 && productQuantity > 0) {
                // ลบค่า quantity ของสินค้าใน datauser และ products
                transaction.datauser[userId][productId].quantity = userQuantity - 1;
                transaction.products[productId].quantity = productQuantity - 1;
            }
        }
        return transaction;
    }).then(function(transactionResult) {
        if (transactionResult.committed) {
            console.log('Transaction committed successfully.');
        } else {
            console.log('Transaction aborted.');
        }
    }).catch(function(error) {
        console.error('Transaction failed: ', error);
    });
}

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
                    <td>${userId}</td>
                    <td>${email}</td>
                    <td>${combinedProducts}</td>
                    <td>${combinedQuantities}</td>
                    <td><button onclick="approveReceipt('${userId}', '${productId}')">อนุมัติ</button></td>
                    <td><button onclick="deleteReceipt('${userId}', '${productId}')">ลบ</button></td>
                `;
                tableBody.appendChild(row);
            } else {
                // ถ้าใบเสร็จมีข้อมูลเพียงอันเดียว ให้แสดงแต่ละสินค้าเป็นแถวแยกกัน
                products.forEach(product => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${userId}</td>
                        <td>${product.email}</td>
                        <td>${product.productName}</td>
                        <td>${product.quantity}</td>
                        <td><button onclick="approveReceipt('${userId}', '${productId}')">อนุมัติ</button></td>
                        <td><button onclick="deleteReceipt('${userId}', '${productId}')">ลบ</button></td>
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
