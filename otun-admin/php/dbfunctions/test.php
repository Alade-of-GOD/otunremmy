<?php
    require_once ('connect.inc.php');
	  	$caller_name  = $_POST['caller_name'];
		$caller_no   = $_POST['caller_no'];
		$dialled_no = $_POST['dialled_no'];
	 	$callType  = $_POST['callType'];
	 	$date  = $_POST['date'];
		$start_time   = $_POST['start_time'];
		$end_time = $_POST['end_time'];
	 	$time = $_POST['time'];
	 	$amount  = $_POST['amount'];
		$call_no  = $_POST['call_no'];
		$account = $_POST['account'];
	 	$reserved = $_POST['reserved'];
	 	$debit  = $_POST['debit'];
		$credit   = $_POST['credit'];
		$description = $_POST['description'];

	 	$query = "INSERT INTO `newTable` (callerName, callerNo, dialledNo, callType, `date`, start_Time, end_Time, duration, `Time`, amount, callNo, Account, Reserved, Debit, Credit, Description) VALUES ( '".mysqli_real_escape_string($con, $caller_name)."', '".mysqli_real_escape_string($con, $caller_no)."', '".mysqli_real_escape_string($con, $dialled_no)."', '".mysqli_real_escape_string($con, $callType)."',
        '".mysqli_real_escape_string($con, $date)."', '".mysqli_real_escape_string($con, $start_time)."', 
        '".mysqli_real_escape_string($con, $end_time)."','".mysqli_real_escape_string($con, $time)."','".mysqli_real_escape_string($con, $amount)."','".mysqli_real_escape_string($con, $call_no)."','".mysqli_real_escape_string($con, $account)."', '".mysqli_real_escape_string($con, $reserved)."', '".mysqli_real_escape_string($con, $debit)."','".mysqli_real_escape_string($con, $credit)."','".mysqli_real_escape_string($con, $description)."')";

			if ($result = $db->query($query)) {
				echo "correct";
			echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
		}
		else {
			echo "<script type= 'text/javascript'>
			alert('Error: " . $query . "<br>" . $db->error."');</script>";
		}



// close connection
	mysqli_close($db);
?>
