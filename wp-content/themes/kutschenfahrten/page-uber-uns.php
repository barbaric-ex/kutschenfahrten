<?php
/*
Template Name: Page Hannes
*/
get_header(); ?>

<?php if (have_rows('content_1')) : ?>
    <?php while (have_rows('content_1')) : the_row();
        $background_image = get_sub_field('background_image');



    ?>
        <?php if ($background_image) : ?>
            <div class="hannes_sec1" style="background-image: url(<?php echo $background_image['sizes']['large']; ?>);">

            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>



<?php if (have_rows('content_2')) : ?>
    <?php while (have_rows('content_2')) : the_row();
        $background_image_1 = get_sub_field('background_image_1');
        $background_image_2 = get_sub_field('background_image_2');

        $title = get_sub_field('title');
        $text = get_sub_field('text');



    ?>
        <div class="hanes_sec2">

            <?php if ($background_image_1) : ?>
                <div class="gray_img image1">
                    <img src="<?php echo $background_image_1['sizes']['medium']; ?>" alt="name">
                </div>
            <?php endif; ?>

            <?php if ($background_image_2) : ?>
                <div class="gray_img image2">
                    <img src="<?php echo $background_image_2['sizes']['medium']; ?>" alt="name">
                </div>
            <?php endif; ?>


            <div class="container">
                <div class="row">
                    <div class="col-lg-5">

                    </div>

                    <div class="col-lg-7">
                        <div class="content_wrap">
                            <?php if ($title) : ?>
                                <div class="title wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
                                    <h2><?php echo $title ?></h2>
                                </div>
                            <?php endif; ?>

                            <?php if ($text) : ?>
                                <div class="text wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.5s">
                                    <?php echo $text ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>



<?php if (have_rows('content_3')) : ?>
    <?php while (have_rows('content_3')) : the_row();
        $background_image = get_sub_field('background_image');


        $text = get_sub_field('text');
        $image = get_sub_field('image');




    ?>
        <div class="hanes_sec3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <?php if ($image) : ?>
                            <div class="image wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.5s">
                                <img src="<?php echo $image['sizes']['medium']; ?>" alt="name">
                            </div>
                        <?php endif; ?>

                    </div>

                    <div class="col-lg-5">
                        <div class="content">
                            <?php if ($text) : ?>
                                <div class="text wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="0.5s">
                                    <?php echo $text ?>
                                </div>
                            <?php endif; ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>


        <?php if ($background_image) : ?>
            <div class="hannes_sec4" style="background-image: url(<?php echo $background_image['sizes']['large']; ?>);">

            </div>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>