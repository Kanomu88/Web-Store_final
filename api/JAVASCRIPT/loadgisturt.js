import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
import { getDatabase, ref, get, onValue, set,update,remove } from 'https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js';

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

window.updateFirebaseData = async function(userId) {
  // ทำการค้นหาในโหนดย่อยของ datauser ว่ามีโหนดย่อยไหนมีเลขที่ใบเสร็จตรงกันกับ userId ที่ได้รับมาหรือไม่
  const userReceiptRef = ref(database, `datauser/${userId}`);
  const userReceiptSnapshot = await get(userReceiptRef);
  
  // ตรวจสอบว่ามีใบเสร็จสำหรับ userId นี้หรือไม่
  if (userReceiptSnapshot.exists()) {
      // หากมีใบเสร็จ ให้ดึงข้อมูลสินค้าและจำนวนที่ซื้อจากใบเสร็จนั้น
      const userReceiptData = userReceiptSnapshot.val();
      const userReceiptKeys = Object.keys(userReceiptData);

      // วนลูปผ่านโหนดย่อยของ userReceiptData เพื่อดึงข้อมูลของใบเสร็จแต่ละอัน
      userReceiptKeys.forEach(async receiptKey => {
          const receipt = userReceiptData[receiptKey];
          const products = receipt.products;

          // วนลูปผ่านสินค้าในใบเสร็จ
          for (const product of products) {
              const productName = product.productName;
              const quantity = parseInt(product.quantity);

              // ค้นหาสินค้าที่ตรงกับ productName ในโหนดย่อยของโหนด products
              const productsRef = ref(database, 'products/products');
              const productsSnapshot = await get(productsRef);
              
              if (productsSnapshot.exists()) {
                  const productsData = productsSnapshot.val();

                  // ค้นหา productName ในโหนดย่อยของ products
                  for (const productKey in productsData) {
                      const productData = productsData[productKey];
                      
                      // หากพบ productName ที่ตรงกัน ให้หัก quantity
                      if (productData.name === productName) {
                          const updatedQuantity = productData.quantity - quantity;
                          
                          if (updatedQuantity >= 0) {
                              // อัปเดตค่า quantity ใน Firebase
                              await update(ref(database, `products/products/${productKey}`), { quantity: updatedQuantity });      
                              var alertHTML = `
                              <div class="card-body fixed-top" style="top: 20px; left: 95rem;">
                                  <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                      <span class="badge badge-pill badge-primary">Success</span>
                                      อนุมัติ ${productName} สำเร็จ ยอดคงเหลือ ${updatedQuantity}
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                              </div>
                          `;

                          $('body').append(alertHTML); // Append the alert HTML to the body
                          setTimeout(function() {
                            $('.sufee-alert').alert('close');
                        }, 1800);
                              console.log(`Updated quantity for ${productName} to ${updatedQuantity}`);
                          } else {
                            var alertHTML = `
                            <div class="card-body fixed-top" style="top: 20px; left: 95rem;">
                                <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                    <span class="badge badge-pill badge-primary">Success</span>
                                    จำนวนสินค้า  ${productName} ไม่เพียงพอ
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        `;
                        
                        $('body').append(alertHTML); // Append the alert HTML to the 
                        
                        setTimeout(function() {
                          $('.sufee-alert').alert('close');
                      }, 1800);
                              console.error(`Insufficient quantity for ${productName}`);
                          }
                          
                          // หลุดออกจากลูปหลังจากพบ productName ที่ตรงกัน
                          break;
                      }
                  }
              } else {
                  console.error("No products data found in database");
              }
          }
      });
  } else {
      console.error(`No receipt found for user ID: ${userId}`);
  }
}

