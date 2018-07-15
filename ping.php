<h2>PING service</h2>
<form method="post" action="">
   <input type="text" name="adresse"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>

<?php
$blacklist = file("security.php", FILE_IGNORE_NEW_LINES);
$hackerDetected = false;

if(isset($_POST['submit'])) 
{
    $adresse = $_POST['adresse'];
    
    foreach($blacklist as $value)
    {
        $pos = strpos($adresse, $value);
    }
	if($pos != false)
	{
	    $hackerDetected = true;
	}
    

    if($hackerDetected === false)
    {
        echo "Vous avez fait un ping sur : <b> $adresse </b>";  
        $output = shell_exec('ping -c 4 '.$adresse);
        echo "<pre>$output</pre>";

    }
    else
    {
	echo"Hacker detected! <br>";
    }
}
?>
