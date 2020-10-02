<?php
/**
 *template to display the entry content
 *
 * @package brine
 *
 */
?>
<div class="entry-content">
    <?php
        if( is_single() ) {
            the_content(
                sprintf(
                    wp_kses(
                        __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'brine' ),
                        [
                            'span' => [
                                'class' => []
                            ]
                        ]
                    ),
                    the_title( '<span class="screen-reader-text">"', '"</span>', false ))

            );

            wp_link_pages(
                [
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'brine' ),
                    'after'  => '</div>',
                ]
            );
        }
        else
            brine_the_excerpt(20);
            echo brine_excerpt_more();
    ?>

</div>

