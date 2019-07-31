<div class="span12">					    
	<div class="widget-box">
		<div class="widget-header header-color-blue">
			<h5 class="bigger lighter">
				<i class="icon-table"></i>
				<?php echo $judul; ?>
			</h5>
		</div>
		<div class="widget-body">
			<div class="widget-main">
				<div style="margin-bottom:20px;" class="row">
					<div style="text-align:right;" class="span12">
						<a class="btn btn-small btn-pink" href="<?php echo base_url();?>user/add"><span class="icon-plus"></span>Tambah Data</a>
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
							<th style="width:50px;">No</th>
							<th>Nama Cabang</th>
							<th>Nama User</th>
							<th>Jabatan</th>
							<th>Username</th>
							<th>Password</th>	
							<th>Level</th>	
							<th style="width:220px;">Action</th>
						</tr>
					</thead>

					<tbody>
<?php
		$no = 1;
		foreach($user->result_array() as $data) { ?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['nama_cabang']; ?></td>
							<td><?php echo $data['nama_user']; ?></td>
							<td><?php echo $data['jabatan']; ?></td>
							<td><?php echo $data['username']; ?></td>
							<td><?php echo $data['password']; ?></td>
							<td><?php echo $data['level']; ?></td>
							<td style="text-align:center;">
								<a class="btn btn-small btn-primary" href="<?php echo base_url().'user/edit/'.$data['id_user']; ?>"><span class="icon-edit"></span>Edit</a>
								<a class="btn btn-small btn-danger" href="<?php echo base_url().'user/hapus/'.$data['id_user']; ?>" onclick="return confirm('Yakin ingin hapus data ?');"><span class="icon-trash"></span>Hapus</a>
							</td>
						</tr>
<?php 	$no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>