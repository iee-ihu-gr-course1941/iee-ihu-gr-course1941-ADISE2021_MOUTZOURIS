<?php

session_start();
 
// έλεγχος εάν ο χρήστης είναι ήδη συνδεδεμένος, αν ναι εμφάνιση της αρχικής σελίδας
if(isset($_SESSION["user_id"]) === true){
    header("Location: lobby.php");
    exit;
}

<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="../assets/poker_chip.png" >
    <meta charset="utf-8">
    <title>Login</title>

 
 <link href="./css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="./auth/login.php" method="post">
  
	<img class="mb-4" src="../assets/poker_chip.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Εισάγετε στοιχεία </h1>
	
	<?php if (isset($_GET['error'])) { 
		echo $_GET['error']; 
		} ?>
      
	<div class="form-floating">
	  <input type="text" name='username' id="floatingInput" placeholder="Όνομα χρήστη">
		<span class="invalid-feedback"></span>
	</div>
    
	
	<div class="form-floating">
      <input type="password" name='password' id="floatingPassword" placeholder="Κωδίκος">
	  <span class="invalid-feedback"></span>
    </div>

    <button type="submit">Σύνδεση</button>
    <p>&copy; 2021-2022</p>
  </form>
</main>


    
  </body>
</html>
