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

?>