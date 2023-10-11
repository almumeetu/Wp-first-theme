<?php 
/*
* The Header Template File
*/

get_header(); ?>

<h1>This is Archive Template</h1>
<Section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</Section>

<?php 
/*
* The Footer Template File
*/

get_footer(); ?>