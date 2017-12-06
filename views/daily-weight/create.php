<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DailyWeight */

$this->title = 'Create Daily Weight';
$this->params['breadcrumbs'][] = ['label' => 'Daily Weights', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daily-weight-create">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
