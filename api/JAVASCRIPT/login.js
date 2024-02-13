import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-analytics.js";
import {
  getAuth,
  signInWithEmailAndPassword,
} from "https://www.gstatic.com/firebasejs/9.15.0/firebase-auth.js";
import { getDatabase, ref, get } from 'https://www.gstatic.com/firebasejs/9.15.0/firebase-database.js';

const firebaseConfig = {
  apiKey: "AIzaSyAL8OSkYagZe97HqUt5WEaTmuE4mbrHDqI",
  authDomain: "store-54a2b.firebaseapp.com",
  projectId: "store-54a2b",
  storageBucket: "store-54a2b.appspot.com",
  messagingSenderId: "403258094698",
  appId: "1:403258094698:web:f0892482122b12356c0613",
  measurementId: "G-1N0ZTDCH26"
};
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth();
const database = getDatabase(app);
const usersRef = ref(database, "users");

var email = document.getElementById("email");
var password = document.getElementById("password");
window.login= function(e,user) {
  e.preventDefault();
  var obj = {
    email: email.value,
    password: password.value,
  };

  signInWithEmailAndPassword(auth, obj.email, obj.password, usersRef)
  .then(function (success) {
      var alertHTML = `
          <div class="card-body fixed-top" style="top: 20px; left: 95rem;">
              <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                  <span class="badge badge-pill badge-primary">Success</span>
                  คุณล็อคอินสำเร็จ
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          </div>
      `;
      $('body').append(alertHTML); // Append the alert HTML to the body
      var aaaa = success.user.uid;
      localStorage.setItem("uid", aaaa);
      console.log(aaaa);

      // Wait for 2 seconds before redirecting
      setTimeout(function() {
          if (obj.email === "admin@gmail.com") {
              window.location.replace('admin_main_menu.php');
          } else {
              window.location.replace('user_main_menu.php');
          }
      },1500); // 2000 milliseconds = 2 seconds



/*       get(usersRef).then((snapshot) => {
        if (snapshot.exists()) {
            const userData = snapshot.val();
            const role = userData[user.uid]?.role;

            if (role === "admin") {
              window.location.replace('admin_main_menu.php')
            } else if (role === "student") {
              window.location.replace('user_main_menu.php')
            } else {
                alert("Invalid user role.");
            }
        } else {
            alert("User data not found.");
        }
    }).catch((error) => {
        console.error("Error getting user data:", error);
    }) */
  })
    .catch(function (err) {
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

    });

  console.log(obj);
}