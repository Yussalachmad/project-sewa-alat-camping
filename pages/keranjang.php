<?php
if (isset($_GET['add'])) {
  $id = $_GET['add'];
  $_SESSION['keranjang'][$id] = ($_SESSION['keranjang'][$id] ?? 0) + 1;
}

if (isset($_GET['remove'])) {
  $id = $_GET['remove'];
  unset($_SESSION['keranjang'][$id]);
}

$total = 0;
?>

<div class="container text-light">
  <h2 class="text-warning mb-4">Keranjang Anda</h2>

  <?php if (!empty($_SESSION['keranjang'])) : ?>
    <table class="table table-dark table-striped">
      <tr>
        <th>Barang</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Total</th>
        <th></th>
      </tr>
      <?php
      foreach ($_SESSION['keranjang'] as $id => $qty) {
        $barang = $conn->query("SELECT * FROM barang WHERE id=$id")->fetch_assoc();
        $subtotal = $barang['harga'] * $qty;
        $total += $subtotal;
        echo "<tr>
                <td>{$barang['nama']}</td>
                <td>$qty</td>
                <td>Rp" . number_format($barang['harga']) . "</td>
                <td>Rp" . number_format($subtotal) . "</td>
                <td><a href='index.php?page=keranjang&remove=$id' class='btn btn-sm btn-danger'>Hapus</a></td>
              </tr>";
      }
      ?>
      <tr class="table-secondary text-dark">
        <td colspan='3' class='text-end'><b>Total:</b></td>
        <td colspan='2'><b>Rp<?php echo number_format($total); ?></b></td>
      </tr>
    </table>
  <?php else : ?>
    <p class="text-secondary">Keranjang masih kosong.</p>
  <?php endif; ?>
</div>
