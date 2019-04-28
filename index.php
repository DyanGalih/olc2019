<?php

include "data.php";
/*
echo "<pre>";
var_dump($contentList);
echo "</pre>";
*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
    <link rel="stylesheet" href="assets/css/default.css">
</head>
<body>
<h1>This is my first blog</h1>
<a href="blog_form.php">Input Blog</a>
<br/>
<table>
    <thead>
    <tr>
        <th>
            No.
        </th>
        <th>
            Title
        </th>
        <th>
            Description
        </th>
        <th>
            Content
        </th>
        <th>
            Date Time
        </th>
        <th>
            Action
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(isset($contentList)) {
        for ($i = 0; $i < count($contentList); $i++) {
            /*
             * Start loop
             */
            ?>
            <tr>
                <td>
                    <?php echo $i + 1; ?>
                </td>
                <td>
                    <?php echo $contentList[$i]['title'] ?>
                </td>
                <td>
                    <?php echo $contentList[$i]['description'] ?>
                </td>
                <td>
                    <?php echo $contentList[$i]['content'] ?>
                </td>
                <td>
                    <?php echo $contentList[$i]['date_time'] ?>
                </td>
                <td>
                    <a href="#"> Ubah </a> | <a href="#"> Hapus </a>
                </td>
            </tr>
            <?php
            /*
             * end loop
             */
        }
    }
    ?>
    </tbody>
</table>
<script>

</script>
</body>
</html>