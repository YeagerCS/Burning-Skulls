<?php

require "config.php";

if(isset($_FILES["file"])){
    $filepath = $_FILES["file"]["tmp_name"];
    $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
    $filetype = finfo_file($fileInfo, $filepath);
    finfo_close($fileInfo);

    $allowed = [
        "image/png" => "png",
        "image/jpeg" => "jpeg",
        "image/jpg" => "jpg"
    ];

    if(!in_array($filetype, array_keys($allowed))){
        die("File not allowed");
    }

    $filename = $_FILES["file"]["name"];
    $targetDir = __DIR__ . "/uploads";

    $newPath = $targetDir . "/" . $filename;

    if(move_uploaded_file($filepath, $newPath)){
        $query = "INSERT INTO pictures (name) VALUES ('$filename')";
        $query = mysqli_query($conn, $query);
    } else{
        return null;
    }
}