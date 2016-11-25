<form>
	<input type="text" name="string"/>
</form>

<?php
	$string = $_GET['string'];
	
	for($i=0;$i<strlen($string);$i++){
		echo $string[$i]." ".(bin2hex ($string[$i]))." ".(hexdec(bin2hex ($string[$i])))."<br/>";
	}
?>