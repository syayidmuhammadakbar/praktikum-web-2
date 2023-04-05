<?php
$model=new pelanggan();
$data_pelanggan = $model->tampil();
?>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Halaman pelanggan</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
          <li class="breadcrumb-item active">pelanggan</li>
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
                        <th>Jenis kelamin</th>
                        <th>Tempat lahir</th>
                        <th>Tanggal lahir</th>
                        <th>Email</th>
                        <th>Member</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- cetak data array produk -->

                    <?php
                    $no = 1;
                    foreach($data_pelanggan as $value){
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $value ['kode'] ?></td>
                        <td><?php echo $value ['nama'] ?></td>
                        <td><?php echo $value ['jk'] ?></td>
                        <td><?php echo $value ['tmp_lahir'] ?></td>
                        <td><?php echo $value ['tgl_lahir'] ?></td>
                        <td><?php echo $value ['email'] ?></td>
                        <td><?php echo $value ['Member'] ?></td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
<!-- <h2>ini adalah halaman pelanggan</h2> -->
</section>
<!-- /.content -->
</div>