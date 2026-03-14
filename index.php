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

