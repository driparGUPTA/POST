// index page 


<!DOCTYPE html>
<html>

<head>
    <title>JSON Form</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 400px;
            margin: 0 auto;

        }

        .form-heading {
            text-align: center;
            color: #007bff;
            font-size: 24px;
            margin-bottom: 30px;
        }

        .form-group label {
            font-weight: bold;
            font-size: 14px;
        }

        .form-control {
            border-color: #ced4da;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
            /* Make the button full-width */
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <h2 class="form-heading">JSON Form</h2>
            <form action="process_form.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="is_active">Is Active:</label>
                    <select class="form-control" id="is_active" name="is_active" required>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hobbies">Hobbies:</label>
                    <input type="text" class="form-control" id="hobbies" name="hobbies" required>
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                </div>
                <div class="form-group">
                    <label for="country">Country:</label>
                    <input type="text" class="form-control" id="country" name="country" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

///////  process_form.php   
//page


<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $is_active = ($_POST['is_active'] === '1') ? true : false;
    $hobbies = explode(', ', $_POST['hobbies']);
    $city = $_POST['city'];
    $country = $_POST['country'];

    $data = [
        "name" => $name,
        "email" => $email,
        "is_active" => $is_active,
        "hobbies" => $hobbies,
        "address" => [
            "city" => $city,
            "country" => $country
        ]
    ];

    $jsonString = json_encode($data, JSON_PRETTY_PRINT);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>JSON Response</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 20px;
            /* max-width: 800px; */
            max-width: 500px;
            margin: 0 auto;
        }

        .json-response {
            background-color: #f7f7f7;
            padding: 10px;
            border-radius: 5px;
            font-family: "Courier New", monospace;
            white-space: pre-wrap;
            word-wrap: break-word;
            margin-bottom: 20px;
        }

        .response-heading {
            text-align: center;
            color: #007bff;
            font-size: 24px;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Additional Mobile Styling */
        @media (max-width: 576px) {
            .container {
                padding: 15px;
            }

            .response-heading {
                font-size: 20px;
            }

            .json-response {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="response-heading">JSON Response:</div>
                <div class="json-response"><?php echo isset($jsonString) ? $jsonString : 'No data submitted.'; ?></div>
                <button type="button" class="btn btn-primary" onclick="window.history.back();">Go Back</button>
            </div>
        </div>
    </div>
</body>

</html>



