<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name="email">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" value = "login" >
    </form>
</body>
</html>
<?php 
$_SESSION["email"]=
?>