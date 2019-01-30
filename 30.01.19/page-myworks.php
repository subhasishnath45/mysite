<?php 
/*
Template Name: Works Page template
*/
?>
<?php get_header(); ?>
        <!-- Blog Area Start -->
        <div id="myworkspage">
            <?php 
                while ( have_posts() ) :
                the_post();
            ?>
            <div class="container">
                <?php the_content(); ?>
            </div>
        
            <?php
                endwhile;
            ?>
        </div>
        <!-- Blog Area End -->


<?php 
get_footer();
?>