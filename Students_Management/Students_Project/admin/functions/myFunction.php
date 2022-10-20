<?php
function getAllStudents(){
    global $conn;
    $sql = "SELECT * FROM tbl_students, tbl_class WHERE tbl_students.class_id = tbl_class.classid ";  
    $query = mysqli_query($conn, $sql);
    
    $result = array();
    while ($data = mysqli_fetch_assoc($query)){
        $result[] = $data;
    }
    return $result;
}
//Lấy ra thông tin của lớp học
function getAllClass(){
    global $conn;
    $sql = "SELECT * FROM tbl_class";
    $query = mysqli_query($conn, $sql);
    $result = array();
    while ($data = mysqli_fetch_assoc($query)){
        $result[] = $data;
    }
    return $result;
}

//Thêm học sinh
function addStudents($name, $class_id, $phone_number, $email, $address){
    global $conn;
    $sql = "INSERT INTO tbl_students(name, class_id, phone_number, email, address) VALUES('$name', $class_id, '$phone_number', '$email', '$address')";
    $query = mysqli_query($conn, $sql);   
    return $query;
}

//Lấy thông tin học sinh qua id
function getStudents_id($id){
    global $conn;
    $sql = "SELECT * FROM tbl_students WHERE id_Stu = $id";
    $query = mysqli_query($conn, $sql); 
    return mysqli_fetch_assoc($query);
}
//Cập nhật thông tin học sinh
function editStudents($id, $name, $class_id, $phone_number, $address)
{
    global $conn;
    $sql = "UPDATE tbl_students
            SET name = '$name', class_id = $class_id, phone_number = '$phone_number', address = '$address' 
            WHERE id_Stu = $id";
    return mysqli_query($conn, $sql);
}

?>
