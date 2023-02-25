<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Verification</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/7/7c/Fortnite_F_lettermark_logo.png">
    <style>
        body{
            background-color: black;
            display: flex;
            height: 50vh;
            justify-content: center;
            align-items: center;
            zoom: 150%;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            flex-direction: column;
        }

        input[type=submit]{
            background-color: white;
            color: black;
            border-radius: 1em;
            width: 60px;
            height: 25px;
            cursor: pointer;
        }

        input[type=submit]:hover{
            background-color: rgba(255, 255, 255, .6);
        }

        input[type=password]{
            background-color: black;
            color: white;
            border: 2px solid white;
        }

        a:hover{
            color: rgba(255, 0, 0, .4)
        }

        a:visited{
            color: red;
        }

        a{
            color: red;
        }

    </style>
</head>
<?php
    require "config.php";

    $select = "SELECT pass FROM admin";
    $select = mysqli_query($conn, $select);
    $pass = $select->fetch_column();

    if(isset($_POST["password"])){
        if(password_verify($_POST["password"], $pass)){
            $query = "TRUNCATE TABLE pictures";
            $query = mysqli_query($conn, $query);
            
            foreach(glob("uploads" . '/*') as $file){
                if(is_file($file)){
                    unlink($file);
                }
            }

            echo "<h1>Success</h1>";
            echo "<a href='/'>Back</a>";
        } else{
            echo "<h1>Wrong password</h1>";
            echo "<a href='clear'>Back</a>";
        }
    } else{
?>
<body>
    <form action="" method="POST">
        <label for="password">Admin Password</label><br>
        <input type="password" name="password" id="password">
        <input type="submit" value="Clear">
    </form><br>
    <a href="/">Back</a>
</body>
<?php
    }
?>
</html>