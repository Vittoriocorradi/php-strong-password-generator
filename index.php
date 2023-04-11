<?php

session_start();

include __DIR__ . '/variables.php';
include __DIR__ . '/functions.php';

$_SESSION['password_length'] = $_GET['password_length'];
// $_SESSION['password_length'] = $password_length

$_SESSION['user_password'] = randomPassword($_SESSION['password_length'], $random_characters);
// var_dump($_SESSION['user_password']);

if (!empty($_SESSION['password_length'])) {
    header('Location: ./password.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- /Bootstrap CSS -->

    <title>Strong Password Generator</title>
</head>

<body>
    <div class="container p-4">
        <h1 class="mb-5">Strong Password Generator</h1>
        <form action="index.php" method="GET">
            <label for="password-length" class="form-label">Lunghezza Password</label>
            <input type="number" class="form-control mb-3" name="password_length" id="password-length" min="5" max="13">
            <button type="submit" class="btn btn-primary">Ricevi la password</button>
        </form>
        <?php if (!isset($_SESSION['password_length'])): ?>
            <p class="text-center mt-4">Inserire un numero tra 5 e 13 per ricevere una password</p>
        <?php endif ?>
    </div>
</body>

</html>