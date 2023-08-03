<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Calculator</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
            height: 650px;
        }

        .calculator {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            height: 550px;
        }

        .calculator h2 {
            margin-bottom: 3px;
            color: #444;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .result {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
            color: #333;
        }


        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result h1 {
            color: #4CAF50;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];
    $result = 0;

    if (!is_numeric($num1) || !is_numeric($num2)) {
        $result = 'Invalid input';
    }

    switch ($operator) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 == 0) {
                $result = 'Cannot divide by zero';
            }
            $result = $num1 / $num2;
            break;
        default:
            $result = 'Invalid operator';
    }

    $result = $result;
}
?>

<body>
    <div class="calculator">
        <h2>Arithmetic Operators Calculator</h2>
        <p>Use the switch statement In PHP </p>
        <form action="#" method="post">
            <input type="number" class="form-control" name="num1" value="<?= (isset($num1)) ? $num1 : ''  ?>" placeholder="Enter number 1" required><br>
            <input type="number" class="form-control" name="num2" value="<?= (isset($num2)) ? $num2 : ''  ?>" placeholder="Enter number 2" required><br>
            <select name="operator" class="form-select" id="operator">
                <option value="Select an operator">Select an operator</option>
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select><br>
            <input type="submit" value="Calculate">
        </form>
        <div class="result">
            <?php
            if (isset($result)) {
                echo "<h1>Result: " . $result . "</h1>";
            }
            ?>
        </div>
    </div>
</body>

</html>
