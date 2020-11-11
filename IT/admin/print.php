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
    
    $id=$_GET['id'];
    $ambil="SELECT * FROM customer WHERE id= $id";
    $query= mysqli_query($koneksi,$ambil);
    while($data=mysqli_fetch_array($query)){
        $id=$data['id'];
        $haritgl=$data['haritgl'];
        $nama=$data['nama'];
        $alamat=$data['alamat'];
        $bagian=$data['bagian'];
        $tujuan=$data['tujuan'];
        $kegiatan=$data['kegiatan'];
        $jumlahpeserta=$data['jumlahpeserta'];
       
    }


?>
            <style>

          

                .tgl1{
                    transform:translate(155%,0);
                }


                .tgl2{
                    transform:translate(150%,0);

                }

                body{
                    font-family:Arial;
                    font-weight:Bold;
                }

                .aju{
                    font-size:60%;
                }

                .tau{
                    font-size:60%;
                    margin-left:4.2%;
                }

                
                .GA{
                    font-size:60%;
                    margin-left:4.2%;
                }
                
                .setuju{
                    font-size:60%;
                    margin-left:4.2%;
                }

                .mohon{
                    font-size:55%;
                    margin-left:3.5%;
                    margin-top:12%;
                }

                
                .mohon1{
                    font-size:45%;
                    margin-left:3.5%;

                }
                
                .mohon2{
                    font-size:55%;
                    margin-left:28%;
                }
               
               .garis{
                   color:black;
                   height:1px;
               }
                





            </style>
            <?php  if ($_SESSION['level'] == 'admin'){ ?>
        <p align=center>
            <table>
            <td><img src=logo.jpg width=200px></td>
            <td><img src=kop.png width=400px></td>
            </table>
           
        </p>
                <hr class="garis">
        <table align=center width=40%>
        <font size=6>
        <tr>
        
            <td class=tgl1 width=35% align=right>
            Tanggal Dibuat  :
            </td>
            <td class=tgl2 width=25% align=right>
            <?php
            $today = date("d/M/Y");
            echo $today;
            ?>
            </td>
            </tr>
            </table>

            <br>
<!DOCTYPE html>
<html>
    <head>
      
        <meta charset="UTP-8">
        <style>
           
                
        </style>
    </head>

    <body>
                  <?php
                     $today=date("d/M/Y");
                    ?>
                <table>



                <?php  
                        $id = $_GET['id'];
                        $a=mysqli_query($koneksi, "SELECT * FROM customer WHERE id='$id'");
                        $b=mysqli_num_rows($a);
                      
                        
                        while ($rows=mysqli_fetch_array($a)){

                        
                  
                    echo"
                <p>
                  <tr style=font-size:150%>
                  <td>Nama Pemohon </td>
                  <td> : </td>
                  <td>".$rows['nama']."</td> 
                  </tr>

                  <tr style=font-size:150%>
                  <td>Tanggal </td>
                  <td> : </td>
                  <td>".$rows['haritgl']."</td> 
                  </tr>
                  
                  <tr style=font-size:150%>
                  <td>No. Telp </td>
                  <td> : </td>
                  <td>".$rows['no_telp']."</td> 
                  </tr>

                                
                  <tr style=font-size:150%>
                  <td>Unit</td>
                  <td> : </td>
                  <td>".$rows['bagian']."</td> 
                  </tr>
                  
                  <tr style=font-size:150%>
                  <td>Kegiatan </td>
                  <td> : </td>
                  <td>".$rows['kegiatan']."</td> 
                  </tr>

                  <tr style=font-size:150%>
                  <td>Jenis Kendaraan </td>
                  <td> : </td>
                  <td>".$rows['jenis']."</td> 
                  </tr>
                

                  <tr style=font-size:150%>
                  <td>Alamat Tujuan</td>
                  <td> : </td>
                  <td>".$rows['alamat']."</td> 
                  </tr>

                  <tr style=font-size:150%>
                  <td>Tempat Standby </td>
                  <td> : </td>
                  <td>".$rows['tempatstandby']."</td> 
                  </tr>

                  <tr style=font-size:150%>
                  <td>Waktu Standby </td>
                  <td> : </td>
                  <td>".$rows['waktustandby']."</td> 
                  </tr>

             
                
                  <tr style=font-size:150%>
                  <td>Jumlah Peserta </td>
                  <td> : </td>
                  <td>".$rows['jumlahpeserta']."</td> 
                  </tr>

                  <tr style=font-size:150%>
                  <td>Waktu Awal </td>
                  <td> : </td>
                  <td>".$rows['waktuawal']."</td> 
                  </tr>

                  <tr style=font-size:150%>
                    <td>Waktu Akhir </td>
                  <td> : </td>
                  <td>".$rows['waktuakhir']."</td> 
                  </tr>

                  <tr style=font-size:150%>
                    <td>Catatan</td>
                  <td> : </td>
               
                  </tr>

                </p>
                  ";
                }
                
          echo "</font> </table>";

  ?>    
  
                <br><br><br><br><br>
                <span class=aju> Diajukan oleh, </span>
                <span class=tau> Mengetahui Oleh, </span>
                <span class=GA> GA/ Bagian Umum </span>
                <span class=setuju> Disetujui Oleh, </span>

                <br><br>
            
                (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)  &nbsp;&nbsp;
                (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)    &nbsp;&nbsp;&nbsp;
                (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                <br><br>
                <span class=mohon> Pemohon </span>
                <span class=mohon1> Kepala Sekolah & DIKET Tata Usaha </span>
                <span class=mohon2> Direktur </span>
               
               
                </table>
                
         </body>
      </html>

</table>
<script>
		window.print();
	</script>

<?php } else { echo" <script> alert('Anda tidak memiliki akses!'); window.location ='customer.php' </script>";}?>

    
