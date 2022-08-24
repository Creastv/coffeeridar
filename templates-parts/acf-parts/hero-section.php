<?php 
$image = get_field('logo'); 
$scroll_title = get_field('scroll_title');
$goTo = get_field('idz_do');
?>
<span class="anchor" id="<?php the_field('anchor_hero')?>"></span>
<section class="hero-section">
<div class="container">
    <div class="row">
        <div class="col col-1 text-center">
            <?php if($image) { ?>
                <?php echo wp_get_attachment_image( $image, 'full' ); ?>
            <?php } else { ?>
            <svg class="logo-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="197.6px"
                height="98.9px" viewBox="0 0 197.6 98.9" style="enable-background:new 0 0 197.6 98.9;" xml:space="preserve">
            <g>
                <path fill="#FFFFFF" d="M164.5,0c3.8,0.5,7.2,1.7,9.7,4.7c3.4,3.9,4.5,8.4,2.9,13.3c-1.6,4.8-4.9,8-9.9,9.1c-1,0.2-2.3-0.1-3.1-0.7
                    c-1.7-1.3-3.1-2.9-4.6-4.4c0-0.2,0.1-0.4,0.1-0.6c1.6,0,3.2,0.1,4.8,0c3.7-0.2,6.6-3,7-6.6c0.4-3.6-1.8-7-5.3-8
                    c-0.7-0.2-1.4-0.3-2.2-0.3c-7.1,0-14.1,0-21.2,0c-0.3,0-0.6,0.1-1.2,0.2c3.9,9,7.8,17.8,11.7,26.8c10.9-3.1,21-1.8,30.3,4.7
                    c6.7,4.7,11.1,11.2,13,19.2c4.1,16.6-4.8,33.3-20.8,39.4C160,102.8,142,96,134,80.8c-7.9-14.8-3.7-35,13.6-45.1
                    c-5.1-11.9-10.3-23.8-15.4-35.7C143,0,153.7,0,164.5,0z M145.9,45c-10.1,7.9-12.3,23.8-4.9,35.1c7.8,12,23.4,15.9,36,9.2
                    c12.5-6.7,17.7-21.9,12.1-35c-5.7-13.2-20-17.7-27.6-15.9c0.3,0.7,0.6,1.4,0.8,2c3.1,7.1,6.2,14.1,9.2,21.2c2,4.6,0.1,9.5-4.2,11.3
                    c-4.4,1.9-9.1,0-11.2-4.6c-1.3-2.8-2.5-5.6-3.7-8.5C150.2,54.9,148,50,145.9,45z M147.9,35.8c4.4,10.2,8.7,20.1,13,29.9
                    c0.9,2.1,2.4,2.9,4.1,2.2c1.7-0.7,2.2-2.4,1.3-4.6c-4.1-9.5-8.2-18.9-12.4-28.4c-0.2-0.5-0.5-0.9-0.9-1.5
                    C151.3,34.3,149.7,35,147.9,35.8z"/>
                <path fill="#FFFFFF" d="M0,28.2c1.1-4.1,3.3-7.3,7.5-8.7c3.1-1,6.1-0.6,8.9,1.1c0.8,0.5,1.8,1,0.9,2.1c-0.7,0.9-1.2,1.8-2.7,1
                    c-1.5-0.7-3.3-1.2-4.9-1.1c-2.9,0.3-4.8,2.3-5.5,5.2c-0.7,2.9,0.1,5.5,2.5,7.4c2.4,1.9,5.1,2.1,7.7,0.4c1.7-1.1,2.3-0.1,3,0.9
                    c1,1.4-0.4,1.7-1.2,2.2c-5.9,3.5-13.6,0.5-15.7-6.1C0.3,32.2,0.2,31.6,0,31C0,30.1,0,29.2,0,28.2z"/>
                <path fill="#FFFFFF" d="M41.1,62.7c0-4.6,0-9.1,0-13.7c0-1.6,0.5-2.3,2.2-2.2c3.8,0.1,7.7,0,11.5,0.1c8.2,0.2,14.8,7.7,14.3,16.4
                    c-0.5,9-6.6,14.9-15.6,15.1c-3.5,0-7,0-10.5,0c-1.4,0-1.9-0.5-1.9-1.9C41.1,71.8,41.1,67.2,41.1,62.7z M48.5,71.3
                    c2.2,0,4.1,0.1,6.1,0c4-0.3,6.6-2.7,7.4-6.8c0.8-4-0.8-8-4.1-9.7c-3-1.5-6.2-1-9.4-0.8C48.5,59.8,48.5,65.4,48.5,71.3z"/>
                <path fill="#FFFFFF" d="M18.7,66.9c2.1,3.7,4.2,7.3,6.5,11.3c-2.6,0-4.9,0.1-7.1-0.1c-0.5,0-1.1-0.6-1.4-1.2c-1.4-2.2-2.8-4.4-3.9-6.8
                    c-1-2.1-2.4-2.6-4.7-1.9c0,3.2,0,6.4,0,9.8c-2.5,0-4.7,0-7.3,0c0-0.6,0-1.3,0-1.9c0-9,0-18,0-27c0-2,0.6-2.6,2.6-2.5
                    c3.1,0.1,6.2,0,9.3,0c5.6,0,9.6,2.7,11.1,7.5c1.5,4.7,0,8.7-4.6,12.2C19.1,66.5,19,66.6,18.7,66.9z M8.1,53.6c0,1.2,0,2.2,0,3.2
                    c0,5,0,5,5.1,4.8c0.2,0,0.4,0,0.6,0c2-0.3,3.3-2,3.2-4.2c-0.1-2.1-1.5-3.6-3.5-3.7C11.9,53.5,10.2,53.6,8.1,53.6z"/>
                <path fill="#FFFFFF" d="M96.7,78.1c0-3.7,0-7.2,0-10.8c0-6,0-12.1,0-18.1c0-1.8,0.6-2.5,2.4-2.5c3.2,0.1,6.3,0,9.5,0
                    c5.5,0,9.5,2.7,11,7.4c1.6,4.7,0.1,8.8-4.5,12.2c-0.2,0.1-0.3,0.3-0.6,0.5c2.1,3.7,4.3,7.4,6.6,11.4c-2.6,0-4.9,0.1-7.1-0.1
                    c-0.5,0-1.1-0.7-1.4-1.2c-1.4-2.2-2.8-4.4-3.9-6.8c-1-2.2-2.5-2.5-4.6-1.9c0,3.2,0,6.4,0,9.8C101.7,78.1,99.4,78.1,96.7,78.1z
                    M104.2,61.6c1.5,0,2.8,0,4.2,0c0.5,0,0.9,0,1.4,0c2-0.3,3.2-1.9,3.2-4c0-2-1.3-3.7-3.1-3.9c-1.8-0.2-3.7,0-5.7,0
                    C104.2,56.3,104.2,58.8,104.2,61.6z"/>
                <path fill="#FFFFFF" d="M80.3,65.8c0,2.1,0,3.6,0,5.5c2.7,0,5.3,0,8,0c4.4,0,4.4,0,4.5,4.2c0.1,2.7,0.1,2.7-2.8,2.7
                    c-4.9,0-9.8,0-14.7,0c-0.7,0-1.4,0-2.3,0c0-10.5,0-20.8,0-31.3c6.4,0,12.8,0,19.6,0c0,1.9,0.1,3.9-0.1,5.9c0,0.4-1,0.9-1.6,0.9
                    c-2.8,0.1-5.6,0-8.5,0.1c-0.7,0-1.4,0.1-2.2,0.1c0,1.7,0,3.1,0,4.9c3.6,0,7.3,0,11,0c0,2.4,0,4.5,0,7C87.7,65.8,84,65.8,80.3,65.8z
                    "/>
                <path fill="#FFFFFF" d="M28.7,46.8c2.4,0,4.6,0,7,0c0,10.4,0,20.7,0,31.2c-2.2,0-4.5,0-7,0C28.7,67.7,28.7,57.4,28.7,46.8z"/>
                <path fill="#FFFFFF" d="M21,29.6C21,23.7,25.5,19,31.1,19c5.7,0,10.2,4.7,10.2,10.7c0,5.9-4.5,10.5-10.1,10.5
                    C25.5,40.3,20.9,35.5,21,29.6z M24.6,29.6c0,3.9,2.9,7,6.5,7.1c3.6,0,6.8-3.3,6.7-7.2c-0.1-3.8-3.1-7-6.7-7
                    C27.5,22.6,24.6,25.7,24.6,29.6z"/>
                <path fill="#FFFFFF" d="M88,22.9c0,1.7,0,3.2,0,4.9c2.4,0,4.6,0.1,6.9,0c1.5-0.1,1.8,0.6,1.8,1.9c0,1.3-0.5,1.8-1.8,1.7
                    c-2.3-0.1-4.5,0-6.9,0c0,1.6,0,3.1,0,4.8c3.3,0,6.6,0.1,9.9,0c1.6,0,2.2,0.4,2.1,2.1c-0.1,1.2-0.5,1.6-1.7,1.6
                    c-4.1,0-8.2-0.1-12.3,0c-1.3,0-1.8-0.5-1.8-1.8c0-5.7,0-11.4,0-17.1c0-1.3,0.5-1.7,1.8-1.7c4.1,0.1,8.2,0.1,12.3,0
                    c1.4,0,1.7,0.6,1.7,1.8c0,1.3-0.4,1.8-1.7,1.8C94.9,22.9,91.5,22.9,88,22.9z"/>
                <path fill="#FFFFFF" d="M107.6,22.9c0,1.8,0,3.2,0,4.9c2.3,0,4.5,0.1,6.7,0c1.4-0.1,1.9,0.5,1.9,1.9c0,1.4-0.5,1.9-1.9,1.8
                    c-2.1-0.1-4.3,0-6.6,0c0,1.6,0,3.1,0,4.8c3.2,0,6.5,0.1,9.8,0c1.4,0,2.2,0.3,2.2,1.8c0,1.5-0.7,1.9-2.1,1.9
                    c-3.9-0.1-7.8-0.1-11.7,0c-1.3,0-2-0.3-1.9-1.8c0.1-5.7,0.1-11.4,0-17.1c0-1.3,0.4-1.8,1.7-1.7c4.1,0.1,8.2,0.1,12.3,0
                    c1.4,0,1.7,0.7,1.7,1.8c0,1.2-0.5,1.8-1.8,1.8C114.5,22.8,111.1,22.9,107.6,22.9z"/>
                <path fill="#FFFFFF" d="M48.8,22.9c0,1.8,0,3.2,0,4.9c2.3,0,4.6,0.1,6.9,0c1.4-0.1,1.9,0.5,1.9,1.9c0,1.5-0.6,1.8-2,1.8
                    c-2.2-0.1-4.4,0-6.9,0c0,2.3-0.1,4.5,0,6.7c0,1.3-0.4,1.8-1.7,1.8c-1.3,0-1.9-0.4-1.9-1.8c0.1-5.6,0.1-11.1,0-16.7
                    c0-1.6,0.5-2.1,2.1-2.1c4,0.1,7.9,0.1,11.9,0c1.3,0,1.8,0.4,1.8,1.7c0,1.4-0.4,1.9-1.9,1.9C55.7,22.8,52.4,22.9,48.8,22.9z"/>
                <path fill="#FFFFFF" d="M80,19.4c1,3,0.6,3.5-2.2,3.5c-3,0-6,0-9.2,0c0,1.6,0,3.1,0,4.9c2.1,0,4.3,0.1,6.5,0c1.5-0.1,2,0.5,2,2
                    c0,1.6-0.7,1.7-2,1.7c-2.1-0.1-4.3,0-6.8,0c0,2.3,0,4.5,0,6.7c0,1.2-0.3,1.8-1.7,1.8c-1.4,0-1.9-0.5-1.9-1.9c0-5.6,0-11.1,0-16.7
                    c0-1.5,0.5-2.1,2.1-2.1C71.2,19.4,75.7,19.4,80,19.4z"/>
            </g>
            </svg>
            <?php } ?>
        </div>
        <div class="col col-1 text-center">
            <a class="scroll" href="<?php echo $goTo; ?>">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1.5px"
                    height="2.5px" viewBox="0 0 1.5 2.5" style="enable-background:new 0 0 1.5 2.5;" xml:space="preserve">
                <path fill="#3A3E49" d="M0,1.5C0,1.5,0,1.5,0,1.5c0-0.1,0.1-0.1,0.1-0.1l0.5,0.8V0.1c0,0,0-0.1,0.1-0.1c0,0,0.1,0,0.1,0.1v2.2l0.6-0.8
                    c0,0,0.1,0,0.1,0c0,0,0,0.1,0,0.1l-0.7,1c0,0-0.1,0-0.1,0L0,1.5z"/>
                </svg>
                 <?php if($scroll_title) { ?>
                <span><?php echo $scroll_title; ?></span>
                <?php } else { ?>
                    <span>Wypożycz rower dla siebie!</span>
                <?php } ?>
            </a>  
        </div>
    </div>
</div>
</section>