<?php
    include("../jollibe/connect.php");
    $conn=MoKetNoi();
    if($conn->connect_error) 
        {
            echo "kết nối thất bại với database";
        }
        $sql=" CREATE DATABASE IF NOT EXISTS JOLLIBE";
    if(mysqli_query($conn,$sql))
    {
        echo "Tạo thành công database";
    }
    else
    {
        echo "Database thất bại".mysqli_error($conn);
    }
    mysqli_select_db($conn,"JOLLIBE");
DongKetNoi($conn)  
?>