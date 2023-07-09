<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>username password</title>
    <link rel="shortcut icon" href="images/w3schools.ico" type="image/x-icon">
    <!-- php -->
    <?php
    $Username = $_POST["username"];
    $Password = $_POST["password"];
    ?>
</head>

<body>
    <section>
        <p>Username :
            <?php print_r($Username) ?>
        </p>
        <p>Password :
            <?php print_r($Password) ?>
        </p>
    </section>
</body>

</html>