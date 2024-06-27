<?php
/*
Template Name: Page Jetzt Anfragen
*/
get_header(); ?>



<?php if (have_rows('content_1')) : ?>
    <?php while (have_rows('content_1')) : the_row();
        $background_image_1 = get_sub_field('background_image_1');
        $background_image_2 = get_sub_field('background_image_2');

        $title = get_sub_field('title');



    ?>
        <div class="ange_sec1 kont_sec1 jetz_sec1">
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


<div class="jetz_sec2">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div id='calendar'></div>
            </div>

            <div class="col-lg-7">
                <div class="wrapper">
                    <div class="text">
                        <p>Fragen Sie unkompliziert ihren Wunschtermin an und wir melden uns schnellstmöglich zurück.</p>
                    </div>

                    <div class="wrap2">
                        <div class="bes_wrap">
                            <div class="square_black">

                            </div>
                            <div class="name">
                                BESETZT
                            </div>
                        </div>

                        <div class="ver_wrap">
                            <div class="white_square">

                            </div>
                            <div class="name">
                                VERFÜGBAR
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'de', // Postavljanje jezika na njemački
            dayHeaderFormat: {
                weekday: 'short'
            } // Prikaz dana u tjednu na njemačkom
        });
        calendar.render();
        moveWeekDaysToBottom();
    });

    function moveWeekDaysToBottom() {
        var colHeader = document.querySelector('.fc-col-header');
        var dayGridBody = document.querySelector('.fc-daygrid-body');
        if (colHeader && dayGridBody) {
            colHeader.parentNode.insertBefore(dayGridBody, colHeader);
        }
    }
</script>





<div class="jetz_sec3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form_wrap">
                    <?php echo do_shortcode('[advanced_form form="form_6673f805de125" submit_text="ANFRAGE SENDEN"]'); ?>

                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>