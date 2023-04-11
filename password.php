<?php

session_start();

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

    <title>Password Generated</title>
</head>

<body>
    <div class="p-5">
        <div class="text-center fs-4 mb-4">La tua password è:</div>
        <div class="text-center fs-2 mb-5"><?php echo $_SESSION['user_password']; ?></div>
        <div class="text-center"><a href="index.php" class="btn btn-outline-primary">Torna alla home</a></div>
    </div>
</body>

</html>