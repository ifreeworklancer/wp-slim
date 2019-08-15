<?php
$pageID = '37';
$about_description = get_field('about_description', $pageID);
$about_video_link = get_field('about_video_link', $pageID);
?>
<!-- About -->
<section id="about">
    <div class="banner" style="background-image: url('<?= get_the_post_thumbnail_url($pageID); ?>');"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-lg-9 px-sm-0">
                <div class="about-item">
                    <h2 class="title">
                        <?= get_the_title($pageID); ?>
                    </h2>
                    <div class="separator"></div>
                    <div class="description">
                        <p>
                            <?= $about_description; ?>
                        </p>
                    </div>
                    <div class="decor-icon">
                        <svg>
                            <use xlink:href="#decor-line"></use>
                        </svg>
                    </div>
                </div>
                <div class="about-video"
                     style="background-image: url('<?= getVideoImageLinkAttribute($about_video_link); ?>');">
                    <div class="play-icon" data-src="<?= getVideoLinkAttribute($about_video_link); ?>">
                        <div class="triangle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>