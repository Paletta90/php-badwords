<?php 
$text='Lorem ipsum dolor sit lorem, lorem adipiscing elit, sed do eiusmod tempor lorem ut labore et dolore magna aliqua. Impsum enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

// $arrayParole = $_GET; --> Posso iniserire più parola nell'Url 
// Parola inserita tramite Uri da sostituire 
// $Badword = isset( $_GET['Badword'] ) ? $_GET['Badword'] : '';

// Testo con parola sostituita
// $newText = str_ireplace($Badword, '***', $text);


// Metodo Empty
if( !empty( $_GET['Badword'] ) ){
    $Badword = $_GET['Badword'];
    $newText = str_ireplace($Badword, '***', $text);
}else{
    $Badword = '';
    $newText = $text;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="GET">
        <input type="text" name="Badword">
        <button>Invia</button>
    </form>

    <!-- Stampo testo e lunghezza -->
    <h1>Testo iniziale: </h1>
    <p>- <?php echo $text ?> </p>
    <p>La lunghezza del testo è : <?php echo strlen($text) ?></p>

    <p>Parola da sostituire: <?php echo $Badword ?></p>

    <h2>Testo con parola sostituita: </h2>
    <p>- <?php echo $newText ?></p>
    <p>La lunghezza del nuovo testo è : <?php echo strlen($newText) ?></p>

</body>

</html>