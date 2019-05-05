<?php
$con = mysqli_connect("localhost","root","mysql","myblog");

// Check connection
if (mysqli_connect_errno())
{
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}else{
    die("Connection Success");
}