<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Teams */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teams-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fb_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'google_plus_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_file')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'designation')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
