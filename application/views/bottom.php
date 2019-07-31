					</div><!-- /.page-content -->
				</div> <!-- /.main-content-inner-->
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">SIN</span>
							Application &copy; 2019
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url() ?>asset/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="<?php echo base_url() ?>asset/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url() ?>asset/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		
		<script src="<?php echo base_url() ?>asset/js/excanvas.min.js"></script>
		
		<script src="<?php echo base_url() ?>asset/js/nilai.js"></script>
		
		<script src="<?php echo base_url() ?>asset/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/jquery.easypiechart.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/jquery.sparkline.index.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/jquery.flot.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/jquery.flot.resize.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/buttons.flash.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/buttons.html5.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/buttons.print.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/buttons.colVis.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/dataTables.select.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/jquery.maskedinput.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url() ?>asset/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/ace.min.js"></script>

		<script type="text/javascript">
			$(function() {
				var oTable1 = $('#sample-table-2,#sample-table-3').dataTable();
				$('.input-mask-phone').mask('999999999999');		
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
			  $('.select2').select2({
					    placeholderOption: 'first'
					});
			  $('#simple-table').dataTables();
			});
		</script>

		<script>
          $('#tgl').datepicker({
            format: "yyyy-mm-dd"
          }); 
          $('#tgl2').datepicker({
            format: "yyyy-mm-dd"
          }); 
          $('#tgl3').datepicker({
            format: "yyyy-mm-dd"
          });    
           $('#jam').timepicker();       
		</script>

			<script type="text/javascript">
		        function printDiv(divName) {
		             var printContents = document.getElementById(divName).innerHTML;
		             var originalContents = document.body.innerHTML;

		             document.body.innerHTML = printContents;

		             window.print();

		             document.body.innerHTML = originalContents;
		        }
      		</script>

		    <!-- otomatis nilai -->
		    
		    <script type="text/javascript">
		    	function hit_otomatis()
		    	{
		    		var uh1			= document.getElementById('uh1').value;
		    		var uh2			= document.getElementById('uh2').value;
		    		var uh3			= document.getElementById('uh3').value;
		    		var uh4			= document.getElementById('uh4').value;
		    		var uh5			= document.getElementById('uh5').value;
		    		var harian 		= document.getElementById('harian').value;

		    		var proyek 		= document.getElementById('proyek').value;
		    		var portofolio 	= document.getElementById('portofolio').value;
		    		var uts 		= document.getElementById('uts').value;
		    		var uas			= document.getElementById('uas').value;
		    		
		    		// Biar gk NAN

				 if (uh1==""){ uh1=0; } if (uh2==""){ uh2=0; } if (uh3==""){ uh3=0; } if (uh4==""){ uh4=0; }if (uh5==""){ uh5=0; }
				 if (harian==""){ harian=0; }if (proyek==""){ proyek=0; }if (portofolio==""){ portofolio=0; }if (uts==""){ uts=0; }
				 if (uas==""){ uas=0; }

		    		// Perhitungan
		    		var total_harian =(parseInt(uh1)+parseInt(uh2)+parseInt(uh3)+parseInt(uh4)+parseInt(uh5));

					var nilai_akhir	= (parseInt(proyek)+parseInt(portofolio)+parseInt(uts)+parseInt(uas))/4;

	    			// tampil ke input akhir
	    			

	    			if(uh1=="" && uh2=="" && uh3=="" && uh4=="" && uh5=="" && harian="" && proyek=="" && portofolio=="" && uts=="" && uas=="")
					{
						document.getElementById('harian').value="";
	    				document.getElementById('akhir').value = "";
	    				document.getElementById('predikat').value = "";
	    			}
	    			else
	    			{
	    				document.getElementById('harian').value = parseInt(total_harian);
		    			document.getElementById('akhir').value = parseInt(nilai_akhir);
		    			// Predikat
		    			if(nilai_akhir > 80) {
		    				document.getElementById('predikat').value = "A";
		    			}
		    			else if(nilai_akhir > 70) {
		    				document.getElementById('predikat').value = "B";
		    			}
		    			else if(nilai_akhir > 60) {
		    				document.getElementById('predikat').value = "C";
		    			}
		    			else if(nilai_akhir > 50) {
		    				document.getElementById('predikat').value = "D";
		    			}
		    			else{ 
		    				document.getElementById('predikat').value = "E";
		    			}
	    			}	    			
		    	}
		    </script>

		    <!-- tooltip -->
		    <script type="text/javascript">
		    	$('[data-toggle="tooltip"]').tooltip();
		    </script>

		    <!-- Hanya angka -->
		    <script type="text/javascript">
		    	$(document).ready(function(){

				  $('.just_number').keypress(function(event){
				            console.log(event.which);
				        if(event.which != 8 && isNaN(String.fromCharCode(event.which)))
				        {
				          event.preventDefault();
				          //swal("Maaf!", "Hanya angka yang bisa diinputkan!", "warning");
				          alert('Tidak Falid, tidak bisa jika selain angka!');
				        }
				  });
				});

				function akun_aktif() {
					if ($('#aktif').is(":checked")){
						$('#aktif').val("Y");
					}else{
						$('#aktif').val("N");
					}
				}
				akun_aktif();
		    </script>
		    <!-- Get Value From Jurusan -->
		    <script type="text/javascript">
		    	$(document).on('click', '.pilih_fjurusan', function (e) {
				    document.getElementById("guru_kompetensi").value = $(this).attr('data-nip');
				    document.getElementById("nama_guru").value = $(this).attr('data-nama_guru');
				    $('#modalsearchguru').modal('hide');
				});
		    </script>

		    <!-- Get Value From Olah -->
		    <script type="text/javascript">
		    	$(document).on('click', '.pilih_siswa', function (e) {
				    document.getElementById("nis").value = $(this).attr('data-nis');
				    document.getElementById("nama_siswa").value = $(this).attr('data-nama_siswa');
				    $('#modalsearchsiswa').modal('hide');
				});
				$(document).on('click', '.pilih_guru', function (e) {
				    document.getElementById("kode_guru").value = $(this).attr('data-kode_guru');
				    document.getElementById("nama_guru").value = $(this).attr('data-nama_guru');
				    $('#modalsearchguru').modal('hide');
				});
				$(document).on('click', '.pilih_mapel', function (e) {
				    document.getElementById("id_mapel").value = $(this).attr('data-id_mapel');
				    document.getElementById("kode_mapel").value = $(this).attr('data-kode_mapel');
				    document.getElementById("nama_mapel").value = $(this).attr('data-nama_mapel');
				    $('#modalsearchmapel').modal('hide');
				});
				$(document).on('click', '.pilih_kelas', function (e) {
				    document.getElementById("id_kelas").value = $(this).attr('data-id_kelas');
				    document.getElementById("kode_kelas").value = $(this).attr('data-kode_kelas');
				    document.getElementById("nama_kelas").value = $(this).attr('data-nama_kelas');
				    $('#modalsearchkelas').modal('hide');
				});

				$(document).on('click', '.pilih_akun_guru', function (e) {
				    document.getElementById("username").value = $(this).attr('data-kode_guru');
				    document.getElementById("nama").value = $(this).attr('data-nama_guru');
				    $('#modalsearchakun').modal('hide');
				    $("#level>option:eq(2)").attr("selected",true);
				});
				$(document).on('click', '.pilih_akun_siswa', function (e) {
				    document.getElementById("username").value = $(this).attr('data-kode_siswa');
				    document.getElementById("nama").value = $(this).attr('data-nama_siswa');
				    $('#modalsearchakun').modal('hide');
				    $("#level>option:eq(3)").attr("selected",true);
				});

				$(document).on('click', '.pilih_olah', function (e) {
				    document.getElementById("id_olah").value = $(this).attr('data-id_olah');
				    document.getElementById("kode_kelas").value = $(this).attr('data-kode_kelas');
				    document.getElementById("kode_mapel").value = $(this).attr('data-kode_mapel');
				    $('#modalsearcholah').modal('hide');
				});
		    </script>

		    <!--/get form Modal-->

		     <script type="text/javascript">
				$(document).on('click', '.pilih_siswa', function (e) {
				    document.getElementById("nis").value = $(this).attr('data-nis');
				    document.getElementById("nama_siswa").value = $(this).attr('data-nama_siswa');
				    $('#modalsearchsiswa').modal('hide');
				});
				$(document).on('click', '.pilih_kelas', function (e) {
				    document.getElementById("id_kelas").value = $(this).attr('data-id_kelas');
				    document.getElementById("kode_kelas").value = $(this).attr('data-kode_kelas');
				    document.getElementById("nama_kelas").value = $(this).attr('data-nama_kelas');
				    $('#modalsearchkelas').modal('hide');
				});
				$(document).on('click', '.pilih_mapel', function (e) {
				    document.getElementById("id_mapel").value = $(this).attr('data-id_mapel');
				    document.getElementById("kode_mapel").value = $(this).attr('data-kode_mapel');
				    document.getElementById("nama_mapel").value = $(this).attr('data-nama_mapel');
				    $('#modalsearchmapel').modal('hide');
				});

				$(document).on('click', '.pilih_mapel_keahlian', function (e) {
				    document.getElementById("id_mapel_keahlian").value = $(this).attr('data-id_mapel_keahlian');
				    document.getElementById("nama_keahlian").value = $(this).attr('data-nama_keahlian');
				    document.getElementById("kode_mapel").value = $(this).attr('data-kode_mapel');
				    document.getElementById("nama_mapel").value = $(this).attr('data-nama_mapel');
				    $('#modalsearchjurmapel').modal('hide');
				});

				$(document).on('click', '.pilih_romkel', function (e) {
					document.getElementById("id_romkel").value = $(this).attr('data-id_romkel');
					document.getElementById("nama_keahlian").value = $(this).attr('data-nama_keahlian');
					document.getElementById("kelas").value = $(this).attr('data-kode_kelas');
					document.getElementById("id_siswa").value = $(this).attr('data-id_siswa');
					document.getElementById("nama_siswa").value = $(this).attr('data-nama_siswa');
					document.getElementById("tingkat").value = $(this).attr('data-tingkat');
				    $('#modalsearchromkel').modal('hide');
				    if ($(this).attr('data-tingkat')=="10") {
				    	var id_keahlian = $(this).attr('data-id_keahlian');
				    	var smt = $("#smt").val();
				    	var url = "<?php echo base_url('penilaian/get_mapel_by10'); ?>/"+id_keahlian+"/"+smt;
				    	$("#id_detail_mapel").load(url);
				    }
				    if ($(this).attr('data-tingkat')=="11") {
				    	var id_keahlian = $(this).attr('data-id_keahlian');
				    	var smt = $("#smt").val();
				    	var url = "<?php echo base_url('penilaian/get_mapel_by11'); ?>/"+id_keahlian+"/"+smt;
				    	$("#id_detail_mapel").load(url);
				    }
				    if ($(this).attr('data-tingkat')=="12") {
				    	var id_keahlian = $(this).attr('data-id_keahlian');
				    	var smt = $("#smt").val();
				    	var url = "<?php echo base_url('penilaian/get_mapel_by12'); ?>/"+id_keahlian+"/"+smt;
				    	$("#id_detail_mapel").load(url);
				    }
				});
		    </script>

		    <script type="text/javascript">
		    	$("#romkel_id_keahlian").change(function () {
		    		var url = "<?php echo base_url('romkel/get_kelas_bykeah'); ?>/"+$(this).val();
		    		var url2 = "<?php echo base_url('romkel/get_siswa_bykeah'); ?>/"+$(this).val();
		    		$("#kelas").load(url);
		    		$("#romkel_id_siswa").load(url2);
		    		$("#kelas,#romkel_id_siswa").attr("disabled",false);
		    	});

		    </script>
		    <script type="text/javascript">
		    	$(".multiple_select").chosen();
		    </script>
		    <script>
$( "#periode_aktif" ).change(function() {
    $( "#periode_aktif option:selected" ).each(function() {
      $("#id_ajaran").val($( this ).val());
    });
  })
  .trigger( "change" );
</script>
	</body>
</html>