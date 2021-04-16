<?php get_header();?>

       <!--              -------Conteúdo do site---------            -->
      <div class="row">

        <div class="col-md-8 col-sm-12">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <?php the_post_thumbnail('post_thumbnail' , array('class' => 'img-fluid rounded')); ?> 

            <h3 class="mb-3 mt-4 pt-2 border-top"> <a href="<?php the_permalink()?>"><?php the_title();?></a> </h3>

            <?php the_content(); ?>

            <p class="text-muted"> Publicado em <samp class="badge badge-info bg-my-color-5"><?php echo get_the_date('d/m/y'); ?></samp> </p>

            <hr>

            <?php comments_template(); ?>

          <?php endwhile; ?>

          <?php else : get_404_template(); endif; ?>

        </div><!-- col-8 -->

        <?php get_sidebar(); ?>

      </div><!-- 3ºRow -->

    </div><!-- Container = classe base-->

    <?php get_footer(); ?>