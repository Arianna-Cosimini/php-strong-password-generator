<?php

$userChoice =isset($_GET['userChoice']);

echo $userChoice;


function getGeneratePassword($userChoice){
    $randomPassword = 'abcdefghilmnopqrstuvzABCDEFGHILMNOPQRSTUVZ123456789./!*_';

};

?>






<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">



    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>Generate password</title>
</head>

<body>

<div class="container p-5">

    <form action="index.php" method="GET">
        <div class="mb-3">
            <label for="userChoice" class="form-label">Inserisci il numero per poter generare la tua password</label>
            <input type="number" class="form-control" id="userChoice" name="userChoice" aria-describedby="number" min="6" max="12">
            <div id="numberChoice" class="form-text">Inserisci un numero da 6 a 12.</div>
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>