<?php
if ($_POST[ekspor]==unduh){
include'koneksi.php';
$no=1;
$tanggal=date('D d-M-Y');
$unduh=mysql_query("SELECT * FROM pembuat ORDER BY kode_pembuat ASC");
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=Laporan_Data_Pembuat.doc");

?>
 <table border="0" align="center" bgcolor="#0099FF">
  <tr> 
   <td bgcolor="#0099FF"><font size="+2"><strong>Laporan : Data Inventaris</strong></font></td>
  </tr>
  <tr>
   <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF">
   <td><hr />
   <h4 align="center"><u>DATA PEMBUAT</u></h4>
   <?php while ($u=mysql_fetch_array($unduh)){ ?>
<b>
- Kode Penulis : <?php echo"$u[kode_pembuat]"; ?><br />
<hr /></b>
   <table border="0" width="600">
  <tr>
   <td width="120" bgcolor="#0099FF">Nama</td>
   <td width="470" bgcolor="#00CCFF"><?php echo"$u[nama_pembuat]"; ?></td>
  </tr>
  <tr>
   <td bgcolor="#0099FF">Alamat</td>
   <td bgcolor="#00CCFF"><?php echo"$u[alamat]"; ?></td>
  </tr>
  <tr>
   <td bgcolor="#0099FF">Email</td>
   <td bgcolor="#00CCFF"><?php echo"$u[email]"; ?></td>
  </tr>
  <tr>
   <td bgcolor="#0099FF">Keterangan</td>
   <td bgcolor="#00CCFF"><?php echo"$u[keterangan]"; ?></td>
  </tr>
  <tr>
   <td colspan="3">Tanggal Cetak : <?php echo"$tanggal"; ?></td>
  </tr>
 </table>
 <hr />
<br /><br />
<?php } }?>
   </td>
  </tr>
 </table>

<?php if ($_POST[ekspor]==cetak){
include'koneksi.php';
$no=1;
$tanggal=date('D d-M-Y');
$cetak=mysql_query("SELECT * FROM pembuat ORDER BY kode_pembuat ASC");?>
                    
 <table border="0" align="center" bgcolor="#0099FF">
  <tr> 
   <td bgcolor="#0099FF"><font size="+2"><strong>Laporan : Data Inventaris</strong></font></td>
  </tr>
  <tr>
   <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#ffffff">
   <td ><hr />
   <h4 align="center"><u>DATA PEMBUAT</u></h4>
   <?php while ($c=mysql_fetch_array($cetak)){ ?>
<b>
- Kode Penulis : <?php echo"$c[kode_pembuat]"; ?><br />
<hr /></b>
   <table border="0" width="600">
  <tr>
   <td width="120" bgcolor="#0099FF">Nama</td>
   <td width="470" bgcolor="#00CCFF"><?php echo"$c[nama_pembuat]"; ?></td>
  </tr>
  <tr>
   <td bgcolor="#0099FF">Alamat</td>
   <td bgcolor="#00CCFF"><?php echo"$c[alamat]"; ?></td>
  </tr>
  <tr>
   <td bgcolor="#0099FF">Email</td>
   <td bgcolor="#00CCFF"><?php echo"$c[email]"; ?></td>
  </tr>
  <tr>
   <td bgcolor="#0099FF">Keterangan</td>
   <td bgcolor="#00CCFF"><?php echo"$c[keterangan]"; ?></td>
  </tr>
  <tr>
   <td colspan="3">Tanggal Cetak : <?php echo"$tanggal"; ?></td>
  </tr>
 </table>
 <hr />
<br /><br />
  <?php } }?>
   </td>
  </tr>
 </table>