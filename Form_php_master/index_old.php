<?php
	require('functions.php');
?>
<html>
	<head>
	</head>
	<body>
		<fieldset>
			<legend>
				Connexion
			</legend>
			<form method='post' action='connexion.php'>
				<input type='text' placeholder='Login' name='login'>
				<input type='password' placeholder='Mot de passe' name='pwd'>
				<input type='submit' value='Connexion'>
			</form>
			<?php
				if(isset($_GET['error']) && !empty($_GET['error'])){
					showErrorMessage($_GET['error']);
				}
			?>
		</fieldset>
	</body>
</html>