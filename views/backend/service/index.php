<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DurakSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Duraks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="durak-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Durak', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'isim',
            'ogretimturu',
            'ogretim_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
