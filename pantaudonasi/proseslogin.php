    <?php
session_start();
include 'koneksi.php';
$userm = $_POST['usernamemember'];
$passm = $_POST['passwordmember'];


// query untuk mendapatkan record dari username
$hasil = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$userm' and password='$passm'");
$data = mysqli_fetch_array($hasil);
// cek kesesuaian password
if ($userm == $data['username'] && $passm==$data['password'])
{
    // menyimpan username dan level ke dalam session
    $_SESSION['idus'] = $data['id_user'];  
    header('location:user/index.php');
}
else
        {
            echo "Gagal Login";
        }

?>