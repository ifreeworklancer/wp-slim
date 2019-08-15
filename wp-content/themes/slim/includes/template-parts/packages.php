<?php
$pageID = '68';
$packages_description = get_field('packages_description', $pageID);
$packages_item = get_field('packages', $pageID);
?>
<!-- Packages -->
<section id="packages">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-description text-center">
                    <h2 class="title">
                        <?= get_the_title($pageID); ?>
                    </h2>
                    <div class="description">
                        <?= $packages_description; ?>
                    </div>
                </div>
            </div>
            <?php
            if (!is_null($packages_item)) :
                foreach ($packages_item as $item) :
                    ?>
                    <div class="col-md-6 col-lg-5 col-xl-4">
                        <div class="packages-card">
                            <div class="packages-card-item">
                                <div class="decor-left"></div>
                                <div class="decor-right"></div>
                                <h4 class="title">
                                    <?= $item['packages_item']['packages_item_title']; ?>
                                </h4>
                                <?php if ($item['packages_item']['packages_item_hit']): ?>
                                    <div class="hit">
                                        <div class="decor-left"></div>
                                        хит
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="packages-card-item">
                                <div class="decor-left"></div>
                                <div class="decor-right"></div>
                                <div class="description">
                                    <?= $item['packages_item']['packages_item_description']; ?>
                                </div>
                            </div>
                            <div class="packages-card-item">
                                <div class="decor-left"></div>
                                <div class="decor-right"></div>
                                <div class="price">
                                    <?php if (!is_null($item['packages_item']['packages_item_old_price'])): ?>
                                        <div class="old-price">
                                            Обычная цена <?= $item['packages_item']['packages_item_old_price'] ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="main-price">
                                        <?= $item['packages_item']['packages_item_main_price'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="packages-card-item">
                                <div class="decor-left"></div>
                                <div class="decor-right"></div>
                                <div class="select">
                                    <div class="description">
                                        Жми и выбирай свой тарифный план
                                    </div>
                                    <a href="#" class="btn btn-outline-primary open-packages"
                                       data-name-package="<?= $item['packages_item']['packages_item_title']; ?>">
                                        выбрать
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="places-left">
                            <div class="description">
                                <?php
                                    if($item['packages_item']['packages_item_places_left'] < 0) $item['packages_item']['packages_item_places_left'] = 0;
                                ?>
                                Осталось <span><?= $item['packages_item']['packages_item_places_left']; ?></span> мест
                            </div>
                            <div class="places-progress-bar"
                                 data-places-all="<?= $item['packages_item']['packages_item_places_all']; ?>"
                                 data-places-left="<?= $item['packages_item']['packages_item_places_left']; ?>">
                                <div class="driver"></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>