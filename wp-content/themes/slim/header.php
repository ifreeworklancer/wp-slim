<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_theme_file_uri('images/favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_theme_file_uri('images/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_file_uri('images/favicons/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?php echo get_theme_file_uri('images/favicons/site.webmanifest') ?>">
    <link rel="mask-icon" href="<?php echo get_theme_file_uri('images/favicons/safari-pinned-tab.svg" color="#5bbad5') ?>">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('images/favicons/favicon.ico') ?>">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?php echo get_theme_file_uri('images/favicons/browserconfig.xml') ?>">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>
</head>
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
                    <a href="#result" class="scroll-link">
                        <?= get_the_title(20)?>
                    </a>
                </li>
                <li>
                    <a href="#about" class="scroll-link">
                        <?= get_the_title(37)?>
                    </a>
                </li>
                <li>
                    <a href="#trainer" class="scroll-link">
                        <?= get_the_title(43)?>
                    </a>
                </li>
                <li>
                    <a href="#advantages" class="scroll-link">
                        <?= get_the_title(57)?>
                    </a>
                </li>
                <li>
                    <a href="#packages" class="scroll-link">
                        <?= get_the_title(68)?>
                    </a>
                </li>
                <li>
                    <a href="#reviews" class="scroll-link">
                        <?= get_the_title(89)?>
                    </a>
                </li>
                <li>
                    <a href="#blog-section" class="scroll-link">
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
        </nav>
    </div>
</header>

<!-- Modal -->
<?php include(__DIR__ . '/includes/partials/modal.php') ?>

<!-- Main -->
<main>