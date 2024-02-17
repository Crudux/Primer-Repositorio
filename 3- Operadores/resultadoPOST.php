<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de resultados</title>
</head>
<body>

<h1>Recibo datos de Formulario</h1>
<?php
   $nombre = $_POST ["nombre"];
   $edad = $_POST ["edad"];
   $password = $_POST ["password"];

   if  ($edad >= 21){

    echo "$nombre es mayor de edad, tiene $edad";
} else {

    echo "$nombre es menor de edad, tiene: $edad" ;

}  

?>
</body>
</html>