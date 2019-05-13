<?php
include "conn.php";

if(!isset($_GET['id'])) {
    $sql = "insert into content(title, description, content, date_time) values (?, ?, ? ,now())";
    
    $stmt = $con->prepare($sql);
    
    $stmt->bind_param("sss", $title, $description, $content);
}else{
    $sql = "UPDATE content SET title=?, description=?, content=?, date_time=NOW() WHERE id= ?";
    
    $stmt = $con->prepare($sql);
    
    $stmt->bind_param("sssi", $title, $description, $content, $id);
    
    $id = $_GET['id'];
}

$title = $_POST['title'];
$description = $_POST['description'];
$content = $_POST['content'];

$stmt->execute();

header('Location: http://localhost/olc');