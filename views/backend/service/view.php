<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Durak */

$this->title = $model->ogretim_id;
$this->params['breadcrumbs'][] = ['label' => 'Duraks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="durak-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ogretim_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ogretim_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'isim',
            'ogretimturu',
            'ogretim_id',
        ],
    ]) ?>

</div>
