import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-analytics.js";
import {
  getAuth,
  signInWithEmailAndPassword,
} from "https://www.gstatic.com/firebasejs/9.15.0/firebase-auth.js";
import { getFirestore, collection, doc, getDoc } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-firestore.js";

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
const firestore = getFirestore(app);
const usersRef = collection(firestore, "users");


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
      alert("logined Successfully")
      var aaaa =  (success.user.uid);
      localStorage.setItem("uid",aaaa)
      console.log(aaaa)
      

      usersRef.doc(user.uid).get().then((doc) => {  
          if (doc.exists) {
              const role = doc.data().role;
  
              if (role === "admin") {
                  window.location.replace('admin_main_menu.php')
              } else if (role === "student") {
                  window.location.replace('user_main_menu.php')
              } else {
                  alert("Invalid user role.");
              }
          } else {
              alert("User document not found.");
          }
          return user.uid;
        })

    })
    .catch(function (err) {
      alert("login error"+err);
    });

  console.log(obj);
}