<?php
$class = getAllClass();
if(isset($_POST['add_students']))
{
 $name = $_POST['name'];
 $class_id = $_POST['class'];
 $phone_number = $_POST['phone'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 
$add = addStudents($name, $class_id, $phone_number, $email, $address);
//echo $name.''.$class_id.''.$phone.''.$email.''.$address;
if($add){
	
	echo " SUCCESS ";
}
else{
    echo "ERROR INSERT !";
}
}
?>
<form action="" method="POST" role="form">
<legend>Thêm thông tin học sinh</legend>
	
   
	<div class="form-group">
		<label for="">Họ tên<span style="color: red;">*</span></label>
		<input type="text" required class="form-control" name="name" placeholder="Họ tên học sinh..." value = "<?php if(isset($name)){echo $name; }?>">
	</div>

    <div class="form-group">
		<label for="">Lớp<span style="color: red;">*</span></label>
		<select name="class" id="class" class="form-control">
		<?php 
		  foreach ($class as $val)
		  {
		 ?>
		  <option value="<?php echo $val['classid']; ?>">
		  <?php echo $val['class']; ?>
		  </option>
        <?php
		  }
		?>
		</select>
	</div>

	<div class="form-group">
		<label for="">Số điện thoại<span style="color: red;">*</span></label>
		<input type="number" required class="form-control" name="phone" placeholder="098569789" value = "<?php if(isset($phone_number)){echo $phone_number; }?>">
	</div>

	<div class="form-group">
		<label for="">Email</label>
		<input type="mail" class="form-control" name="email" placeholder="students@gmail.com" value = "<?php if(isset($email)){echo $email; }?>">
	</div>

	<div class="form-group">
		<label for="">Địa chỉ<span style="color: red;">*</span></label>
		<input type="text" required class="form-control" name="address" placeholder="Địa chỉ học sinh..." value = "<?php if(isset($address)){echo $address; }?>">
	</div>

	<button type="submit" name="add_students" class="btn btn-primary">
	Thêm mới
	</button>
	
   <form>