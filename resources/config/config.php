<?php

//create MySQL connection
$connection = mysqli_connect('localhost','root','','university');
$path='http://' .$_SERVER ['HTTP_HOST'].'/university';