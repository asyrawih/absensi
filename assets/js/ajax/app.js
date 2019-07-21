$(document).ready(function(){
     // siap kan element keyword untuk di pasing di 
     // url pencarian nanti nya : .   
     $("#keyword").on('keyup' , function(keyword){
        let data =  $('#table-siswa').load('http://absensi.test/siswa/cariSiswa?keyword=' + $('#keyword').val())
        console.log(data);
   })   

}); 