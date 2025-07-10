<!-- process.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*
$useremail = htmlspecialchars($_POST['user_email']);
$userpass = htmlspecialchars($_POST['user_pass']);
$confirmpass = htmlspecialchars($_POST['confirm_pass']);

if ($userpass != $confirmpass)
{
    echo "Password did not matched\n";
}
else
{
    include 'find_user.php';
    include 'add_user.php';
}

*/

// Close statement and connection
//echo "Hello, " . $userpass. "! Welcome to the dynamic page.";
//$conn->close();
?>
