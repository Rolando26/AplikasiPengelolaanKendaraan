
<!DOCTYPE html>

<?php include "../conn.php"; ?>
<?php
session_start();
if(!isset($_SESSION['username'])){
  echo "<script>alert('Anda Belum Login.'); window.location = '../loginout.php'</script>";
}
if($_SESSION['level']!="user"){
  echo "<script>alert('Terjadi Ketidaksinkronisasi.'); window.location = '../loginout.php'</script>";
}
?>

<html>
  <?php include "head.php"; ?>
  <body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">

      <?php include "header.php"; ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include "menu.php"; ?>

<?php include "waktu.php"; ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Form
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>

          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">

              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title"></h3>
                  <!-- <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                <title>Form Peminjaman Kendaraan | SMK Cinta Kasih Tzu Chi</title>
        <meta charset="UTP-8">
        <meta name="viewport content="width=device-width, initial-scale=1.0">
        <style>
         .garistepi {
                    height:80%;
                    border: 4px solid gray;
                    width:100%;
                }
                
                body{
                    color:black;
                    font-size:140%;
                   
                }
                     
                     .wow{
                           width:127.7%;
                               }

                            
                .almt{

                        width:128%;
                }


                .tjuan{
                    width:128%;
                }
                
                
                .kgt{
                    width:128%;
                }

                    .tmptst{
                        width:128%;
                    }
                
                .wktust{
                    width:128%;
                }

                .peserta{
                    width:128%;
                }

                .tu{
                    width:80%;
                }
                
                .telp{
                    margin-left:10%;
                }

                .telp1{
                    width:25%;
                    margin-left:0.1%;
                     transform:translate(1.7%,-15%);
                }

                .tabel{
                    transform:translate(0%,390%);
                }

                .masuk{
             
                    height:150%;
                    transform:translate(280%,0%);
                    background-color:#00FF7F;
                }

                .reset{
                     
                        background-color:#FF4500;
                         transform:translate(400%,0%);

                }
                
                .sampai{
                        transform:translate(-300%,0%);
                        width:20px;
                    }

                    .sampai2{
                            transform:translate(107%,0%);
                    }
                    
                .sampe{
                        transform:translate(135%,0%);
                
                }

                
                
                /* END OF CSS  FOR WEBSITE*/
                
                
                 @media screen and (max-width:800px){
                 
                 .garistepi {
                    height:80%;
                    border: 4px solid gray;
                    width:100%;
                }
                
                body{
                    color:black;
                    font-size:150%;
                   
                }
                     
                     .wow{
                           width:127.7%;
                               }

                            
                .almt{

                        width:128%;
                }


                .tjuan{
                    width:128%;
                }
                
                
                .kgt{
                    width:128%;
                }

                    .tmptst{
                        width:128%;
                    }
                
                .wktust{
                    width:128%;
                }

                .peserta{
                    width:128%;
                }

                .tu{
                    width:80%;
                }
                
                .telp{
                    margin-left:10%;
                }

                .telp1{
                    width:25%;
                    margin-left:0.1%;
                     transform:translate(1.7%,-15%);
                }

                .tabel{
                    transform:translate(0%,390%);
                }

                .masuk{
             
                    height:60%;
                    transform:translate(-570%,10%);
                    background-color:#00FF7F;
                }

                .reset{
                     
                        background-color:#FF4500;
                         transform:translate(-95%,0%);

                }
                
                .sampai{
                        transform:translate(-300%,0%);
                        width:20px;
                    }

                    .sampai2{
                            transform:translate(107%,0%);
                                 }
                    
                .sampe{
                        transform:translate(135%,0%);
                
                            }
        
                 }
                 
                 
                  @media screen and (max-width:500px){
                        
                        
                        
                        .garistepi {
                    height:80%;
                    border: 4px solid gray;
                    width:100%;
                }
                
                body{
                    color:black;
                    font-size:150%;
                   
                }
                     
                     .wow{
                           width:127.7%;
                               }

                            
                .almt{

                        width:128%;
                }


                .tjuan{
                    width:128%;
                }
                
                
                .kgt{
                    width:128%;
                }

                    .tmptst{
                        width:128%;
                    }
                
                .wktust{
                    width:128%;
                }

                .peserta{
                    width:128%;
                }

                .tu{
                    width:80%;
                }
                
                .telp{
                    margin-left:10%;
                }

                .telp1{
                    width:25%;
                    margin-left:0.1%;
                     transform:translate(1.7%,-15%);
                }

                .tabel{
                    transform:translate(0%,390%);
                }

                .masuk{
             
                    height:60%;
                    transform:translate(-495%,98%);
                    background-color:#00FF7F;
                }

                .reset{
                     
                        background-color:#FF4500;
                         transform:translate(-5%,0%);

                }
                
                .sampai{
                        transform:translate(-300%,0%);
                        width:20px;
                    }

                    .sampai2{
                            transform:translate(107%,0%);
                    }
                    
                .sampe{
                        transform:translate(135%,0%);
                
                }
                
                 
                        
                  }
                   
                   
                   
                   /*END OF 500PX */ 
                 @media screen and (max-width:400px){
                 
                        .garistepi {
                    height:80%;
                    border: 4px solid gray;
                    width:100%;
                }
                
                body{
                    color:black;
                    font-size:150%;
                   
                }
                     
                     .wow{
                           width:127.7%;
                               }

                            
                .almt{

                        width:128%;
                }


                .tjuan{
                    width:128%;
                }
                
                
                .kgt{
                    width:128%;
                }

                    .tmptst{
                        width:128%;
                    }
                
                .wktust{
                    width:128%;
                }

                .peserta{
                    width:128%;
                }

                .tu{
                    width:80%;
                }
                
                .telp{
                    margin-left:10%;
                }

                .telp1{
                    width:25%;
                    margin-left:0.1%;
                     transform:translate(1.7%,-15%);
                }

                .tabel{
                    transform:translate(0%,390%);
                }

                .masuk{
             
                    height:60%;
                    transform:translate(-240%,78%);
                    background-color:#00FF7F;
                }

                .reset{
                     
                        background-color:#FF4500;
                         transform:translate(12%,0%);

                }
                
                .sampai{
                        transform:translate(-300%,0%);
                        width:20px;
                    }

                    .sampai2{
                            transform:translate(107%,0%);
                    }
                    
                .sampe{
                        transform:translate(135%,0%);
                
                }
                
                 
                 
                 }
                 
            
        </style>
    </head>

    <body bgcolor=#222d32>
                  <?php
                     $today=date("d/M/Y");
                    ?>
            
        <?php
               include 'koneksi.php';
               echo"<form method=POST action=proses.php>";
               echo"<div class=garistepi>
              
                           <div class=judul style=margin-left:2%;margin-top:1%>
                               <u>Formulir Peminjaman Kendaraan Operasional</u>
                               <span style=margin-left:50%>Tanggal : $today</span>
                           </div>
                                   <br>
                                
                           <div style=margin-left:0.5%>
                               Nama Pemohon : <input type='text' name='nama' placeholder='Masukkan Nama' style=padding:0.6% required> 
                              <br><br>
                               No. Telp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  <input class=telp1 type=number name='no_telp' placeholder='No.telp' required>
                           
                               
                           </div>
                               
   
                           <div style=margin-left:0.5%>
                                   <br>
                                   Bagian Sekolah / Unit 
                                 <span style=margin-left:10%> TK  <input type=checkbox name=bagian value=tk> </span>
                                 <span style=margin-left:4%> SD  <input type=checkbox name=bagian value=sd> </span>
                                 <span style=margin-left:4%> SMP  <input type=checkbox name=bagian value=smp> </span>
                                 <span style=margin-left:3.5%> SMA & SMK  <input type=checkbox name=bagian value=sma/k> </span>
                           </div>
                           <br>
                           <div style=color:red;margin-left:0.5%;><b>NOTE:PASTIKAN ANDA CHECKLIST SALAH SATU </b> </div>
                               
                               <br>
                               <hr size=2% color=gray>
   
                           <div style=margin-left:0.5%>
                               <span>Jenis Kendaraan :</span>
                               <span style=margin-left:3%>Avanza <input type=checkbox name=jenis value=avanza></span> &nbsp;&nbsp;&nbsp;&nbsp; | 
                               <span style=margin-left:3%>APV <input type=checkbox name=jenis value=apv></span>&nbsp;&nbsp;&nbsp;&nbsp; |
                               <span style=margin-left:3%>Mini Bus 20 Seat <input type=checkbox name=jenis value=bus20seat></span> &nbsp;&nbsp;&nbsp;&nbsp;|
                               <span style=margin-left:3%>Mini Bus 45 Seat <input type=checkbox name=jenis value=bus45seat></span> 
                           </div>
                           <br>
                           <div style=color:red;margin-left:0.5%;><b>NOTE:PASTIKAN ANDA CHECKLIST SALAH SATU </b> </div>
                               <hr size=2% color=gray>
                               <table border=0>
                           <tr>
                        
                               <td>Hari / Tanggal</td>
                               <td>:</td>
                               <td><input class=wow type=date name=haritgl  required></td>
                               <td></td>
                               <td></td>
                               <td></td>
   
                           </tr>                  
   
                           <tr>
                               <td>Alamat</td>
                               <td>:</td>
                               <td><input class=almt type=text name=alamat required></td>
   
                               <td></td>
                               <td></td>
                               <td></td>
   
                               
                           </tr>
                         
                           <tr>
                               <td>Tempat Standby</td>
                               <td>:</td>
                               <td><input class=tmptst type=text name=tempatstandby required></td>
   
                               <td></td>
                               <td></td>
                               <td></td>
   
                              
                           </tr>
   
                           <tr>
                               <td>Waktu Standby</td>
                               <td>:</td>
                               <td><input type=time name=waktustandby required></td>
                           </tr>
                               
                                   <tr>
                                   <td>Kegiatan</td>
                                       <td>:</td>
                                        <td><input class=kgt type=text name=kegiatan required></td>
                                   </tr>
   
                                   <tr>
                                   <td>Jumlah Peserta</td>
                                   <td>:</td>
                                   <td><input class=peserta type=text name=jumlahpeserta required></td>
                                   </tr>
                           <tr>    
                               <td>Waktu</td>
                               <td>:&nbsp;</td>
                               <td><input type=time name=waktuawal width=20px required>
                               
                                <tr>
                                
                                <td></td>
                                <td></td>
                                <td></td>
                                
                                        <tr>
                                        <td class=sampe>s/d</td>
                                        </tr>
                                    <tr>
                                        <td class=sampai2><input type=time name=waktuakhir></td>
                                    </tr>
                           </tr>
                              
                           <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           
                           <td><input class=masuk type=submit value=Submit>
                            <input class=reset type=reset value=Reset> </td>
                           </tr>
                           
                        </table>
                    </form>
                   ";
                ?>
                </div><!-- /.box-body -->
                <!-- <div class="box-footer clearfix no-border">
                  <a href="#" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Tambah Admin</a>
                </div> -->
              </div><!-- /.box -->

            </section><!-- /.Left col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "footer.php"; ?>

      <?php include "sidecontrol.php"; ?>
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="../plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
  </body>
</html>
