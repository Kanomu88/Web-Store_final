import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-analytics.js";
import {
  getAuth,
  signInWithEmailAndPassword,
} from "https://www.gstatic.com/firebasejs/9.15.0/firebase-auth.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyBvA9OLrj62mfw59aCff7xWb4vTBR6HnJw",
  authDomain: "teacherjack.firebaseapp.com",
  databaseURL: "https://teacherjack-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "teacherjack",
  storageBucket: "teacherjack.appspot.com",
  messagingSenderId: "803811966761",
  appId: "1:803811966761:web:07a380be757b9a6918c138",
  measurementId: "G-YE2RR86RCM"
};
// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth();

// Function to check user role and display the corresponding modal
function checkUserRole(user) {
    // Reference to the Firestore collection "users"
    var usersRef = firebase.firestore().collection("users");

    // Get the document of the current user
    usersRef.doc(user.uid).get().then((doc) => {
        if (doc.exists) {
            // Get the role from the user document
            var role = doc.data().role;

            // Display the corresponding modal based on the user role
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
    }).catch((error) => {
        console.error("Error getting user document:", error);
    });
}