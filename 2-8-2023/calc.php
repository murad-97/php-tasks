<?php
session_start()
?>
<form id="calc" method="get" action="<?php echo $_SERVER['REQUEST_URI'] ; ?>">
<input type="number" name="number1">
<br>
<br>
<input type="number" name="number2">
<br>
<br>
    <input type="submit" name="action" value= +>
    <input type="submit" name="action" value= ->
    <input type="submit" name="action" value= *>
    <input type="submit" name="action" value= />
</form>
<?php
$_SESSION ["num1"] = $_GET["number1"];
$_SESSION ["num2"] = $_GET["number2"];
$_SESSION ["sign"] = $_GET["action"];
?>