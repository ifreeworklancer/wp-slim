<?php
$pageID = '115';
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
);

$blog_post = new WP_Query($args);
?>
<!-- Blog section -->
<section id="blog-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto col-lg-12 px-1">
                <h2 class="section-title">
                    <?= get_the_title($pageID); ?>
                </h2>
            </div>
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
                <?php wp_reset_query(); ?>
            </div>
            <div class="col-12 text-center mt-4">
                <a href="<?= get_category_link(1)?>" class="btn btn-outline-primary">
                    В БЛОГ
                </a>
            </div>
        </div>
    </div>
</section>