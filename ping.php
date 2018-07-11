<h2>PING service</h2>
<form method="post" action="">
   <input type="text" name="adresse"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>

<?php
if(isset($_POST['submit'])) 
{
    $adresse = $_POST['adresse'];
    echo "Vous avez fait un ping sur : <b> $adresse </b>"; 
    $output = shell_exec('ping -c 4 '.$adresse);
    echo "<pre>$output</pre>";
}
?>
