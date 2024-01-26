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
      alert("All Field Are Required")
  }
  if(password.value == copassword.value){
   
  }
  else{
      alert("Password Confirmation is Wrong")
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

      

      alert("signup successfully")
      window.location.replace('user_main_menu.php')
    })
    .catch(function(err){
      alert ("Error in " + err)
    });
/*     set(refrences,obj) */
/*     console.log(obj.id) */
    console.log(obj)
  };