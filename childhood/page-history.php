<?php
/*
Template Name: Наша История
*/
?>
<?php
  get_header();
?>
<div class="aboutus" id="aboutus">
    <div class="container">
                <h1 class="title"><?php the_field('history_title'); ?></h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <?php the_field('history_subtitle_first'); ?>
                        </div>
                        <div class="aboutus__text">
                            <?php the_field('history_descr'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('history_img'); ?>" alt="мир детства">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('history_img_second'); ?>" alt="мир детства">
                    </div>
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('history_subtitle_second'); ?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('history_descr_second'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('history_subtitle_third'); ?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('history_descr_third'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('history_img_third'); ?>" alt="мир детства">
                    </div>
                </div>
    </div>
 </div>


<?php
  get_footer();
?>