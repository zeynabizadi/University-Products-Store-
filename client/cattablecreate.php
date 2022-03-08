<?php
require 'connection.php';
$connect=check_connection('localhost','root','');

if(mysqli_select_db($connect,'university')){

    $QUERY='create table category (id int auto_increment,
                                 name TEXT,
                                 lastname TEXT,
                                 phone VARCHAR(11),
                                 email VARCHAR(11),
                                 password VARCHAR(8),
                                  primary key(id))';

    if (mysqli_query($connect ,$QUERY)){
        echo'query run succsessfully';
    }else{
        echo'error:'.mysqli_error($connect);
    }
}