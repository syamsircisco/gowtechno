<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use backend\models\Services;


AppAsset::register($this);
 $model = Services::find()->all();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
  <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/front/img/logomi.png">
<?php $this->beginBody() ?>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:gowtechnocv@gmail.com"> gowtechnocv@gmail.com</a>
        <i class="icofont-phone"></i> +62-822-9264-7672
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="<?= Url::to(['site/index']); ?>">Gowtechno</a></h1>
        
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class=""><a href="<?= Url::to(['site/']) ?>">Home</a></li>
          <li><a href="<?= Url::to(['pages/portofolio']) ?>">Portofolio</a></li>
          <li><a href="<?= Url::to(['pages/services']) ?>">Services</a></li>
          <!-- <li><a href="">Testimonials</a></li> -->
          <li><a href="<?= Url::to(['pages/contact']) ?>">Contact</a></li>

        </ul>
      </nav>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <main id="main">
     <?= $content ?>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>CV-Gowtechno</h3>
            <p>
             Perum. Griya Asri Sakina Blok J1 NO. 4<br>
              Indonesia <br><br>
              <strong>Phone:</strong>+62-822-9264-7672<br>
              <strong>Email:</strong>gowtechnocv@gmail.com"<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= Url::to(['site/']) ?>">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= Url::to(['pages/services']) ?>">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= Url::to(['pages/portofolio']) ?>">Portofolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= Url::to(['pages/contact']) ?>">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= Url::to(['pages/about']) ?>">About</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <?php
                  foreach ($model as $value) {
                    ?>
                       <li><i class="bx bx-chevron-right"></i> <a href="<?= Url::to(['pages/readblog', 'id' => $value->id]) ?>"><?= $value->judul_services ?></a></li>
                    <?php
                  }
               ?>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join With Me</h4>
            <p>Bergabunglah dengan dan menjadi bagian dari kami dengan koneksi yang lebih luas</p>
            <form action="" isabled="disabled" method="">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Gowtechno</span></strong>. CV
        </div>
        <div class="credits">
          Designed by <a href="">CV.Gowtechno</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();