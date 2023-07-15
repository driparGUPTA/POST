<?php


function generatePassword($length)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGH
               IJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
    $password = '';
    $characterCount = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $characterCount - 1);
        $password .= $characters[$randomIndex];
    }

    return $password;
}
$password = '';

if (isset($_POST['generate'])) {
    $length = isset($_POST['length']) ? (int)$_POST['length'] : 8;
    $password = generatePassword($length);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Password Generator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 435px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 5px;
            height: 294px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: inline-block;
            width: 80px;
        }

        input[type="number"] {
            width: 0 auto;
        }

        input[type="submit"] {
            display: block;
            margin: 10px 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }


        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Password Generator in php</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="length">Length:</label>
                <input type="number" class="form-control" id="length" name="length" min="4" max="20" value="<?= (isset($_POST['length'])) ? $_POST['length'] : ''  ?>" required class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="generate" value="Generate Password" class="btn btn-primary">
            </div>
        </form>
        <?php if ($password) : ?>
            <div>
                <h3>Generated Password:</h3>
                <p><?php echo $password; ?></p>
            </div>
        <?php endif; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
