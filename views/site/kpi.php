<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Tabs;
use yii\bootstrap\Nav;

$this->title = 'KP fooking I';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        fuck this shit
    </p>
<?
echo Tabs::widget([
    'items' => [
        [
            'label' => 'All',
            'content' => GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    'id',
                    'kpi',
                    [
                        'attribute' => 'kpi_name',
                        'label' => 'ตัวชี้วัด',
                        'headerOptions' => [ 'class' => 'text-center'],
                        'format' => 'raw',
                        'value' => function ($data) {
                            return Html::a($data['kpi_name'], ['/site/amphur','kpi_id' => $data['kpi']]);
                        }
                    ],
                    'ex',
                    // ...
                ],
                
            ]),
            'active' => true
        ],
        [
            'label' => 'PP',
            'content' => 
            GridView::widget([
                'dataProvider' => $pp,
                'columns' => [
                    'id',
                    'kpi',
                    [
                        'attribute' => 'kpi_name',
                        'label' => 'ตัวชี้วัด',
                        'headerOptions' => [ 'class' => 'text-center'],
                        'format' => 'raw',
                        'value' => function ($data) {
                            return Html::a($data['kpi_name'], ['/site/amphur','kpi_id' => $data['kpi']]);
                        }
                    ],
                    'ex',
                    // ...
                ],
                
            ]) ,
            //'options' => ['id' => 'myveryownID'],
        ],
        [
            'label' => 'SE',
            'content' => 
            GridView::widget([
                'dataProvider' => $se,
                'columns' => [
                    'id',
                    'kpi',
                    [
                        'attribute' => 'kpi_name',
                        'label' => 'ตัวชี้วัด',
                        'headerOptions' => [ 'class' => 'text-center'],
                        'format' => 'raw',
                        'value' => function ($data) {
                            return Html::a($data['kpi_name'], ['/site/amphur','kpi_id' => $data['kpi']]);
                        }
                    ],
                    'ex',
                    // ...
                ],
                
            ]) ,
            //'options' => ['id' => 'myveryownID'],
        ],
        [
            'label' => 'GE',
            'content' => 
            GridView::widget([
                'dataProvider' => $ge,
                'columns' => [
                    'id',
                    'kpi',
                    [
                        'attribute' => 'kpi_name',
                        'label' => 'ตัวชี้วัด',
                        'headerOptions' => [ 'class' => 'text-center'],
                        'format' => 'raw',
                        'value' => function ($data) {
                            return Html::a($data['kpi_name'], ['/site/amphur','kpi_id' => $data['kpi']]);
                        }
                    ],
                    'ex',
                    // ...
                ],
                
            ]) ,
            //'options' => ['id' => 'myveryownID'],
        ],
        [
            'label' => 'PE',
            'content' => 
            GridView::widget([
                'dataProvider' => $pe,
                'columns' => [
                    'id',
                    'kpi',
                    [
                        'attribute' => 'kpi_name',
                        'label' => 'ตัวชี้วัด',
                        'headerOptions' => [ 'class' => 'text-center'],
                        'format' => 'raw',
                        'value' => function ($data) {
                            return Html::a($data['kpi_name'], ['/site/amphur','kpi_id' => $data['kpi']]);
                        }
                    ],
                    'ex',
                    // ...
                ],
                
            ]) ,
            //'options' => ['id' => 'myveryownID'],
        ],
        [
            'label' => 'NCD',
            'content' => 
            GridView::widget([
                'dataProvider' => $ncd,
                'columns' => [
                    'id',
                    'kpi',
                    [
                        'attribute' => 'kpi_name',
                        'label' => 'ตัวชี้วัด',
                        'headerOptions' => [ 'class' => 'text-center'],
                        'format' => 'raw',
                        'value' => function ($data) {
                            return Html::a($data['kpi_name'], ['/site/amphur','kpi_id' => $data['kpi']]);
                        }
                    ],
                    'ex',
                    // ...
                ],
                
            ]) ,
            //'options' => ['id' => 'myveryownID'],
        ],
        [
            'label' => 'NULL',
            'content' => 
            GridView::widget([
                'dataProvider' => $null,
                'columns' => [
                    'id',
                    'kpi',
                    [
                        'attribute' => 'kpi_name',
                        'label' => 'ตัวชี้วัด',
                        'headerOptions' => [ 'class' => 'text-center'],
                        'format' => 'raw',
                        'value' => function ($data) {
                            return Html::a($data['kpi_name'], ['/site/amphur','kpi_id' => $data['kpi']]);
                        }
                    ],
                    'ex',
                    // ...
                ],
                
            ]) ,
            //'options' => ['id' => 'myveryownID'],
        ],
        [
            'label' => 'Example',
            'url' => 'http://www.example.com',
        ],
        [
            'label' => 'Dropdown',
            'items' => [
                 [
                     'label' => 'DropdownA',
                     'content' => 'DropdownA, Anim pariatur cliche...',
                 ],
                 [
                     'label' => 'DropdownB',
                     'content' => 'DropdownB, Anim pariatur cliche...',
                 ],
                 [
                     'label' => 'External Link',
                     'url' => 'http://www.example.com',
                 ],
            ],
        ],
    ],
]);
?>

    <code><?= __FILE__ ?></code>
</div>
