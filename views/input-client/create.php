<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InputClient */

$this->title = 'Create Input Client';
$this->params['breadcrumbs'][] = ['label' => 'Input Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="input-client-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
