<?php
/*
Template Name: Page PFERDEVERKAUF
*/
get_header(); ?>


<?php if (have_rows('content_1')) : ?>
    <?php while (have_rows('content_1')) : the_row();

        $title = get_sub_field('title');



    ?>
        <div class="ange_sec1 kont_sec1 pfer_sec1">


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


<div class="pfer_sec2">
    <div class="container">
        <?php

        $args = array(
            'post_type' => 'horse',
            'orderby'    => 'ID',
            'post_status' => 'publish',

            'posts_per_page' => 4
        );
        $result = new WP_Query($args);
        if ($result->have_posts()) : ?>

            <div class="row">




                <?php while ($result->have_posts()) : $result->the_post();
                    $text_info_1 = get_field('text_info_1');
                    $text_info_2 = get_field('text_info_2');
                    $gallery = get_field('gallery');
                ?>
                    <div class="col-lg-6">
                        <div class="wrapper wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.5s">
                            <div class="owl-carousel horse-slider owl-theme">

                                <?php
                                $images = get_field('gallery');
                                if ($images) : ?>

                                    <?php foreach ($images as $image) : ?>

                                        <div class="image_slide" style="background-image: url(<?php echo esc_url($image['sizes']['medium']); ?>);">

                                        </div>

                                    <?php endforeach; ?>

                                <?php endif; ?>



                            </div>

                            <div class="content_text">

                                <?php if ($text_info_1) : ?>
                                    <div class="first">
                                        <?php echo $text_info_1 ?>
                                    </div>
                                <?php endif; ?>

                                <div class="second">
                                    <?php if ($text_info_2) : ?>
                                        <div class="text">
                                            <?php echo $text_info_2 ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="button_wrap_global">
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
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>







            </div>
            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total' => $result->max_num_pages,
                    'current' => $paged,
                    'prev_text' => __('« Prev'),
                    'next_text' => __('Next »'),
                    'type' => 'plain',
                    'end_size' => 1,
                    'mid_size' => 2
                ));
                ?>
            </div>
        <?php
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>

<script>
    $(window).on('load', function() {
        var $owl2 = $('.owl-carousel');
        $owl2.children().each(function(index) {
            $(this).attr('data-position', index); // NB: .attr() instead of .data()
        });
        let owl2 = $('.owl-carousel.horse-slider').owlCarousel({
            items: 1,
            loop: true,

            nav: false,
            dots: true,
            autoplay: false,
            autoplaySpeed: 1000,

            autoplayHoverPause: false

        });






    });
</script>






<?php get_footer(); ?>