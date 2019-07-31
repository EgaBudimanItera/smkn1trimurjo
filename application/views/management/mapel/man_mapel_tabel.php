<div class="row">
	<div class="col-sm-12">				    
		<div class="widget-box transparent">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					<i class="ace-icon fa fa-users orange"></i>
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
							<a class="btn btn-xs btn-inverse" href="<?php echo base_url();?>Man_mapel/add"><span class="icon-plus"></span><i class="ace-icon fa fa-plus bigger-120 white"></i></a>
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
								<th>Keahlian</th>
								<th>Kode Mata Pelajaran</th>
								<th>Nama Mata Pelajaran</th>
								<th>Semester</th>
								<th>Kelas X</th>
								<th>Kelas XI</th>
								<th>Kelas XII</th>
								<th style="width:100px;">Action</th>
							</tr>
						</thead>
							
						<tbody>
	<?php
			$no = 1;
			foreach($detail_mapel->result_array() as $data) { ?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $data['nama_keahlian']; ?></td>
								<td><?php echo $data['kode_mapel']; ?></td>
								<td><?php echo $data['nama_mapel']; ?></td>
								<td><?php if ($data['semester']=='1') {
									echo "Ganjil";
								}else{echo "Genap";} ?></td>
								<td><?php if ($data['kelas_x']=='1') {
									echo "<span class='label label-sm label-success'>Aktif</span>";
								}else{echo "<span class='label label-sm label-danger'>Non Aktif</span>";} ?></td>
								<td><?php if ($data['kelas_xi']=='1') {
									echo "<span class='label label-sm label-success'>Aktif</span>";
								}else{echo "<span class='label label-sm label-danger'>Non Aktif</span>";} ?></td>
								<td><?php if ($data['kelas_xii']=='1') {
									echo "<span class='label label-sm label-success'>Aktif</span>";
								}else{echo "<span class='label label-sm label-danger'>Non Aktif</span>";} ?></td>
								
								<td style="text-align:center;">
									<div class="hidden-sm hidden-xs action-buttons">
										<a class="green" href="<?php echo base_url().'Man_mapel/edit/'.$data['id_detail_mapel']; ?>" onclick="return confirm('Yakin ingin rubah data ?');">
											<i class="ace-icon fa fa-pencil bigger-130"></i>
										</a>

										<a class="red" href="<?php echo base_url().'Man_mapel/hapus/'.$data['id_detail_mapel']; ?>" onclick="return confirm('Yakin ingin hapus data ?');">
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