<?php 
ini_set('display_errors', '1');
if (isset($_POST['your-name']) && isset($_POST['your-email']) && isset($_POST['your-message'])) {
	$name = $_POST['your-name']; 
	$sender = $_POST['your-email']; 
	$to = 'otunremmy@otunblog.com';
	$subject = $_POST['your-subject']; 
	$message = $_POST['your-message'];
	$headers = "From: ".$name."(".$sender. "): [otun-remmy-writes]\r\n";

	if (!mail($to, $subject, $message, $headers)){
    	echo '<script type="text/javascript">'; 
		echo 'alert("message sent successfully");'; 
		echo 'window.location.href = "../index.php";';
		echo '</script>';
    }
    else {
    	echo "not sent";
    }
}
?>
