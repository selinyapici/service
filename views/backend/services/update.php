<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\service\models\Service */

$this->title = 'Update Service: ' . $model->ogretim_id;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ogretim_id, 'url' => ['view', 'id' => $model->ogretim_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="service-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
