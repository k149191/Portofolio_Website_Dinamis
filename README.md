# Portofolio Website
## Nama: Khairunisa Aprilia
## Kelas: B Sistem Informasi 24
## NIM: 2409116060

# A. Deskripsi Website
Website ini merupakan portfolio pribadi Khairunisa Aprilia yang menampilkan informasi profil, kemampuan, serta sertifikat yang dimiliki. Website dibuat dengan tampilan modern, responsif, dan mudah dinavigasi menggunakan Bootstrap 5, CSS kustom PHP, dan MySQL sehingga beberapa bagian konten dapat ditampilkan secara dinamis dari database.  Tujuan utama website ini adalah sebagai media personal branding.

# B. Tampilan Website
  ## 1. Section Navigaation Bar
  Section Navigation Bar berada di bagian paling atas website dan berfungsi sebagai menu navigasi utama.
  
  <p align="center">
  <img width="1919" height="111" alt="image" src="https://github.com/user-attachments/assets/db05fb3a-a356-4230-83d0-ea0a5c0abfc8" />
  </p>

  <p align="center">
  <img width="1132" height="111" alt="image" src="https://github.com/user-attachments/assets/b41b41c5-0275-4665-92ed-de4a591584ba" />
  </p>
  
  Isi:
  - Logo “K.a”
  - Menu Home
  - Menu About Me
  - Menu Certificate
  - Responsive hamburger menu

  ## 2. Section Home
  Section Home merupakan hero section yang menjadi tampilan pembuka website yang berisi deskripsi/informasi singkat .
  
  <p align="center">
  <img width="1919" height="869" alt="image" src="https://github.com/user-attachments/assets/b025962c-da3e-461b-901d-b6abcbd472bc" />
  </p>

  <p align="center">
  <img width="1011" height="996" alt="image" src="https://github.com/user-attachments/assets/1e1e1608-8d96-4de1-b402-68248bf84342" />
  </p>

  Isi:
  - Sapaan “Hello, I’m Kai”
  - Deskripsi singkat sebagai mahasiswa Sistem Informasi
  - Informasi kontak (telepon & email)
  - Foto profil berbentuk lingkaran
  
  ## 3. Section About Me
  Section About Me berisi deskripsi diri dan skill menggunakan tools/aplikasi. Section ini menunjukkan latar belakang serta level kemampuan yang dimiliki.

  <p align="center">
  <img width="1919" height="981" alt="image" src="https://github.com/user-attachments/assets/6cf5c532-6382-4607-9d61-5d080b36c81c" />
  </p>

  <p align="center">
  <img width="909" height="1004" alt="image" src="https://github.com/user-attachments/assets/1168454b-ddd1-4bc4-97b8-be3bbd7694bd" />
  </p>

  Isi:
  - Paragraf perkenalan diri
  - Judul “My Learning Journey”
  - Progress bar kemampuan bahasa dan tools

  ## 4. Section My Certificate
  Section My Certificate menampilkan daftar sertifikat dalam bentuk grid card. Section ini berfungsi sebagai bukti pengalaman dan pencapaian.
  
  <p align="center">
  <img width="1907" height="1015" alt="image" src="https://github.com/user-attachments/assets/c7dd2e22-4021-436b-a84f-42ad8125a6b7" />
  </p>

  Isi:
  - Judul section
  - Card sertifikat
  - Gambar sertifikat
  - Nama kegiatan
  - Tanggal
  

# C. Penjelasan Code
  ## 1. conn.php
  ```php
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "portofolio";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die('Koneksi database tdk berhasil: ' . mysqli_connect_error());
}

mysqli_set_charset($conn, 'utf8mb4');
?>
```
  File conn.php digunakan untuk menghubungkan website dengan database MySQL menggunakan mysqli_connect. File ini menyimpan konfigurasi host, username, password, dan nama database yang digunakan oleh sistem.

  ## 2. index.php

  
  ## 3. style.css

  
# D. Teknologi Yang Digunakan
Teknologi yang digunakan untuk membuat website portofolio ini adalah:
1. HTML5
2. CSS3
3. Bootstrap
4. MySQL

<p align="center">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white">
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white">
  <img src="https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white">
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white">
</p>
