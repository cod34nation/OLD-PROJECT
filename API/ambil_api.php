

<?php
$app_id=$_POST['app_id'];
$secret_key=$_POST['Y4NTidF6EJ7nDMytB9Km40kzjsn5mlOS'];
$username$_POST['username'];
$password=$_POST['password'];
	if(!empty($_POST['tag'])){
		$json_url = 'https://api.instagram.com/v1/tags/'.$_POST['tag'].'/media/recent?access_token=141970.467ede5.edbc9c37472d41b790e1db8948793f11';
		$json = file_get_contents($json_url);
		$links = json_decode($json);

		foreach( $links->data as $pecah ) {
			echo '<a href = "'.$pecah->link.'" target="blank"><img src ="'.$pecah->images->thumbnail->url.'"/></a>';
		}
	}
?>
