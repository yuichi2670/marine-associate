<?php get_header(); ?>

<section class="l-underlayer p-underlayer">
      <div class="l-underlayer-bg p-underlayer-bg">
        <div class="p-underlayer-picture">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/project01.jpg" alt="">
          
          <div class="p-underlayer-numberTitle">
            <div class="p-underlayer-number">
                <p>NEWS</p>
            </div><!-- /p-p-project-number -->
            <div class="p-underlayer-title">
                <h2>新着情報</h2>
            </div><!-- /p-project-title -->
          </div><!-- /p-project-number -->
        </div><!-- /p-project-picture -->
      </div><!-- /p-project-card -->
    </section><!-- /project -->
    <?php get_template_part('template-parts/bread'); ?>
    
    <div class="p-contents__block">
      <section id="news" class="p-news">
        <div class="p-news__inner">
          <?php if (have_posts()) : while(have_posts()) : the_post() ?>
            <div class="p-news__container">
              <div class="p-news__contents">
                <div class="p-news__date">
                    <time datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                </div><!-- /news__date -->
                <div class="p-news__tag">
                    <p><?php the_category(); ?></p>
                </div><!-- /news__tag -->
              </div><!-- /news__contents-news -->
                <a href="">
                    <div class="p-news__title">
                        <p><?php the_title(); ?></p>
                    </div><!-- /news__title -->
                </a>
            </div><!-- /news__container -->
          <? endwhile; endif; ?>
        </div><!-- /news__inner -->
      </section><!-- /news -->

      <?php get_sidebar(); ?>

    </div><!-- /p-contents__block -->

<?php get_footer(); ?>