<?php
 session_start();
 if (isset($_SESSION['id_admin'])){
	header("Location:admin/index.php");
}
 include_once "config/myConnect.php";
?>
<!DOCTYPE html>
<html>
<?php
       include_once 'layout/header.php';
?>
<body>
<section class="container-fluid">
	<section class="row justify-content-center">
		<section class="col-12 col-sm-6 col-md-3">
		
		<?php 
		$page = 'login';
		if(isset($_GET['page'])){
			$page = $_GET['page'];
		}
		switch($page){
			case 'login':
			include_once 'pages/login.php';
			break;
			case 'register':
			include_once 'pages/register.php';
		    break;
			default:
			echo "<h1>404 not found. <a href='index.php'>Back to home</a></h1>";
			break;
		}
		
        ?>
	</section>
	</section>
	
	</section>

<?php include_once 'layout/script.php'; ?>





</body>
</html>