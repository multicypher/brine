<?php
/**
 * Main template file
 *
 * @package Brine
 *
 */

get_header();
?>
<div id="primary">
    <div id="main" class="site-main mt-5" role="main">
        <?php
        if(have_posts()) :
            ?>
            <div class="container">
                <?php
                    if ( is_home() && !is_front_page() ) {
                        ?>
                        <header class="mb-5">
                            <h1 class="page-title screen-reader-text">
                                <?php single_post_title(); ?>
                            </h1>
                        </header>
                        <?php
                    }
                ?>
                <div class="row">
                    <?php
                    $index = 0;
                    $no_of_columns = 3;
                    while(have_posts()):the_post();
                        if(0 === $index % $no_of_columns){
                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <?php

                        }
                        ?>
                        <?php get_template_part('template_parts/content'); ?>
                        <?php
                        $index++;

                        if(0 != $index && 0=== $index % $no_of_columns) {
                        ?>

                        </div>
                        <?php
                        }

                    endwhile;
                    ?>
                </div>
            </div>
        <?php

        else :

            get_template_part('template_parts/content-none');

        endif;
        ?>
        <?php brine_pagination(); ?>
    </div>

</div>
<?php
get_footer();

