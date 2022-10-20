<?php
if(isset($_POST['sm_login'])){
$user = $_POST['user'];
$passw = md5($_POST['passw']);

$sql = "SELECT * FROM tbl_users WHERE email = '$user' AND password = '$passw'";
//lấy ra thông tin người dùng có trùng khớp vs giá trị nhập vào hay ko?
$query = mysqli_query($conn, $sql);//thực thi câu lệnh
$nums = mysqli_num_rows($query);// in ra 1 bản ghi
//echo $nums;
$data = mysqli_fetch_assoc($query);// chứa thông tin người login
//echo"<pre>";
//print_r($data);
//echo"</pre>";
//die();     
if ($nums == 1)// đăng nhập thành công
{
    $_SESSION['id_admin'] = $data['id'];
    $_SESSION ['name_admin'] = $data['name'];
    header("Location: admin/index.php");
}
else{
    echo "Tài khoản đăng nhập không đúng!";
}

}

?>
<form class="form-container" action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" required name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" required name="passw" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" name="sm_login" class="btn btn-primary btn-block">Đăng nhập</button>
  <span>Nếu bạn chưa có tài khoản? <a href="index.php?page=register" style="color: red;">Đăng ký</a></span>

	</form>