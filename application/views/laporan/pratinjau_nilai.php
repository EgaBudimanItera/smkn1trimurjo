<div class="row">
	<div class="col-sm-12">				    
		<div class="widget-box transparent">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					<i class="ace-icon fa fa-book"></i>
					<?php echo $judul; ?>
				</h4>

				<div class="widget-toolbar">
					<a href="#" data-action="collapse">
						<i class="ace-icon fa fa-chevron-up"></i>
					</a>
				</div>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<div class="col-sm-12">
						<?php $q_judul = $this->db->query("SELECT DISTINCT h.nama_sekolah,h.alamat as alamat_sekolah,i.*,a.nama_keahlian,f.kode_kelas,j.nama_guru AS wali_kelas,b.nama_siswa,b.nis,g.periode_aktif,g.smt FROM
(SELECT * FROM tbl_keahlian)a,
(SELECT * FROM tbl_siswa)b,
(SELECT * FROM nilai)c,
(SELECT * FROM tbl_keahlian_siswa)d,
(SELECT * FROM tbl_romkel)e,
(SELECT * FROM tbl_kelas)f,
(SELECT * FROM tbl_ajaran)g,
(SELECT * FROM tbl_profil_sekolah)h,
(SELECT * FROM tbl_guru)i,
(SELECT * FROM tbl_guru)j
WHERE c.id_siswa=b.id_siswa AND c.id_ajaran=g.id_ajaran AND d.id_siswa=b.id_siswa AND d.id_keahlian=a.id_keahlian AND e.id_kelas=f.id_kelas AND e.id_siswa=b.id_siswa AND h.kepsek=i.nip AND f.wali_kelas=j.nip AND c.id_ajaran='$id_ajaran' AND c.id_siswa='$id_siswa'");
				if ($q_judul->num_rows() >0) {

					foreach ($q_judul->result_array() as $d) {
					?>
						<h3><?php echo "Pratinjau Nilai Untuk Siswa <b>".$d['nama_siswa']." </b> Tahun Ajaran ".$d['periode_aktif']." Semester ".$d['smt']; ?> <a href="<?php echo base_url(); ?>laporanpdf/cetaknilai/<?php echo $id_ajaran.'/'.$id_siswa; ?>"><i class="fa fa-print"></i></a></h3>

						<table>
							<tbody>
							<tr>
							<td>Nama Sekolah</td>
							<td>&nbsp;&nbsp;:</td>
							<td>&nbsp;&nbsp;<?php echo $d['nama_sekolah']; ?></td>
							<td width="60%">&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>Keahlian</td>
							<td>&nbsp;&nbsp;:</td>
							<td>&nbsp;&nbsp;<?php echo $d['nama_keahlian']; ?></td>
							</tr>
							<tr>
							<td>Alamat</td>
							<td>&nbsp;&nbsp;:</td>
							<td>&nbsp;&nbsp;<?php echo $d['alamat_sekolah']; ?></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>Semester</td>
							<td>&nbsp;&nbsp;:</td>
							<td>&nbsp;&nbsp;<?php if($d['smt']=="1"){echo "Ganjil";} if($d['smt']=="2"){echo "Genap";} ?></td>
							</tr>
							<tr>
							<td>Nama Siswa</td>
							<td>&nbsp;&nbsp;:</td>
							<td>&nbsp;&nbsp;<?php echo $d['nama_siswa']; ?></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>TA</td>
							<td>&nbsp;&nbsp;:</td>
							<td>&nbsp;&nbsp;<?php echo $d['periode_aktif']; ?></td>
							</tr>
							<tr>
							<td>No. Induk/NISN</td>
							<td>&nbsp;&nbsp;:</td>
							<td>&nbsp;&nbsp;<?php echo $d['nis']; ?></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							</tr>
							<tr>
							<td>Kelas</td>
							<td>&nbsp;&nbsp;:</td>
							<td>&nbsp;&nbsp;<?php echo $d['kode_kelas']; ?></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							</tr>
							</tbody>
						</table>
						<br>

						<?php $q_isi = $this->db->query("SELECT b.nama_siswa,g.periode_aktif,g.smt,h.ket_kelompok,f.nama_mapel,f.kb, c.npengetahuan_akhir, c.npengetahuan_predikat,c.npengetahuan_deskripsi, c.nketerampilan_deskripsi, c.nketerampilan_akhir,c.nketerampilan_predikat FROM
(SELECT * FROM tbl_detail_mapel)a,
(SELECT * FROM tbl_siswa)b,
(SELECT * FROM nilai)c,
(SELECT * FROM tbl_mapel_keahlian)e,
(SELECT * FROM tbl_mapel)f,
(SELECT * FROM tbl_ajaran)g,
(SELECT * FROM tbl_kelompok)h
WHERE c.id_detail_mapel=a.id_detail_mapel AND c.id_siswa=b.id_siswa 
AND a.id_mapel_keahlian=e.id_mapel_keahlian AND e.id_mapel=f.id_mapel AND c.id_ajaran=g.id_ajaran AND f.id_kelompok=h.id_kelompok
AND c.id_ajaran='$id_ajaran' AND c.id_siswa='$id_siswa'"); $kelompok = array(); ?>
						<table border="1" style="width: 100%;border-color: #ccc;" class="table table-striped table-bordered table-hover">
							<tbody>
								<tr style="font-weight: bold;text-align: center;">
									<td style="width: 25px;" rowspan="2">No</td>
									<td style="width: 46px;" rowspan="2">Mapel</td>
									<td style="width: 195px;text-align: center;" colspan="4">Pengetahuan</td>
									<td style="width: 196px;text-align: center;" colspan="4">Keterampilan</td>
								</tr>
								<tr style="font-weight: bold;text-align: center;">
									<td style="width: 25px;">KKM</td>
									<td style="width: 47px;">Nilai</td>
									<td style="width: 58px;">predikat</td>
									<td style="width: 65px;">Deskripsi</td>
									<td style="width: 25px;">KKM</td>
									<td style="width: 47px;">Nilai</td>
									<td style="width: 59px;">Predikat</td>
									<td style="width: 65px;">Deskripsi</td>
								</tr>
							<?php foreach ($q_isi->result_array() as $row) {
								$kelompok[$row['ket_kelompok']] [] = $row;
							}
							foreach ($kelompok as $key => $values) { ?>
								<tr style="font-weight: bold;">
									<td colspan="10" style="width: 46px;"><?php echo $key; ?></td>
								</tr>
							<?php $no=1; foreach ($values as $value) { ?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $value['nama_mapel']; ?></td>
									<td><?php echo $value['kb']; ?></td>
									<td><?php echo $value['npengetahuan_akhir']; ?></td>
									<td><?php echo $value['npengetahuan_predikat']; ?></td>
									<td><?php echo $value['npengetahuan_deskripsi']; ?></td>
									<td><?php echo $value['kb']; ?></td>
									<td><?php echo $value['nketerampilan_akhir']; ?></td>
									<td><?php echo $value['nketerampilan_predikat']; ?></td>
									<td><?php echo $value['nketerampilan_deskripsi']; ?></td>
								</tr>
							<?php } } ?>
							</tbody>
							<table>
							<h5>Keterangan :</h5>
							<table border="1" style="width: 100%;border-color: #ccc;" class="table table-striped table-bordered table-hover tabel-kecil">
							<tbody>
								<tr style="font-weight: bold;text-align: center;">
									<td style="width: 46px;" rowspan="2">KKM</td>
									<td style="width: 195px;text-align: center;" colspan="4">Predikat</td>
									
								</tr>
							
						 <tr style="font-weight: bold;text-align: center;">
						 <td style="text-align: center; vertical-align: middle;">Kurang (D)</td>
						 <td style="text-align: center; vertical-align: middle;">Cukup(C)</td>
						 <td style="text-align: center; vertical-align: middle;">Baik (B)</td>
						 <td style="text-align: center; vertical-align: middle;">Sangat Baik (A)</td>
							</tr>
							<tr>
						<td style="text-align: center; vertical-align: middle;">63</td>
						<td style="text-align: center; vertical-align: middle;">< 63</td>
						<td style="text-align: center; vertical-align: middle;">63 - 75</td>
						<td style="text-align: center; vertical-align: middle;">76 - 88</td>
						<td style="text-align: center; vertical-align: middle;">89 - 100</td>			
						   </tr>
						<tr>
						<td style="text-align: center; vertical-align: middle;">64</td>
						<td style="text-align: center; vertical-align: middle;">< 64</td>
						<td style="text-align: center; vertical-align: middle;">64 - 76</td>
						<td style="text-align: center; vertical-align: middle;">77 - 88</td>
						<td style="text-align: center; vertical-align: middle;">89 - 100</td>			
						   </tr>
						<tr>
						<td style="text-align: center; vertical-align: middle;">65</td>
						<td style="text-align: center; vertical-align: middle;">< 65</td>
						<td style="text-align: center; vertical-align: middle;">65 - 76</td>
						<td style="text-align: center; vertical-align: middle;">77 - 88</td>
						<td style="text-align: center; vertical-align: middle;">89 - 100</td>			
						   </tr>
						<tr>
						<td style="text-align: center; vertical-align: middle;">68</td>
						<td style="text-align: center; vertical-align: middle;"> < 68 </td>
						<td style="text-align: center; vertical-align: middle;">68 - 78</td>
						<td style="text-align: center; vertical-align: middle;">79 - 89</td>
						<td style="text-align: center; vertical-align: middle;">90 - 100</td>			
						   </tr>
						 <tr>
						<td style="text-align: center; vertical-align: middle;">70</td>
						<td style="text-align: center; vertical-align: middle;">< 70</td>
						<td style="text-align: center; vertical-align: middle;">70 - 80</td>
						<td style="text-align: center; vertical-align: middle;">81 - 90</td>
						<td style="text-align: center; vertical-align: middle;">91 - 100</td>			
						   </tr>


									<body>

						<!-- Mengetahui -->
						<table width="100%" style="margin-top: 100px;">
							<tbody>
								<tr>
									<td width="6%">&nbsp;</td>
									<td width="30%">Mengetahui Orang Tua,</td>
									<td>&nbsp;</td>
									<td width="20%">Mengetahui Kepsek,</td>
									<td width="20%">&nbsp;</td>
									<td width="50%">Mengetahui Wali kelas,</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td height="90">&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>(___________)</td>
									<td>&nbsp;</td>
									<td>( <b><?php echo $d['nama_guru']; ?></b> )</td>
									<td>&nbsp;</td>
									<td>( <b><?php echo $d['wali_kelas']; ?></b> )</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
						<?php }  }else{// end ?>
						<div class="error-container">
							<div class="well">
								<h1 class="grey lighter smaller">
									<span class="blue bigger-125">
										<i class="ace-icon fa fa-sitemap"></i>
										Belum
									</span>
									Ada Nilai!
								</h1>

								<hr>
								<h3 class="lighter smaller">Maaf Untuk saat ini Belum Ada Nilai!</h3>
								<hr>
								<div class="space"></div>

								<div class="center">
									<a href="javascript:history.back()" class="btn btn-grey">
										<i class="ace-icon fa fa-arrow-left"></i>
										Go Back
									</a>

									<a href="<?php echo base_url(); ?>" class="btn btn-primary">
										<i class="ace-icon fa fa-tachometer"></i>
										Dashboard
									</a>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>