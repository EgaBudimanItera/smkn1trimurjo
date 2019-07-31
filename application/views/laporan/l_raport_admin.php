<form action="<?php echo base_url(); ?>laporan/pencarian_raport/" method="get">
	<div class="col-sm-3">
		<label>TA</label>
		<div class="row">
			<div class="col-xs-3 col-sm-12">
				<select class="form-control" id="id_ajaran" name="id_ajaran">
					<option value=""></option>
					<?php foreach ($ajaran->result_array() as $d) { ?>
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
					<?php $q = $this->db->query("SELECT * FROM tbl_kelas"); foreach ($q->result_array() as $d) { ?>
					<option value="<?php echo $d['id_kelas']; ?>"><?php echo $d['kode_kelas'].' Tingkat '.$d['tingkat']; ?></option>
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