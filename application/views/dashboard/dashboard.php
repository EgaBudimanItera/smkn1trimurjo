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
<!-- <?=var_dump($jancuk)?> -->
<hr>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<!-- <br>
<div id="chartContainer2" style="height: 370px; width: 100%;"></div>
<br>
<div id="chartContainer3" style="height: 370px; width: 100%;"></div> -->
<hr>
<script>
window.onload = function () {

	var chart = new CanvasJS.Chart("chartContainer", {
		animationEnabled: true,
		exportEnabled: true,
		theme: "light2", // "light1", "light2", "dark1", "dark2"
		title: {
			text: "Judule Jancuk"
		},
		axisY: {
			title: "Jumlah Jancuk (Rp)",
			// suffix: "%",
			// includeZero: false
		},
		axisX: {
			title: "Kategori Jancuk"
		},
		data: [{
			type: "column",
			// yValueFormatString: "#,##0.0#\"%\"",
			dataPoints: [
				<?php foreach($jancuk as $data){?>
				{ label: "<?=$data->nama?>", y: <?=$data->nilai?> },
				<?php }?>	
			]
		}]
	});
	chart.render();


	var chart2 = new CanvasJS.Chart("chartContainer2", {
		animationEnabled: true,
		theme: "light2", // "light1", "light2", "dark1", "dark2"
		title:{
			text: "Top Oil Reserves"
		},
		axisY: {
			title: "Reserves(MMbbl)"
		},
		data: [{        
			type: "column",  
			showInLegend: true, 
			legendMarkerColor: "grey",
			legendText: "MMbbl = one million barrels",
			dataPoints: [      
				{ y: 300878, label: "Venezuela" },
				{ y: 266455,  label: "Saudi" },
				{ y: 169709,  label: "Canada" },
				{ y: 158400,  label: "Iran" },
				{ y: 142503,  label: "Iraq" },
				{ y: 101500, label: "Kuwait" },
				{ y: 97800,  label: "UAE" },
				{ y: 80000,  label: "Russia" }
			]
		}]
	});
	chart2.render();

	var chart3 = new CanvasJS.Chart("chartContainer3", {
		animationEnabled: true,
		
		title:{
			text:"Fortune 500 Companies by Country"
		},
		axisX:{
			interval: 1
		},
		axisY2:{
			interlacedColor: "rgba(1,77,101,.2)",
			gridColor: "rgba(1,77,101,.1)",
			title: "Number of Companies"
		},
		data: [{
			type: "bar",
			name: "companies",
			axisYType: "secondary",
			color: "#014D65",
			dataPoints: [
				{ y: 3, label: "Sweden" },
				{ y: 7, label: "Taiwan" },
				{ y: 5, label: "Russia" },
				{ y: 9, label: "Spain" },
				{ y: 7, label: "Brazil" },
				{ y: 7, label: "India" },
				{ y: 9, label: "Italy" },
				{ y: 8, label: "Australia" },
				{ y: 11, label: "Canada" },
				{ y: 15, label: "South Korea" },
				{ y: 12, label: "Netherlands" },
				{ y: 15, label: "Switzerland" },
				{ y: 25, label: "Britain" },
				{ y: 28, label: "Germany" },
				{ y: 29, label: "France" },
				{ y: 52, label: "Japan" },
				{ y: 103, label: "China" },
				{ y: 134, label: "US" }
			]
		}]
	});
	chart3.render();
}
</script>