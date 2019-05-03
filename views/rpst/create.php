<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rpst */

$this->title = 'Create Rpst';
$this->params['breadcrumbs'][] = ['label' => 'Rpsts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rpst-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <? $post = 'data='.json_encode($_POST); ?>
    <? print_r($post); ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
