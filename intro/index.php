<?php
@include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple form app.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="text" id="name" name="user_name" value=""/>
        <input type="email" id="email" name="user_email" value=""/>
        <input type="password" id="pass" name="user_pass" value=""/>
        <button type="submit">submit</button>
    </form>
</body>
</html>