<?php

$user_length = $_GET['length'] ?? '';

require_once "./function.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Password Generetor</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-5">STRONG PASSWORD GENERETOR</h1>
        <form action="#">
            <div class="mb-3 w-25">
                <label for="number" class="form-label">Inserisci la lunghezza della password:</label>
                <input type="number" class="form-control" id="number" name="length" min="1" max="100">
            </div>

            <div class="form-check form-switch">
                <input name="char_repeat" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" <?php if (isset($_GET['repeat'])) echo 'checked' ?>>
                <label class="form-check-label" for="flexSwitchCheckDefault">Consenti ripetizione di caratteri?</label>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Invia</button>
        </form>
    </div>
</body>
</html>