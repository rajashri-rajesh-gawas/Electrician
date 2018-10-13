<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\EletricSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Electrics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="electric-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Electric', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            // [
            // 'attribute'=>'image_file',
            // 'format'=>'html',
            // 'value'=>function($data){
            //     return Html::img('../image/electric/'.$data['image_file'],['width'=>'300px','class'=>'img-respnsive thumbnail']);
            // },
            // ],
            'icon',
            'heading',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
