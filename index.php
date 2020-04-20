<?php
    // Tema por defeito
    $tema = 'light_mode.css';

    // Injeção do tema conforme cookie
    if(isset($_COOKIE['tema'])){
        $tema = $_COOKIE['tema'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies - Temas</title>
    <link rel="stylesheet" href="<?php echo $tema ?>">
</head>
<body>

    <h1>Cookies para escolher o tema da página!</h1>
    <a href="light_mode.php">Light Mode</a> | <a href="dark_mode.php">Dark Mode</a>
    
</body>
</html>