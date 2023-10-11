<?php 
/*
* The Header Template File
*/

get_header(); ?>

<Section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</Section>


<footer id="footer_area">

    <section id="copyright_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo get_theme_mod('saikat_copyright_section'); ?></p>
                </div>
            </div>
        </div>
    </section>
</footer>


<?php wp_footer(); ?>
</body>
</html>