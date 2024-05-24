<?php get_header(); ?>

<section id="banner">
  <header>
    <h2 class="text-white"><?php the_field('fp_hero');?></h2>
    <p><?php the_field('fp_hero_subtitle');?></p>
    <img style="width:100%;height:30vh;" class="pt-3" src="<?php the_field('fp_hero_image');?>" alt="">
  </header>
</section>

<div class="row bg-white">
  <section id="intro" class="container">
    <div class="row">
      <div class="col-4 col-12-medium">
        <section class="first">
          <i class="<?php the_field('service_one_icon');?>"></i>
          <header>
            <h2><?php the_field('service_one_title');?></h2>
          </header>
          <p>
          <?php the_field('service_one_subtitle');?></p>
        </section>
      </div>
      <div class="col-4 col-12-medium">
        <section class="middle">
          <i class="<?php the_field('service_two_icon');?>"></i>
          <header>
            <h2><?php the_field('service_two_title');?></h2>
          </header>
          <p>
          <?php the_field('service_two_subtitle');?></p>
        </section>
      </div>
      <div class="col-4 col-12-medium">
        <section class="last">
        <i class="<?php the_field('service_three_icon');?>"></i>
          <header>
            <h2><?php the_field('service_three_title');?></h2>
          </header>
          <p>
          <?php the_field('service_three_subtitle');?></p>
        </section>
      </div>
    </div>
    <footer>
      <ul class="actions">
        <li><a href="<?php the_field('button_1_link');?>" class="button large"><?php the_field('button_1');?></a></li>
        <li><a href="<?php the_field('button_1_link_copy');?>" class="button alt large"><?php the_field('button_2');?></a></li>
      </ul>
    </footer>
  </section>
</div>
<!-- Main -->
<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Portfolio -->
        <section>
          <header class="major">
            <h2>My Portfolio</h2>
          </header>
          <div class="row">
          <?php
              $portfolio_arguments = array(
                'post_type' => 'portfolio',
                'posts_per_page' => 6
              );
              $portfolio = new WP_Query($portfolio_arguments);
              while($portfolio -> have_posts()){
                $portfolio -> the_post();
            ?>
            <div class="col-4 col-6-medium col-12-small">
              <section class="box">
                <a href="<?php the_permalink();?>" class="image featured">
                <?php the_post_thumbnail('home-featured');?>
                </a>
                <header>
                  <h3><?php the_title();?></h3>
                </header>
                <?php the_excerpt();?>
                <footer>
                  <ul class="actions">
                    <li>
                      <a href="<?php the_permalink();?>" class="button alt">Find out more</a>
                    </li>
                  </ul>
                </footer>
              </section>
            </div>
            <?php } ?>
            <!-- While using wp-query more than one time in a page -->
            <?php wp_reset_postdata();?>
          </div>
        </section>
      </div>
      <div class="col-12">
        <!-- Blog -->
        <section>
          <header class="major">
            <h2>The Blog</h2>
          </header>
          <div class="row">
            <?php
              $blog_arguments = array(
                'post_type' => 'post',
                'posts_per_page' => 2
              );
              $posts = new WP_Query($blog_arguments);
              while($posts -> have_posts()){
                $posts -> the_post();
            ?>
            
            <div class="col-6 col-12-small">
              <section class="box">
                <a href="<?php the_permalink();?>" class="image featured">
                  <?php the_post_thumbnail('home-featured');?>
                </a>
                <header>
                  <h3><?php the_title();?></h3>
                  <p>Posted on <?php the_date(); ?> at <?php the_time();?> </p>
                </header>
               
                  <?php the_excerpt(); ?>
               
                <footer>
                  <ul class="actions">
                    <li>
                      <a href="<?php the_permalink();?>" class="button icon solid fa-file-alt"
                        >Continue Reading</a
                      >
                    </li>
                    <li>
                      <a href="<?php comments_link();?>" class="button alt icon solid fa-comment"
                        ><?php echo get_comments_number();?> Comments</a
                      >
                    </li>
                  </ul>
                </footer>
              </section>
            </div>
            <?php } ?>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>