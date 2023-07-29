<!DOCTYPE html>
<html>

<head>
    <title>Callback Functions Example</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@600&family=Raleway&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
        }

        .container {
            /* max-width: 400px; */
            background: #FFF;
            /* height: 393px; */
            width: 1440px;
            height: 960px;

        }

        .Layout {

            height: 960px;
            flex-shrink: 0;
            background: url(./img1.png), no-repeat, #D9D9D9;
        }


        .result {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }

        .full {
            display: flex;
        }

        .full .left {
            width: 720px;
        }

        .full .left .logo {
            width: 268px;
            height: 54px;
            margin: 48px 48px 0px 404px
        }

        .full .right {
            width: calc(100% - 720px);
            align-items: center;
        }

        .heading {
            width: 100%;
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            margin-top: 120px;
        }

        .full .right .heading .h1 {
            color: #4E6655;
            font-family: Jost;
            font-size: 48px;
            font-style: normal;
            font-weight: 600;
            line-height: 110%;
            /* 52.8px */
            letter-spacing: 0.48px;
            text-transform: capitalize;
        }

        .full .right .heading .p {
            color: #4E6655;
            text-align: center;
            font-family: Raleway;
            font-size: 24px;
            font-style: normal;
            font-weight: 400;
            line-height: 128%;
            /* 30.72px */
            letter-spacing: -0.12px;
        }

        .full .right .result .h1 {
            color: #5B83EA;
            text-align: center;
            font-family: Jost;
            font-size: 80px;
            font-style: normal;
            font-weight: 600;
            line-height: 110%;
            /* 88px */
            letter-spacing: 0.8px;
            text-transform: capitalize;
            margin-top: 137px;
        }

        .full .right .result .p {
            color: #5B83EA;
            text-align: center;
            font-family: Raleway;
            font-size: 28px;
            font-style: normal;
            font-weight: 500;
            line-height: 128%;
            /* 35.84px */
            letter-spacing: -0.14px;
            opacity: 0.7400000095367432;
        }

        .full .right .result .choose {
            text-align: center;
            flex-direction: column;
            font-style: normal;
            align-items: flex-start;
            gap: 56px;
            margin-top: 78px;
            margin-left: 80px
        }

        .full .right .result .choose .pa {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            gap: 16px;
        }

        .full .right .result .choose .pa .text {
            opacity: 0.7400000095367432;
            color: #4E6655;
            font-family: Raleway;
            font-size: 24px;
            font-style: normal;
            font-weight: 400;
            line-height: 110%;
            /* 26.4px */
            letter-spacing: -0.12px;
            text-transform: uppercase;
            margin-right: 316px;
        }

        .full .right .result .choose .pa .buttons {
            display: flex;
            height: 48px;
            padding: 4px 16px;
            /* justify-content: center; */
            align-items: center;
            gap: 8px;
            margin-top: 16px;
        }

        .full .right .result .choose .pa .buttons .btn {
            display: flex;
            height: 48px;
            padding: 4px 16px;
            justify-content: center;
            align-items: center;
            gap: 8px;
            border-radius: 24px;
            border: 1px solid #4E6655;
            color: #4E6655;
            font-family: Raleway;
            font-size: 18px;
            font-style: normal;
            font-weight: 500;
            line-height: 110%;
            background: #FFF;
            /* 19.8px */
            letter-spacing: -0.09px;
            opacity: 0.6000000238418579;
        }

        .full .right .result .choose .pa .buttons .btn.active {
            display: flex;
            height: 48px;
            padding: 4px 16px;
            justify-content: center;
            align-items: center;
            gap: 8px;
            border-radius: 24px;
            border: 1px solid #4E6655;
            background: #4E6655;
            color: #FFF;
            font-family: Raleway;
            font-size: 18px;
            font-style: normal;
            font-weight: 600;
            line-height: 110%;
            /* 19.8px */
            letter-spacing: -0.09px;
            opacity: 1;
            /* margin-right: -16px; */
        }

        .full .right .result .choose .pa .empty {
            display: inline-flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 56px;
        }

        .full .right .result .choose .pa .empt2 {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 16px;
        }

        .full .right .result .choose .pa .input {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 16px;
            margin: 56px 0 0 0;
        }

        .full .right .result .choose .pa .input input {
            width: 100%;
            border-top: 0px;
            border-right: 0px;
            border-left: 0px;
            border-bottom: 1px solid #4E6655;
            color: #4E6655;
            font-family: Raleway;
            font-size: 24px;
            font-style: normal;
            font-weight: 400;
            line-height: 110%;
            /* 26.4px */
            letter-spacing: -0.12px;
            text-transform: uppercase;

        }

        input[type=number]:focus {
            width: 100%;
            border-top: 0px;
            border-right: 0px;
            border-left: 0px;
            border-bottom: 1px solid #4E6655;
        }

        input[type=number]:focus-visible {
            border-top: 0px;
            border-right: 0px;
            border-left: 0px;
            border-bottom: 1px solid #4E6655;
            outline: none !important;
        }


        .full .right .result .choose .pa .cal {
            display: flex;
            width: 560px;
            height: 64px;
            padding: 4px 16px;
            justify-content: center;
            align-items: center;
            gap: 8px;
            flex-shrink: 0;
            border-radius: 2px;
            background: #5B83EA;
            margin-top: 48px;
            color: #FFF;
            font-family: Raleway;
            font-size: 24px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            letter-spacing: -0.12px;

            border: none;


        }



        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<?php

