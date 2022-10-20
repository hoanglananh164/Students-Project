<?php
$class = getAllClass();
if(isset($_GET['id'])){
	$id = $_GET['id'];
    $row = getStudents_id($id);
	
	if(isset($_POST['edit_students']))
{
	$name = $_POST['name'];
	$class_id = $_POST['class'];
	$phone_number = $_POST['phone'];
	$address = $_POST['address'];
	$edit = editStudents($id, $name, $class_id, $phone_number, $address);
	if($edit){
		echo "SUCCESS";
	}
	else{
		echo "ERROR UPDATE";
	}
	}
}
else
{
	header("Location:index.php");
}

 ?>
	<form action="" method="POST" role="form">
    <legend>Sửa thông tin học sinh</legend>
	<div class="form-group">
        <label for="">Họ tên<span style="color: red;">*</span></label>
        <input type="text" required class="form-control" name="name" placeholder="Họ tên học sinh..." value = "<?php echo $row['name']; ?>">
	</div>
    <div class="form-group">
		<label for="">Lớp<span style="color: red;">*</span></label>
		<select name="class" id="class" class="form-control">
		<?php 
		  foreach ($class as $val)
		  {
		 ?>
		  <option <?php if($val['classid'] == $row['class_id']) {echo "selected"; }?> value="<?php echo $val['classid']; ?>">
		  <?php echo $val['class']; ?>
		  </option>

        <?php
		  }
		?>
		</select>
	</div>

	<div class="form-group">
		<label for="">Số điện thoại<span style="color: red;">*</span></label>
		<input type="number" required class="form-control" name="phone" placeholder="098569789" value = "<?php echo $row['phone']; ?>">
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="mail" class="form-control" name="email" placeholder="students@gmail.com" value = "<?php echo $row['email']; ?>">
	</div>

	<div class="form-group">
		<label for="">Địa chỉ<span style="color: red;">*</span></label>
		<input type="text" required class="form-control" name="address" placeholder="Địa chỉ học sinh..." value = "<?php echo $row['address']; ?>">
	</div>

	<button type="submit" name="edit_students" class="btn btn-primary">
	Cập nhật
	</button>
	</form> 
