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
        <form>
            <div class="form-column">
                <div class="form-group">
                    <label for="user-name--feedback" class="label-placeholder">
                        Введите ваше имя
                    </label>
                    <input type="text" id="user-name--feedback" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user-phone--feedback" class="label-placeholder">
                        Номер телефона
                    </label>
                    <input type="tel" id="user-phone--feedback" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user-email--feedback" class="label-placeholder">
                        Email
                    </label>
                    <input type="email" id="user-email--feedback" class="form-control">
                </div>
                <button class="btn btn-primary">
                    связаться
                </button>
            </div>
        </form>
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
        <form>
            <div class="form-column">
                <div class="form-group">
                    <label for="user-name--firstPackages" class="label-placeholder">
                        Введите ваше имя
                    </label>
                    <input type="text" id="user-name--firstPackages" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user-phone--firstPackages" class="label-placeholder">
                        Номер телефона
                    </label>
                    <input type="tel" id="user-phone--firstPackages" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user-email--firstPackages" class="label-placeholder">
                        Email
                    </label>
                    <input type="email" id="user-email--firstPackages" class="form-control">
                </div>
                <input type="hidden" id="package-name" name="package_name">
                <button class="btn btn-primary">
                    связаться
                </button>
            </div>
        </form>
    </div>
</div>

<div class="modal-mask"></div>