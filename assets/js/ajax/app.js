$(document).ready(function() {
	// siap kan element keyword untuk di pasing di
	// url pencarian nanti nya : .
	$("#keyword").on("keyup", function() {
		$("#table-siswa").load(
			"http://absensi.test/siswa/cariSiswa?keyword=" + $("#keyword").val()
		);
	});
	//cari Data guru
	$("#keyword").on("keyup", function(keyword) {
		$("#table_guru").load(
			"http://absensi.test/guru/cariGuru?keyword=" + $("#keyword").val()
		);
	});

	
});
