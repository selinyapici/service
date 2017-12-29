<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\service\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soyad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefon')->textInput() ?>

    <?= $form->field($model, 'ogretim_id')->textInput() ?>

    <?= $form->field($model, 'duraklar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kalkisaatleri')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
