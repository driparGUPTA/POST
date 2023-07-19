<?php

//  Algorithm
function sumEvenNumbers($arr)
{
    $sum = 0;
    foreach ($arr as $num) {
        if ($num % 2 === 0) {
            $sum += $num;
        }
    }
    return $sum;
}

// this is use to function 
/*
function sumEvenNumbers(array $arr): int {
    return array_sum(array_filter($arr, function ($num) {
        return $num % 2 === 0;
    }));
}
*/

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numbers = explode(",", $_POST["numbers"]);
    $result = sumEvenNumbers($numbers);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sum of Even Numbers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        } */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 20px;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            height: 294px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* 
        h2 {
            text-align: center;
            margin-bottom: 20px;
        } */

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="number"] {
            padding: 5px;
            /* width: 100%; */
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            width: 0 auto;

        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .result {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            font-size: 18px;
        }

        .inputs {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">

        <h2>Sum of Even Numbers</h2>
        <form method="post">
            <div class="form-group inputs ">
                <label for="numbers">Enter numbers (comma-separated)</label>
                <input type="text" name="numbers" value="<?= (isset($numbers)) ? $_POST["numbers"] : ''   ?>" id="numbers" required>
            </div>
            <button type="submit">Calculate</button>
        </form>
        <div class="result">
            <?=
            (isset($result)) ? 'Sum of even numbers: ' . $result : '';
            ?>
        </div>
    </div>
</body>

</html>
