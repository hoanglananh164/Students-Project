<?php
  $students = getAllStudents();
?>

<div class="col-md-9">
	<h4>DANH SÁCH HỌC SINH</h4>
	
<table class="table table-striped" method="">
	  <thead>
	    <tr>
		  <th scope="col">STT</th>
	      <th scope="col">Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Phone</th>
		  <th scope="col">Address</th>
		  <th scope="col">Class</th>
		  <th scope="col">Action</th>
		  
	    </tr>
	  </thead>
	  <tbody>
		  <?php
		    $stt = 0;
			foreach ($students as $val){
			$stt += 1;
		
		  ?>
	    <tr>
	      <td><?php echo $stt; ?></td>
	      <td><?php echo $val['name']; ?></td>
		  <td><?php echo $val['email']; ?></td>
		  <td><?php echo $val['phone_number']; ?></td>
	      <td><?php echo $val['address']; ?></td>
		  <td><?php echo $val['class']; ?></td>		
		  <td>
			<a href="index.php?page=edit-students&id=<?php echo $val['id_Stu']; ?>">
				<button class="btn btn-primary">Sửa</button>
			</a>
			<a  href="index.php?page=delete-students&id=<?php echo $val['id_Stu']; ?>">
				<button class="btn btn-danger">Xóa</button>
			</a>
		  </td>
	    </tr>
		<?php
			}		 
		?>
	  </tbody>
	</table>		
</div>
