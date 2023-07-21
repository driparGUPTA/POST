<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .emoji {
            font-size: 1.5rem;
        }

        .pulse {
            animation: pulse 1s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">

    <?php
    $items = array(
        'item1' => 10.99,
        'item2' => 5.49,
        'item3' => 7.25,
    );

    $totalCost = 0;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        foreach ($_POST as $item => $quantity) {
            $quantity = filter_var($quantity, FILTER_VALIDATE_INT);
            if ($quantity !== false && $quantity > 0 && isset($items[$item])) {
                $subtotal = $items[$item] * $quantity;
                $totalCost += $subtotal;
            }
        }
    }
    ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body" style=" height: 465px;">
                        <h1 class="text-center mb-4">🛒 Shopping Cart 🛒</h1>
                        <form method="post">
                            <?php foreach ($items as $item => $price) : ?>
                                <div class="form-group">
                                    <label for="<?= $item ?>"><?= $item ?> ($<?= number_format($price, 2) ?>)</label>
                                    <input type="number" class="form-control" id="<?= $item ?>" name="<?= $item ?>" min="0" step="1" value="0">
                                </div>
                            <?php endforeach; ?>
                            <button type="submit" class="btn btn-primary btn-block">Calculate Total</button>
                        </form>

                        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
                            <h2 class="text-center mt-4">
                                <?php if ($totalCost > 0) : ?>
                                    Total Cost: $<?= number_format($totalCost, 2) ?>
                                    <span class="emoji pulse">&#x1F604;</span>
                                <?php else : ?>
                                    Please add items to your cart! <span class="emoji">&#x1F613;</span>
                                <?php endif; ?>
                            </h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
