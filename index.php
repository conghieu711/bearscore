<?php get_header(); ?>
    <div class="container"> 
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php
                    if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) : the_post();

                            get_template_part( 'content', get_post_format() );

                        endwhile;

                    else :

                        get_template_part( 'content', 'none' );

                    endif;
                ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>