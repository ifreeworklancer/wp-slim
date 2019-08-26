<?php
/*
Template Name: Страница "Спасибо"
Template Post Type: page
*/
get_header('secondary');
?>
    <section id="thanks-page" class="page-secondary" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>)">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col">
                    <div class="page-secondary-item">
                        <h1 class="title">
                            Спасибо!
                        </h1>
                        <div class="description">
                            <p>
                                Наш менеджер с вами свяжеться
                            </p>
                        </div>
                        <a href="/" class="btn btn-primary">
                            На главную
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();