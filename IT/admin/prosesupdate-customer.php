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
include ("koneksi.php");

    $id=$_POST['id'];
    $haritgl=$_POST['haritgl'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $bagian=$_POST['bagian'];
    $tujuan=$_POST['tujuan'];
    $kegiatan=$_POST['kegiatan'];
    $jumlahpeserta=$_POST['jumlahpeserta'];
    $waktuawal = $_POST['waktuawal'];
    $waktuakhir = $_POST['waktuakhir'];
    $keterangan = $_POST['keterangan'];

  
    $query = "UPDATE customer SET id='$id', haritgl='$haritgl',
    nama='$nama',alamat='$alamat',bagian='$bagian',tujuan='$tujuan',kegiatan='$kegiatan',jumlahpeserta='$jumlahpeserta',waktuawal='$waktuawal',waktuakhir='$waktuakhir',keterangan='$keterangan' WHERE id='$id'";
    
    $test=mysqli_query($conn, $query);

    if($query){
        header("Location:customer.php");
    }

?>