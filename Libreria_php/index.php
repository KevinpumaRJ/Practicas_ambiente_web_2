<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Libreria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <fieldset>
        <legend>Rectangulo</legend>
        <form action="" method="post">
            Base: <input type="text" placeholder="Escribe la base: " name="base"><br><br>
            Altura: <input type="text" placeholder="Escribe la altura: " name="altura"><br><br>
            <input type="submit" value="Dibujar y calcular" name="calcular">
        </form>
        <?php

            if (isset($_POST["calcular"])){
                $base =  $_POST["base"];
                $altura =  $_POST["altura"];

                include("externo.php");
                perimetro($base, $altura);
                area($base, $altura);
                dibujar($base, $altura);
            }

        ?>
    </fieldset>
</body>
</html>