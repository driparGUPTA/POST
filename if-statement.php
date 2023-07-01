<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> If statement </title>
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        body {
            background-color: #333333;
        }

        .center {
            text-align: center;
            padding: 300px;
        }

        .div2 {
            background: #5B83EA;
            /* margin: 21px; */
            padding: 74px;
            width: 650px;
        }

        h1 {
            color: #ffff00;
            margin-bottom: 51px;
        }

        .div3 {
            color: #00ff00;
            font-size: 25px;
        }

        .div4 {
            color: #ffff33;
            font-size: 25px;
        }

        .divh2 {
            color: #ffffff;
            font-size: 24px;

        }

        b {
            color: #333333;
        }

        .Bold {
            color: #ff1a75;
            font-size: 25px;
        }

        button {
            font-size: 18px;
            font-weight: 600;
            background: #fff;
            border: 1px solid #fff;
            padding: 8px 20px;
            border-radius: 4px;
        }

        input {
            width: 87%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>

    <div class="center">
        <div class="div2">
            <?php
            if (isset($_POST['btn'])) {
                $marks = $_POST['result'];
            }
            ?>
            <h1> <img src="./photo.png" height="" alt=""> </h1>

            <div class="divh2"> <b> Example :</b> Show Result according to percent
                <?= (isset($marks)) ? $marks . '%' : '..' ?> <br> </div>
            <?php
            if (!isset($marks)  && empty($marks)) {
                //this part will execute if percent is less than  33
                echo "<div  class='div3' >Enter number</div>";
            }
            if (isset($marks)  && $marks >= 60) {
                //this part will execute if percent is greater than  or equal to 60
                echo "<div  class='div3' >First division </div> ";
            }
            if (isset($marks) && $marks  < 60 && $marks >= 45) {
                //this part will execute if percent is between 59 and 45
                echo "<div  class='div4' >Second division</div>";
            }
            if (isset($marks) && $marks < 45 && $marks >= 33) {
                //this part will execute if percent is between 44 and
                echo "<div3  class='div3'   >Third division</div>";
            }
            if (isset($marks) && $marks < 33) {
                //this part will execute if percent is less than  33
                echo " <b class='Bold' >Sorry!! You are Fail!!</b>";
            }
            ?>
            <form action="#" method="post">
                <input type="number" name="result" min="10" max="100">
                <button type="submit" name="btn"> Click</button>
            </form>

        </div>

    </div>
</body>

</html>
