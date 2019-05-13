<?php
include "conn.php";

$sql ="select `id`, `title`, `description` AS `desc`, `content`, `date_time` from content";

$contentList = [];

if(isset($_GET['id'])){
    $sql .= " WHERE id = ?";
    
    $stmt = $con->stmt_init();
    
    $stmt = $con->prepare($sql);
    
    $stmt->bind_param("i", $id);
    
    $id = $_GET['id'];
    
    $stmt->execute();
    
    $stmt->bind_result($id, $title, $desc, $content, $date_time);
    
    /* fetch values */
    while ($stmt->fetch()) {
        $contentData = [];
        $contentData['id'] = $id;
        $contentData['title'] = $title;
        $contentData['description'] = $desc;
        $contentData['content'] = $content;
        $contentData['date_time'] = $date_time;
        $contentList[] = $contentData;
    }
    
}else {
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
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