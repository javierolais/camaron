(function(){
	const config = {
		apiKey: "AIzaSyCdFgTpOGnOBRYH72RPsp9xbgHBalfIN0g",
		authDomain: "camaron-e31a5.firebaseapp.com",
		databaseURL: "https://camaron-e31a5.firebaseio.com",
		projectId: "camaron-e31a5",
		storageBucket: "camaron-e31a5.appspot.com",
		messagingSenderId: "419055338478"
	};
	firebase.initializeApp(config);
	
	//Get Elements
	const txtEmail = document.getElementById('txtEmail');
	const txtPassword = document.getElementById('txtPassword');
	const btnLogin = document.getElementById('btnLogin');
	const btnSignUp = document.getElementById('btnSignUp');
	const btnLogout = document.getElementById('btnLogout');
	//Add login event
	btnLogin.addEventListener('click', e => {
		//get email and password
		const email = txtEmail.value;
		const pass = txtPassword.value;
		const auth = firebase.auth();
		//Sign in
		const promise = auth.signInWithEmailAndPassword(email, pass);
		promise.catch( e => console.log(e.message));
       
	});
	//Add signup event
	btnSignUp.addEventListener('click', e => {
		//Get email and password
		// TODO: CHECK 4 REAL EMAILZ
		const email = txtEmail.value;
		const pass = txtPassword.value;
		const auth = firebase.auth();
		//Sign in
		const promise = auth.createUserWithEmailAndPassword(email,pass);
		promise.catch( e => console.log(e.message));
        

	});
	btnLogout.addEventListener('click', e => {
		firebase.auth().signOut();
	});
	//Add a realtie listener
	firebase.auth().onAuthStateChanged(firebaseUser => {
		if(firebaseUser) {
			console.log(firebaseUser);
			btnLogout.classList.remove('hide');
            location.href="formulario.php";
		} else {
			console.log('not logged in');
			btnLogout.classList.add('hide');
		}
		
	});
}());