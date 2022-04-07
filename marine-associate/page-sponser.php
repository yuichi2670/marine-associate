<?php get_header(); ?>

<section class="l-underlayer p-underlayer">
      <div class="l-underlayer-bg p-underlayer-bg">
        <div class="p-underlayer-picture">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/project01.jpg" alt="">
          
          <div class="p-underlayer-numberTitle">
            <div class="p-underlayer-number">
                <p>SPONSER</p>
            </div><!-- /p-p-project-number -->
            <div class="p-underlayer-title">
                <h2>スポンサー</h2>
            </div><!-- /p-project-title -->
          </div><!-- /p-project-number -->
        </div><!-- /p-project-picture -->
      </div><!-- /p-project-card -->
    </section><!-- /project -->
    <?php get_template_part('template-parts/bread'); ?>
    
    <div class="p-contents__block">

      <!-- ここに投稿内容を埋め込む start-->

      <!-- ここに投稿内容を埋め込む end-->
      
      <?php get_sidebar(); ?>

    </div><!-- /p-contents__block -->
  


<?php get_footer(); ?>