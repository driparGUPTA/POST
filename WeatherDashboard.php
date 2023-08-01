<!DOCTYPE html>
<html>

<head>
    <title>Weather Dashboard</title>
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

        /* .Layout {

            height: 960px;
            flex-shrink: 0;
            background: url(./weather.jpg), no-repeat, #D9D9D9;
        } */
        .Layout {
            height: 960px;
            flex-shrink: 0;
            background: url(./img2.jpg), no-repeat, #D9D9D9;
            background-size: cover;
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
            border-bottom: 1px solid #4b6653;
            color: #2c4934;
            font-family: Raleway;
            font-size: 24px;
            font-style: normal;
            font-weight: 400;
            line-height: 110%;
            /* 26.4px */
            letter-spacing: -0.12px;
            text-transform: uppercase;

        }

        input[type=text]:focus {
            width: 100%;
            border-top: 0px;
            border-right: 0px;
            border-left: 0px;
            border-bottom: 1px solid #4fb7e7;
        }

        input[type=text]:focus-visible {
            border-top: 0px;
            border-right: 0px;
            border-left: 0px;
            border-bottom: 1px solid #4fb7e7;
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
                    <div class="h1">Weather Dashboard </div>
                    <div class="p">Check current weather with Weather API </div>
                </div>
                <div class="result">
                    <div id="weatherData" style="height: 255px;"> </div>
                    <div class="choose">
                        <div class="pa">
                            <form id="weatherForm" action="">
                                <div class="input">
                                    <input type="hidden" name="opration" id="opration" value="">
                                    <input type="text" name="city" id="city" value="<?= (isset($number)) ? $number : '' ?>" placeholder="Enter city name">
                                </div>
                                <button type="submit" class="cal">Show Weather</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('weatherForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const city = document.getElementById('city').value;
            fetch(`get_weather.php?city=${city}`)
                .then(response => response.json())
                .then(data => {
                    const weatherDataDiv = document.getElementById('weatherData');
                    if (data.error) {
                        weatherDataDiv.innerHTML = `<p>Error: ${data.error.message}</p>`;
                    } else {
                        weatherDataDiv.innerHTML = `
              <h1  class="h1"> ${data.main.temp} °C</h1>
              <p class="p"> ${data.weather[0].description} | ${data.name}</p>
            
            `;
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
</body>

</html>
