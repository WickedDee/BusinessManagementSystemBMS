<?php
	include '../database/conn.php';


	$input = $_GET['customers'];
	$query 	= mysqli_query($conn, "SELECT * FROM `customer` WHERE `cname` LIKE '%{$input}%'");
	if($query){
	  while($row = $result->fetch_assoc()) {
		echo "<option value=" . $fetch['cname'] . ">";
		} 
	}




	// if(isset($_POST['customer'])){
	// 	$input = $_GET['customer'];
	// 	// $input 	= mysqli_real_escape_string($db, $_POST['customer']);	
	// 	$query 	= mysqli_query($conn, "SELECT * FROM `customer` WHERE `cname` LIKE '%{$input}%'");
	// 	if($query){
	// 		$c_data = array();
	// 		while($fetch = mysqli_fetch_array($query)){
	// 			$data['id'] = $fetch['customer_id'];
	// 			$data['customer'] = $fetch['cname'];
	// 			array_push($c_data, $data);
	// 			// echo "<option value=" . $fetch['cname'] . ">";
	// 			// echo " <option value='". $fetch['cname'] . ">";
	// 		}
	// 	}
	// 	echo json_encode($c_data);
	// }
	
?>