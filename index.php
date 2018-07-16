<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form method="post" action="">
  Utilisateur:<br>
  <input type="text" name="user">
  <br>
  Mot de passe:<br>
  <input type="text" name="password">
  <br><br>
  <input type="submit" value="Submit">
</form>
<br>
<br>

<a href="admin.php">page d'administration</a>

</body>
<html>

<?php
if (isset($_POST["user"]) && isset($_POST["password"]))
{
	$user = $_POST["user"];
	$password = $_POST["password"];
	if(strcmp($user ,"admin") === 0 && strcmp($password, "big_GG_Th1s-1s-THE_FLAG") === 0)
	{
		session_start();
		$_SESSION['login_user']="admin";
		echo $_SESSION['login_user'];
		header("Location: admin.php");
	}
	else
	{
		echo "<br><br>BAD PASSWORD!";
	}
}

?>
