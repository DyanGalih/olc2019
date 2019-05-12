<?php
include "conn.php";

$sql = "insert into content(title, description, content, date_time) values (?, ?, ? ,now())";

$stmt = $con->prepare($sql);

$stmt->bind_param("sss", $title,$description, $content);

$title = $_POST['title'];
$description = $_POST['description'];
$content = $_POST['content'];

$stmt->execute();

header('Location: http://localhost/olc');

//var_dump($_POST);
//echo "<br />===================================<br/>";
//print_r($_POST);