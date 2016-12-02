<form>
	<input type="string" name="string"/>
</form>
<PRE>
<?php
$text = $_GET["string"];
echo "Type passphrase to open...";
echo "<br />";
	if($text == "1234"){
		echo "correct";
} 	elseif($text == ""){
		echo "Type your response above";
}       else{
		echo "incorrect, please try again";
	}
?>

	
