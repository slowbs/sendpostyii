<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'RP fooking ST';
$this->params['breadcrumbs'][] = ['label' => 'KPI', 'url' => ['kpi']];
$this->params['breadcrumbs'][] = ['label' => 'AMPHUR', 'url' => ['amphur','kpi_id' => $kpi_id]];
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
      <th scope="row"><?php echo $kpis['amphurcode'] ?></th>
      <td><?php echo $kpis['amphurname'] ?></td>
      <td><?php echo $kpis['hospname'] ?></td>
      <td>@mdo</td>
    </tr>
    <?php

 }; ?>

  </tbody>
</table> -->

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'attribute' => 'hospcode',
            'header'=> 'hospcode',
            //'contentOptions' => ['rowspan' => '2',],
            
        ],
        [
            'attribute' => 'hospname',
            'header' => 'ชื่อสถานบริการ',
            'headerOptions' => [ 'class' => 'text-center'],
            'format' => 'raw',
            'value' => function ($data) {
                return Html::a($data['hospname'], ['/input-client/update','id' => $data['id']]);
            },
            //'contentOptions' => ['rowspan' => '2',],
        ],
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
        // ...
    ],
    
]) ?>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td colspan="3">Jacob</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


<?php print_r($kpi_id); echo $kpis['kpi_name'] ?>
<br>
<?php print_r($amphurcode); echo $kpis['amphurname'] ?>


    <code><?= __FILE__ ?></code>
</div>
