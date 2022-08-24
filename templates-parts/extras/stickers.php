<?php 
$st_link = get_theme_mod('st_link');
?>
<div class="stickiers js">
    <div class="stickier st-1">
        <div class="wraper">
            <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/src/img/icon-sti.png" alt="">
            <span>zobacz nasz serwis na mapie</span>
            </a>
        </div>
    </div>
    <div class="stickier st-2">
        <?php if( $st_link ){ ?>
        <div class="wraper modal-opener js">
            <a href="<?php echo $st_link; ?>" target="_blank" class="">
            <img src="<?php echo get_template_directory_uri() ?>/src/img/icon-sti.png" alt="">
            <span>Umów się na serwis</span>
            </a>
        </div>
        <?php } ?>
    </div>
</div>