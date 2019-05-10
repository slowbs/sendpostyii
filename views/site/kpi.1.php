<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'KP fooking I';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        fuck this shit
    </p>

<!-- <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($kpi as $kpis){
   ?>
       <tr>
      <th scope="row"><?php echo $kpis['id'] ?></th>
      <td><?php echo $kpis['kpi_name'] ?></td>
      <td><?php echo $kpis['ex'] ?></td>
      <td>@mdo</td>
    </tr>
    <?php

 }; ?>

  </tbody>
</table> -->
<? foreach($kpi as $kpis){
    if($kpis['ex'] == 'pp'){
        $test1[] = $kpis;
    }
    elseif($kpis['ex'] == 'se'){
        $test2[] = $kpis;
    }
    elseif($kpis['ex'] == 'ge'){
        $test3[] = $kpis;
    }
    elseif($kpis['ex'] == 'pe'){
        $test4[] = $kpis;
    }
    elseif($kpis['ex'] == 'ncd'){
        $test5[] = $kpis;
    }
}
?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
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
    
]) ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider2,
    'columns' => [
        'id',
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
    
]) ?>



<!-- <?php print_r($test1) ?>
<?php print_r($dataProvider) ?>
<?php print_r($test2) ?>
<?php print_r($test3) ?>
<?php print_r($test4) ?>
<?php print_r($test5) ?> -->


    <code><?= __FILE__ ?></code>
</div>
