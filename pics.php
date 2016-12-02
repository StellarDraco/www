<form>
	<input type="string" style="text-align: center" name="string"/>
</form>
<PRE>
<?php
$text = $_GET["string"];
echo "Type passphrase to open...";
echo "<br />";
echo "<br />";
	if($text == "1234"){
		echo "CORRECT";
		sleep(1);
		ob_clear()
		ob_start()
} 	elseif($text == ""){
		echo "Please type your passphrase above";
}       else{
		echo "INCORRECT";
		echo "<br />";
		echo "Please try again";
	}
?>
