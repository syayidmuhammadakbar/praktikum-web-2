<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja.id</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h3 style="text-align: center;">Form Belanja Online</h3>
    <hr>
<div class="row">
    <div class="col">
    <form method="post" action="form_belanja.php">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Field Name Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Choice Product</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="submit" value="Kirim" name="proses" class="btn btn-success">
    </div>
  </div>
</form>
<hr>
    </div>
    <div class="col">
    <table class="table">
        <thead>
            <tr class="text-white" style="background-color: #0d6efd;">
                <th>Daftar Harga:</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>TV : RP.4.200.000</td>
            </tr>
            <tr>
                <td>Kulkas : RP.3.100.000</td>
            </tr>
            <tr>
                <td>Mesin Cuci : RP.3.800.000</td>
            </tr>
            <Tr class="text-danger">
                <TH>*Harga dapat Berubah Setiap Saat</TH>
            </Tr>
        </tbody>
    </table>
    </div>
</div>
<!-- form php -->
<?php
// mengambil data dari user

 $customer = $_POST['customer'];
 $product = $_POST['produk'];
 $jumlah = $_POST['jumlah'];
 $kulkas = 3100000;
 $mesin_cuci = 3800000;
 $tv = 4200000;

 //logic untuk hitung hasil belanja
 if($product == 'tv'){
    $hasil= $jumlah*$tv;
}elseif($product == 'kulkas'){
    $hasil= $jumlah*$kulkas;
}elseif($product == 'mesin cuci'){
    $hasil = $jumlah*$mesin_cuci;
}else{
    $hasil = "masukan kode dengan bener";
}

// mencetak nilai
 echo "Costumer: $customer";
 echo "<br/>Produk pilihan: $product";
 echo "<br/> jumlah: $jumlah";
 echo "<br/> Total Belanja : Rp" .number_format($hasil)."<br/>";

?>
</div>
</body>
</html>
