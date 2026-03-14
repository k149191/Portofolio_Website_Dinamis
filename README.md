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
```php
<?php
include("conn.php");

$query = "SELECT * FROM certificate";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query Error: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Khairunisa Aprilia Portofolio</title>
  <link rel="icon" type="image/x-icon" href="K:\Semester_4\PBW\portofolio_website\material\K.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
</head>

<body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar py-3">
  <div class="container position-relative">
    <a class="navbar-brand logo-circle" href="material\K.png">K.a</a>
    <div class="mx-auto d-none d-lg-block">
      <ul class="navbar-nav flex-row gap-5 fw-semibold nav-center">
        <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
        <li class="nav-item"><a class="nav-link" href="#certificate">Certificate</a></li>
      </ul>
    </div>
    <button class="menu-circle navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMobile">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<!--Homw-->
<section id="home" class="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 text-center text-lg-start">
        <h1 class="fw-bold">Hello, I’m Kai</h1>
        <p class="subtitle">A Information System Student in Mulawarman University.</p>
        <div class="contact">
          <p class="mb-1">📞 089693416561</p>
          <p>✉️ khaiairilia@gmail.com</p>
        </div>
      </div>
      <div class="col-lg-6 text-center">
      <div class="profile-wrapper">
        <img src="material\PDH KAI - NO BG.png" alt="profile" class="profile-img">
      </div>
    </div>
    </div>
  </div>
</section>

<!--About Me-->
<section id="about" class="about-section">
  <div class="container">
    <div class="about-card mx-auto text-center">
      <p>
        My name is Khairunisa Aprilia, an Information Systems student at Mulawarman
        University. I am currently focusing on developing my skills in web development,
        data visualization, and database design through academic and personal projects.
        I enjoy learning step by step and turning ideas into structured and useful digital
        solutions. I am continuously improving both my technical and writing skills as I
        grow in the technology field.
      </p>
    </div>

    <h3 class="text-center mt-5 mb-4">My Learning Journey</h3>
    <div class="row g-4">

      <div class="col-md-6">
        <label>Indonesian Language - Native</label>
        <div class="progress">
          <div class="progress-bar" style="width:92%"></div>
        </div>
      </div>
      <div class="col-md-6">
        <label>English - Beginner</label>
        <div class="progress">
          <div class="progress-bar" style="width:40%"></div>
        </div>
      </div>
      <div class="col-md-6">
        <label>Canva</label>
        <div class="progress">
          <div class="progress-bar" style="width:97%"></div>
        </div>
      </div>
      <div class="col-md-6">
        <label>Figma</label>
        <div class="progress">
          <div class="progress-bar" style="width:40%"></div>
        </div>
      </div>
      <div class="col-md-6">
        <label>Affinity</label>
        <div class="progress">
          <div class="progress-bar" style="width:50%"></div>
        </div>
      </div>
      <div class="col-md-6">
        <label>HTML</label>
        <div class="progress">
          <div class="progress-bar" style="width:20%"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Certificate-->
<section id="certificate" class="certificate-section">
  <div class="container">
    <h2 class="text-center mb-5">My Certificate</h2>
    <div class="row g-4">
    <?php while($row = mysqli_fetch_assoc($result)) { 

    if ($row['id'] == 1) {
    $image = "INFORSA.png";
    } elseif ($row['id'] == 2) {
    $image = "MAKRAB TAROT.png";
    } elseif ($row['id'] == 3) {
    $image = "PUBDIG.png";
    }

    ?>

    <div class="col-md-6 col-lg-4">
    <div class="cert-card">

        <img src="material/<?php echo $image; ?>" 
            alt="certificate"
            class="cert-img img-fluid">

        <h6><?php echo $row['title']; ?></h6>
        <small><?php echo $row['date']; ?></small>

    </div>
    </div>

    <?php } ?>
    </div>
</div>
</section>
</body>
</html>
```

Kode ini digunakan untuk menampilkan data sertifikat pada website portofolio secara dinamis menggunakan PHP dan MySQL. File conn.php terlebih dahulu dipanggil untuk membuat koneksi ke database. Setelah itu, query SQL SELECT * FROM certificate dijalankan untuk mengambil seluruh data dari tabel certificate.

Hasil query disimpan dalam variabel $result, lalu dicek apakah terjadi error atau tidak. Jika query gagal dijalankan, program akan menampilkan pesan kesalahan menggunakan mysqli_error().

