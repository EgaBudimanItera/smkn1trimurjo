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
<br>
<hr>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<hr>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Simple Column Chart with Index Labels"
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",
		dataPoints: [
			{ x: 10, y: 71 },
			{ x: 20, y: 55 },
			{ x: 30, y: 50 },
			{ x: 40, y: 65 },
			{ x: 50, y: 92, indexLabel: "Highest" },
			{ x: 60, y: 68 },
			{ x: 70, y: 38 },
			{ x: 80, y: 71 },
			{ x: 90, y: 54 },
			{ x: 100, y: 60 },
			{ x: 110, y: 36 },
			{ x: 120, y: 49 },
			{ x: 130, y: 21, indexLabel: "Lowest" }
		]
	}]
});
chart.render();

}
</script>