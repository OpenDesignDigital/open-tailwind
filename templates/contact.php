<?php
/**
 * Template Name: Contact
 */
?>
<?= partial("_hero"); ?>

<div class="flex flex-col space-y-16 pg-builder">
    <section id="Contact">
        <div class="container mx-auto py-16 flex flex-col space-y-12 gap-12 md:flex-row md:px-0 md:space-y-0">
            <div class="w-full flex flex-col space-y-6 md:w-1/3">
               
                <h2 class="text-brand-teal text-3xl md:text-4xl md:text-left">Get In Touch</h2>

                <div class="the-content">
                <?php while (have_posts()) : the_post(); ?>
                    <?= the_content(); ?>
                <?php endwhile; ?>
                </div>

                <!-- Contact - Email -->
                <div class="flex flex-col space-y-2 con-item">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/icon_email.svg" alt="" class="block w-8 con-icon">
                    <h2 class="text-lg  font-semibold">Email</h2>
                    <p class="text-base">Lorem ipsum dolor sit amet.</p>
                    <a class="transition-all underline" href="mailto:<?php the_field('office_email', 'options'); ?>"><?php the_field('office_email', 'options'); ?></a>
                </div>

                <!-- Contact - Phone -->
                <div class="flex flex-col space-y-2 con-item">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/icon_phone.svg" alt="" class="block w-8 con-icon">
                    <h2 class="text-lg font-semibold">Office</h2>
                    <p class="text-base">Lorem ipsum dolor sit amet.</p>
                    <a class="transition-all underline" href="tel:<?php echo str_replace(' ', '', get_field('office_telephone', 'options')); ?>"><?php the_field('office_telephone', 'options'); ?></a>
                </div>

                <!-- Contact - Address -->
                <div class="flex flex-col space-y-2 con-item">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/icon_address.svg" alt="" class="block w-8 con-icon">

                    <h2 class="text-lg font-semibold">Address</h2>
   
                    <div class="text-base"><?php the_field('office_address', 'options') ?></div>

                    <p class="text-base"><a href="<?php the_field('get_directions','options'); ?>" class="btn-txt transition-all">Get Directions</a></p>
                </div>


            </div>
            <div class="w-full flex flex-col md:w-2/3">
                <div class="map-box">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2382.12253597768!2d-6.2864466872192875!3d53.34106267217216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670c253f9e149b%3A0x20b9493cd7221566!2sOpen%20Design%20and%20Digital!5e0!3m2!1sen!2sie!4v1707222271892!5m2!1sen!2sie" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <?= partial("_content/_newsletter_block"); ?>
</div>