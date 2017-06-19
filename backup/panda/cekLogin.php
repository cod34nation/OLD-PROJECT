<?php
include "koneksi.php";


session_start();

$email=$_POST['email'];
$password=$_POST['password'];







$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);


if(empty($email))
{
	
	echo "<script> alert (Username belum diisi</script>";
	


}else if(empty ($password))
{
	echo "<script> alert ('password belum diisi')</script>";
	

}
else 
{

	
	$login=mysql_query("SELECT * FROM user WHERE email='$email' and password='$password'");
	$admin=mysql_query("select * from admin where email='$email' and password='$password'");


	if(mysql_num_rows($login)==1)
	{
		
		$_SESSION['email']=$email;

		$_SESSION['password']=$password;

	
		header("location:member.php");
	}

	elseif(mysql_num_rows($admin)==1){
		
		$e=mysql_fetch_array($admin);
		$_SESSION['$email']=$admin;
		
		

header("location:formAdmin.php");
}
	else
	{
		echo"<script>alert('Username atau Password salah')</script>";
		echo"<meta http-equiv='refresh' content='1 url=login.php'>";
	}

}
?>
