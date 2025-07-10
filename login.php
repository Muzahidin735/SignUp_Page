<?php
include "conn_db.php";
$useremail = htmlspecialchars($_POST['user_email']);
$userpass = htmlspecialchars($_POST['user_pass']);
include "find_user.php";
if ($found)
{
    if ($row['Userpass'] == $userpass)
    {
        echo "Welcome to the website\n";
    }
    else
    {
        echo "Wrong passwod\n";
    }
}
else
{
    echo "No does not user\n";
}
$conn->close();
?>