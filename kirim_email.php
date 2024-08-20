<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];

  // Konfigurasi email
  $to = "lebakbarangpemdes@gmail.com"; // Ganti dengan alamat email penerima
  $subject = "Pesan Baru dari Situs Web";
  $message = "
    Nama: $nama
    Email: $email
    Pesan:
    $pesan
  ";
  $headers = "From: $email\r\n";

  // Kirim email
  if (mail($to, $subject, $message, $headers)) {
    echo "Pesan Anda telah terkirim!";
  } else {
    echo "Terjadi kesalahan saat mengirim email.";
  }
}
?>