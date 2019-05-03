<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RpstSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rpsts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rpst-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rpst', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'a1',
            'a2',
            'a3',
            'a4',
            //'a5',
            //'a6',
            //'a7',
            //'a8',
            //'a9',
            //'a10',
            //'a11',
            //'a12',
            //'b1',
            //'b2',
            //'b3',
            //'b4',
            //'b5',
            //'b6',
            //'b7',
            //'b8',
            //'b9',
            //'b10',
            //'b11',
            //'b12',
            //'apcode',
            //'rpstcode',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
