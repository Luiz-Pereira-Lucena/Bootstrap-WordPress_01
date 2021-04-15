<!doctype html>

<html <?php language_attributes();?>>
  <head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset');?>>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
  </head>


  <body>

    <div class="container">

      <div class="row my-5 align-items-center">

        <div class="col-md-8 col-sm-12">
          <h1>Meu Primeiro Tema</h1>
          <p class="lead"> Fiz com WordPress </p> <!-- Essa classe lead vai dá um destaque no parágrafo -->
        </div><!-- col-8 (coluna)-->

        <div class="col-md-4 col-sm-12">
          <form>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="procure aqui...">
              <div class="input-group-append">
                <button class="btn btn-success bg-my-color-1" type="button">Buscar</button>
              </div><!-- botão -->
            </div>
          </form><!-- fomulário-->
        </div><!-- col-4 (coluna)-->

      </div><!-- 1ºRow = título do site -->


      <div class="row">

        <div class="col mb-5">

          <nav class = "navbar navbar-expand-lg navbar-dark bg-my-color-1 rounded" role = "navigation">

            <div class = "container">

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse- 1 " aria-extended="false" aria-label ="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">

                <span class = "navbar-toggler-icon"></span>

              </button>

              <?php 
              wp_nav_menu(array(
                'theme_location'     => 'principal',
                'depth'              => 2,
                'container'          => 'div',
                'container_class'    => 'collapse navbar-collapse',
                'container_id'       => 'bs-example-navbar-collapse-1',
                'menu_class'         => 'nav navbar-nav',
                'fallback_cb'        => 'WP_Bootstrap_Navwalker::fallback',
                'walker'             => new WP_Bootstrap_Navwalker(),
              ));
              ?> 
          
            </div> 
        
          </nav>

        </div><!-- Criação da NavBar -->

      </div><!-- 2ºRow  -->


      