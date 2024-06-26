<?php
/*
Template Name: Page Datenschutz
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

        $info_text = get_sub_field('info_text');



    ?>

        <div class="impressum_sec2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php if ($info_text) : ?>
                            <div class="wrapper">


                                <?php echo $info_text ?>



                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>