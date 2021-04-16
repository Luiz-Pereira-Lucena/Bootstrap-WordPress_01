<?php get_header();?>

       <!--              -------Conteúdo do site---------            -->
      <div class="row">

        <div class="col-md-8 col-sm-12">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <h3 class="mb-3"> 
                <?php the_title();?> 
            </h3>

            <?php the_content(); ?>

            <?php endwhile; ?>

            <?php else : get_404_template(); endif; ?>

        </div><!-- col-8 -->

        <?php get_sidebar(); ?>

      </div><!-- 3ºRow -->

    </div><!-- Container = classe base-->

    <?php get_footer(); ?>