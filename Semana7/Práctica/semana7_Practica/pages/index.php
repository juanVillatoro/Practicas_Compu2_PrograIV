<?php
    INCLUDE "../nav.php";
    //comentario de una linea
    /*
    comentario de varias lineas
    */
    #comentario 
    //variables
    /*
    $string= "Variable de tipo string";
    $int= 10;
    $double= 5.2;
    */

    if(isset($_POST["enviar"])){
        //echo "<script>alert('Clic')</script>";
        $idioma = $_POST["idioma"];
        echo $idioma;
        INCLUDE $idioma . ".php";
    }else{
        INCLUDE "es.php";
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
    <h1>Programacion Computacional IV</h1>
    <h2><?php echo TITLE; ?></h2>
    <h2><?php echo HEADING_TITLE; ?></h2>
    <h2><?php echo OVERVIEW_TITLE; ?></h2>
    <form action="" method="POST">
        <select name="idioma" id="">
            <option value="en">English</option>
            <option value="es">Spanish</option>
            <input type="submit" name="enviar" value="Seleccionar" />
        </select>
    </form>
</body>
</html>