<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\DailyWeight */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="daily-weight-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>



    <?= $form->field($model, 'date')->widget(\yii\jui\DatePicker::classname(), [
	    'language' => 'en',
	    'dateFormat' => 'yyyy-MM-dd',
	]) ?>

    <?= $form->field($model, 'max')->textInput() ?>

    <?= $form->field($model, 'min')->textInput() ?>

    <div class="form-group" align="center">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
