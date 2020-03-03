<html>
<title>Dollar To Naira Exchange Rate Calculator</title>
<head></head>
<body>
<center>
<b><font size="6" color="green">Dollar To Naira Exchange Rate Calculator</font></b><p><br/>
<form action="" method="post">
	<label for="inputlabel"><b><font size="5" color="green">Amount in US$</font></b></label><p>
	<input name="amount" type="text" value="" size="30" autofocus/> <p> 
	<button type="submit" name="submit"><b><font size="4" color="green">CONVERT TO ₦</font></b></button>
</form>
</center>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>

<?php
echo '<center><b><font size="8" color="green">';
if(!(empty($_POST["amount"])) && (is_numeric($_POST["amount"])) && isset($_POST['submit'])){  
    $amount = $_POST['amount'];
	$nairavalue = $amount * 365.73;
	echo "$";
	echo number_format($amount ,2);
	echo " = ";
	echo '₦';
    echo number_format($nairavalue ,2);
	}
	exit();
echo '</font></b></center>';
?>

