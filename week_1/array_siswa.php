<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
//buat dat amahasiswa dan smpan kedalam array assosiatif
$ns1=['id'=>1, 'NIM'=>"01101",'UTS'=>80,'UAS'=>90,'tugas'=>95];
$ns2=['id'=>2, 'NIM'=>"02202",'UTS'=>85,'UAS'=>93,'tugas'=>85];
$ns3=['id'=>3, 'NIM'=>"03303",'UTS'=>87,'UAS'=>95,'tugas'=>80];


//simpan variable data array assosiatif ke dalam array indexing
$ar_nilai = [$ns1, $ns2, $ns3];

?>
<!-- Buat table dengan elemen html -->
<center><h3>Daftar nilai Mahasiswa</h3></center>
<table border="1" width="100%" class="table">
    <thead>
        <tr class="table-light">
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>TUGAS</th>
            <th>Nilai Akhir</th>
        </tr>
    </thead>
    <Tbody>
        <?php
        $nomor=1;
        foreach($ar_nilai as $nilai){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$nilai['NIM'].'</td>';
            echo '<td>'.$nilai['UTS'].'</td>';
            echo '<td>'.$nilai['UAS'].'</td>';
            echo '<td>'.$nilai['tugas'].'</td>';
            $nilai_akhir = ($nilai['UTS'] +$nilai['UAS']+$nilai['tugas'])/3;
            //tuliskan nilai akhir disini
            echo '<td>' .number_format($nilai_akhir,2,",",".").'</td>';
            $nomor++;
        }
        ?>
    </Tbody>
</table>