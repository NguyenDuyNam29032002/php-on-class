<?php
include('connect.php');

class data
{
    function select_contact()
    {
        global $conn;
        $sql = "SELECT * FROM beach_contact";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    function delete_contact($id_contact)
    {
        global $conn;
        $sql = "DELETE FROM beach_contact WHERE id = '$id_contact'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    function insert_room($name, $picture, $price, $description)
    {
        global $conn;
        $sql = "INSERT INTO beach_room (name, picture, price, description)
        VALUES ('$name', '$picture', '$price', '$description')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    function select_room()
    {
        global $conn;
        $sql = "SELECT * FROM beach_room";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    function select_room_id($id_room)
    {
        global $conn;
        $sql = "SELECT * FROM beach_room WHERE id = '$id_room'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function delete_room($id_room)
    {
        global $conn;
        $sql = "DELETE FROM beach_room WHERE id_room = '$id_room'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}
