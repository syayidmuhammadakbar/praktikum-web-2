<?php
function kelulusan($_nilai){
    //jika nilai rata-rata < 55 tidak lulus
    //jika nilai rata-rata > 55 berikan perintah lulus
    if($_nilai < 55){
        return 'Tidak Lulus';
    }else{
        return 'lulus';
    }
}
// 1. buat fungsi grade lalu beri keterangan :
// jika nilai diatas 85 - 100 grade A
//jika nilai diatas 70-84 grade B
//jika nilai diatas 56-69 grade C
// jika nilai 36- 55 grade E
// jika Nilai diatas 10 - 35 Grade F
// jika tidak ada nilai cetak I (Anda tidak ada nilai)

function grade($_nilai){
    if($_nilai >= 85){
        return "A";
    }elseif ($_nilai < 70) {
        return "B";
    }elseif ($_nilai < 56) {
        return "C";
    }elseif ($_nilai < 36) {
        return "D";
    }elseif ($_nilai < 10) {
        return "E";
    }else{
        return "Anda tidak ada Nilai";
    }
}
    
?>