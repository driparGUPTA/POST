<!DOCTYPE html>
<html>

<head>
    <title>Live Comment System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .comment-container {
            border: 1px solid #ccc;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
        }

        body {
            background-color: #f7f7f7;
        }

        h2 {
            color: #007bff;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
        }

        .comment-container p {
            margin-bottom: 10px;
        }

        .col-md-5 {
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center">
                    <h2>Live Comment System</h2>
                    <form method="post" class="mt-4">
                        <div class="form-group">
                            <label for="comment">Your Comment:</label>
                            <input type="text" class="form-control" name="comment" id="comment" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <?php
                function saveComment($comment)
                {
                    $file = fopen('comments.txt', 'a');
                    if ($file) {
                        fwrite($file, date('Y-m-d H:i:s') . ': ' . $comment . "\n");
                        fclose($file);
                    } else {
                        echo '<div class="alert alert-danger mt-4">Error: Unable to save comment.</div>';
                    }
                }

                function deleteComment($index)
                {
                    $comments = file('comments.txt', FILE_IGNORE_NEW_LINES);
                    if (isset($comments[$index])) {
                        unset($comments[$index]);
                        file_put_contents('comments.txt', implode("\n", $comments));
                    }
                }

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $comment = $_POST['comment'];
                    saveComment($comment);
                }

                if (isset($_GET['delete'])) {
                    $index = $_GET['delete'];
                    deleteComment($index);
                }

                if (file_exists('comments.txt')) {
                    $comments = file('comments.txt', FILE_IGNORE_NEW_LINES);
                    if (!empty($comments)) {
                        echo '<h3 class="text-center mt-4">Comments:</h3>';
                        foreach ($comments as $index => $comment) {
                            $commentParts = explode(': ', $comment, 2);
                            $time = date('M d, Y - H:i:s', strtotime($commentParts[0]));
                            $content = htmlspecialchars($commentParts[1]);
                            echo '<div class="col-md-8 mx-auto comment-container">';
                            echo '<p><strong>' . $time . '</strong></p>';
                            echo '<p>' . $content . '</p>';
                            echo '<a href="?delete=' . $index . '" class="btn btn-sm btn-danger">Delete</a>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p class="text-center mt-4">No comments yet.</p>';
                        echo '<script>   window.location.href="LiveCommentSystem.php";  </script>';
                        exit;
                    }
                } else {
                    echo '<p class="text-center mt-4">Error: Comments file not found.</p>';
                }
                ?>

            </div>


        </div>
    </div>
</body>

</html>
