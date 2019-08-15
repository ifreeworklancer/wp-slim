<?php
$pageID = '20';
$result_slider = get_field('result_slider', $pageID);
?>
<!-- Result -->
<section id="result">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-description">
                    <h2 class="section-title">
                        <?= get_the_title($pageID); ?>
                    </h2>
                    <div class="decor-icon">
                        <svg width="100" height="15">
                            <use xlink:href="#decor-line"></use>
                        </svg>
                    </div>
                </div>
                <div class="result-slider">
                    <?php
                    if (!is_null($result_slider)) :
                        foreach ($result_slider as $item) :
                            ?>
                            <div class="result-item">
                                <div class="content">
                                    <div class="image">
                                        <div class="image-item"
                                             style="background-image: url('<?= $item['result_item']['result_image_before']['url']; ?>');">
                                            <div class="image-item__title">
                                                До
                                            </div>
                                        </div>
                                        <div class="image-item"
                                             style="background-image: url('<?= $item['result_item']['result_image_after']['url']; ?>');">
                                            <div class="image-item__title">
                                                После
                                            </div>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>
                                            <?= $item['result_item']['result_item_description']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
    <div class="slider-arrow slider-arrow--result">
        <div class="arrow-item arrow-item--prev">
            <svg width="8" height="12">
                <use xlink:href="#arrow-prev"></use>
            </svg>
        </div>
        <div class="arrow-item arrow-item--next">
            <svg width="8" height="12">
                <use xlink:href="#arrow-next"></use>
            </svg>
        </div>
    </div>
</section>