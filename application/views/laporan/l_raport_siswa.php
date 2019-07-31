<form action="<?php echo base_url(); ?>laporan/pencarian_raport/" method="get">
	<div class="col-sm-3">
		<label>TA</label>
		<div class="row">
			<div class="col-xs-3 col-sm-12">
				<select class="form-control" id="id_ajaran" name="id_ajaran" readonly>
					<?php foreach ($ajaran_aktif->result_array() as $d) { ?>
					<option value="<?php echo $d['id_ajaran']; ?>"><?php echo $d['periode_aktif']; ?> Semester <?php if($d['smt']=="1"){echo "Ganjil";} if($d['smt']=="2"){echo "Genap";} ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
	</div>
	<div class="col-sm-2">
		<label>Kelas</label>
		<div class="row">
			<div class="col-xs-3 col-sm-12">
				<select class="form-control" id="id_kelas" name="id_kelas">
					<option value=""></option>
					<?php
					$id_siswa = $this->session->userdata("username"); $q = $this->db->query("SELECT a.id_kelas, b.kode_kelas FROM
				(SELECT * FROM tbl_romkel)a,
				(SELECT * FROM tbl_kelas)b,
				(SELECT * FROM tbl_siswa)c
				WHERE a.id_kelas=b.id_kelas AND a.id_siswa=c.id_siswa AND c.nis='$id_siswa'"); foreach ($q->result_array() as $d) { ?>
					<option value="<?php echo $d['id_kelas']; ?>"><?php echo $d['kode_kelas']; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
	</div>
	<div class="col-sm-1">
		<div class="row" style="margin-top:25px;">
			<div class="col-xs-3 col-sm-12">
				<button class="btn btn-primary form-control"><i class="fa fa-search"></i></button>
			</div>
		</div>
	</div>
</form>