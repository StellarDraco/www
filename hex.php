<form>
	<input type="text" name="string"/>
</form>
<PRE>
<?php
	if(isset($_GET['string'])){
		$string = $_GET['string'];

		for($i=0;$i<strlen($string);$i++){
			echo $string[$i]." ".(bin2hex ($string[$i]))." ".(hexdec(bin2hex ($string[$i])))."<br/>";
		}
	}
?>
</PRE>

<table width="100%">
  <tr>
    <td align="center"><img src="http://www.theasciicode.com.ar/american-standard-code-information-interchange/ascii-codes-table.png"/></td>
	  <td align="center"><img src="https://cdn.meme.am/cache/instances/folder942/61515942.jpg"/></td>
  </tr>
</table>
