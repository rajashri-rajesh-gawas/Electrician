<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Services */
/* @var $form ActiveForm */
?>
<div class="services-service">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'heading') ?>
        <?= $form->field($model, 'description') ?>
        <?= $form->field($model, 'icon') ?>
        <?= $form->field($model, 'image_file') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- services-service -->
