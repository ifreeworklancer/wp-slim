<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Blog page -->
    <section id="blog-page" class="page-section">
        <div class="page-banner" style="background-image:url(<?= $blog_page['image_banner']; ?>);">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-sm-5">
                        <div class="section-description">
                            <h2 class="section-title">
                                <?= $blog_page['title']; ?>
                            </h2>
                            <?= $blog_page['description']; ?>
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
                    <?php
                    foreach ($blog_page['item'] as $item) :
                        ?>
                        <article class="article-item">
                            <a href="#">
                                <div class="image">
                                    <figure style="background-image:url('<?= $item['image']; ?>');"></figure>
                                </div>
                                <div class="content">
                                    <h5 class="title">
                                        <?= $item['title']; ?>
                                    </h5>
                                    <div class="description">
                                        <?= $item['description'] ?>
                                    </div>
                                    <div class="read-more">
                                        <div class="read-more__text">читать статью</div>
                                        <div class="read-more__icon"></div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    <?php endforeach; ?>
                </div>
                <div class="row">
                    <div class="col-12 text-center mt-4">
                        <a href="#" class="btn btn-outline-primary">
                            еще
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/base/footer.php');