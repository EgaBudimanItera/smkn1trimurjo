<!-- <form action="<?php echo base_url(); ?>laporan/grafik/" method="get">
	<div class="col-sm-3">
		<label>TA</label>
		<div class="row">
			<div class="col-xs-3 col-sm-12">
				<select class="form-control" id="id_ajaran" name="id_ajaran">
					<option value=""></option>
					<?php foreach ($ajaran->result_array() as $d) { ?>
					<option value="<?php echo $d['id_ajaran']; ?>"><?php echo $d['periode_aktif']; ?> Semester <?php if($d['smt']=="1"){echo "Ganjil";} if($d['smt']=="2"){echo "Genap";} ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
	</div>
	
	<div class="col-sm-1">
		<div class="row" style="margin-top:25px;">
			<div class="col-xs-3 col-sm-12">
				<button class="btn btn-primary form-control"><i class="fa fa-search"></i></button>
			</div>
		</div>
	</div>
</form> -->

<div id="chartContainer" style="height: 370px; width: 100%;"></div>

<script>
window.onload = function () {

	var chart = new CanvasJS.Chart("chartContainer", {
		animationEnabled: true,
		exportEnabled: true,
		theme: "light2", // "light1", "light2", "dark1", "dark2"
		title: {
			text: "Grafik Nilai Rata - Rata Siswa "
		},
		axisY: {
			title: "Nilai Siswa",
			// suffix: "%",
			// includeZero: false
		},
		axisX: {
			title: "Nama Jurusan"
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