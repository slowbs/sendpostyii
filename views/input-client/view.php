<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\InputClient */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Input Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="input-client-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'a1',
            'a2',
            'a3',
            'a4',
            'a5',
            'a6',
            'a7',
            'a8',
            'a9',
            'a10',
            'a11',
            'a12',
            'b1',
            'b2',
            'b3',
            'b4',
            'b5',
            'b6',
            'b7',
            'b8',
            'b9',
            'b10',
            'b11',
            'b12',
            'apcode',
            'hospcode',
            'kpi_id',
        ],
    ]) ?>

</div>
