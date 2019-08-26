<?php
get_header('secondary');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC',
);
$blog_post = new WP_Query($args);
?>
    <!-- Blog page -->
    <section id="blog-page" class="page-section">
        <div class="page-banner"
             style="background-image:url(<?= get_theme_file_uri('images/bg/page-blog-bg.jpg'); ?>);">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-sm-5">
                        <div class="section-description">
                            <h1 class="section-title">
                                <?= get_theme_mod('blog_page_title'); ?>
                            </h1>
                            <p><?= get_theme_mod('blog_page_description'); ?></p>
                        </div>
                    </div>
                </div>
                <a href="/" class="page-link-nav page-link-nav--back">
                    назад
                </a>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="article-wrapper">
                    <?php if ($blog_post->have_posts()) :
                        while ($blog_post->have_posts()) :
                            $blog_post->the_post();
                            ?>
                            <article class="article-item">
                                <a href="<?= the_permalink(); ?>">
                                    <div class="image">
                                        <figure style="background-image:url('<?= get_the_post_thumbnail_url(); ?>');"></figure>
                                    </div>
                                    <div class="content">
                                        <h5 class="title">
                                            <?= the_title(); ?>
                                        </h5>
                                        <div class="description">
                                            <?= the_excerpt(); ?>
                                        </div>
                                        <div class="read-more">
                                            <div class="read-more__text">читать статью</div>
                                            <div class="read-more__icon"></div>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="next-page">
                    <?= next_posts_link(); ?>
                </div>
            </div>
        </div>
    </section>
<?php wp_reset_query(); ?>
<?php
get_footer();