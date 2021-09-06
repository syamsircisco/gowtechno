<?php
use yii\widgets\DetailView;
?>
<section id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 entries">
                <article class="entry aos-init aos-animate" data-aos="fade-up">
                  <div class="entry-img">
                    <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
                  </div>
                  <h2 class="entry-title">
                   <?= $model->judul_services ?>
                  </h2>
                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i><?=date('m-d-Y',$model->created_at) ?></li>
                    </ul>
                  </div>    
                  <div class="entry-content">
                    <?= $model->isi_services?>
                  </div>
                </article><!-- End blog entry -->
            </div>
        </div>
    </div>
</section>