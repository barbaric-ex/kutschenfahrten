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



<?php if (have_rows('content_2')) : ?>
    <?php while (have_rows('content_2')) : the_row();
        $text = get_sub_field('text');
        $small_text_1 = get_sub_field('small_text_1');
        $small_text_2 = get_sub_field('small_text_2');




    ?>
        <div class="jetz_sec2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 small-calendar">
                        <div class="date_wrapper">
                            <h4>Jänner</h4>
                            <p>Dienstag 22.01. 2024</p>
                        </div>
                        <div id='calendar'></div>
                    </div>

                    <div class="col-lg-7">
                        <div class="wrapper">

                            <?php if ($text) : ?>
                                <div class="text">
                                    <p><?php echo $text ?></p>
                                </div>
                            <?php endif; ?>


                            <div class="wrap2">
                                <div class="bes_wrap">
                                    <div class="square_black">

                                    </div>
                                    <?php if ($small_text_1) : ?>
                                        <div class="name">
                                            <?php echo $small_text_1 ?>
                                        </div>
                                    <?php endif; ?>

                                </div>

                                <!-- <div class="ver_wrap">
                                    <div class="white_square">

                                    </div>
                                     <?php if ($small_text_2) : ?>
                                        <div class="name">
                                            <?php echo $small_text_2 ?>
                                        </div>
                                    <?php endif; ?> 

                                </div> -->


                            </div>

                            <div class="warrning_text">
                                <p></p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var events = [];

                <?php if (have_rows('date_events_box')) :
                    while (have_rows('date_events_box')) : the_row();
                        $event_date = get_sub_field('event_date');
                        $event_title = get_sub_field('event_title');
                ?>
                        events.push({
                            title: '<?php echo esc_js($event_title); ?>',
                            start: '<?php echo esc_js(date('Y-m-d', strtotime($event_date))); ?>'
                        });
                        console.log('Event added: ', {
                            title: '<?php echo esc_js($event_title); ?>',
                            start: '<?php echo esc_js(date('Y-m-d', strtotime($event_date))); ?>'
                        });
                    <?php endwhile; ?>
                <?php endif; ?>

                console.log('All events:', events);

                // Postavljanje trenutnog mjeseca
                var monthEl = document.querySelector('.date_wrapper h4');
                var dateEl = document.querySelector('.date_wrapper p');
                var warningTextEl = document.querySelector('.warrning_text p');

                var today = new Date();
                var optionsMonth = {
                    month: 'long'
                };
                var optionsDate = {
                    weekday: 'long',
                    day: '2-digit',
                    month: '2-digit',
                    year: 'numeric'
                };

                var currentMonth = today.toLocaleDateString('de-DE', optionsMonth);
                var currentDate = today.toLocaleDateString('de-DE', optionsDate)
                    .replace(/(\d{2})\./g, '$1.').replace(/(\d{2})\.(\d{2})\./g, '$1.$2.'); // Dodavanje točke nakon dana i mjeseca

                if (monthEl) {
                    monthEl.textContent = currentMonth;
                }

                if (dateEl) {
                    dateEl.textContent = currentDate;
                }

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'de', // Postavljanje jezika na njemački
                    events: events,
                    headerToolbar: {
                        left: '',
                        center: 'prev,title,next',
                        right: ''
                    },
                    titleFormat: { // Formatiranje naslova da prikazuje samo mjesec
                        month: 'long'
                    },
                    dateClick: function(info) {
                        today.setHours(0, 0, 0, 0); // Postavljanje dana na početak dana
                        var clickedDate = new Date(info.dateStr);

                        if (clickedDate < today) {
                            alert('Sie können kein vergangenes Datum auswählen.');
                            return;
                        }

                        var isDateReserved = events.some(function(event) {
                            return event.start === info.dateStr;
                        });

                        if (isDateReserved) {
                            warningTextEl.textContent = 'Dieser Termin ist bereits gebucht, bitte wählen Sie einen anderen Tag';
                            return;
                        } else {
                            warningTextEl.textContent = ''; // Očisti poruku upozorenja ako je datum slobodan
                        }

                        console.log('Clicked date: ', info.dateStr);

                        var dateField = document.getElementById('acf-field_6673f6c0f7801-field_6673f6c0f7802');
                        if (dateField) {
                            dateField.value = info.dateStr;
                        } else {
                            console.warn('Date field not found!');
                        }
                    }
                });

                calendar.render();
            });
        </script>


    <?php endwhile; ?>
<?php endif; ?>




<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js'></script>

<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/index.global.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/index.global.min.js"></script>-->



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