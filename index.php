<?php
include 'aset/header.php'
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        <h2><i class="fas fa-chart-line"></i> Dashboard</h2>
        <hr class="bg-light">
        </div>
    </div>

    <div class="row">
<div class="col-md-4">
    <div class="card bg-danger" style="width: 18rem;">
        <div class="card-body text-white">
            <h5 class="card-title">Jumlah Buku</h5>
            <p class="card-text" style="font-size:60px">350</p>
            <a href="http://localhost/siperpus/buku/index.php" class="text-white">Lebih Detail <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
</div>
       
<div class="col-md-4">
    <div class="card bg-warning" style="width: 18rem;">
        <div class="card-body text-white">
            <h5 class="card-title">Jumlah Anggota</h5>
            <p class="card-text" style="font-size:60px">614</p>
            <a href="http://localhost/siperpus/anggota/index.php" class="text-white">Lebih Detail <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
</div>   

<div class="col-md-4">
    <div class="card bg-info" style="width: 18rem;">
        <div class="card-body text-white">
            <h5 class="card-title">Jumlah Transaksi</h5>
            <p class="card-text" style="font-size:60px">279</p>
            <a href="http://localhost/siperpus/transaksi/index.php" class="text-white">Lebih Detail <i class="fas fa-angle-double-right"></i></a>
                </div>
              </div>
         </div> 
    </div>
</div>
<?php
include 'aset/footer.php'
?>