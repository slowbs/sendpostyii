<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InputClient */

$this->title = 'Update Input Client: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Input Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="input-client-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

<h1><?php echo $model['hospcode']." ".$model['apcode']." ".$model['kpi_id'];?></h1>

<? //print_r($kpi_id) ?>
<? //print_r($amphurcode) ?>
</div>
