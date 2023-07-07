<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = $_POST["inputA"];
    $b = $_POST["inputB"];
    $aChars = str_split($a);
    $found = true;
    foreach ($aChars as $char) {
        if (strpos($b, $char) === false) {
            $found = false;
            break;
        }
    }
    if ($found) {
        $aLength = strlen($a);
        $bLength = strlen($b);
        if ($aLength === $bLength) {
            $result = "<p class='success'>✅ Yes, the characters in 
            '$a' appear in '$b' and they both have the same length! 😄</p>";
        } elseif ($aLength < $bLength) {
            $result = "<p class='success'>✅ Yes, the characters in 
            '$a' appear in '$b' and '$b' has a longer length! 🚀</p>";
        } else {
            $result = "<p class='success'>✅ Yes, the characters in '
            $a' appear in '$b' and '$a' has a longer length! 🌟</p>";
        }
    } else {
        $pattern = '/[' . preg_quote($a, '/') . ']+/i';


        if (preg_match($pattern, $b)) {
            $result = "<p class='success'>✅ Yes, the characters in 
            '$a' appear in '$b'! Let the magic unfold! 🎉✨</p>";
        } else {
            $result = "<p class='error'>❌ Uh-oh! The characters in 
            '$a' do not appear in '$b'. Keep searching! 🔍</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html>


<head>
    <title>Search Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            margin-top: 100px;
        }

        h1 {
            color: #333333;
            margin: 15px;
            border-radius: 11px;
        }


        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333333;
            font-weight: bold;
        }

        input[type="text"] {
            padding: 8px;
            width: 200px;
        }

        .dub-btn {
            min-width: 317px;
            display: flex;
            justify-content: end;
        }

        input[type="submit"] {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            width: 213px;
        }

        p {
            margin-top: 20px;
            font-weight: bold;
            font-size: 18px;
        }

        .success {
            color: #008000;
        }

        .error {
            color: #FF0000;
        }

        .boxsize {
            margin: 97px;
            background-color: floralwhite;
            border-radius: 17px;
            height: 550px;

        }

        .form-group {
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="boxsize">
            <div style="background-color: black; height: 75  px;">
                <div style="padding: 10px;">

                    <img src="logo.png" class=" float-start rounded" width="210px">

                </div>
            </div>

            <h1>Search Words</h1>
            <div style="margin-top: -16px;  color: black;">Use If else if ladder <br><b style="color: blue">str_split(), strpos(), preg_quote(), preg_match() </b></div>
            <div style="margin: 34px">
                <form method="POST" action="" class="form-inline ">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="inputA">Enter a value:</label>
                                <input type="text" id="inputA" name="inputA" value="<?= (isset($a) ? $a : '')   ?>" required class="form-control mx-sm-3">
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="inputB">Search value:</label>
                                <input type="text" id="inputB" name="inputB" required class="form-control mx-sm-3">
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="form-group">
                                <div class="dub-btn">
                                    <input type="submit" value="Search" class="btn btn-primary">
                                </div>

                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-3">

                    </div>
                    <div class="col-6">

                        <?= (isset($result) ? $result : '')  ?>
                    </div>
                    <div class="col-3">

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
