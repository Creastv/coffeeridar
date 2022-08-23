<?php
$on = get_field('wyswietl_sekcje_form');
$title = get_field('opis_form');
$form = get_field('form');
?>

<?php if($on) { ?>
<span class="anchor" id="<?php the_field('anchor_form')?>"></span>
<section id="rez-form">
    <div class="container-fluid">
        <div class="row">
            <?php if($title) { ?>
            <div class="col col-1 text-center">
                <h2><?php echo $title; ?></h2>
            </div>
            <?php } ?>
            <div class="col col-1">
                <?php echo do_shortcode( '[contact-form-7 id="44" title="Rezerwacja"]' ); ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>