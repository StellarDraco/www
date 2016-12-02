<form>
	<input type="string" name="string"/>
</form>
<PRE>
<?php
$text = $_GET["string"];
echo "Type passphrase to open...";
	if($text == "1234"){
		echo "correct";
} 	else{
		echo "incorrect, please try again";
}
?>

	
