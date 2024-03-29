  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
  import { getDatabase ,ref , push ,set, onValue,onChildAdded,get,remove,update, onChildChanged, onChildRemoved } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js";
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
  const database = getDatabase();

var email = document.getElementById("email");
var password = document.getElementById("password");
var copassword = document.getElementById("copassword");
var role = document.getElementById("role");


window.signup = function (e) {
    e.preventDefault();
    var obj = {
      email: email.value,
      password: password.value,
/*       role: role.value, */
/*       uid:localStorage.getItem("uid") */
    };

    if(email.value =="" || password.value ==""){
      var alertHTML = `
      <div class="card-body fixed-top" style="top: 20px; left: 95rem;">
          <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
              <span class="badge badge-pill badge-primary">Success</span>
            กรุณากรอกข้อมูล
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      </div>
  `;
  $('body').append(alertHTML); // Append the alert HTML to the body
  }
  if(password.value == copassword.value){
   
  }
  else{
    var alertHTML = `
    <div class="card-body fixed-top" style="top: 20px; left: 95rem;">
        <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
            <span class="badge badge-pill badge-primary">Success</span>
          กรุณากรอกรหัสผ่านให้ตรงกัน
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
`;
$('body').append(alertHTML); // Append the alert HTML to the body
      return false
  }
/*   const keyRef = ref(database, 'users','users')
  obj.id=push(keyRef).key;
  const refrences = ref(database, `users/${obj.uid}/`); */
  // const sab =  localStorage.setItem()
  // console.log(sab)



/*       alert("data addded")
 */
    createUserWithEmailAndPassword(auth, obj.email, obj.password)
    .then(function(success){
      var alertHTML = `
          <div class="card-body fixed-top" style="top: 20px; left: 95rem;">
              <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                  <span class="badge badge-pill badge-primary">Success</span>
                  สร้างผู้ใช้สำเร็จ
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          </div>
      `;
      $('body').append(alertHTML); // Append the alert HTML to the body
      setTimeout(function() {
      window.location.replace('user_main_menu.php')
    },1500); // 2000 milliseconds = 2 seconds

    })
   /*  .catch(function(err){
      alert ("Error in " + err)
    }); */
/*     set(refrences,obj) */
/*     console.log(obj.id) */
    console.log(obj)
  };