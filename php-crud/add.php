<?php


if(isset($_POST['name'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $imgname = $_FILES['img']['name'];
    $tmp = $_FILES['img']['tmp_name'];


    // database connection
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'crud';
    $connection = mysqli_connect($server,$username,$password,$db);
    $sql = "INSERT INTO `add` (`name`,`price`,`img`) VALUE ('$name','$price','$imgname')";
    mysqli_query($connection,$sql);
    // upload img
    move_uploaded_file($tmp,"img/".$imgname);


    // extention
    // $ext = pathinfo($imgname, PATHINFO_EXTENSION);
    // $ext = explode("/",$_FILES['img']['type'][1]);
    // image size
    $size = getimagesize($imgname);
    $width = $size[0];
    $height = $size[1];
    // image mime type
    $mime = mime_content_type($imgname);
    // image type
    $type = exif_imagetype($imgname);
    // image orientation
    $orientation = exif_read_data($imgname, 'Orientation');
    // image resolution
    $resolution = exif_read_data($imgname, 'ResolutionUnit');
    $resolution_x = exif_read_data($imgname, 'XResolution');
    $resolution_y = exif_read_data($imgname, 'YResolution');
    // image date
    $date = exif_read_data($imgname, 'DateTime');

    // image description
    header('Location: show.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation using native php</title>
</head>

<body>
    <form action="add.php" method="post" enctype="multipart/form-data">
        <label>Name</label>
        <input type="text" name="name" required>
        <label>Price</label>
        <input type="text" name='price' required>
        <input type="file" name="img" multiple>
        <input type="submit" value="send">
    </form>
</body>
</html>