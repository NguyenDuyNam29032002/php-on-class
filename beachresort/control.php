<?php
include('connect.php');
class data
{
    function insert_contact($name, $email, $subject, $mess)
    {
        global $conn;
        $sql = "INSERT INTO beach_contact (name, email, subject, mess)
            VALUES ('$name', '$email', '$subject', '$mess')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
 }
