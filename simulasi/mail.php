<?php
error_reporting(0);

function rand_string( $length ) {
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	

	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}

	return $str;
}

include 'config.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$id = rand_string( 10 );
if (!isset($nama)) {
echo "Lengkap form";
}
elseif (!isset($email)) {
	echo "Lengkapi form";
} 
else {

	// cek apakah email sudah terdaftar
	$query = "SELECT email FROM user WHERE email='$email'";
	$find = mysql_query($query);

	if ($find && mysql_num_rows($find) > 0) {
		echo "user telah terdaftar";
	}
	else {
		$add = "insert into user set id='$id', name='$nama', email='$email', confirm='no'";
		$set = mysql_query($add);
		if ($set) {

		} else {

		}
		require_once('library/class.phpmailer.php'); //menginclude librari phpmailer

		$mail             = new PHPMailer();
		$body             = 
		"<body style='margin: 10px;'>
		<div style='width: 640px; font-family: Helvetica, sans-serif; font-size: 13px; padding:10px; line-height:150%; border:#eaeaea solid 10px;'>
		<br>
		<strong>Terima Kasih Telah Mendaftar</strong><br>
		<b>Nama Anda : </b>".$nama."<br>
		<b>Email : </b>".$email."<br>
		<br>
		</div>
		</body>";
		$body             = eregi_replace("[\]",'',$body);
		$mail->IsSMTP(); 	// menggunakan SMTP
		$mail->SMTPDebug  = 1;   // mengaktifkan debug SMTP

		$mail->SMTPAuth   = true;   // mengaktifkan Autentifikasi SMTP
		$mail->Host 	= '	mx1.idhostinger.com'; // Gunakan Ip Shared Address Hosting Anda
		$mail->Port       = 25;  // post gunakan port 25
		$mail->Username   = "afrizal@afrizal.esy.es"; // username email akun
		$mail->Password   = "aremafc87";        // password akun

		$mail->SetFrom('hello@mkhuda.com', 'Hello Afrizal');

		$mail->Subject    = "Hello";
		$mail->MsgHTML($body);

		$address = $email; //email tujuan
		$mail->AddAddress($address, "Hello (Afrizal)");

		if(!$mail->Send()) {
			echo "Oops, Mailer Error: " . $mail->ErrorInfo;
		} else {
			echo "Mail Sukses";
		}
	}

}

?>