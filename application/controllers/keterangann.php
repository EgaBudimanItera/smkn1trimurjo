<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tampilkan Data</title>
</head>
<body>
<table width="700" border="1" cellspacing="0" cellpadding="0">
<h2>Menampilkan Data Dari Database Dengan PHP</h2>
<tr>
<td width="25" bgcolor="#999999" align="center">No</div></td>
<td width="189" bgcolor="#999999" align="center">Nama</div></td>
<td width="156" bgcolor="#999999" align="center">Kelas</div></td>
<td width="301" bgcolor="#999999" align="center">Jurusan</div></td>
</tr>
<?php
include "controller/koneksi.php";
$no = 1;
$siswa = $link->query("SELECT * FROM keterangan");
while($data = $siswa->fetch_array()){
?>
<tr>
<td align="center"><?php echo $no ?></td>
<td align="center"><?php echo $data['nama'];?></td>
<td align="center"><?php echo $data['kelas'];?></td>
<td align="center"><?php echo $data['jurusan'];?></td>
</tr>
<?php $no++; } ?>
</table>
</body>
</html>