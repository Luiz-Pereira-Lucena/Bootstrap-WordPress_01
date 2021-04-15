<div class="w-100 bg-secondary border-top border-dark mt-5">
      <div class="container">
        <div class="row">
          <div class="col py-5 text-center text-withe">
            <h5>Meu Primeiro Tema De WordPress</h5>
            <p class="mb-0">Feito por Luiz Pereira com muita dedicão e esforço</p>
          </div>
        </div>
      </div>
    </div>

    <?php wp_footer();?>
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>-->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

    <!-- Precisamos seguir essa ordem -->
    <script src="<?php bloginfo('template_url');?>/js/jquery.js"></script> <!-- 1º Jquery -->
    <script src="<?php bloginfo('template_url');?>/js/popper.js"></script> <!-- 2º Popper -->
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.js"></script> <!-- 3º Bootstrap -->

  </body>  


</html>