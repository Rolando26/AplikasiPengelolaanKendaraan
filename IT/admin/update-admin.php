<?php include "../conn.php";?>
<?php
session_start();
if(!isset($_SESSION['username'])){
  echo "<script>alert('Anda Belum Login.'); window.location = '../loginout.php'</script>";
}
if($_SESSION['level']!="admin"){
  echo "<script>alert('Terjadi Ketidaksinkronisasi.'); window.location = '../loginout.php'</script>";
}
?>

<?php

$user_id    = $_POST['user_id'];
$username   = $_POST['username'];
$password  = $_POST['password'];
//$password   = sha1($password1);
$fullname   = $_POST['fullname'];
$email      =$_POST['email'];
$alamat     =$_POST['alamat'];
$no_hp      = $_POST['no_hp'];
$level      = $_POST['level'];



$query = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', fullname='$fullname', email='$email', alamat='$alamat',no_hp='$no_hp', level='$level' WHERE user_id='$user_id'")or die(mysql_error());
if ($query){
header('location:admin.php');	
} else {
	echo "gagal";
    }
?>