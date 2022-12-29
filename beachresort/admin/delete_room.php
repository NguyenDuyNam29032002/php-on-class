<?php
include('admin_control.php');
$get_data = new data();
$delete = $get_data->delete_room($_GET['del']);
if ($delete) header('Location: admin_room.php');
else
    echo "xoa khong thanh cong";
