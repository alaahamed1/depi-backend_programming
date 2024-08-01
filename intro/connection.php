<?php
if (isset($_POST['name'])) {
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $phone = $_POST['user_pass'];

    // database (my_project) doesn't exist yet
    $connection = mysqli_connect('localhost','root','','my_project');
    $sql = "INSERT INTO `contact` (`name`, `email`, `phone`) VALUES ('$name','$email','$phone')";
    mysqli_query($connection,$sql);
}
?>