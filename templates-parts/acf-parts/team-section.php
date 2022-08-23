<?php
$on = get_field('wlacz_sekcje_zes');
$desc = get_field('opis_zes');
?>
<?php if($on) { ?>
    <section class="team-section">
        <div class="container-fluid">
        <div class="row">
            <div class="col col-1">
                <?php if( have_rows('osoby') ): ?>
                    <div class="osoby">
                    <?php while( have_rows('osoby') ): the_row(); 
                            $image = get_sub_field('zdjecie');
                            $name = get_sub_field('imie_i_nazwisko');
                            $poz = get_sub_field('pozycja');
                        ?>
                        <div class="osoba">
                            <div class="img">
                            <?php echo wp_get_attachment_image( $image, 'team' ); ?>
                            </div>
                            <div class="inf">
                                <?php if($name) { ?>
                                    <h3><?php echo $name; ?></h3>
                                <?php } ?>
                                 <?php if($poz) { ?>
                                    <span><?php echo $poz; ?></span>
                                <?php } ?>
                                <?php if( have_rows('social_media') ): ?>
                                    <ul class="social-media">
                                    <?php while( have_rows('social_media') ): the_row(); 
                                        $icon = get_sub_field('icona');
                                        $ilink = get_sub_field('link');
                                        ?>
                                        <li>
                                            
                                    
                                        </li>
                                    <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            
                        </div>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col col-1 text-center">
                    <?php if($desc) { ?>
                        <p><?php echo $desc; ?></>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>