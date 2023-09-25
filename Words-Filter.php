<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Filter</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 20px auto;
            width: 80%;
            max-width: 500px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .output {
            margin-top: 20px;
            text-align: left;
        }

        p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Words Filter</h1>
        <form method="post">
            <div>

                <label for="inputString">Enter a string:</label>
                <input type="text" id="inputString" name="inputString" required>
            </div>
            <br>
            <button type="submit">Filter</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inputString = $_POST["inputString"];
            $numbers = '';
            $upperCaseChars = '';
            $lowerCaseChars = '';
            $specialSymbols = '';

            for ($i = 0; $i < strlen($inputString); $i++) {
                $char = $inputString[$i];
                if (ctype_digit($char)) {
                    $numbers .= $char;
                } elseif (ctype_upper($char)) {
                    $upperCaseChars .= $char;
                } elseif (ctype_lower($char)) {
                    $lowerCaseChars .= $char;
                } else {
                    $specialSymbols .= $char;
                }
            }
            if (!empty($numbers) ||  !empty($upperCaseChars) || !empty($lowerCaseChars) || !empty($specialSymbols)) {
                echo "<div class='output'>";
                echo "<p><strong>Numbers:</strong> $numbers</p>";
                echo "<p><strong>Uppercase Characters:</strong> $upperCaseChars</p>";
                echo "<p><strong>Lowercase Characters:</strong> $lowerCaseChars</p>";
                echo "<p><strong>Special Symbols:</strong> $specialSymbols</p>";
                echo "</div>";
            }
        } else {
            echo "<div class='output'>";
            echo "<p><strong>Numbers:</strong> </p>";
            echo "<p><strong>Uppercase Characters:</strong>  </p>";
            echo "<p><strong>Lowercase Characters:</strong>  </p>";
            echo "<p><strong>Special Symbols:</strong> </p>";
            echo "</div>";
        }
        
        ?>
    </div>
</body>

</html>
