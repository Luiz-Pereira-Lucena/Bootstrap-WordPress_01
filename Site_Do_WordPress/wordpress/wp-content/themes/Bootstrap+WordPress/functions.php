<?php

/*
Farei uma função para chamar a teg title:
Essa é uma função do WordPress chamada de title teg
*/
function bs4wp_title_tag(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'bs4wp_title_tag');

/*
Afim de evitar erros por causa de versões anteriores do WordPress
*/

if(!function_exists('_wp_render_title_tag')){
     function bs4wp_render_title(){
         ?>
         <title><?php wp_title('|', true, 'right'); ?></title>
         <?php
     }
     add_action('wp_head', 'bs4wp_render_title');
}


// Essa próxima função vai registrar o custom Navigation Walker:

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';




// Registrando os menus ou o menu (vai depender de quantos menus tenho no meu site):
register_nav_menus(array(
    'principal' => __('Menu_principal', 'Bootstrao+WordPress')
));

/*
Se tivesse mais menus - por exemplo - colocariamos no array : 
    'principal' -> __('menu_principal', 'bs4wp') ,
    'socail' => --('menu_social', 'bs4wp') 

OBS: não esquecer de colocar a vírgula para separar os menus;
*/



// Definindo as imagens dos posts:

add_theme_support('post-thumbnails');



// Vou adicionar um tamanha para as imagens dos posts:

set_post_thumbnail_size(1280, 720, true);
/**
 * Essa função quer dizer que vai setar a imagem e recorta-la para um tamanho de 1200px de largura e
 * 720px de altura;
 * O "true" da função é para deixar verdadeiro no sentido de: toda as imagens que forem posta no site 
 * irão ser sempre recortadas;
 * Outro detalhe importante é que o recorte da imagem sempre vai ser apartir do cetro;
 */



 // Vou definir o tamanho do resumo:

 add_filter('excerpt_length' , function($length){
    return 50;
});


// Fazendo os botões de "Mais atigos" e "Mais novos" funcionarem :

/**
 * <a href="" class="btn btn-outline-primary">Mais antigos</a>
 * <a href="" class="btn btn-outline-primary">Mais novos</a>
 */

 // Estilizando os botões de paginação:
 
 add_filter('next_posts_link_attributes', 'posts_link_attributes');
 add_filter('previous_posts_link_attributes', 'posts_link_attributes');

 function posts_link_attributes(){
     return 'class="btn btn-outline-primary"';
 }

?>