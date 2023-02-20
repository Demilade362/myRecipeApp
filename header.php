<?php
session_start();

if ($_SERVER['QUERY_STRING'] == 'noname') {
    unset($_SESSION['name']);
}

$name = $_SESSION['name'] ?? 'Guest';

$gender = $_COOKIE['gender'] ?? 'unKnown';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/bootstrap.css">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Php Project</title>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-white mb-5 navbar-light">
        <div class="container">
            <a class="navbar-brand">WyteRecipeConnect</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <span class="nav-link">Hello <?php echo htmlspecialchars($name); ?></span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">(<?php echo htmlspecialchars($gender); ?>)</span>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-dark" href="form.php">
                            Add Recipe
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>