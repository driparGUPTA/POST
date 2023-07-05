<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Number Sorting</title>
    <style type="text/css">
        .container {

            background: linear-gradient(111.6deg, #fda085 19.3%, #f6d365 50%);
            width: 62%;
        }
        #reset {
            margin-top: 23px;
            width: 100%;
            text-align: center;
        }

        .login {
            box-shadow: 0px 4px 7px 8px rgb(0 0 0 / 10%);
            padding: 4px 0px 15px 3px;
            width: 84%;
            margin-top: 43px;
            border-radius: 20px;
            background-color: #544d57;
        }
        button {
            width: 45%;
        }
        h2 {
            color: white;
        }

        label {
            color: white;
        }

        p {
            color: #131313;
        }

        .yu {
            color: white;
            border: #9932CC;
        }

        .computer {
            margin-top: 3px;
            padding: 50px;
        }

        .div3 {
            color: #00ff00;
            font-size: 20px;
        }

        .div4 {
            color: #ffff33;
            font-size: 20px;
        }


        .Bold {
            color: #000000;
            font-size: 20px;
        }

        .response {
            text-align: center;
            width: 569px;
            padding: 16px;
        }
    </style>
</head>
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['numbers'];
    $numbers = array_map('intval', explode(',', $input));
    $n = count($numbers);


    if (isset($_POST['ascending'])) {
        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if ($numbers[$i] > $numbers[$j]) {
                    $a = $numbers[$i];
                    $numbers[$i] = $numbers[$j];
                    $numbers[$j] = $a;
                }
            }
        }
    } elseif (isset($_POST['descending'])) {
        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if ($numbers[$i] < $numbers[$j]) {
                    $a = $numbers[$i];
                    $numbers[$i] = $numbers[$j];
                    $numbers[$j] = $a;
                }
            }
        }
    }

    $html = '';
    if (!empty($numbers)) {
        $html .= '';
        if (isset($_POST['descending'])) {
            $html .= '<h4> Output </h4>';
            $html .= 'Descending number : ';
        } else if (isset($_POST['ascending'])) {
            $html .= '<h4> Output </h4>';
            $html .= 'Ascending number : ';
        }
        $html .= '';

        foreach ($numbers as $number) {
            $html .= '' . (isset($number) ? $number . ',' : '') . '';
        }

        $html .= '';
    }
}
?>

<body>
    <br>
    <div class="container">
        <div class="col-12">
            <img src="logo.png" class=" float-start rounded" width="210px">
            <p class="float-end">PHP</p>
        </div>

        <div class="row">
            <div class=" col-6" style="width: 100%;">
                <div class="card login">
                    <div class="card-body">
                        <h2 class="card-title"> Number Sorting Using </h3>
                            <h3 class="card-title" style="color:#FFFF00;">for loop And array</h3> <br>

                            <form method="post">
                                <div class="form-group">
                                    <label>Enter numbers:</label>
                                    <input type="text" name="numbers" value="<?= isset($input) ? $input : '' ?>" placeholder="e.g.3,45,3,4,5,45,46,43" required class="form-control">
                                </div>

                                <div id="reset">
                                    <button type="submit" name="ascending" class="btn btn-warning" value="Arrange Ascending"> Ascending</button> &nbsp;
                                    <button type="submit" name="descending" class="btn btn-warning" value="Arrange Descending"> Descending </button>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="response">
                    <p> <?= isset($html) ? $html :  ' ' ?> </p>
                </div>
            </div>
        </div>

</body>

</html>
