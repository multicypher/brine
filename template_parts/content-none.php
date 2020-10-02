<?php
/**
 *
 * post not found message template
 *
 * @package brine
 */
?>

<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title">
            <?php esc_html_e('No Content Found','brine'); ?>
        </h1>
        <p class="page-content">
            <p>
                <?php
                    if(is_home() && current_user_can('publish_posts')){
                        ?>
                        <p>
                            <?php
                                printf(
                                        wp_kses(
                                                __('Publish your first post? <a href="%s">Get In</a>','brine'),
                                            [
                                                'a'=> [
                                                        'href'=>[]
                                                ]
                                            ]
                                        ),
                                        esc_url(admin_url('post-new.php'))
                                );

                            ?>

                        </p>

                    <?php
                    }
                    elseif(is_search()){
                    ?>
                        <p>
                            <?php  esc_html_e('Sorry nothing found, try different search term','brine'); ?>
                        </p>
                        <?php
                            get_search_form();
                        }
                        else {
                        ?>
                            <p>
                                <?php esc_html_e('Sorry nothing found, try different search term','brine'); ?>
                            </p>
                        <?php
                        } ?>
            </p>
        </div>
    </header>
</section>