function doubleNumber($num)
{
    return $num * 2;
}

function squareNumber($num)
{
    return $num * $num;
}

function cube($num)
{
    return $num * $num * $num;
}


function processNumber($num, callable $callback)
{
    return $callback($num);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = $_POST["number"];
    $operation = $_POST["opration"];

    if ($operation === "double") {
        $result = processNumber($number, 'doubleNumber');
    } elseif ($operation === "square") {
        $result = processNumber($number, 'squareNumber');
    } elseif ($operation === "cube") {
        $result = processNumber($number, 'cube');
    }
}

?>

<body>
    <div class="container">
        <div class="full">
            <div class="left Layout">
                <div class="logo">
                    <img src="./logo.svg" alt="">
                </div>
            </div>
            <div class="right">
                <div class="heading">
                    <div class="h1">Callback Functions </div>
                    <div class="p">Calculate your number with simple functions</div>
                </div>
                <div class="result">
                    <div class="h1"><?= (isset($result)) ? $result : '0' ?> </div>
                    <div class="p">Result</div>
                    <div class="choose">
                        <div class="pa">
                            <form method="post" action="">
                                <div class="text">Choose an operation</div>
                                <div class="buttons">
                                    <button type="button" name="operation" data-opration="double" class="btn <?= (isset($operation) and $operation == 'double') ? 'active' : '' ?>" onclick="setActiveButton(this)">Double</button>
                                    <button type="button" name="operation" data-opration="square" class="btn <?= (isset($operation) and $operation == 'square') ? 'active' : '' ?>" onclick="setActiveButton(this)">Square</button>
                                    <button type="button" name="operation" data-opration="cube" class="btn <?= (isset($operation) and $operation == 'cube') ? 'active' : '' ?>" onclick="setActiveButton(this)">Cube</button>
                                </div>
                                <div class="input">
                                    <input type="hidden" name="opration" id="opration" value="">
                                    <input type="number" name="number" value="<?= (isset($number)) ? $number : '' ?>" placeholder="Enter a number">
                                </div>
                                <button type="submit" class="cal">Calculate</button>
                            </form>


                        </div>
                        <script>
                            function setActiveButton(button) {
                                const buttons = document.querySelectorAll('.btn');
                                buttons.forEach((btn) => btn.classList.remove('active'));
                                button.classList.add('active');
                                document.getElementById('opration').value = button.dataset.opration;
                                const inputValue = button.value;
                                const inputField = document.querySelector('input[name="operation"]');
                                inputField.value = inputValue;
                            }
                        </script>

                    </div>


                </div>
            </div>
        </div>
    </div>
</body>

</html>
