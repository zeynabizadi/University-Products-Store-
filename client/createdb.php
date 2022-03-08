<?php 
require 'connection.php'
$connect=check_connection(hostname:'localhost',username:'root',password:'');

if(!mysqli_select_db($connect,database:'university')){

   $SQL='CREATE DATABASE university';

   if(!$result=mysqli_query($connect,$SQL)){
       echo 'query run unsuccessfully'  class=mysql_connect_error($connect);
   }
    else{
        echo 'university has exxists'
    }
}
mysqli_close($connect);                        
?>