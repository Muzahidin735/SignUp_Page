<?php
$id = -1;
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$found = false;
$row;
if ($result)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        if ($row['Useremail'] == $useremail)
        {
            $found = true;
            break;
        }
    }
    mysqli_free_result($result);
}
?>