  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
  import {
    getAuth,
    createUserWithEmailAndPassword,
  } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-auth.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyBNsg5Gs5szrUYSgCaLYuqGCHtJVYyoQKI",
    authDomain: "store-test-tester01.firebaseapp.com",
    databaseURL: "https://store-test-tester01-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "store-test-tester01",
    storageBucket: "store-test-tester01.appspot.com",
    messagingSenderId: "127078847345",
    appId: "1:127078847345:web:7e3e54a3b1d53877e5dcd0",
    measurementId: "G-SCSS8DMN7T"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const auth = getAuth()


var fullName = document.getElementById("fullname");
var contact = document.getElementById("contact");
var email = document.getElementById("email");
var password = document.getElementById("password");
var copassword = document.getElementById("copassword")
window.signup = function (e) {
if(password)

    if(fullName.value == "" || contact.value=="" || email.value =="" || password.value ==""){
        alert("All Field Are Required")
    }
    if(password.value == copassword.value){
     
    }
    else{
        alert("Password Confirmation is Wrong")
        return false
    }

    e.preventDefault();
    var obj = {
      firstName: fullName.value,
      contact: contact.value,
      email: email.value,
      password: password.value,
    };
  
    createUserWithEmailAndPassword(auth, obj.email, obj.password)
    .then(function(success){
        window.location.replace('HTML/login.html')
      // console.log(success.user.uid)
      alert("signup successfully")
    })
    .catch(function(err){
      alert("Error in " + err)
    });
   console.log()
    console.log(obj);
  };