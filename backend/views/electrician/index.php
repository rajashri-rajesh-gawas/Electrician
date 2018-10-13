<?php

use yii\helpers\Html;
use yii\grid\GridView;
use mdm\admin\components\Helper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ElectricianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Electricians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="electrician-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Electrician', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'address',
            'email:email',
            'contact',

        [
            'class' => 'yii\grid\ActionColumn',
            'template' =>'{view} {update} {delete}',
        ],
        ],
    ]); ?>
</div>
