<?php
$pageID = '12';
$intro_description = get_field('intro_description', $pageID);
$intro_trainer_image = get_field('intro_trainer_image', $pageID);
?>
<!-- Intro -->
<section id="intro" style="background-image: url('<?= get_the_post_thumbnail_url($pageID); ?>');">
    <div class="container h-100">
        <div class="row h-100 position-relative">
            <div class="col-sm-8 col-lg-7 col-xl-6 px-xl-0 h-100 d-flex align-items-center">
                <div class="intro-item">
                    <div class="decor-icon">
                        <svg width="200" height="30">
                            <use xlink:href="#decor-line"></use>
                        </svg>
                    </div>
                    <h1 class="title">
                        <?= get_the_title($pageID); ?>
                    </h1>
                    <div class="description">
                        <p>
                            <?= $intro_description; ?>
                        </p>
                        <a href="#" class="link-more">
                            подробнее
                        </a>
                    </div>
                </div>
                <a href="#result" class="scroll-down scroll-link">
                    <div class="icon"></div>
                    <div class="text">
                        узнать больше
                    </div>
                </a>
            </div>
            <figure class="intro-trainer-image"
                    style="background-image:url('<?= $intro_trainer_image['url']; ?>');"></figure>
        </div>
    </div>
    <h2 class="full-name">
        <?= get_theme_mod('full_name'); ?>
    </h2>
    <ul class="social-list">
        <li>
            Мы в социальные медиа
        </li>
        <li>
            <a href="<?= get_theme_mod('facebook'); ?>">
                <svg width="15" height="15">
                    <use xlink:href="#facebook-icon"></use>
                </svg>
            </a>
        </li>
        <li>
            <a href="<?= get_theme_mod('instagram'); ?>">
                <svg width="15" height="15">
                    <use xlink:href="#instagram-icon"></use>
                </svg>
            </a>
        </li>
        <li>
            <a href="<?= get_theme_mod('youtube'); ?>">
                <svg width="18" height="18">
                    <use xlink:href="#youtube-icon"></use>
                </svg>
            </a>
        </li>
        <li>
            <a href="https://t.me/<?= get_theme_mod('telegram'); ?>">
                <svg width="15" height="15">
                    <use xlink:href="#telegram-icon"></use>
                </svg>
            </a>
        </li>
    </ul>
    <div class="intro-decor-bg"></div>
</section>
