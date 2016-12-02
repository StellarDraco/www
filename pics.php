<form>
	<input type="string" name="string"/>
</form>
<PRE>
<?php
	echo "Type passphrase to open...";
	if(isset($_GET['string' === ''])){
		echo "incorrect";
} 	else {
		echo "correct";
}
?>
		
