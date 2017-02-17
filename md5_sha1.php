<form action = 'md5_sha1.php' method = 'post'>
	Enter something: <input type = 'text' name = 'txt'></input>
	<button type = 'submit'>Encode</button>
</form>
<?php
	if(isset($_POST['txt']) && !empty($_POST['txt'])){
		$out = $_POST['txt'];
		$enc = md5(sha1($out));
		$up = strtoupper($enc);
		echo "'Encoded output is: '".$enc."'";
	}
?>