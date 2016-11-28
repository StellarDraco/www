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
	  <td align="bottom"><img src="https://cdn.meme.am/cache/instances/folder942/61515942.jpg"/></td>
	  <td align="bottom"><img src="https://cnet1.cbsistatic.com/img/D5BzKihICWRk4OotpApfVdoW3W0=/1600x900/2016/07/08/b23bd00c-7917-4385-b9d2-82cb1aaa708a/pokemon-go-logo.jpg"/></td>
	  <td align="bottom"><img src="https://www.lebanonstem.org/wp-content/uploads/2016/08/shutterstock_157775207.jpg"/></td>
	  <td align="bottom"><img src="http://www.rd.com/wp-content/uploads/sites/2/2016/04/01-cat-wants-to-tell-you-laptop.jpg"/></td>
	  <td align="bottom"><img src=""/></td>
	  <td align="bottom"><img src=""/></td>
	  <td align="bottom"><img src=""/></td>
  </tr>
</table>
