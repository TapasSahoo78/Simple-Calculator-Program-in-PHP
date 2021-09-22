<!DOCTYPE html>

<head>
	<title>Simple Calculator Program in PHP - Tutorials Class</title>
</head>

<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
           $result = $first_num + $second_num;
            break;
        case "Subtract":
           $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
    }
}

?>

<body style="background-color: yellowgreen;">
    <div id="page-wrap" style="background-color: red;">
	<h1 style="text-align: center;">PHP - Simple Calculator Program</h1>
	  <form action="" method="post" id="quiz-form" style="text-align: center;">
            <p>
                <b>First Number</b> <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> 
            </p>
            <p>
                <b>Second Number</b> <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> 
            </p>
            <p>
                <b>Result</b> <input readonly="readonly" name="result" value="<?php echo $result; ?>"> 
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
	  </form>
      <br>
    </div>
</body>
</html>