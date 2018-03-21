firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.

  } else {
    // No user is signed in.
    window.alert("You're not logged in");
  }
});

// WHEN USER LOGS IN, logIn FUNCTION IS CALLED

function logIn(){
	
	var email = document.getElementById("email_field").value;
	var password = document.getElementById("password_field").value;

	firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;

  window.alert(error);
  // ...
});
}

// WHEN USER LOGS OUT logOut FUNCTION IS CALLED

function logOut(){

	firebase.auth().signOut().then(function() {
  	
  	// Sign-out successful.
	
	}).catch(function(error) {
	
	  // An error happened.

	  window.alert(error);
	
	});
}