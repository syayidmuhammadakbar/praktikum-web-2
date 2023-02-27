<?php
//array idexing
$ar_buah = array('pisang','jambu','pepaya');

//mencetak salah satu index array
echo $ar_buah[2];

//mencetak jumlah  data array
echo '<br/> jumlah buah:' .count($ar_buah);

//tambah data array
$ar_buah[]="durian";

//hapus index 1
unset($ar_buah[1]);


//mengubah index 2 menjadi buah manggis
$ar_buah[2]="manggis";

// mencetak seluruh data array
echo "<ol>";
foreach ($ar_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";


//array assosiatif
$buah = ["p"=>'pisang',"j"=>'jambu',"a"=>'pepaya'];
?>