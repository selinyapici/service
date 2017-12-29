<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\service\models\ServiceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'isim') ?>

    <?= $form->field($model, 'soyad') ?>

    <?= $form->field($model, 'telefon') ?>

    <?= $form->field($model, 'ogretim_id') ?>

    <?= $form->field($model, 'duraklar') ?>

    <?php // echo $form->field($model, 'kalkisaatleri') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
