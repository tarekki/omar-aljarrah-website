<?php
/**
 * The template for displaying all single posts
 *
 * @package Omar_Al_Jarrah_Consulting
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <span class="posted-on">
                            <i class="fas fa-calendar"></i>
                            <?php echo get_the_date(); ?>
                        </span>
                        <span class="byline">
                            <i class="fas fa-user"></i>
                            <?php the_author(); ?>
                        </span>
                    </div>
                </header>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'omar-consulting'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

                <footer class="entry-footer">
                    <?php
                    $categories_list = get_the_category_list(esc_html__(', ', 'omar-consulting'));
                    if ($categories_list) {
                        printf('<span class="cat-links"><i class="fas fa-folder"></i> %s</span>', $categories_list);
                    }

                    $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'omar-consulting'));
                    if ($tags_list) {
                        printf('<span class="tags-links"><i class="fas fa-tags"></i> %s</span>', $tags_list);
                    }
                    ?>
                </footer>
            </article>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
