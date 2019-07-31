function hit_nilai() {
//Harian
	var uh_1 = $("#uh_1").val();
	var uh_2 = $("#uh_2").val();
	var uh_3 = $("#uh_3").val();
	var uh_4 = $("#uh_4").val();
	var uh_5 = $("#uh_5").val();
	var bagi = '5';
	if (uh_1==""){ uh_1=0; } if (uh_2==""){ uh_2=0; } if (uh_3==""){ uh_3=0; } if (uh_4==""){ uh_4=0; }if (uh_5==""){ uh_5=0; }
	var hitung_harian = (parseInt(uh_1) + parseInt(uh_2) + parseInt(uh_3) + parseInt(uh_4) + parseInt(uh_5)) / bagi;
	$("#harian").val(hitung_harian);

//nilai akhir
	var harian = hitung_harian;
	var proyek = $("#proyek").val();
	var portofolio = $("#portofolio").val();
	var uts = $("#uts").val();
	var uas = $("#uas").val();
	var bagi = '5';
	if (harian==""){ harian=0; } if (proyek==""){ proyek=0; } if (portofolio==""){ portofolio=0; } if (uts==""){ uts=0; }if (uas==""){ uas=0; }
	var hitung_akhir = (parseInt(harian) + parseInt(proyek) + parseInt(portofolio) + parseInt(uts) + parseInt(uas)) / bagi;
	$("#akhir").val(hitung_akhir);

//predikat
	var akhir = hitung_akhir;
	if (akhir > 80) {
		var hitung_predikat = 'A';
		var label_predikat = '<span class="label label-xlg label-success arrowed-in-right arrowed-in">A</span>';
	}
	else if (akhir > 70) {
		var hitung_predikat = 'B';
		var label_predikat = '<span class="label label-xlg label-primary arrowed-in-right arrowed-in">B</span>';
	}
	else if (akhir > 60) {
		var hitung_predikat = 'C';
		var label_predikat = '<span class="label label-xlg label-warning arrowed-in-right arrowed-in">C</span>';
	}
	else if (akhir > 50) {
		var hitung_predikat = 'D';
		var label_predikat = '<span class="label label-xlg label-danger arrowed-in-right arrowed-in">D</span>';
	}
	else {
		var hitung_predikat = 'E';
		var label_predikat = '<span class="label label-xlg label-grey arrowed-in-right arrowed-in">E</span>';
	}
	$("#predikat").val(hitung_predikat);
	$("#label_predikat").html(label_predikat);
}