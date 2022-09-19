<?php 
$st_link = get_theme_mod('st_link');
?>
<div class="stickiers js">
    <?php if( $st_link ){ ?>
    <div class="stickier st-1">
        <div class="wraper">
            <a href="<?php echo $st_link; ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri() ?>/src/img/icon-sti.png" alt="">
            <span>zobacz nasz<br> na mapie</span>
            </a>
        </div>
    </div>
    <?php } ?>
    <div class="stickier st-2">
        
        <div class="wraper modal-opener js">
            <a href="#"  class="">
            <img src="<?php echo get_template_directory_uri() ?>/src/img/icon-ser.png" alt="">
            <span>Umów się<br>na serwis</span>
            </a>
        </div>
        
    </div>
</div>