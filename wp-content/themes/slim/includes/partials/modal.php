<?php
$trainer_card_image = get_field('trainer_card_image', '43');
?>
<div class="custom-modal custom-modal--feedback">
    <div class="close-modal">
        <div class="line-row">
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="line-row">
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <div class="custom-modal-prev">
        <figure style="background-image:url('<?= $trainer_card_image['url']; ?>');"></figure>
    </div>
    <div class="custom-modal-body">
        <h2 class="title">
            Связаться с нами
        </h2>
        <?= do_shortcode('[contact-form-7 id="11" title="Форма обратной связи"]')?>
    </div>
</div>

<div class="custom-modal custom-modal--packages">
    <div class="close-modal">
        <div class="line-row">
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="line-row">
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <div class="custom-modal-header">
        <h3 class="title">
            Вы выбрали тарифный план <span class="text-primary"></span>
        </h3>
        <p class="description">
            Оформите заявку, заполнив форму
        </p>
    </div>
    <div class="custom-modal-body">
        <?= do_shortcode('[contact-form-7 id="135" title="Форма тарифного плана"]')?>
    </div>
</div>

<div class="modal-mask"></div>