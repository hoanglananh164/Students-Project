<?php
$id = $_GET['id'];
$sql = "DELETE FROM tbl_students WHERE id_Stu = $id";
$query = mysqli_query($conn, $sql);
if($query)
{
    echo "SUCCESS";
}
else
{
    echo "ERROR DELETE";
}
return ($query);
?>