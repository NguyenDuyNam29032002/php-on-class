<?php

include('connect.php');

class data
{
    function insert_contact($name, $email, $subject, $messages)
    {
        global $conn;
        $sql = "insert into contact(name, email, subject, messages) values ('$name', '$email', '$subject', '$messages')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}
?>

    

