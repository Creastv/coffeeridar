<?php 
$inf = get_theme_mod('inf_footer');
$email = get_theme_mod('email_footer');
$phone = get_theme_mod('phone_footer');
$map = get_theme_mod('map_footer');
?>
</main>
<footer id="footer">
    <div class="container">
        <div class="row contact">
            <?php if($email){ ?>
            <div class="col col-3">
                <a  href="tel:<?php echo str_replace(" ", "", $phone); ?>" class="conact__item">
                  <img src="<?php echo get_template_directory_uri() ?>/src/img/ico-phone.png" alt="ico-phone">
                  <span><?php echo $phone; ?></span>
                </a>
            </div>
            <?php } else { ?>
            <div class="col col-3">
                <a  href="tel:0048608100631" class="conact__item">
                  <img src="<?php echo get_template_directory_uri() ?>/src/img/ico-phone.png" alt="ico-phone">
                  <span><span>+48</span> 608 100 631</span>
                </a>
            </div>
            <?php } ?>
            <?php if($email){ ?>
            <div class="col col-3">
                <a class="conact__item" href="mailto:<?php echo $email; ?>">
                  <img src="<?php echo get_template_directory_uri() ?>/src/img/ico-email.png" alt="ico-email">
                  <span> <?php echo $email; ?> </span>
                </a> 
            </div>
            <?php } else { ?>
            <div class="col col-3">
                <a class="conact__item" href="mailto:biuro@coffeerider.pl">
                  <img src="<?php echo get_template_directory_uri() ?>/src/img/ico-email.png" alt="ico-email">
                  <span> biuro@coffeerider.pl </span>
                </a> 
            </div>
            <?php } ?>
            <div class="col col-3">
                <a href="<?php echo $map; ?>  " class="conact__item" target="_blank">
                   <img src="<?php echo get_template_directory_uri() ?>/src/img/ico-map.png" alt="ico-map">
                   <span> zobacz nasz serwis na mapie</span>
                </a> 
            </div>
            <div class="col col-1">
                <?php if($inf){ ?>
                    <p class="text-center inf"><?php echo $inf; ?></p>
                <?php } else { ?>
                    <p class="text-center inf">Wszelkie prawa zastrzeżone przez firmę Coffee Rider sp. z o.o..</p>
                <?php } ?>
                <p class="text-center inf">Projek i realizacja: <img src="<?php echo get_template_directory_uri() ?>/src/img/typhon-media.png" alt="TYPHOON_MEDIA"></p>
            </div>
        </div>
    </div>
</footer>
<?php get_template_part('templates-parts/extras/stickers'); ?>
<?php get_template_part('templates-parts/extras/modal'); ?>
<span id="go-to-top" ></span>
<?php wp_footer(); ?>

</body>
</html>