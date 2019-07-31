<div class="row">
	<div class="col-sm-12">				    
		<div class="widget-box transparent">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					<i class="ace-icon fa fa-book orange"></i>
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
					<div style="margin-bottom:20px;" class="row">
						<div style="text-align:right;" class="span12">
							<a class="btn btn-xs btn-inverse" href="<?php echo base_url();?>metode/add"><span class="icon-plus"></span><i class="ace-icon fa fa-plus bigger-120 white"></i></a>
						</div>
					</div>
	<?php if($this->session->flashdata('success')) { ?>
	                    <div class="alert alert-success alert-dismissible fade in" role="alert">
	                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                      </button>
	                      <?php echo $this->session->flashdata('success'); ?>
	                    </div> 
	 <?php } ?>
					<table id="sample-table-2" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th style="width:30px;">No</th>
								<th>Tahun Ajaran</th>
								<th>Kompetensi Penilaian</th>
								<th>Nama Metode</th>
								<th style="width:100px;">Action</th>
							</tr>
						</thead>
							
						<tbody>
	<?php
			$no = 1;
			foreach($metode->result_array() as $data) { ?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $data['periode_aktif']; ?></td>
								<td><?php echo $data['kompetensi_penilaian']; ?></td>
								<td><?php echo $data['nama_metode_penilaian']; ?></td>
								
								<td style="text-align:center;">
									<div class="hidden-sm hidden-xs action-buttons">
										<a class="green" href="<?php echo base_url().'metode/edit/'.$data['id_metode']; ?>" onclick="return confirm('Yakin ingin rubah data ?');">
											<i class="ace-icon fa fa-pencil bigger-130"></i>
										</a>

										<a class="red" href="<?php echo base_url().'metode/hapus/'.$data['id_metode']; ?>" onclick="return confirm('Yakin ingin hapus data ?');">
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
</div>