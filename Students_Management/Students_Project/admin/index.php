<?php
session_start();
if(!isset($_SESSION['id_admin']))
	{
		header("Location:../index.php");// khi đăng nhập ko thành công thì ra ngoài login
	}
  include_once '../config/myConnect.php';
  include_once 'functions/myFunction.php';
?>
<!DOCTYPE html>
<html>

<?php include_once 'layout/header.php'; ?>
<body>
	<!-- Navigation -->
  <?php include_once 'layout/nav.php'; ?>
   <!--End header -->
    
    <!--Banner -->
    <?php include_once 'layout/slides.php';?>
  <!--End Banner -->

  <!--MainTools -->
   
  <?php include_once 'layout/sidebar.php'; ?>

   <div class="col-md-9">
  <?php
  $page = 'list-students';
  if(isset($_GET['page'])){
	  $page = $_GET['page'];
  }
  if (file_exists('pages/'.$page.'.php')) {
    include_once 'pages/'.$page.'.php';
  }
  else{
    echo "<h1 style='color: red;'>404 not found. <a href='index.php'>Back to home!</a></h1>";
  }
  ?>
   </div>
   <!-- End Main Tools-->
  
  </main>

   <!--Footer-->

    <?php include_once 'layout/footer.php'; ?>
     <!--End Footer-->
	<script src="../js/jquery-3.5.1.slim.min.js" ></script>
	<script src="../js/bootstrap.bundle.min.js" ></script> 
</body>
</html>