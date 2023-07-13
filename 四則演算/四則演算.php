<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['calculate'])) {
        $number1 = $_GET["number1"];
        $number2 = $_GET["number2"];
        $operator = $_GET["operator"];
        $result = '';

        if ($operator == "add") {
            $result = $number1 + $number2;
        } elseif ($operator == "subtract") {
            $result = $number1 - $number2;
        } elseif ($operator == "multiply") {
            $result = $number1 * $number2;
        } elseif ($operator == "divide") {
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = "Can't divide 0";
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <title>四則演算</title>
    </head>

    <body class="center">
        <form method="GET" action="" class="center">
            <div class="nums">
                <input type="number" name="number1" value="<?php if (isset($number1)) {echo $number1;}?>" />
                <select name="operator" class="operator">
                    <option value="add">+</option>
                    <option value="subtract">-</option>
                    <option value="multiply">*</option>
                    <option value="divide">/</option>
                </select>
                <input type="number" name="number2" value="<?php if (isset($number2)) {echo $number2;}?>"/>
            </div>
            <h2>
                Result: <?php if (isset($result)) {echo $result;}?>
            </h2>
            <input
                type="submit"
                name="calculate"
                value="calculate"
                class="button"
            />
        </form>
    </body>
</html>
