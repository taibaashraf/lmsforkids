<?php
//$connection=mysqli_connect('localhost','root','','lms');
if(isset($_POST['login']))
{
	$username=$_POST['username1'];
	$password=$_POST['password1'];

	$username=mysqli_real_escape_string($connection,$username);
	$password=mysqli_real_escape_string($connection,$password);
	$query="SELECT * FROM user WHERE username1=' {$username}' ";
	$select_user_query=mysqli_query($connection,$query);
	if (!$select_user_query) {
		die("QUERY FAILED" .mysli_error($connection));
		# code...
	}
	while ($row =mysqli_fetch_array($select_user_query)) {
		echo $db_id=$row['user_id'];
		# code...
	}

}

?>
