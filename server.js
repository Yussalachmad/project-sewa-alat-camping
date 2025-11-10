const { exec } = require("child_process");
const path = require("path");

// Path ke XAMPP dan proyek kamu
const xamppPath = "C:\\xampp\\xampp_start.exe"; // ubah kalau XAMPP kamu beda lokasi
const projectURL = "http://localhost/fifa/";

// Jalankan XAMPP (Apache + MySQL)
console.log("🚀 Menjalankan XAMPP...");
exec(`"${xamppPath}"`, (err) => {
  if (err) {
    console.error("❌ Gagal menjalankan XAMPP:", err);
    return;
  }
  console.log("✅ XAMPP berhasil dijalankan.");
});

// Tunggu 2 detik, lalu buka browser otomatis
setTimeout(() => {
  console.log("🌐 Membuka browser...");
  exec(`start ${projectURL}`);
}, 2000);
