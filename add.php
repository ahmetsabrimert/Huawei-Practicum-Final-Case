<?php 
$target = "images/"; 
$target = $target . basename( $_FILES['photo']['name']); 
$name=$_POST['name']; 
$email=$_POST['email']; 
$phone=$_POST['phone']; 
$pic=($_FILES['photo']['name']);

$servername = "10.10.40.199:3306";
$username = "root";
$password = "7136030Aa++";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO visitors (name , email, phone, photo)
VALUES ('$name', '$email', '$phone', '$pic')";

if ($conn->query($sql) === TRUE) {
    echo "Record successfully created ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)) 
{ 
echo "File ". basename( $_FILES['uploadedfile']
['name']). " has been successfully uploaded to the server and other records have been successfully entered into the database."; 
 } 
 else { 
 
echo "Error occurred while uploading the file"; 
 } 
?>
<p>
<a href="view.php">View Records</a>