<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<?php wp_head(); ?>
<body>

<?php include(__DIR__ . '/includes/partials/svgs.php') ?>

<!-- App-header -->
<header id="app-header">
    <div class="container-fluid px-2 px-sm-5">
        <div class="row justify-content-center justify-content-md-between align-items-center">
            <div class="col-sm-auto">
                <a href="/" class="logo">
                    <img src="<?= get_theme_file_uri('images/icon/logo.png'); ?>" alt="logo">
                </a>
            </div>
            <div class="col-auto">
                <nav class="header-nav">
                    <div class="contacts-list">
                        <div class="contacts-item">
                            <svg width="20" height="15">
                                <use xlink:href="#phone-icon"></use>
                            </svg>
                            <?php
                            $phone1 = get_theme_mod('phone1');
                            ?>
                            <a href="tel:<?= phone_link($phone1); ?>">
                                <?= $phone1; ?>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline-primary open-feedback">
                        связаться
                    </a>
                    <div class="burger-menu">
                        <div class="line-row">
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                        <div class="line-row">
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="menu">
        <nav class="menu-nav">
            <ul class="menu-list">
                <li>
                    <a href="<?= home_url()?>#result">
                        <?= get_the_title(20)?>
                    </a>
                </li>
                <li>
                    <a href="<?= home_url()?>#about">
                        <?= get_the_title(37)?>
                    </a>
                </li>
                <li>
                    <a href="<?= home_url()?>#trainer">
                        <?= get_the_title(43)?>
                    </a>
                </li>
                <li>
                    <a href="<?= home_url()?>#advantages">
                        <?= get_the_title(57)?>
                    </a>
                </li>
                <li>
                    <a href="<?= home_url()?>#packages">
                        <?= get_the_title(68)?>
                    </a>
                </li>
                <li>
                    <a href="<?= home_url()?>#reviews">
                        <?= get_the_title(89)?>
                    </a>
                </li>
                <li>
                    <a href="<?= home_url()?>#blog-section">
                        <?= get_the_title(115)?>
                    </a>
                </li>
            </ul>
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
            </ul>
        </nav>
    </div>
</header>

<!-- Modal -->
<?php include(__DIR__ . '/includes/partials/modal.php') ?>

<!-- Main -->
<main>