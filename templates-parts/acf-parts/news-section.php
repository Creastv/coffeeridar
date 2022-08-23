<?php
$on = get_field('wlacz_sekcje_wyda');
$title = get_field('tytul_wyd');
?>
<?php if($on) { ?>
    <section class="news-section">
        <div class="container">
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
               <?php if( have_rows('wydarzenia') ): ?>
                    <ul class="news">
                    <?php while( have_rows('wydarzenia') ): the_row(); 
                        $image = get_sub_field('zdjecie');
                        $tytul = get_sub_field('tytul');
                        $opis = get_sub_field('opis');
                        $link = get_sub_field('link');
                        if($link) {
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        }
                        ?>
                        <li>
                            <article>
                                <div class="img">
                                     <?php echo wp_get_attachment_image( $image, 'news' ); ?>
                                </div>
                                <div class="content">
                                    <?php if($tytul) { ?>
                                        <h3><?php echo $tytul; ?></h3>
                                    <?php } ?>
                                     <?php if($opis) { ?>
                                        <p><?php echo $opis; ?></p>
                                    <?php } ?>
                                    <?php if($link) { ?>
                                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="_blank"><?php echo esc_html( $link_title ); ?></a>
                                    <?php } ?>
                                </div>
                            </article>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
        </div>
    </section>
<?php } ?>