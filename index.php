<?php


include __DIR__ . './functions.php'

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Generatore di Password</title>
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

        
            <div class="mt-3">
                <label for="generatedPassword" class="form-label">Password generata:</label>
                <input type="text" class="form-control" id="generatedPassword" value="<?php echo $password; ?>">
            </div>
    
    </div>

</body>

</html>
