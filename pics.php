<form>
	<input type="string" name="string"/>
</form>
<PRE>
<?php
	echo "Type passphrase to open...";
	if(isset($_GET['string'])){
		$string = $_GET['string'];
		echo "correct";
} 	else {
		echo "incorrect, please try again";
}
?>
		
