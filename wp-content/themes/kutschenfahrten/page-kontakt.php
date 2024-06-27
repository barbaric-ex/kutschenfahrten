<?php
/*
Template Name: Page Kontakt
*/
get_header(); ?>


<?php if (have_rows('content_1')) : ?>
    <?php while (have_rows('content_1')) : the_row();

        $title = get_sub_field('title');



    ?>
        <div class="ange_sec1 kont_sec1 ">


            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php if ($title) : ?>
                            <div class="title wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.5s">
                                <h2> <?php echo $title ?></h2>
                            </div>
                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>



<?php if (have_rows('content_2')) : ?>
    <?php while (have_rows('content_2')) : the_row();

        $text_info_1 = get_sub_field('text_info_1');
        $text_info_2 = get_sub_field('text_info_2');
        $map = get_sub_field('map');



    ?>

        <div class="kont_sec2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <?php if ($text_info_1) : ?>
                            <div class="first_info wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.5s">
                                <?php echo $text_info_1 ?>
                            </div>
                        <?php endif; ?>

                    </div>

                    <div class="col-lg-7">

                        <div class="second_info wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.5s">
                            <?php if ($text_info_2) : ?>
                                <div class="links_wrapper">
                                    <?php echo $text_info_2 ?>
                                </div>
                            <?php endif; ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="kont_sec3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php if ($map) : ?>

                            <div class="map_wrap">
                                <?php echo $map ?>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>





<?php get_footer(); ?>