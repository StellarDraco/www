<form>
	<input type="string" name="string"/>
</form>
<PRE>
<?php
$text = $_GET["string"];
echo "Type passphrase to open...";
echo "<br />";
echo "<br />";
	if($text == "1234"){
		echo "CORRECT";
} 	elseif($text == ""){
		echo "Please type your passphrase above";
}       else{
		echo "INCORRECT";
		echo "<br />";
		echo "Please try again";
	}
?>

	
