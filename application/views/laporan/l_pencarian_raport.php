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
						<table id="sample-table-2" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th style="width:50px;">No</th>
									<th>NIS</th>
									<th>Nama Siswa</th>							
									<th style="width:150px;">Action</th>
								</tr>
							</thead>
						<tbody>
		<?php
				$no = 1; foreach ($hasil_pencarian_raport->result_array() as $data) { ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $data['nis']; 			?></td>
									<td><?php echo $data['nama_siswa']; 	?></td>
									

									<td style="text-align:center;">
										<div class="hidden-sm hidden-xs action-buttons">
											<a class="green" href="<?php echo base_url().'laporan/pratinjau_nilai/'.$data['id_ajaran']."/".$data['id_siswa']; ?>">
												<i class="ace-icon fa fa-eye bigger-130"></i>
											</a>
										</div>
									</td>
								</tr>
		<?php 	$no++; } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>