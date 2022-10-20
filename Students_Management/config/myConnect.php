<?php
//Ket noi csdl
$conn = mysqli_connect('127.0.0.1', 'root','', 'project_students_management') or die("Can't connect database");

if ($conn){
    mysqli_set_charset($conn,'utf8');
}
else
{
    echo "Can't connect database";
    exit();
}
?>