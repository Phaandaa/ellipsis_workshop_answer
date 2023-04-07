<!DOCTYPE html>
<html>
<body>
<form>
	Operand 1 <input type="number" name="Operand1">
	<br>
	Operator 
	<select name="Operator">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>	
	</select>
	<br>
	Operand 2 <input type="number" name="Operand2">
	<br>
	<input type="submit" value="Calculate!">
</form>

<?php
	
	#Enter your code here
	if (!empty($_GET)){
		$operator = $_GET["Operator"];
		$num1 = (int)$_GET["Operand1"];
		$num2 = (int)$_GET["Operand2"];
		$result = NULL;

		if ($operator == "+"){
			$result = $num1 + $num2;
		} else if ($operator == "-"){
			$result = $num1 - $num2;
		} else if ($operator == "*"){
			$result = $num1 * $num2;
		} else {
			$result = $num1 / $num2;
		} 
	
		echo "<h2>Answer: ".$result."</h2>";
	
	}
	
	
?>
</body>
</html>