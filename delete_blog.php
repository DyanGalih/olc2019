<?php

include "conn.php";

$sql = "delete from content where id = ?";

$stmt = $con->prepare($sql);

$stmt->bind_param("i", $id);

$id = $_GET['id'];

$stmt->execute();

header('Location: http://localhost/olc');