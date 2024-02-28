<?php 
    $form_sent = !empty($_GET);
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789.!?,;:#*';

    function is_password_valid($password){
        return str_contains($password, '$caratteri');
    }




    if ($form_sent) {
        $user_password = $_GET["user_password"];
      
        
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <div class="container">
        <h1>PHP Strong Password Generator</h1>
        <form method="GET" class="row">
            <div class="col-10">
                <input type="text" class="form-control" name="user_password">
            </div>
            <div class="col-2">
                <button class="btn btn-warning">Invia</button>
            </div>
        </form>
    </div>
</body>
</html>