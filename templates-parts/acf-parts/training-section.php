<?php
$on = get_field('wyswietl_sekcje_szkolenia');
$title = get_field('tytul_szkolenia');
$desc = get_field('opis_szkolenia');
?>
<?php if($on) { ?>
<span class="anchor" id="<?php the_field('anchor_szk')?>"></span> 
<section id="training-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-2">
               <div class="img"> </div>
            </div>
            <div class="col col-2 content">
                <div class="row desc">
                    <div class="col-1">
                    <?php if($title) { ?>
                    <h2><?php echo $title; ?></h2>
                    <?php } ?>
                    <?php if($desc) { ?>
                    <p> <?php echo $desc; ?></p>
                    <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-2">
                        <?php if( have_rows('szkolenie_ind') ): ?>
                            <?php while( have_rows('szkolenie_ind') ): the_row();
                                $ti = get_sub_field('tytul_ind');
                                $pr = get_sub_field('cena_ind');
                                $pd = get_sub_field('pdf_ind');
                            ?>
                            <div class="training">
                                <?php if($ti) { ?>
                                <h3><?php echo $ti; ?></h3>
                                <?php } ?>
                                <?php if($pr) { ?>
                                <p><?php echo $pr; ?></hp>
                                <?php } ?>
                                <?php if($pd) { ?>
                                    <div class="pdf">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25.1px"
                                            height="18.3px" viewBox="0 0 25.1 18.3" style="enable-background:new 0 0 25.1 18.3;" xml:space="preserve">
                                        <path fill="#3A3E49" d="M24.2,0.8c0-0.2,0.2-0.4,0.5-0.4c0.2,0,0.4,0.2,0.4,0.4v13.3c0,0.2-0.1,0.4-0.3,0.4l-12.1,3.8
                                            c-0.1,0-0.2,0-0.3,0L0.3,14.5C0.1,14.4,0,14.3,0,14.1V0.8c0-0.2,0.2-0.4,0.4-0.4c0.2,0,0.5,0.2,0.5,0.4v13l11.6,3.7l11.7-3.7V0.8z
                                            M11.8,15c0.2,0.2,0.2,0.4,0,0.6c-0.2,0.2-0.4,0.2-0.6,0c-2.3-2-5.1-2.9-8.1-3.2c-0.3,0-0.4-0.2-0.4-0.5V0.5C2.7,0.2,2.9,0,3.2,0
                                            c3.3-0.1,6.3,1.4,8.6,3.7c0.2,0.2,0.2,0.5,0,0.6c-0.2,0.2-0.5,0.2-0.6,0c-2-2-4.7-3.4-7.5-3.4v10.7C6.7,12,9.5,12.9,11.8,15L11.8,15
                                            z M13.9,15.6c-0.2,0.2-0.5,0.2-0.6,0c-0.2-0.2-0.2-0.5,0-0.6c2.3-2.1,5.1-3,8.2-3.3V0.9c-2.9,0-5.6,1.4-7.6,3.4
                                            c-0.2,0.2-0.5,0.2-0.6,0c-0.2-0.2-0.2-0.5,0-0.6c2.3-2.3,5.3-3.8,8.6-3.7c0.3,0,0.5,0.2,0.5,0.4V12c0,0.2-0.2,0.4-0.4,0.5
                                            C19,12.7,16.2,13.6,13.9,15.6L13.9,15.6z"/>
                                        </svg>
                                         <a href="<?php echo $pd; ?>" target="_blank">pobierz ofertę .pdf</a>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="col col-2">
                        <?php if( have_rows('szkolenie_fir') ): ?>
                            <?php while( have_rows('szkolenie_fir') ): the_row();
                                $ti = get_sub_field('tytul_fir');
                                $pr = get_sub_field('cena_fir');
                                $pd = get_sub_field('pdf_fir');
                            ?>
                            <div class="training">
                                <?php if($ti) { ?>
                                <h3><?php echo $ti; ?></h3>
                                <?php } ?>
                                <?php if($pr) { ?>
                                <p><?php echo $pr; ?></hp>
                                <?php } ?>
                                <?php if($pd) { ?>
                                    <div class="pdf">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25.1px"
                                            height="18.3px" viewBox="0 0 25.1 18.3" style="enable-background:new 0 0 25.1 18.3;" xml:space="preserve">
                                        <path fill="#3A3E49" d="M24.2,0.8c0-0.2,0.2-0.4,0.5-0.4c0.2,0,0.4,0.2,0.4,0.4v13.3c0,0.2-0.1,0.4-0.3,0.4l-12.1,3.8
                                            c-0.1,0-0.2,0-0.3,0L0.3,14.5C0.1,14.4,0,14.3,0,14.1V0.8c0-0.2,0.2-0.4,0.4-0.4c0.2,0,0.5,0.2,0.5,0.4v13l11.6,3.7l11.7-3.7V0.8z
                                            M11.8,15c0.2,0.2,0.2,0.4,0,0.6c-0.2,0.2-0.4,0.2-0.6,0c-2.3-2-5.1-2.9-8.1-3.2c-0.3,0-0.4-0.2-0.4-0.5V0.5C2.7,0.2,2.9,0,3.2,0
                                            c3.3-0.1,6.3,1.4,8.6,3.7c0.2,0.2,0.2,0.5,0,0.6c-0.2,0.2-0.5,0.2-0.6,0c-2-2-4.7-3.4-7.5-3.4v10.7C6.7,12,9.5,12.9,11.8,15L11.8,15
                                            z M13.9,15.6c-0.2,0.2-0.5,0.2-0.6,0c-0.2-0.2-0.2-0.5,0-0.6c2.3-2.1,5.1-3,8.2-3.3V0.9c-2.9,0-5.6,1.4-7.6,3.4
                                            c-0.2,0.2-0.5,0.2-0.6,0c-0.2-0.2-0.2-0.5,0-0.6c2.3-2.3,5.3-3.8,8.6-3.7c0.3,0,0.5,0.2,0.5,0.4V12c0,0.2-0.2,0.4-0.4,0.5
                                            C19,12.7,16.2,13.6,13.9,15.6L13.9,15.6z"/>
                                        </svg>
                                         <a href="<?php echo $pd; ?>" target="_blank">pobierz ofertę .pdf</a>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<?php } ?>