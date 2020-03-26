<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php

        if(!isset($_SESSION['iduser'])){
            header("Location: ../controller/admin/login.php");
        }

        include("header.inc");
    ?>

</head>
<body>
    <h1 class="text-center">Admin</h1>
</body>
</html>

