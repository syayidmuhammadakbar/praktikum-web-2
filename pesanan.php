<?php
$model =new pesanan();
$data_pesanan = $model->tampilkan();
?>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Halaman pemesanan</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
          <li class="breadcrumb-item active">pesanan</li>
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
                        <th>no</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th> Nama Pelanggan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- cetak data array produk -->

                    <?php
                    $no = 1;
                    foreach($data_pesanan as $value){
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $value ['tanggal'] ?></td>
                        <td><?php echo $value ['total'] ?></td>
                        <td><?php echo $value ['nama_pelanggan'] ?></td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
<!-- <h4>ini adalah halaman pesanan</h4> -->
</section>
<!-- /.content -->
</div>