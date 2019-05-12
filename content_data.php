<?php
include "conn.php";

$sql ="select `id`, `title`, `description` AS `desc`, `content`, `date_time` from content";

if(isset($_GET['id'])){
    $sql .= " WHERE id = ?";
    
    //$sql = $sql . " WHERE id = ?";
    $stmt = $con->prepare($sql);
    
    $stmt->bind_param("i", $id);
    
    $stmt->execute();
    
    $contentList = [];
    
    while($row = $stmt->fetch()) {
        $contentList[] = $row;
    }
    
    print_r($contentList);
    
}else{
    $result = $con->query($sql);
    
    $contentList = [];
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $content = [];
            $content['id'] = $row['id'];
            $content['title'] = $row['title'];
            $content['description'] = $row['desc'];
            $content['content'] = $row['content'];
            $content['date_time'] = $row['date_time'];
            $contentList[] = $content;
        }
//    echo "<pre>";
//    print_r($contentList);
//    echo "</pre>";
    } else {
        echo "0 results";
    }
}


$con->close();