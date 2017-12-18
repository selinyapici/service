<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Durak */

$this->title = 'Update Durak: ' . $model->ogretim_id;
$this->params['breadcrumbs'][] = ['label' => 'Duraks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ogretim_id, 'url' => ['view', 'id' => $model->ogretim_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="durak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
