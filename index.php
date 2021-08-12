<h1> Frontend APP for Contact Number </h1>
<h1> Deepak Sharma - 9418174240 </h1>
<html>
<head>
<title>Docker Sample App</title>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$servername = "172.18.0.2";
$username = "root";
$password = "arla1983";
$dbname = "docker";
$name=$_POST["name"];
$phone=$_POST["phone"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO emp (name, phone)
VALUES ('".$name."', '".$phone."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
</head>
<body>
        <form action="index.php" method="POST">
                <input type="text" name="name">
                <input type="text" name="phone">
                <input type="submit" name="submit">
        </form>
</body>
</html>
