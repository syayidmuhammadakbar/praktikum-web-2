<?php
$model=new produk();
$data_produk = $model->tampil();
?>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Halaman Produk</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
          <li class="breadcrumb-item active">produk</li>
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
                        <th>kode</th>
                        <th>nama</th>
                        <th>harga beli</th>
                        <th>harga jual</th>
                        <th>stok</th>
                        <th>Minimum stok</th>
                        <th>jenis produk</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- cetak data array produk -->

                    <?php
                    $no = 1;
                    foreach($data_produk as $value){
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $value ['kode'] ?></td>
                        <td><?php echo $value ['nama'] ?></td>
                        <td><?php echo $value ['harga_beli'] ?></td>
                        <td><?php echo $value ['harga_jual'] ?></td>
                        <td><?php echo $value ['stok'] ?></td>
                        <td><?php echo $value ['min_stok'] ?></td>
                        <td><?php echo $value ['namajenisproduk'] ?></td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
<!-- <h2>ini adalah halaman produk</h2> -->
</section>
<!-- /.content -->
</div>