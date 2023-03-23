<?php
include_once('navbar.php');
include_once('sidebar.php');
?>
<!-- ini konten/main -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Praktikum Web 2</a></li>
              <li class="breadcrumb-item active">Week 1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <?php 
      include_once('array_siswa.php'); 
      ?>
    </section>
  </div> 
<?php
include_once('footer.php');
?>