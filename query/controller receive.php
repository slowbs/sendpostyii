<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Province;
use frontend\models\ProvinceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProvinceController implements the CRUD actions for Province model.
 */
class ProvinceController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function beforeAction($action) 
    {
        if($action->id == "create2") {
            if (!empty($_POST["data"])) {
            $content = json_decode($_POST['data'],true);
                if($content['test'] == "5E763F218A6C336741566347F46C5") {
                $this->enableCsrfValidation = false;
                return parent::beforeAction($action);
                }
            }
            else{
                echo "there is no data";
                }
        }
        else{
            return parent::beforeAction($action);
        }
    }



    /* public function beforeAction($action) 
    { 
        $this->enableCsrfValidation = false; 
        return parent::beforeAction($action); 
    } */
    


    /**
     * Lists all Province models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProvinceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Province model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Province model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Province();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionCreate2()
    {
        //ดึงค่า kpiid จาก $content เป็นตัวอ้างอิง
        //$model = $this->findModel2('00201');
        
        $content = json_decode($_POST['data'],true);
        $model = $this->findModel2($content['kpiid']);
        $model->a1 = $content['a1'];
        $model->a2 = $content['a2'];
        $model->a3 = $content['a3'];
        $model->a4 = $content['a4'];
        $model->a5 = $content['a5'];
        $model->a6 = $content['a6'];
        $model->a7 = $content['a7'];
        $model->a8 = $content['a8'];
        $model->a9 = $content['a9'];
        $model->a10 = $content['a10'];
        $model->a11 = $content['a11'];
        $model->a12 = $content['a12'];
        $model->b1 = $content['b1'];
        $model->b2 = $content['b2'];
        $model->b3 = $content['b3'];
        $model->b4 = $content['b4'];
        $model->b5 = $content['b5'];
        $model->b6 = $content['b6'];
        $model->b7 = $content['b7'];
        $model->b8 = $content['b8'];
        $model->b9 = $content['b9'];
        $model->b10 = $content['b10'];
        $model->b11 = $content['b11'];
        $model->b12 = $content['b12'];
        $model->save();

        /* $model = new Province();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]); */
    }

    /**
     * Updates an existing Province model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate2($id)
    {

        /* $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]); */
    }

    /**
     * Deletes an existing Province model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Province model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Province the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Province::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    //สร้าง function model ใหม่เพื่อ find kpiid ที่จะบันทึก
    protected function findModel2($kpi_id)
    {
        if (($model = Province::findOne(['kpiid' => $kpi_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
