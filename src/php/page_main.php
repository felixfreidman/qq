<?php /* Template Name: Main Page */?>
<?php get_header()?>


<main class="main">
    <div class="section section--greeting" id="toGreeting">
        <div class="greeting-container">
            <?php the_content() ?>
            <div class="apply-btn apply-btn--demo">ПОЛУЧИТЬ ДЕМО-ДОСТУП</div>
        </div>
        <div class="mobile-image"> <img
                src="<?php echo get_template_directory_uri() . '/assets/images/content/main.png' ?>" alt=""></div>
    </div>
    <div class="section section--benefits" id="toBenefits">
        <div class="section-header">Выгода от внедрения</div>
        <div class="section-container">
            <div class="image-pagination">
                
                <?php
                if( have_rows('card_repeater') ):
                    while ( have_rows('card_repeater') ) : the_row();
                    ?>

                    <div class="image-toggler<?php if (get_sub_field('card_active') == 'yes') { echo  ' image-toggler--active'; } ?>">
                        <div class="image-toggler__container">
                            <div class="image-header"><?php the_sub_field('card_header'); ?></div>
                            <div class="image-content"><?php the_sub_field('card_content'); ?></div>
                        </div>
                        <div class="image-toggler__icon"> <img class="image-icon"
                                src="<?php the_sub_field('card_image'); ?>">
                        </div>
                    </div>
                    <?php
                    endwhile;
                endif;
                ?>
            </div>
            <div class="image-presentation">
                <div class="image--toggle1 image-toggle--show"> <img
                        src="<?php echo get_template_directory_uri() . '/assets/images/content/main_screens.png' ?>"
                        alt="Toggle 3"></div>
            </div>
        </div>
    </div>
</main>

<?php get_footer()?>