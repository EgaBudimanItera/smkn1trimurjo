<div style="margin-bottom:20px;" class="row">
	<div style="text-align:right;" class="span12">
		<a class="btn btn-xs btn-inverse" href="<?php echo base_url();?>Man_keahlian/Add_keahlian_mapel"><span class="icon-plus"></span><i class="ace-icon fa fa-plus bigger-120 white"></i></a>
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
<table id="sample-table-3" style="width: 100%;" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th style="width:30px;">No</th>
			<th>Kode Mapel</th>
			<th>Nama Mata Pelajaran</th>
			<th>keahlian</th>
			<th style="width:100px;">Action</th>
		</tr>
	</thead>
		
	<tbody>
<?php
$no = 1;
foreach($jurmapel->result_array() as $data) { ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data['kode_mapel']; ?></td>
			<td><?php echo $data['nama_mapel']; ?></td>
			<td><?php echo $data['nama_keahlian']; ?></td>
			
			<td style="text-align:center;">
				<div class="hidden-sm hidden-xs action-buttons">
					<a class="green" href="<?php echo base_url().'Man_keahlian/Edit_keahlian_mapel/'.$data['id_mapel_keahlian']; ?>" onclick="return confirm('Yakin ingin rubah data ?');">
						<i class="ace-icon fa fa-pencil bigger-130"></i>
					</a>

					<a class="red" href="<?php echo base_url().'Man_keahlian/hapus_keahmapel/'.$data['id_mapel_keahlian']; ?>" onclick="return confirm('Yakin ingin hapus data ?');">
						<i class="ace-icon fa fa-trash-o bigger-130"></i>
					</a>
				</div>
			</td>
		</tr>
<?php 	
$no++; } ?>


	</tbody>
</table>