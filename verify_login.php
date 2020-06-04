<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
	if (isset($_POST['log_password']) AND $_POST['log_password']==12345678) {
			header('Location: home.php');
	}else if (isset($_POST['sign_in_password']) AND $_POST['sign_in_password']==12345678) {
			header('Location: home.php');
	}else{
		echo "Clef de sécurité incorrecte";
	}

?>