<?php 
/*
* The Header Template File
*/

get_header(); ?>

<Section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php 
                 if(have_posts()) :
                    while (have_posts()) : the_post(); 
                ?>

                <div class="blog_area">
                 <?php the_content(); ?>
                </div>

                <?php
                 endwhile;
                 else :
                    _e('No Post Found');
                 endif;
                ?>

            </div>
            <div class="col-md-3">
                <h2>This is Sidebar Area</h2>
            </div>
        </div>
    </div>
</Section>


<?php 
/*
* The Footer Template File
*/

get_footer(); ?>