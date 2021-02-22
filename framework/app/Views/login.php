<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <center>
        <from method="Post" action="index.php?controller=Usuario&action=verificarCredenciales">
            <label> Correo: </label></from><br>
            <input type="text" name="correo" value="" required>
            <br>
            <label> password: </label></from><br>
            <input type="password" name="pass" value="" required>
        </from>
    </center>
</body>
</html>