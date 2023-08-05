<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/util copy.css">
    <link rel="stylesheet" href="css/test.css">

    <title>Document</title>
</head>

<body>
    <?php
    session_start();


    $name = "muradalshorman136@gmail.com";
    $password = "Murad_1234";
    if (isset($_POST["email"]) && isset($_POST["pass"])) {

        if ($_POST["email"] === $name && $_POST["pass"] === $password) {
            $_SESSION["status"] = true;
            header("Location:image/admin.php");

        } else {
            echo "<h1>incorrect email and password</h1>";
            echo "<div class='container-login100-form-btn' style = 'width:50%'>";
            echo "<div class='wrap-login100-form-btn'>";
            echo "<div class='login100-form-bgbtn'></div>";
            echo "<a href='login.php' class='login100-form-btn' style ='text-decoration:none; font-size:20px'>";
            echo "try again";
            echo "</a>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<h1>incorrect email and password</h1>";
        echo "<div class='container-login100-form-btn' style = 'width:50%'>";
        echo "<div class='wrap-login100-form-btn'>";
        echo "<div class='login100-form-bgbtn'></div>";
        echo "<a href='login.php' class='login100-form-btn' style ='text-decoration:none; font-size:20px'>";
        echo "login";
        echo "</a>";
        echo "</div>";
        echo "</div>";
    }

    ?>
</body>

</html>