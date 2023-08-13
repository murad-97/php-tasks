<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <table class="table table-striped">

        <?php
        include_once("connect.php");
        //add
        if (isset($_POST["add"])) {
            $fname = $_POST["fname"];
            // echo $f_name;
            $lname = $_POST["lname"];
            $email = $_POST["email"];

            $mysqli->query("INSERT INTO `users`(`id`, `first_name`, `last_name`, `email`) VALUES ('','$fname','$lname','$email')");
        }
        //delete
        if (isset($_GET["delete"])) {
            $delete = $_GET["delete"];
            $mysqli->query("DELETE FROM `users` WHERE id = $delete");
        }
        //update
        if (isset($_POST["f_name"])) {
            $id = $_POST["id"];
            $f_name = $_POST["f_name"];
            // echo $f_name;
            $l_name = $_POST["l_name"];
            $l_email = $_POST["l_email"];

            $mysqli->query("UPDATE `users` SET `first_name`='$f_name',`last_name`='$l_name',`email`='$l_email' WHERE id =$id ");
        }

        //read
        $result = $mysqli->query("SELECT * from users");
        $arr = $result->fetch_all();
        if ($result->num_rows > 0) {
            echo <<<"here"
            <thead class="thead-dark">
    <tr>
    <th>first name</th>
    <th>last name</th>
    <th>email</th>
    <th>action</th>
    <th>action</th>
</tr>
</thead>
here;
            foreach ($arr as $value) {
                echo <<<"here"
    <tr>
    <td>$value[1]</td>
    <td>$value[2]</td>
    <td>$value[3]</td>
    <td><a class="btn btn-outline-danger  " href="?delete=$value[0]">delete</a></td>
    <td><a class="btn btn-primary  " href="add.php?update=$value[0]">update</a></td>
</tr>
here;
            }

        } else {
            echo "no data to show";
        }
        ?>
    </table>
    <a class="btn btn-primary mb-2 " href="add.php">add users</a>

</body>

</html>