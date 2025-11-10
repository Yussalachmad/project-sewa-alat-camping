<?php
include 'config.php';
include 'includes/header.php';
include 'includes/navbar.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$file = "pages/$page.php";

if (file_exists($file)) {
  include $file;
} else {
  echo "<div class='text-center text-light mt-5'><h2>Halaman tidak ditemukan</h2></div>";
}

include 'includes/footer.php';
?>
