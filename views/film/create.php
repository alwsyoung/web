<?php
use yii\helpers\Html;
/* @var $data array */
?>

<div>
    <?php var_dump($_POST); ?>
</div>

<?= Html::beginForm() ?>
    <div class="form-group">
        <input name="title" placeholder="Заголовок">
    </div>
    <div class="form-group">
        <input name="category" placeholder="Категория">
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Войти</button>
    </div>
<?= Html::endForm() ?>



