<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo get_theme_file_uri('images/favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php echo get_theme_file_uri('images/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php echo get_theme_file_uri('images/favicons/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?php echo get_theme_file_uri('images/favicons/site.webmanifest') ?>">
    <link rel="mask-icon"
          href="<?php echo get_theme_file_uri('images/favicons/safari-pinned-tab.svg" color="#5bbad5') ?>">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('images/favicons/favicon.ico') ?>">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?php echo get_theme_file_uri('images/favicons/browserconfig.xml') ?>">
    <meta name="theme-color" content="#ffffff">

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '839849363141357');
        fbq('track', 'PageView');
    </script>
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158725156-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-158725156-1');
    </script>

    <?php wp_head(); ?>
</head>
<body>
<noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=839849363141357&ev=PageView&noscript=1"/>
</noscript>
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
                            <?php $phone1 = get_theme_mod('phone1'); ?>
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
                    <a href="<?= home_url() ?>#result">
                        <?= get_the_title(20) ?>
                    </a>
                </li>
                <li>
                    <a href="<?= home_url() ?>#about">
                        <?= get_the_title(37) ?>
                    </a>
                </li>
                <li>
                    <a href="<?= home_url() ?>#trainer">
                        <?= get_the_title(43) ?>
                    </a>
                </li>
                <li>
                    <a href="<?= home_url() ?>#advantages">
                        <?= get_the_title(57) ?>
                    </a>
                </li>
                <li>
                    <a href="<?= home_url() ?>#packages">
                        <?= get_the_title(68) ?>
                    </a>
                </li>
                <li>
                    <a href="<?= home_url() ?>#reviews">
                        <?= get_the_title(89) ?>
                    </a>
                </li>
                <li>
                    <a href="<?= home_url() ?>#blog-section">
                        <?= get_the_title(115) ?>
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