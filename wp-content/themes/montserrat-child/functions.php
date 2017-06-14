<?php

function montserrat_ninzio_child_scripts() {
    wp_enqueue_style( 'montserrat_ninzio-parent-style', get_template_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'montserrat_ninzio_child_scripts' );

?>