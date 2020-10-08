
<?php get_header()?>

    <!-- Features -->
    <div class="container index">
      
    <!-- content-index.php -->
    <?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
                get_template_part('partials/content', 'index');
            } // end while
        } // end if
        ?>
    </div>
    <?php get_footer()?>


  