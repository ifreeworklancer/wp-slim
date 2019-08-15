<?php
$pageID = '57';
$advantages_subtitle = get_field('advantages_subtitle', $pageID);
$advantages_description = get_field('advantages_description', $pageID);
$advantages_feedback = get_field('advantages_feedback', $pageID);
?>
<!-- advantages -->
<section id="advantages">
    <div class="container">
        <div class="row justify-content-center justify-content-xl-start">
            <div class="col-sm-10 col-lg-9 col-xl-7">
                <div class="advantages-item">
                    <h2 class="title">
                        <?= get_the_title($pageID); ?>
                    </h2>
                    <div class="subtitle">
                        <?= $advantages_subtitle; ?>
                    </div>
                    <div class="description">
                        <?= $advantages_description; ?>
                    </div>
                </div>
                <div class="advantages-feedback">
                    <div class="advantages-feedback__description">
                        <p><?= $advantages_feedback; ?></p>
                    </div>
                    <a href="#" class="btn btn-primary open-feedback">связаться</a>
                </div>
            </div>
        </div>
    </div>
    <div class="advantages-image"></div>
</section>