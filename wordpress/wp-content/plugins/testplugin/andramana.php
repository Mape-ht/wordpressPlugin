<?php
/**
 * @package test
 * @version 1.7.2
 */
/*
Plugin Name: andramana
Plugin URI: http://mape.org/plugins/andramana/
Description: andramana est une formulaire de contact test, mon premier awesome plugin
Author: Mape
Version: 1.0.0
Author URI: http://mape.org/plugins/andramana/
*/

add_action( 'wp_footer', 'contact_us' );
add_filter('default_content','content_by_default');
add_filter('the_content', 'addContent');
add_shortcode('nouveau_Shortcode', 'manageShortcode');
add_shortcode('exemple_form', 'exemple_form_plugin');

function contact_us() {
    echo ("Besoin d'information ? Contactez-nous");
}

function content_by_default(){

    return "Template par defaut
    Titre 1

    Titre 2
    Contenu ";
}

function addContent($content) {
    //$content += "<h1>Devinez qui est l'imposteur</h1>";
    //return $content;
    echo "<h1>Devinez qui est l'imposteur</h1>";
  
}

function manageShortcode() {

    echo "<p>Je m'essaie au ShortCode</p>";
}

function example_form_plugin() {

    $content ='';
    $content .= 'HELLO WORLD';
    return $content;
}




    


?>