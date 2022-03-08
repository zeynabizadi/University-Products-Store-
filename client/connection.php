<?php

function check_connection($hostname,$username,$password)
{
    //    $connect=mysqli_connect('localhost','root','');
    $connect = mysqli_connect ('localhost','username','password');
    if (!$connect){
        echo'could not connect:'.(mysqli_connect_error());
        exit();

    }else{
        return $connect;
    }
}
?>
