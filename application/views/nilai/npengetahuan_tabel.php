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
						<a class="btn btn-small btn-pink" href="<?php echo base_url();?>nilai/add_pengetahuan"><span class="icon-plus"></span>Tambah Data</a>
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
				<table id="sample-table-2" width="100%" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th style="width:10px;">No</th>
							<th>NIS/NISN</th>
							<th>Nama Siswa</th>
							<th>Kode Kelas</th>
							<th>Mata Pelajaran</th>							
							<th>UH1</th>
							<th>UH2</th>
							<th>UH3</th>
							<th>UH4</th>
							<th>UH5</th>				
							<th>Harian</th>							
							<th>Proyek</th>
							<th>Latihan</th>
							<th>UTS</th>
							<th>UAS</th>	
							<th>Akhir</th>
							<th>Predikat</th>
							<th style="width:220px;">Action</th>
						</tr>
					</thead>
					<tbody>
<?php
		$no = 1;
		foreach($nilai->result_array() as $data) { ?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['nis']; ?></td>
							<td><?php echo $data['nama_siswa']; ?></td>
							<td><?php echo $data['kode_kelas']; ?></td>
							<td><?php echo $data['kode_mapel']; ?></td>

							

							<td><?php echo $data['uh1']; ?></td>
							<td><?php echo $data['uh2']; ?></td>
							<td><?php echo $data['uh3']; ?></td>
							<td><?php echo $data['uh4']; ?></td>
							<td><?php echo $data['uh5']; ?></td>

							<td><?php echo $data['harian']; ?></td>
							<td><?php echo $data['proyek']; ?></td>
							<td><?php echo $data['portofolio']; ?></td>
							<td><?php echo $data['uts']; ?></td>
							<td><?php echo $data['uas']; ?></td>

							<td><?php echo $data['akhir']; ?></td>
							<td><?php echo $data['predikat']; ?></td>
							<td style="text-align:center;">
								<a href="<?php echo base_url().'nilai/edit/'.$data['id_nilai']; ?>">Edit</a>
								<a href="<?php echo base_url().'nilai/hapus/'.$data['id_nilai']; ?>" onclick="return confirm('Yakin ingin hapus data ?');">Hapus</a>
							</td>
						</tr>
<?php 	$no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>