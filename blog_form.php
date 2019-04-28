<!DOCTYPE html>
<html>
<head>
    <title>Input Blog</title>
</head>
<body>
<h1>Input Blog Form</h1>
<a href="index.php">List</a>
<br/>
<form action="save_blog.php" enctype="multipart/form-data" method="post">
    <table>
        <tbody>
        <tr>
            <th>
                Title
            </th>
            <td>
                <input type="text" name="title" value=""/>
            </td>
        </tr>
        <tr>
            <th>
                Description
            </th>
            <td>
                <textarea name="description" cols="50" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <th>
                Content
            </th>
            <td>
                <textarea name="content" cols="50" rows="20"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="reset" name="reset" value="Reset"/>
                <input type="submit" name="submit" value="Submit"/>
            </td>
        </tr>
        </tbody>
    </table>
</form>
</body>
</html>
