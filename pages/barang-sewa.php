<?php
$result = $conn->query("SELECT * FROM barang");
?>

<div class="container text-light">
  <h2 class="text-warning mb-4">Daftar Barang Sewa</h2>
  <div class="row">
    <?php while ($row = $result->fetch_assoc()) : ?>
      <div class="col-md-4 mb-4">
        <div class="card bg-dark text-light border-secondary shadow-lg">
          <img src="assets/images/<?php echo $row['gambar']; ?>" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title text-warning"><?php echo $row['nama']; ?></h5>
            <p class="card-text text-secondary">Rp<?php echo number_format($row['harga']); ?> / hari</p>
            <a href="index.php?page=keranjang&add=<?php echo $row['id']; ?>" class="btn btn-outline-warning w-100">Tambah ke Keranjang</a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>
