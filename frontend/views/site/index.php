<?php

/* @var $this yii\web\View */
use yii\bootstrap4\Html;
$this->title = 'Welcome To Gowtechno';
?>
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->

        <div class="carousel-item active" style="background-image: url(front/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to <span>Gowtechno</span></h2>
              <p>Gowtechno mampu memberikan solusi terbaik dalam berbagai bidang dalam dunia IT.</p>
              <div class="text-center"></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(front/img/slide/konsultan.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Website Analisis</h2>
              <p>Melayani Jasa Pembuatan Website berdasarkan permintaan Client,kepuasan Client adalah tujuan kami...</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(front/img/slide/jaringan.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Services Network</h2>
              <p>Memecahkan semua masalah yang di hadapai client dengan cepat dan konsisten, dengan pelayanan yang nyaman dan efektif serta akurat dalam pengambilan keputusa</p>
              <div class="text-center"></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Clients</strong></h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
                 <?= Html::img('@web/front/img/clients/bni.png', ['class' => 'img-fluid']) ?>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <?= Html::img('@web/front/img/clients/mandiri.png', ['class' => 'img-fluid']) ?>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <?= Html::img('@web/front/img/clients/telkom.png', ['class' => 'img-fluid']) ?>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <?= Html::img('@web/front/img/clients/lintas.png', ['class' => 'img-fluid']) ?>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <?= Html::img('@web/front/img/clients/client-1.png', ['class' => 'img-fluid']) ?>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
               <?= Html::img('@web/front/img/clients/client-2.png', ['class' => 'img-fluid']) ?>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
               <?= Html::img('@web/front/img/clients/client-3.png', ['class' => 'img-fluid']) ?>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
               <?= Html::img('@web/front/img/clients/client-4.png', ['class' => 'img-fluid']) ?>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Clients Section -->

  </main><!-- End #main -->
