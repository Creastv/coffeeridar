<?php
if (is_page(38)){
    get_template_part( 'templates-parts/content/content-page-38' );
} elseif (is_page(5)){
    get_template_part( 'templates-parts/content/content-page-5' );
} else {
    get_template_part( 'templates-parts/content/content-page' );
}