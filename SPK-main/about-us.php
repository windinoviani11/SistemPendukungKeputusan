<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>WEB 2 - UAS</title>

  <link rel="stylesheet" href="css/all.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="css/main.css" rel="stylesheet" />
  <link href="css/bootstrap.css" rel="stylesheet" />

  <style>
/*--- Team---*/
.team {
  background: #ffffff;
  padding: 60px 0;
}

.team .member {
  margin-bottom: 20px;
  overflow: hidden;
  text-align: center;
  border-radius: 5px;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

.team .member .member-img {
  position: relative;
  overflow: hidden;
}

.team .member .member-info {
  padding: 25px 15px;
}

.team .member .member-info h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 18px;
  color: #080224;
}

.team .member .member-info span {
  display: block;
  font-size: 18px;
  font-weight: 400;
  color: #000281;
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}

.team .member .member-info p {
  font-style: italic;
  font-size: 14px;
  line-height: 26px;
  color: #777777;
}
  </style>
</head>

<body>
  <?php include("koneksi.php"); ?>
  <?php include 'nav.php'; ?>
  <?php
  $arana = $history = '';
  $arana = "Group 5 Project SPK is a student-based IT development team based in Depok, Indonesia. 
  We are committed to realizing innovations and ideas into various digital products towards an integrated future. 
  Our team has almost 1 months of experience working as a software developer for coursework. Over the period, 
  we have grown as a team to keep up with demands from the industry, so we can help our clients to grow their businesses. 
  With all that the future of IT has to offer. Established in Desember 2022, 
  Group 5 Project SPK is a student IT development team founded by four friends from the Faculty of Information and Technology of Politeknik Negeri Jakarta, 
  Angga Sulistiangga (2007411004), Windi Noviani (2007411017), Mytha Shabira (2007411005) and Valerio Meileakhi (2007411012) who graduated in 2022. 
  Group 5 Project SPK was started simply as a student team grouped together to be able to accomplish more as one. After completing many projects as a team, 
  Angga decided to make Group 4 a bigger team, to help people complete projects faster and more efficiently.";
  ?>
  <!-- Page Content -->

  <div class="container">
    <div class="card mb-5" style="margin-top: 130px; color: #302a69;">
      <img src="img/crown2-gold.png" class="card-img" alt="header" width="500" height="600" style="opacity: 15%; position: relative" />
      <div class="card-img-overlay">
        <div class="card-body">
          <div class="text-center">
            <h1 class="display-4 fw-bold">ABOUT US</h1>
          </div>
          <?php
          $result = mysqli_query($kon, "SELECT * FROM about_us") or die("Query error : " . mysqli_error($kon));;
          $item = mysqli_fetch_array($result);
          ?>
          <div class="mb-3">
            <h4 class="card-title mb-3"><?= $item["title"]; ?></h4>
            <p class="card-text">
              <?= $item["desc"]; ?>
            </p>
          </div>
        </div>
        <?php

        if (isset($_SESSION["login"])) {
          echo '<div class="btn-toolbar justify-content-center mt-2">
          <a href="about-us-edit.php?id=' . $item["id"] . '" class="btn btn-warning d-lg-block px-3 text-white mr-xl-4"> Edit About Us </a>
        </div>';
        } else {
          echo '<div class="btn-toolbar justify-content-center mt-2">
          <a href="https://wa.me/+6281380036932" target="_blank" class="btn btn-warning d-lg-block px-3 text-white mr-xl-4"> Contact Us </a>
        </div>';
        }
        ?>
      </div>
    </div>
  </div>

  <!-- ======= Team Section ======= -->
<section class="team">
  <div class="container">

    <div class="display-4 fw-bold" align="center">
      <p>STRUKTUR TEAM</p>
      <h3>WE OUR <span>TEAM</span></h3>
      <h2>WEBSITE CREATED BY GROUP 5</ph2
      <br>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <br>
            <br>
            <img src="img/angga.JPG" width="400px" height="400px" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>2007411004 - ANGGA SULISTIANGGA</h4>
            <span>PROGRAMMER AND ANALYSIS</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <br>
            <br>
            <img src="img/mytha.jpg" width="400px" height="400px" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>2007411005 - MYTHA SHABIRA</h4>
            <span>USECASE AND STRUKTUR HIERARKI</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <br>
            <br>
            <img src="img/windi.jpg" width="400px" height="400px" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>2007411017 - WINDI NOVIANI</h4>
            <span>ERD</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <br>
            <br>
            <img src="img/rio.jpg" width="400px" height="400px" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>2007411012 - VALERIO MEILEAKHI</h4>
            <span>MOCKUP UI/UX</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
<!-- End Team Section -->
<div class="card-footer bg-success text-light">Programmed By : Kelompok 5 </div>
  <?php include("footer.php") ?>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="js/navbar-scroll.js"></script>
</body>

</html>