window.addupdateFirebaseData = async function(userId) {
  // ทำการค้นหาในโหนดย่อยของ datauser ว่ามีโหนดย่อยไหนมีเลขที่ใบเสร็จตรงกันกับ userId ที่ได้รับมาหรือไม่
  const userReceiptRef = ref(database, `datauser/${userId}`);
  const userReceiptSnapshot = await get(userReceiptRef);
  
  // ตรวจสอบว่ามีใบเสร็จสำหรับ userId นี้หรือไม่
  if (userReceiptSnapshot.exists()) {
      // หากมีใบเสร็จ ให้ดึงข้อมูลสินค้าและจำนวนที่ซื้อจากใบเสร็จนั้น
      const userReceiptData = userReceiptSnapshot.val();
      const userReceiptKeys = Object.keys(userReceiptData);

      // วนลูปผ่านโหนดย่อยของ userReceiptData เพื่อดึงข้อมูลของใบเสร็จแต่ละอัน
      userReceiptKeys.forEach(async receiptKey => {
          const receipt = userReceiptData[receiptKey];
          const products = receipt.products;

          // วนลูปผ่านสินค้าในใบเสร็จ
          for (const product of products) {
              const productName = product.productName;
              const quantity = parseInt(product.quantity);

              // ค้นหาสินค้าที่ตรงกับ productName ในโหนดย่อยของโหนด products
              const productsRef = ref(database, 'products/products');
              const productsSnapshot = await get(productsRef);
              
              if (productsSnapshot.exists()) {
                  const productsData = productsSnapshot.val();

                  // ค้นหา productName ในโหนดย่อยของ products
                  for (const productKey in productsData) {
                      const productData = productsData[productKey];
                      
                      // หากพบ productName ที่ตรงกัน ให้หัก quantity
                      if (productData.name === productName) {
                          const updatedQuantity = productData.quantity + quantity;
                          
                          if (updatedQuantity >= 0) {
                              // อัปเดตค่า quantity ใน Firebase
                              await update(ref(database, `products/products/${productKey}`), { quantity: updatedQuantity });      
                              var alertHTML = `
                              <div class="card-body fixed-top" style="top: 20px; left: 95rem;">
                                  <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                      <span class="badge badge-pill badge-primary">Success</span>
                                      คืน ${productName} สำเร็จ ยอดคงเหลือ ${updatedQuantity}
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                              </div>
                          `;
  
                          $('body').append(alertHTML); // Append the alert HTML to the body
/*                         remove(userReceiptRef)
 */                          setTimeout(function() {
                            $('.sufee-alert').alert('close');
                        }, 1800);
                              console.log(`Updated quantity for ${productName} to ${updatedQuantity}`);
                          } else {
                            var alertHTML = `
                            <div class="card-body fixed-top" style="top: 20px; left: 95rem;">
                                <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                    <span class="badge badge-pill badge-primary">Success</span>
                                    จำนวนสินค้า  ${productName} ไม่เพียงพอ
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        `;
                        $('body').append(alertHTML); // Append the alert HTML to the body
                        setTimeout(function() {
                          $('.sufee-alert').alert('close');
                      }, 1800);
                              console.error(`Insufficient quantity for ${productName}`);
                          }
                          
                          // หลุดออกจากลูปหลังจากพบ productName ที่ตรงกัน
                          break;
                      }
                  }
              } else {
                  console.error("No products data found in database");
              }
          }
      });
  } else {
      console.error(`No receipt found for user ID: ${userId}`);
  }
}
window.deleteReceipt = async function(userId) {
  const userReceiptRef = ref(database, `datauser/${userId}`);
remove(userReceiptRef)
      .then(() => {
        var alertHTML = `
        <div class="card-body fixed-top" style="top: 20px; left: 95rem;">
            <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                <span class="badge badge-pill badge-primary">Success</span>
                ลบรายการ  ${userId} สำเร็จ
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    `;
    
    $('body').append(alertHTML); // Append the alert HTML to the 
    
    setTimeout(function() {
      $('.sufee-alert').alert('close');
  }, 1800);
          console.log("Document successfully deleted!");
      })
      .catch((error) => {
          console.error("Error removing document: ", error);
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
                    <td><button id="approve-button" onclick="updateFirebaseData('${userId}')">อนุมัติ</button></td>
                    <td><button id="delete-button" onclick="deleteReceipt('${userId}')">ลบ</button></td>
                    <td><button id="return-button" onclick="addupdateFirebaseData('${userId}')">คืน</button></td>

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
                        <td><button id="approve-button" onclick="updateFirebaseData('${userId}')">อนุมัติ</button></td>
                        <td><button id="delete-button" onclick="deleteReceipt('${userId}')">ลบ</button></td>
                        <td><button id="return-button" onclick="addupdateFirebaseData('${userId}')">คืน</button></td>

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
