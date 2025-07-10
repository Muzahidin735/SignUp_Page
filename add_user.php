<?php
$id = -1;
$sql = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
if ($result)
{
    if ($row = mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
    }
    mysqli_free_result($result);
}
$id = $id + 1;
$stmt = $conn->prepare("INSERT INTO Users (id, Useremail, Userpass) VALUES (?, ?, ?)");
$stmt->bind_param("iss",$id, $useremail, $userpass);

if ($stmt->execute()) {
    include_once 'send_email.php';
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
?>