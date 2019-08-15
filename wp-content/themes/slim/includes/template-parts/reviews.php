<?php
$pageID = '89';
$reviews_slider = get_field('reviews_slider', $pageID);
?>
<!-- Reviews -->
<section id="reviews">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="decor-icon">
                    <svg width="150" height="20">
                        <use xlink:href="#decor-line"></use>
                    </svg>
                </div>
                <h2 class="section-title text-center">
                    <?= get_the_title($pageID); ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="reviews-slider">
        <?php
        if (!is_null($reviews_slider)) :
            foreach ($reviews_slider as $item) :
                ?>
                <div class="reviews-item">
                    <div class="content">
                        <div class="quote-icon">
                            <svg width="120" height="120">
                                <use xlink:href="#quote-icon"></use>
                            </svg>
                        </div>
                        <div class="description">
                            <?= $item['reviews_item']['reviews_item_description']; ?>
                            <div class="image">
                                <figure style="background-image: url('<?= $item['reviews_item']['reviews_item_image']['url']; ?>');"></figure>
                            </div>
                        </div>
                        <div class="prev">
                            <div class="stars">
                                <?php
                                if ($item['reviews_item']['reviews_item_length_star'] > 5) {
                                    $item['reviews_item']['reviews_item_length_star'] = 5;
                                }
                                if ($item['reviews_item']['reviews_item_length_star'] < 1) {
                                    $item['reviews_item']['reviews_item_length_star'] = 1;
                                }
                                $counter = 1;
                                while ($counter <= $item['reviews_item']['reviews_item_length_star']) :
                                    $counter++;
                                    ?>
                                    <div class="icon">
                                        <svg width="15" height="15">
                                            <use xlink:href="#star-icon"></use>
                                        </svg>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                            <div class="info">
                                <?= $item['reviews_item']['reviews_item_info']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="slider-arrow slider-arrow--reviews">
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