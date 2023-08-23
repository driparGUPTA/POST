<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $DOB = $_POST['DOB'];
    $ToDate = $_POST['ToDate'];
    if (empty($DOB) || empty($ToDate)) {
        $Error = "Both input values are required.";
    } else {
        $bday = date_create_from_format('Y-m-d', $DOB);
        $today = date_create_from_format('Y-m-d', $ToDate);
        if (!$bday || !$today) {
            $Error = "Both input values must be a valid date.";
        } else {
            $DOB = $bday->format('d F Y');
            $ToDate = $today->format('d F Y');
            $age = date_diff(date_create($DOB), date_create($ToDate));
            $Result = "Birth Date: <strong>$DOB</strong><br>";
            $Result .= "Age <strong>{$age->y} Years, {$age->m} Months, {$age->d} Days</strong> as on <strong>{$ToDate}</strong>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Age Calculator Program Demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/app.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            /* max-width: 800px;
            margin: 0 auto;
            padding: 50px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */


            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .text-center {
            text-align: center;
        }

        .form-control-custom {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .fs-3 {
            font-size: 1.5rem;
        }

        .fs-4 {
            font-size: 1.25rem;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 10px;
            border-radius: 5px;
        }

        .form-control {
            font-size: 1rem;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="text-center mb-5">
            <h1 class="fw-bolder mb-0">PHP Age Calculator</h1>
        </div>
        <form method="post" action="">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 justify-content-center">
                        <div class="col text-center mb-3 mb-md-5">
                            <label for="DOB" class="fs-3">Date of Birth</label>
                            <input id="DOB" class="form-control form-control-custom" name="DOB" type="date" step="any" value="<?php if (!empty($_POST['DOB'])) {
                                                                                                                                    echo $_POST['DOB'];
                                                                                                                                } ?>">
                        </div>
                        <div class="col text-center mb-3 mb-md-4">
                            <label for="ToDate" class="fs-3">Calculate To Date</label>
                            <input id="ToDate" class="form-control form-control-custom" name="ToDate" type="date" step="any" value="<?php if (!empty($_POST['ToDate'])) {
                                                                                                                                        echo $_POST['ToDate'];
                                                                                                                                    } ?>">
                        </div>
                        <div class="col text-center mb-3 mb-md-4"><input type="submit" name="submit" value="Calculate" class="btn btn-success"></div>
                    </div>
                </div>
            </div>
        </form>
        <?php if (isset($Result)) { ?>
            <div class="row justify-content-center">
                <div class="col text-center">
                    <label for="Result" class="fs-4">Result</label>
                    <div class="form-control fs-3"><?php echo $Result; ?></div>
                </div>
            </div>
        <?php }
        if (isset($Error)) { ?>
            <div class="row justify-content-center">
                <div class="col">
                    <div class="alert alert-danger shadow-sm" role="alert">Error: <?php echo $Error; ?></div>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>
