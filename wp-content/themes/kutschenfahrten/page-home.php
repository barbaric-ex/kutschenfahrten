<?php
/*
Template Name: Page Home
*/
get_header(); ?>


<div class="home_mega_wrap">

    <?php if (have_rows('content_1')) : ?>
        <?php while (have_rows('content_1')) : the_row();

            $background_image_1 = get_sub_field('background_image_1');
            $background_image_2 = get_sub_field('background_image_2');

        ?>

            <?php if ($background_image_1) : ?>
                <div class="fixed_img image1">
                    <img src="<?php echo $background_image_1['sizes']['medium']; ?>" alt="name">
                </div>
            <?php endif; ?>



            <?php if ($background_image_2) : ?>
                <div class="fixed_img image2">
                    <img src="<?php echo $background_image_2['sizes']['medium']; ?>" alt="name">
                </div>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>


    <?php if (have_rows('content_1')) : ?>
        <?php while (have_rows('content_1')) : the_row();
            $background_image_1 = get_sub_field('background_image_1');

            $text = get_sub_field('text');
            $video = get_sub_field('video');

            $scroll_text = get_sub_field('scroll_text');

        ?>
            <div class="home_sec1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="wrapper1">

                                <?php if ($background_image_1) : ?>

                                    <div class="potkova potkova1">
                                        <img src="<?php echo $background_image_1['sizes']['medium']; ?>" alt="name">
                                    </div>
                                <?php endif; ?>

                                <?php if ($text) : ?>

                                    <div class="text_wrap wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.5s">
                                        <h2><?php echo $text ?></h2>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-lg-7">

                            <?php if ($video) : ?>

                                <div class="video_wrap  wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="0.5s">
                                    <video disableRemotePlayback playsinline muted loop autoplay="">
                                        <source src="<?php echo $video ?>" type="video/mp4">
                                    </video>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-lg-12">
                            <div class="scrolling_text">

                                <?php if ($scroll_text) : ?>
                                    <div class="text_to_scroll">
                                        <h2 class="marquee1"><?php echo $scroll_text ?></h2>

                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <script type="text/javascript">
                            $(function() {
                                var speed_text;
                                if ($(window).width() < 991) {
                                    speed_text = 300;
                                } else {
                                    speed_text = 300;
                                }
                                console.log(speed_text)
                                $('.marquee1').marquee({
                                    gap: 50,
                                    duplicated: true,
                                    speed: speed_text,

                                });
                            });
                        </script>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>


    <?php if (have_rows('content_2')) : ?>
        <?php while (have_rows('content_2')) : the_row();
            $title = get_sub_field('title');


        ?>

            <div class="home_sec2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if ($title) : ?>
                                <div class="title_wrap wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.5s">
                                    <h2><?php echo $title ?></h2>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-lg-4">
                            <div class="button_wrap_global wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
                                <?php
                                $link = get_sub_field('button');
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

                        <div class="col-lg-8">
                            <div class="accord_mega_wrap">
                                <?php $i = 1;
                                if (have_rows('dropdown_box')) : ?>
                                    <?php while (have_rows('dropdown_box')) : the_row();
                                        $title = get_sub_field('title');
                                        $text = get_sub_field('text');
                                        $image = get_sub_field('image');


                                    ?>

                                        <div class="accordion_wrap wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
                                            <div class="title">
                                                <div class="number_tit">0<?php echo $i; ?></div>

                                                <div class="icone_wrap">
                                                    <div class="icone icone1">
                                                        <div class="line"></div>
                                                    </div>
                                                    <div class="icone icone2">
                                                        <div class="line"></div>
                                                    </div>
                                                </div>


                                                <?php if ($title) : ?>
                                                    <h2><?php echo $title ?></h2>
                                                <?php endif; ?>


                                            </div>

                                            <div class="text">
                                                <?php if ($text) : ?>
                                                    <p><?php echo $text ?></p>
                                                <?php endif; ?>

                                                <?php if ($image) : ?>
                                                    <div class="image" style="background-image: url(<?php echo $image['sizes']['medium']; ?>);">
                                                    </div>
                                                <?php endif; ?>

                                            </div>


                                        </div>
                                    <?php $i++;
                                    endwhile; ?>
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
            $title = get_sub_field('title');


        ?>

            <div class="home_sec3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="big_wrapper ">
                                <div class="arrow_wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/Shapes/Arrow.svg" alt="">
                                </div>
                                <div class="owl-carousel header-slider owl-theme">

                                    <?php if (have_rows('slider_box')) : ?>
                                        <?php while (have_rows('slider_box')) : the_row();
                                            $image = get_sub_field('image');
                                            $title = get_sub_field('title');
                                            $subtitle = get_sub_field('subtitle');
                                            $text = get_sub_field('text');


                                        ?>
                                            <div class="slider_wrap">
                                                <?php if ($image) : ?>
                                                    <div class="image" style="background-image: url(<?php echo $image['sizes']['medium']; ?>);"></div>
                                                <?php endif; ?>
                                                <div class="text_wrap">

                                                    <?php if ($subtitle) : ?>
                                                        <div class="subtitle wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
                                                            <h3><?php echo $subtitle ?></h3>
                                                        </div>
                                                    <?php endif; ?>

                                                    <?php if ($title) : ?>
                                                        <div class="title wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.5s">
                                                            <h2><?php echo $title ?></h2>
                                                        </div>
                                                    <?php endif; ?>

                                                    <?php if ($text) : ?>
                                                        <div class="text wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.5s">
                                                            <p><?php echo $text ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <script>
                $(window).on('load', function() {
                    var $owl2 = $('.owl-carousel');
                    $owl2.children().each(function(index) {
                        $(this).attr('data-position', index); // NB: .attr() instead of .data()
                    });
                    let owl2 = $('.owl-carousel.header-slider').owlCarousel({
                        items: 1,
                        loop: true,

                        //nav:true,
                        dots: false,
                        autoplay: false,
                        autoplaySpeed: 1000,

                        autoplayHoverPause: false

                    });

                    var counter = 0;
                    owl2.on('changed.owl.carousel.header-slider', function(property) {

                        var current = property.item.index;
                        var numberr = $(property.target).find(".owl-item").eq(current).find(".image_wrap").data('num');




                        $(".home_sec1 .numbers_wrap .first ").text(numberr);



                    });


                    $('.home_sec3 .big_wrapper .arrow_wrap img').click(function() {
                        owl2.trigger('next.owl.carousel');
                    })
                });
            </script>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('content_4')) : ?>
        <?php while (have_rows('content_4')) : the_row();
            $image_1 = get_sub_field('image_1');
            $image_2 = get_sub_field('image_2');
            $image_3 = get_sub_field('image_3');
            $image_4 = get_sub_field('image_4');
            $image_5 = get_sub_field('image_5');
            $title = get_sub_field('title');
            $text = get_sub_field('text');


        ?>
            <div class="home_sec4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="image_wrap wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
                                <?php if ($image_1) : ?>
                                    <div class="image image1" style="background-image: url(<?php echo $image_1['sizes']['medium']; ?>);"></div>
                                <?php endif; ?>

                                <?php if ($image_2) : ?>
                                    <div class="image image2" style="background-image: url(<?php echo $image_2['sizes']['medium']; ?>);"></div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="image_wrap2 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.5s">
                                <div class="first_wrap">
                                    <?php if ($image_3) : ?>
                                        <div class="image image3" style="background-image: url(<?php echo $image_3['sizes']['medium']; ?>);"></div>
                                    <?php endif; ?>
                                    <?php if ($image_4) : ?>
                                        <div class="image image4" style="background-image: url(<?php echo $image_4['sizes']['medium']; ?>);"></div>
                                    <?php endif; ?>
                                </div>

                                <div class="second_wrap wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.5s">
                                    <?php if ($image_5) : ?>
                                        <div class="image image5" style="background-image: url(<?php echo $image_5['sizes']['medium']; ?>);"></div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="text_content_wrap">

                                <?php if ($title) : ?>
                                    <div class="title wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
                                        <h2><?php echo $title ?></h2>
                                    </div>
                                <?php endif; ?>


                                <?php if ($text) : ?>
                                    <div class="text wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.5s">
                                        <p><?php echo $text ?></p>
                                    </div>
                                <?php endif; ?>

                                <div class="underline_btn wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.5s">
                                    <?php
                                    $link = get_sub_field('button');
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
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
</div>




<?php get_footer(); ?>