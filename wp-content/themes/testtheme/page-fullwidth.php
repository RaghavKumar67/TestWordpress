<?php
/*
* Template Name: Fullwidth page
*/
?>

<?php get_header();?>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-12-medium">
                <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post();
                            ?>
                        
                            <article class="box post">
                               
                                <header>
                                <h3><?php the_title();?></h3>
                                
                                </header>
                                <?php the_content(); ?>
                            </article>
                            <?php 
                                    }
                                }
                            ?>
            </div>
            
        </div>
    </div>
</section>

<?php get_footer();?>                