	<?php
		include ('connect.php');
		
	$name = $_POST['txtname'];
	$phone = $_POST['txtphone'];
	$email = $_POST['txtemail'];
	$diachi = $_POST['txtemail'];

	

	$sql = "insert into du_lieu(hoten,sdt,email,diachi) values(:hoten, :phone, :email, :diachi)";

	$pre =$con->prepare($sql);
	$pre->bindParam(":hoten",$name,PDO::PARAM_STR);
	$pre->bindParam(":phone",$phone,PDO::PARAM_INT);
	$pre->bindParam(":email",$email,PDO::PARAM_STR);
	$pre->bindParam(":diachi",$diachi,PDO::PARAM_STR);

	$pre->execute();

	$con = null;
	$pre = null;

	header('Location :formthongtin.php');
	?>
