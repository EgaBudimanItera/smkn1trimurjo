<div class="row">
	<div class="col-sm-12">				    
		<div class="widget-box transparent collapsed">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					<i class="ace-icon fa fa-book orange"></i>
					Data Nilai Keterampilan
				</h4>

				<div class="widget-toolbar">
					<a href="#" data-action="collapse">
						<i class="ace-icon fa fa-chevron-up"></i>
					</a>
				</div>
			</div>
			<div class="widget-body">
				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th style="width:30px;">No</th>
							<th>NIS</th>
							<th>NAMA</th>
							<th>Mapel</th>
							<th>Nilai Akhir</th>
							<th>Predikat</th>
							<th style="width:100px;">Action</th>
						</tr>
					</thead>
						
					<tbody>
<?php
		$no = 1;
		foreach($nilai_keterampilan->result_array() as $data) { ?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['nis']; ?></td>
							<td><?php echo $data['nama_siswa']; ?></td>
							<td><?php echo $data['nama_mapel']; ?></td>
							<td><?php echo $data['akhir']; ?></td>
							<td><?php echo $data['predikat']; ?></td>
							
							<td style="text-align:center;">
								<div class="hidden-sm hidden-xs action-buttons">
									<a class="red" href="<?php echo base_url().'penilaian/hapus_keterampilan/'.$data['id_nilai']; ?>" onclick="return confirm('Yakin ingin hapus data ?');">
										<i class="ace-icon fa fa-trash-o bigger-130"></i>
									</a>
								</div>
							</td>
						</tr>
	<?php 	
		$no++; } ?>


					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>