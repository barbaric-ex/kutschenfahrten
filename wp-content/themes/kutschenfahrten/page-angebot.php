<?php
/*
Template Name: Page Angebot
*/
get_header(); ?>

<?php if (have_rows('content_1')) : ?>
    <?php while (have_rows('content_1')) : the_row();
        $background_image_1 = get_sub_field('background_image_1');
        $background_image_2 = get_sub_field('background_image_2');
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');


    ?>

        <div class="ange_sec1">
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
                        <?php if ($title) : ?>
                            <div class="title wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.5s">
                                <h2><?php echo $title ?></h2>
                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="col-lg-7">
                        <?php if ($subtitle) : ?>
                            <div class="subtitle wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="0.5s">
                                <p><?php echo $subtitle ?></p>
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
        $background_image_1 = get_sub_field('background_image_1');
        $background_image_2 = get_sub_field('background_image_2');
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');


    ?>
        <div class="ange_sec2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="button_wrap_global wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.5s">
                            <?php
                            $link = get_sub_field('link');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>



                                <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="big_wrap">
                            <?php if (have_rows('repeator_box')) : ?>
                                <?php while (have_rows('repeator_box')) : the_row();
                                    $image = get_sub_field('image');
                                    $title = get_sub_field('title');
                                    $text = get_sub_field('text');


                                ?>

                                    <div class="item_wrap">
                                        <div class="first">
                                            <?php if ($title) : ?>
                                                <div class="title wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
                                                    <h2><?php echo $title ?></h2>

                                                    <div class="line_wrap">
                                                        <div class="tick_line"></div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <?php if ($text) : ?>
                                                <div class="text wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.5s">
                                                    <?php echo $text ?>
                                                </div>
                                            <?php endif; ?>


                                            <div class="btn1 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.5s">
                                                <?php
                                                $link = get_sub_field('link');
                                                if ($link) :
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>



                                                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php if ($image) : ?>
                                            <div class="second wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.5s">
                                                <div class="image" style="background-image: url(<?php echo $image['sizes']['medium']; ?>);"></div>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>