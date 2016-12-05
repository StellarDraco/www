<form>
    <input type="string" style="text-align: center" name="string"/>
</form>
<PRE>
<?php
global $verifyed;
$verifyed = 1;
    echo "$verifyed";
$text = $_GET["string"];
echo "<br />";
ob_start;
if($text == "1234"){
    ob_get_clean();
    ob_start();
    echo "CORRECT";
    echo "<br />";
    echo "Please wait";
    header("location:img.php");
    exit();
}    elseif($text == ""){
        echo "Please type your passphrase above";
}    else{
        echo "INCORRECT";
        echo "<br />";
        echo "Please try again";
}
?>
