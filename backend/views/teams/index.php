<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TeamsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teams-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Teams', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fb_link',
            'twitter_link',
            'google_plus_link',
            [
            'attribute'=>'image_file',
            'format'=>'html',
            'value'=>function($data){
                return Html::img('../image/team/'.$data['image_file'],['width'=>'300px','class'=>'img-respnsive thumbnail']);
            },
            ],
            // 'name',
            // 'designation',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
