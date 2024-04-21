<?php

$conn = mysqli_connect('localhost','root','','winn');

if(!$conn){

    echo ' Error:'. mysqli_connect_error();
}