Selanjutnya, data sertifikat ditampilkan pada bagian Certificate menggunakan perulangan while. Setiap baris data yang diambil dari database akan ditampilkan dalam bentuk card sertifikat yang berisi gambar, judul sertifikat, dan tanggal.

Gambar sertifikat ditentukan berdasarkan ID data, sehingga setiap ID akan memanggil file gambar yang berbeda dari folder material. Dengan cara ini, setiap sertifikat yang ada di database dapat ditampilkan secara otomatis pada halaman website.

  ## 3. style.css
```css

body {
  font-family: 'Poppins', sans-serif;
  background: #f4f4f6;
  margin: 0;
  padding: 0;
}

.custom-navbar {
  background: #2b0b6f;
  border-bottom: 4px solid #d9d9d9;
}

.nav-center .nav-link {
  color: #ffffff;
  font-family: 'Playfair Display', serif;
  font-size: 22px;
}

.nav-center .nav-link:hover {
  opacity: 0.8;
}

.logo-circle {
  background: #ffffff;
  color: #000;
  width: 48px;
  height: 48px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
}

.menu-circle {
  background: #ffffff;
  border-radius: 50%;
  width: 48px;
  height: 48px;
}

.menu-circle .navbar-toggler-icon {
  filter: invert(1);
}

.hero-section {
  padding: 80px 0;
}

.subtitle {
  color: #555;
}

.profile-wrapper {
  position: relative;
  width: 360px;
  height: 360px;
  margin: auto;
  border-radius: 50%;
  background: #dcdce2;
  display: flex;
  align-items: flex-end;
  justify-content: center;
  overflow: hidden;
}

.profile-wrapper::before {
  content: "";
  position: absolute;
  width: 290px;
  height: 290px;
  border-radius: 50%;
  background: #cfcfd6;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.profile-img {
  position: relative;
  width: 300px;
  height: auto;       
  object-fit: contain; 
  z-index: 2;
}

.about-section {
  background: #e9e9ed;
  padding: 70px 0;
}

.about-card {
  background: #2b0b6f;
  color: white;
  padding: 30px;
  border-radius: 15px;
  max-width: 800px;
}

.progress {
  height: 10px;
  background-color: #cfcfd6;
}

.progress-bar {
  background: #2b0b6f;
}

.certificate-section {
  padding: 80px 0;
}

.cert-card {
  background: #e5e5e5;
  padding: 20px;
  border-radius: 24px;
  transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.cert-img {
  width: 100%;
  aspect-ratio: 1.414 / 1;   
  object-fit: contain;   
  background: #f3f3f7;
  border-radius: 14px;
  padding: 10px;
  margin-bottom: 14px;
}
```
Kode CSS ini digunakan untuk mengatur tampilan dan desain website portofolio agar terlihat rapi dan konsisten. Pada bagian body diatur jenis font yang digunakan yaitu Poppins, warna latar belakang halaman, serta menghilangkan margin dan padding bawaan dari browser.

Bagian custom-navbar, nav-center, logo-circle, dan menu-circle digunakan untuk mengatur tampilan navbar. Navbar memiliki warna latar ungu gelap dengan garis bawah berwarna abu-abu. Menu navigasi di tengah menggunakan font Playfair Display dengan ukuran teks yang lebih besar agar terlihat jelas. Logo dan tombol menu dibuat berbentuk lingkaran sehingga tampilan navbar terlihat lebih menarik.

Bagian hero-section, profile-wrapper, dan profile-img digunakan untuk menata tampilan bagian utama halaman yang berisi perkenalan dan foto profil. Foto profil ditempatkan di dalam wadah berbentuk lingkaran dengan latar belakang abu-abu sehingga tampil lebih rapi dan fokus pada gambar.

Bagian about-section, about-card, progress, dan progress-bar digunakan untuk menampilkan informasi tentang diri serta perjalanan belajar. Deskripsi diri ditempatkan dalam sebuah kartu dengan latar berwarna ungu, sedangkan kemampuan ditampilkan menggunakan progress bar untuk menunjukkan tingkat penguasaan pada beberapa bidang.

Bagian certificate-section, cert-card, dan cert-img digunakan untuk menampilkan daftar sertifikat dalam bentuk card. Setiap card memiliki latar abu-abu, sudut yang membulat. Gambar sertifikat juga diatur dengan rasio tertentu agar tampil proporsional dan tidak terpotong.

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
