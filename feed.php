
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
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$sql = "INSERT INTO questionary(name, email,feedback) VALUES ('$name', '$email', '$feedback')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}
echo "php file successfully executed";  
mysqli_close($conn);
?>