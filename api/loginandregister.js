function name(params) {
    

var config = {
    apiKey: "AIzaSyBNsg5Gs5szrUYSgCaLYuqGCHtJVYyoQKI",
    authDomain: "store-test-tester01.firebaseapp.com",
    databaseURL: "https://store-test-tester01-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "store-test-tester01",
    storageBucket: "store-test-tester01.appspot.com",
    messagingSenderId: "127078847345",
    appId: "1:127078847345:web:7e3e54a3b1d53877e5dcd0",
    measurementId: "G-SCSS8DMN7T"
  }
  firebase.initializeApp(config)
  var rootRef = firebase.database().ref()
	const auth = firebase.auth();
    const app = initializeApp(firebaseConfig);
	
	function signUp(){
		
		var email = document.getElementById("email");
		var password = document.getElementById("password");
		
		const promise = auth.createUserWithEmailAndPassword(email.value, password.value);
		promise.catch(e => alert(e.message));
		
		alert("Signed Up");
	}
	
	
	
	function signIn(){
		
		var email = document.getElementById("email");
		var password = document.getElementById("password");
		
		const promise = auth.signInWithEmailAndPassword(email.value, password.value);
		promise.catch(e => alert(e.message));
		
		
		
		
	}
	
	
	function signOut(){
		
		auth.signOut();
		alert("Signed Out");
		
	}
	
	
	
	auth.onAuthStateChanged(function(user){
		
		if(user){
			
			var email = user.email;
			alert("Active User " + email);
			
			//Take user to a different or home page

			//is signed in
			
		}else{
			
			alert("No Active User");
			//no user is signed in
		}
		
		
		
	});
}
