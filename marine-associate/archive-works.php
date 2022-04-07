<?php get_header(); ?>

<section class="l-underlayer p-underlayer">
      <div class="l-underlayer-bg p-underlayer-bg">
        <div class="p-underlayer-picture">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/project01.jpg" alt="">
          
          <div class="p-underlayer-numberTitle">
            <div class="p-underlayer-number">
                <p>WORKS</p>
            </div><!-- /p-p-project-number -->
            <div class="p-underlayer-title">
                <h2>活動実績</h2>
            </div><!-- /p-project-title -->
          </div><!-- /p-project-number -->
        </div><!-- /p-project-picture -->
      </div><!-- /p-project-card -->
    </section><!-- /project -->
    <?php get_template_part('template-parts/bread'); ?>

    <div class="p-contents__block">
    <?php 
        $args = array(
            'post_type' => 'works',
            'posts_per_page' => 9,
            'paged' => $paged
        );
        $the_query = new WP_Query($args);
        ?>
        <div class="p-works">
          <div class="p-works__inner">
            <?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                <div class="p-works__items">
                  <div class="p-works__imageBox">
                    <div class="p-works__image">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/img/project03.jpg" alt="">
                      <!-- <?php if(has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="test">
                      <?php endif; ?> -->
                    </div><!-- /content_image-content -->
                  </div><!-- /p-works__imageBox -->
                  <div class="p-works__tag">
                      <p><?php echo esc_html( get_the_terms( get_the_ID(), 'worksgenre' )[0]->name ); ?></p>
                  </div><!-- /works__tag-workd -->
                  <div class="p-works__titles">
                    <div class="p-works__title">
                        <h2 class=""><?php the_title(); ?></h2>
                    </div><!-- /content__topTitle -->
                  </div>
                </div><!-- /p-works__items -->
              </a>
            </div><!-- /content__box-content -->
            <?php endwhile; ?> 
        </div><!-- /content__container -->
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      <?php get_sidebar(); ?>

    </div><!-- /p-contents__block -->


<?php get_footer(); ?>