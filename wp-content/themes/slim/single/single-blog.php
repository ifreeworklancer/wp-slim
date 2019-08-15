<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Blog single -->
    <section id="blog-single" class="single-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-12 mb-4">
                    <a href="/" class="page-link-nav page-link-nav--back">
                        назад
                    </a>
                </div>
                <div class="col-md-10 col-lg-6">
                    <div class="blog-single-prev">
                        <figure style="background-image: url('<?= $blog_single['image']; ?>');"></figure>
                        <a href="#" class="share-article">
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
                            <?= $blog_single['date']; ?>
                        </div>
                        <h1 class="title">
                            <?= $blog_single['title']; ?>
                        </h1>
                        <div class="description">
                            <?= $blog_single['description']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-12 col-sm text-center text-sm-left mb-4 mb-sm-0">
                    <a href="#" class="page-link-nav page-link-nav--back">
                        предыдущая стать
                    </a>
                </div>
                <div class="col-12 col-sm text-center mb-4 mb-sm-0">
                    <a href="#" class="btn btn-outline-primary">
                        назад в блог
                    </a>
                </div>
                <div class="col-12 col-sm text-center text-sm-right">
                    <a href="#" class="page-link-nav page-link-nav--next">
                        следующая статья
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/base/footer.php');