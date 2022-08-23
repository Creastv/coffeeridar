<?php
$on = get_field('wlacz_sekcje_log');
$title = get_field('tytul_sekcji_logo');
?>
<?php if($on) { ?>
    <section class="logos-section">
        <div class="row">
            <div class="col col-1 text-center">
                <?php if($title) { ?>
                    <div class="section-title">
                        <h2 ><?php echo $title; ?></h2>
                        <span class="sep__section-title"> <span></span></span>
                </div>
                <?php } ?>
            </div>
            <div class="col col-1">
            
            <?php if( have_rows('logotypy') ): ?>
            <div class=" swiper carousel">
                <div class="swiper-wrapper">
                    <?php while( have_rows('logotypy') ): the_row(); 
                        $image = get_sub_field('logo');
                    ?>
                        <div class="swiper-slide">
                            <div class="logo">
                                <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
                
            </div>
        </div>
    </section>
<?php } ?>