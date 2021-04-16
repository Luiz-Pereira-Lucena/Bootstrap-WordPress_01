<?php get_header();?>

       <!--              -------Conteúdo do site---------            -->
      <div class="row">

        <div class="col-md-8 col-sm-12">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

          <div class="blog-post">
            <h3 class="mb-3 pb-2 border-bottom"> <a href="<?php the_permalink()?>"><?php the_title();?></a> </h3>
            <div class="row">

              <div class="col-md-12 col-lg-6 mb-3">
                <a href="<?php the_permalink()?>"> 
                  <?php the_post_thumbnail('post_thumbnail' , array('class' => 'img-fluid')); ?> 
                </a>
              </div> <!-- col-8 para a imagem -->

              <div class="col-md-12 col-lg-6 mb-3">
                <?php the_excerpt(); ?>
              </div><!-- col-6 para o parágrafo -->

            </div><!-- 3.1Row -->

            <p class="text-muted"> Publicado em <samp class="badge badge-info bg-my-color-5"><?php echo get_the_date('d/m/y'); ?></samp> </p>
          </div><!-- Blog-post -->

          <?php endwhile; ?>

          <?php else : get_404_template(); endif; ?>


          <div class="blog-pagination mb-5">
            <?php next_posts_link('Mais antigos')?>  <?php previous_posts_link('Mais novos')?>
          </div><!-- paginação -->

        </div><!-- col-8 -->

        <?php get_sidebar(); ?>

      </div><!-- 3ºRow -->

    </div><!-- Container = classe base-->

    <?php get_footer(); ?>