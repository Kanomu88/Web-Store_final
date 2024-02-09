import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
import { getDatabase, ref, set, get, remove } from 'https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js';
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
const auth = getAuth()
const database = getDatabase(app);

function checkAuthentication() {
    onAuthStateChanged(auth, (user) => {
        if (user) {
            const uid = user.uid;
            console.log(uid);
            const productsRef = ref(database, 'selectedProducts/' + auth.currentUser.uid);

            const table = document.getElementById('bootstrap-data');
            // Clear the table before populating with new data
            table.innerHTML = '';
            const thead = table.createTHead();
            const headerRow = thead.insertRow();
            const headerCell1 = headerRow.insertCell(0);
            headerCell1.textContent = "ชื่อสินค้า";
            const headerCell2 = headerRow.insertCell(1);
            headerCell2.textContent = "จำนวน";
            // Fetch data from Firebase Realtime Database
            get(productsRef).then((snapshot) => {
                if (snapshot.exists()) {
                    snapshot.forEach((itemSnapshot) => {
                        const products = itemSnapshot.val();
                        for (const key in products) {
                            const product = products[key];
                            const productName = product.productName;
                            const productQuantity = product.quantity;
                            
                            // Create a new row in the table
                            const newRow = table.insertRow();
                            
                            // Add product name to the first cell of the row
                            const productNameCell = newRow.insertCell();
                            productNameCell.textContent = productName;
                            
                            // Add product quantity to the second cell of the row
                            const productQuantityCell = newRow.insertCell();
                            productQuantityCell.textContent = productQuantity;
                        }
                    });
                } else {
                    // If no data exists, display "No data" message
                    const newRow = table.insertRow();
                    const noDataCell = newRow.insertCell();
                    noDataCell.textContent = "ไม่มีข้อมูล";
                }
            }).catch((error) => {
                console.error('Error getting product list: ', error);
            });
        }
    });

    function generateReceiptNumber() {
      // Generate a random number between 1000 and 9999
      return Math.floor(Math.random() * 9000) + 1000;
  }

    window.savedata = function () {
        // Get the table element
        const table = document.getElementById('bootstrap-data');
        const removeproductincart = ref(database, 'selectedProducts/' + auth.currentUser.uid );

        // Initialize an empty array to store product data
        const productsData = [];
        const receiptNumber = generateReceiptNumber();

        // Loop through each row of the table
        for (let i = 1; i < table.rows.length; i++) {
            // Get product name and quantity from each row
            const productName = table.rows[i].cells[0].textContent;
            const productQuantity = table.rows[i].cells[1].textContent;
            
            // Add product data to the array
            productsData.push({
                productName: productName,
                quantity: productQuantity
            });
        }

        // Get the current user's UID
/*         const uid = auth.currentUser.uid;
 */
        // Create a new node named "datauser" in the database
        const datauserRef = ref(database, 'datauser/'+ receiptNumber +  '//'+ auth.currentUser.uid );

        // Set the product data to the "datauser" node
        set(datauserRef, {
            products: productsData
        }).then(() => {
          alert("บันทึกรายการสำเร็จ")
          remove(removeproductincart)
        window.location.replace('user_main_menu.php')
            console.log('Product data saved successfully!');
        }).catch((error) => {
            console.error('Error saving product data:', error);
        });
    }
}

checkAuthentication();
