<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DailyWeight */

$this->title = 'Show';
$this->params['breadcrumbs'][] = ['label' => 'Daily Weights', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daily-weight-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            // 'id',
            'date',
            'max',
            'min',
            [
                'label' => 'Variance',
                'value' => $model->max - $model->min
            ]
        ],
    ]) ?>

</div>
