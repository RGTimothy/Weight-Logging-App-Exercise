<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Test */

$this->title = 'Update Test: ' . $model->test;
$this->params['breadcrumbs'][] = ['label' => 'Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->test, 'url' => ['view', 'id' => $model->test]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="test-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
