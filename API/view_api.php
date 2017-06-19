<?php
include 'API.php';
include 'Call.php';
$API = new API();
$Call = new Call($API);
$username = @$_POST['demo'];
$password = @$_POST['demo'];
// To Proses Login
$result = $Call->login($usernam, $password);
// output json
$json = json_encode($result);
// output string
echo $result;
?>
