<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo Get</title>
</head>
<body>
    
<form  method="GET">

Nombre: 
<input type="text" name="nombre"><br><br>
Correo:
<input type="email" name="correo"><br><br>
Edad:
<input type="number" name="edad" ><br/><br>
Tu Password:
<input type="password" name="password" ><br><br>
<button type="submit">Enviar Datos</button>

</form>
<br />

 <?php    if  ($_GET) { ?>
Tu nombre es :
<?php echo $_GET ["nombre"] ?? "invitado";?>
<br>

Tu edad es:

<?php echo $_GET ["edad"] ?? "x";?>
<br>
Tu correo es:
<?php echo $_GET ["correo"]?? "invitado" ?>

<?php } ?>




</body>
</html>
</html>