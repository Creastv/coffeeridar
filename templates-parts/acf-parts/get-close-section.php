<?php
$on = get_field('wyswietl_sekcje_blr');
$title = get_field('tytul_blr');
$desc = get_field('opis_blr');
$link = get_field('cta_blr');

if( $link ){
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
?>
<?php if($on) { ?>
<span class="anchor" id="<?php the_field('anchor_blr')?>"></span> 
<section id="get-close">
    <div class="container text-center">
        <div class="row">
            <div class="col-1">
            <?php if($title) { ?>
                <div class="section-title">
                    <h2 ><?php echo $title; ?></h2>
                    <span class="sep__section-title"> <span></span></span>
               </div>
            <?php } ?>
            <?php if($desc) { ?>
                <div class="desc">
               <p> <?php echo $desc; ?></p>
               </div>
            <?php } ?>
              
           </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-1">
                <div class="button">
                   <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>