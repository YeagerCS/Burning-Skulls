<?php

$conn = mysqli_connect("192.168.1.132", "root", "", "casp");

if(mysqli_connect_errno()){
    echo "An Error occured " . mysqli_connect_errno();
}