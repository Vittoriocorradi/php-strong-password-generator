<?php

$lowercase_characters = range('a','z');
$uppercase_characters = range('A', 'Z');
$number_characters = range('0', '9');
$special_characters = ['~','!','@','#','$','*','%','`','?','[',']','{','}',';','<','>','?','.',',','_','-','(',')'];

$random_characters = array_merge($lowercase_characters, $uppercase_characters, $number_characters, $special_characters);
    
var_dump($random_characters);



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
        <form action="index.php" method="GET">
            <label for="password-length" class="form-label">Lunghezza Password</label>
            <input type="number" class="form-control mb-3" name="password_length" id="password-length" min="5" max="13">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>