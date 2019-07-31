<?php if($this->session->flashdata('success')) { ?>
    <div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <?php echo $this->session->flashdata('success'); ?>
    </div> 
<?php } ?>
<?php
	if ($this->session->userdata('hak_akses') =="Admin") {
		include 'd_admin.php';
	} 
	if ($this->session->userdata('hak_akses') =="Guru") {
		include 'd_guru.php';
	}
	if ($this->session->userdata('hak_akses') =="Siswa") {
		include 'd_siswa.php';
	}
?>