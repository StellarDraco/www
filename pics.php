<form>
	<input type="string" style="text-align: center" name="string"/>
</form>
<PRE>
<?php
$text = $_GET["string"];
echo "Type passphrase to open...";
echo "<br />";
echo "<br />";
ob_start;
	if($text == "1234"){
		echo "CORRECT";
		echo "Please wait";
		sleep(2);
		ob_get_clean();
		ob_start();
} 	elseif($text == ""){
		echo "Please type your passphrase above";
}       else{
		echo "INCORRECT";
		echo "<br />";
		echo "Please try again";
	}
?>
