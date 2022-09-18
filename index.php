<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Business Incorporation Zone</title>
  <meta
    content="ADEN is a unique block chain platform designed to help ICO projects to reach more audiences and provides security to investors through our ICO Wallet."
    name="description">

  <link href="assets/img/favicon.png" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div id="logo" class="me-auto">
        <a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#banner">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <section id="banner">
    <div class="banner"></div>
  </section>

  <section class="discription">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 text-lg-start text-center">
          <p>
            Voluptua scripserit per ad, laudem viderer sit ex. Ex alia corrumpit oluptatibus usu, sed unum convenire id.
            Ut cum nisl moderatius, per nihil dicant commodo an. Eum tacimates erroribus ad. Atqui feugiat euripidis ea
            pri, sed veniam tacimates ex.
          </p>
        </div>
      </div>
    </div>
  </section>


  <section id="services">
    <div class="container">

      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="section-title">Services</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <div class="services-icon">
              <i class="bi bi-gear-wide-connected"></i>
            </div>
            <h4>
              Business Setup
            </h4>
            <p>
              Get a full range of business setup solutions from the region's finest business setup experts...
            </p>
            <div class="button">
              <button class="btn">LEARN MORE</button>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card">
            <div class="services-icon">
              <i class="bi bi-bank"></i>
            </div>
            <h4>
              Banking
            </h4>
            <p>
              Enhance your business with a wide range of finencial assistance at your fingerprints, Services...
            </p>
            <div class="button">
              <button class="btn">LEARN MORE</button>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card">
            <div class="services-icon">
              <i class="bi bi-layer-forward"></i>
            </div>
            <h4>
              Insurance
            </h4>
            <p>
              Compare the best insurance deals from a wide range of options. Get home, health, business...
            </p>
            <div class="button">
              <button class="btn">LEARN MORE</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <div class="contact-img">
            <img src="assets/img/b.jpg" alt="">
          </div>
        </div>

        <div class="col-md-6">
          <div class="col-md-12 text-center">
            <h2 class="section-title">Contact Us</h2>
          </div>

          <div class="form">
            <form method="POST" action="mail.php" >

              <div class="form-body">
                <div class="form-group">
                  <label for="fullname">Full Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Jeson Mandela"
                    required><br>
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile</label>
                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="+00 00 00 00 0000"
                    required><br>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="jeson@gmail.com"
                    required><br>
                </div>
              </div>
              
              <input type="submit" class="contact-btn" value="Submit"/>

              <?php 
              if (isset($_GET['success']) && ($_GET['success'] == "202") ) : ?>
                <div class="success">Email Sent Successfully</div>
                <?php elseif (!empty($_GET['success']) && $_GET['success'] !="202") : ?>
                    <div class="error">Theres been an Error, please try again later.</div>
                <?php endif; ?>
            </form>
          </div>
        </div>
      </div>

    </div>
  </section>

  <footer class="footer">

    <div class="container">
      <div class="row ftr_top">

        <div class="col-md-6">
          <div class="credits">
            <img src="assets/img/logo.png" alt="Logo">
          </div>
        </div>

        <div class="col-md-6">
          <div class="footer-icons">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
          </div>
        </div>

      </div>

      <div class="row ftr_bottom">
        <div class="col-md-6">
          <ul class="footer-menu">
            <li class="list-inline-item">
              <a href="index.html">Home</a>
            </li>
            <li class="list-inline-item">
              <a href="#services">Services</a>
            </li>
            <li class="list-inline-item">
              <a href="#contact">Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <p class="copyright">
            &copy; Copyright <strong>BIZ</strong>. All Rights Reserved
          </p>
        </div>

      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>