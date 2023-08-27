<html>
    <style>
        body
        {
              background-color:#fff;
        }
        table 
        {
            background-color:powderblue;
            position:relative;
            left:44%;
            top:40%;
        }
        </style>

    <body>
        <table cellspacing="0" cellpadding="7" border="2">
<tr>
     <td>name</td>
     <td>email</td>
     <td>feedback</td>
</tr>
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
$sql="select * from questionary";
$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "failed".mysqli_error();
    exit;
}
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['feedback']."</td></tr>";
}
mysqli_close($conn);
?>
</body>
</html>