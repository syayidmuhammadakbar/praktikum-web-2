<?php
$model=new pembayaran();
$data_bayar = $model->tampil();
?>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Halaman Transaksi</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
          <li class="breadcrumb-item active">pembayaran</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="row">
        <div class="col-12">
            <table class=" table table-striped table-responsife">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>kuitansi</th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>ke</th>
                        <th>pesanan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- cetak data array produk -->

                    <?php
                    $no = 1;
                    foreach($data_kartu as $value){
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $value ['nokuitansi'] ?></td>
                        <td><?php echo $value ['tanggal'] ?></td>
                        <td><?php echo $value ['jumlah'] ?></td>
                        <td><?php echo $value ['ke'] ?></td>
                        <td><?php echo $value ['pesanan_id'] ?></td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
<!-- <h2>ini adalah halaman pembayaran</h2> -->
</section>
<!-- /.content -->
</div>