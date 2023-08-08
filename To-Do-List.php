<?php
$tasks = [];

function addTask($task)
{
    global $tasks;
    $tasks[] = $task;
}


function editTask($index, $updatedTask)
{
    global $tasks;
    if (isset($tasks[$index])) {
        $tasks[$index] = $updatedTask;
    }
}


function deleteTask($index)
{
    global $tasks;
    if (isset($tasks[$index])) {
        array_splice($tasks, $index, 1);
    }
}


function displayTasks()
{
    global $tasks;
    if (empty($tasks)) {
        echo "<div class='alert alert-info'>No tasks found.</div>";
    } else {
        echo "<ul class='list-group'>";
        foreach ($tasks as $index => $task) {
            echo "<li class='list-group-item d-flex justify-content-between align-items-center'>" . $task . "
                  <div>
                    <a href='?action=edit&index=" . $index . "' class='btn btn-info btn-sm mr-2'>Edit</a>
                    <a href='?action=delete&index=" . $index . "' class='btn btn-danger btn-sm'>Delete</a>
                  </div>
                </li>";
        }
        echo "</ul>";
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["task"])) {
        $task = $_POST["task"];
        addTask($task);
    }
}

if (isset($_GET["action"]) && isset($_GET["index"])) {
    $action = $_GET["action"];
    $index = $_GET["index"];
    if ($action === "edit") {
        if (isset($_POST["updated_task"])) {
            $updatedTask = $_POST["updated_task"];
            editTask($index, $updatedTask);
        }
    } elseif ($action === "delete") {
        deleteTask($index);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>To-Do List</title>
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
            /* padding: 30px;
            margin-top: 20px;
            max-width: 800px; */
            padding: 30px;
            max-width: 400px;
            margin: 0 auto;
        }

        .list-group-item {
            border: none;
            padding: 10px;
            margin-bottom: 5px;
            background-color: #f7f7f7;
            border-radius: 5px;
        }

        .list-group-item:hover {
            background-color: #eaeaea;
        }

        .btn-sm {
            padding: 3px 10px;
            font-size: 12px;
        }

        .form-control {
            border-color: #ced4da;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #117a8b;
            border-color: #117a8b;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #b32432;
            border-color: #b32432;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8" style="flex: 1 0 30.666667%; max-width: 104.666667%;">
                <h2 class="text-center mb-4">To-Do List</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="task">New Task:</label>
                        <input type="text" class="form-control" id="task" name="task" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Add Task</button>
                </form>

                <h3 class="mt-4">Tasks:</h3>
                <?php displayTasks(); ?>
            </div>
        </div>
    </div>
</body>

</html>
