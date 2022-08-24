<?php
$phone  = get_theme_mod('phone');
$email  = get_theme_mod('email');
?>
<ul class="contact-header">
    <li>
        <?php if($phone ) { ?>
        <a  href="tel:<?php echo str_replace(" ", "", $phone); ?>" class="conact__item">
            <img src="<?php echo get_template_directory_uri() ?>/src/img/ico-phone.png" alt="ico-phone">
            <span><?php echo $phone; ?></span>
        </a>
        <?php } else { ?>
        <a  href="tel:0048608100631" class="conact__item">
            <img src="<?php echo get_template_directory_uri() ?>/src/img/ico-phone.png" alt="ico-phone">
            <span><span>+48</span> 608 100 631</span>
        </a>
        <?php } ?>
    </li>
    <li>
        <?php if($email ) { ?>
        <a class="conact__item" href="mailto:<?php echo $email; ?>">
            <img src="<?php echo get_template_directory_uri() ?>/src/img/ico-email.png" alt="ico-email">
            <span> <?php echo $email; ?> </span>
        </a>
        <?php } else { ?>
             <a class="conact__item" href="mailto:biuro@coffeerider.pl">
            <img src="<?php echo get_template_directory_uri() ?>/src/img/ico-email.png" alt="ico-email">
            <span> biuro@coffeerider.pl </span>
        </a>
        <?php } ?>
    </li>
</ul>