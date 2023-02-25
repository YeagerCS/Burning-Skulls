<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/7/7c/Fortnite_F_lettermark_logo.png">
    <style>
        body{
            background-color: black;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            height: 80vh;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1{
            font-size: 75px;
        }

        a{
            font-size: 30px;
            color: red;
        }

        a:hover{
            color: rgba(255, 0, 0, .4)
        }

        a:visited{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        require "config.php";
        
        $id = $_GET["id"];


        $query = "DELETE FROM pictures WHERE id=$id";
        $query = mysqli_query($conn, $query);
    ?>
    <h1>Deleted Successfully.</h1>
    <a href="/">Back</a>
</body>
</html>