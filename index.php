<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploader</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/7/7c/Fortnite_F_lettermark_logo.png">
    <script src="script.js" defer></script>
    <script src="light.js" defer></script>
</head>
<body>
    <div id="wrapper">
        <form action="upload.php" method="POST" enctype="multipart/form-data" id="form">
            <label for="file" id="lblFile">
                <input type="file" name="file" id="file" required>
                <button class="disable" id="chfil">Choose File</button>
            </label>
            <input type="submit" value="Release Image" style="float: right" class="disable">
        </form><br>
        <header>
            <a href="clear" style="float:right">Clear Canvas</a>
            <h1>Chasper</h1>
        </header>
        <div id="container">
            <?php
                require "config.php";
                $query = "SELECT * FROM pictures";
                $query = mysqli_query($conn, $query);

                while($data = $query->fetch_assoc()){
                    echo "
                        <div >
                            <img src='uploads/" . $data["name"] . "'><br>
                            <a href='delete?id=" . $data["id"] . "' id='del'>
                                <button id='trash'>Delete</button>
                            </a>
                        </div>
                    ";
                }
            ?>
            
        </div>
    </div>
</body>
</html>