<?php
include "conn_db.php";
$useremail = htmlspecialchars($_POST['user_email']);
$userpass = htmlspecialchars($_POST['user_pass']);
$confirm_pass = htmlspecialchars($_POST['confirm_pass']);

include "find_user.php";
if ($found)
{
    echo "User already Exist\n";
}
else
{
    if ($userpass != $confirm_pass)
    {
        echo "Password does not match\n";
    }
    else
    {
        include "add_user.php";
    }
}
$conn->close();
?>