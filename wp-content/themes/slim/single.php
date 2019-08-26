<?php
get_header('secondary');
?>
    <!-- Blog single -->
    <section id="blog-single" class="single-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-12 mb-4">
                    <a href="<?= get_category_link(1)?>" class="page-link-nav page-link-nav--back">
                        назад
                    </a>
                </div>
                <div class="col-md-10 col-lg-6">
                    <div class="blog-single-prev">
                        <figure style="background-image: url('<?= get_the_post_thumbnail_url(); ?>');"></figure>
                        <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" target="_blank" class="share-article">
                            <div class="share-article-icon">
                                <svg width="10" height="10">
                                    <use xlink:href="#share-icon"></use>
                                </svg>
                            </div>
                            <div class="share-article__text">Поделиться в соцсетях</div>
                        </a>
                    </div>
                </div>
                <div class="col-md-10 col-lg-6">
                    <div class="blog-single-content">
                        <div class="date">
                            <?= the_date('j F Y'); ?>
                        </div>
                        <h1 class="title">
                            <?= the_title(); ?>
                        </h1>
                        <div class="description">
                            <?= the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-12 col-sm text-center text-sm-left mb-4 mb-sm-0">
                    <?php next_post_link('%link', 'предыдущая стать', true); ?>
                </div>
                <div class="col-12 col-sm text-center mb-4 mb-sm-0">
                    <a href="<?= get_category_link(1)?>" class="btn btn-outline-primary">
                        назад в блог
                    </a>
                </div>
                <div class="col-12 col-sm text-center text-sm-right">
                    <?php previous_post_link('%link', 'следующая стать', true); ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();