<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DailyWeightSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daily Weights';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daily-weight-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'date',
            'max',
            'min'
        ],
    ]) ?>

    </div>
