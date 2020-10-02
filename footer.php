<?php

/**
 * footer.php
 *
 * footer file for theme
 *
 * @package brine
 */

?>
<footer>
    <?php
        if( is_active_sidebar( 'sidebar-2' ) ) {
            ?>
                <div class="container">
                    <div class="row">

                        <?php dynamic_sidebar('sidebar-2'); ?>

                    </div>
                </div>

            <?php
        }

    ?>


</footer>


</div>
</div>
<?php
wp_footer();
?>
