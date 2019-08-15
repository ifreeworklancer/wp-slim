<?php
$pageID = '43';
$trainer_card_advantages = get_field('trainer_card_advantages', $pageID);
$trainer_card_description = get_field('trainer_card_description', $pageID);
$trainer_card_image = get_field('trainer_card_image', $pageID);
?>
<!-- Trainer -->
<section id="trainer">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="section-title text-primary">
                    <?= get_the_title($pageID); ?>
                </h3>
                <div class="trainer-card">
                    <div class="content">
                        <div class="item">
                            <div class="decor-left"></div>
                            <h2 class="title">
                                <?= get_theme_mod('full_name'); ?>
                            </h2>
                        </div>
                        <div class="item">
                            <div class="decor-left"></div>
                            <div class="advantages-row">
                                <?php
                                foreach ($trainer_card_advantages as $item):
                                    ?>
                                    <div class="advantages-item">
                                        <h4 class="advantages-item__title">
                                            <?= $item['advantages_item']['advantages_item_title']; ?>
                                        </h4>
                                        <div class="advantages-item__description">
                                            <?= $item['advantages_item']['advantages_item_description']; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="item">
                            <div class="decor-left"></div>
                            <div class="description">
                                <?= $trainer_card_description; ?>
                            </div>
                            <div class="item-footer">
                                <ul class="social-list">
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
                            </div>
                        </div>
                    </div>
                    <div class="prev">
                        <div class="decor-right"></div>
                        <div class="image" style="background-image:url('<?= $trainer_card_image['url']; ?>');"></div>
                        <h6 class="full-name">
                            <?= get_theme_mod('full_name'); ?>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="decor-icon">
        <svg width="1700" height="230">
            <use xlink:href="#decor-line"></use>
        </svg>
    </div>
</section>

