<?php
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "test";
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}
$name = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from users where name='$name' AND password='$password'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}
if (mysqli_num_rows($result) > 0) {
    echo "Login successful";
} else {
    echo "Username and password do not match";
}
mysqli_close($conn);
?>
