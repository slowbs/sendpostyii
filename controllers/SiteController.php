<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\data\ArrayDataProvider;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionKpi()
    {
        $kpi = Yii::$app->db->createCommand('SELECT *, substring_index(etc, "&id=", -1) as etc2 FROM kpi_index')
        //->bindValues($params)
        ->queryAll();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $kpi,
            'pagination' => false,
            'sort' => !empty($cols) ? ['attributes' => $cols] : FALSE,
        ]);

        $pp = Yii::$app->db->createCommand('SELECT * FROM kpi_index where ex = "pp"')
        //->bindValues($params)
        ->queryAll();

        $pp = new ArrayDataProvider([
            'allModels' => $pp,
            'pagination' => false,
            'sort' => !empty($cols) ? ['attributes' => $cols] : FALSE,
        ]);

        $se = Yii::$app->db->createCommand('SELECT * FROM kpi_index where ex = "se"')
        //->bindValues($params)
        ->queryAll();

        $se = new ArrayDataProvider([
            'allModels' => $se,
            'pagination' => false,
            'sort' => !empty($cols) ? ['attributes' => $cols] : FALSE,
        ]);

        $ge = Yii::$app->db->createCommand('SELECT * FROM kpi_index where ex = "ge"')
        //->bindValues($params)
        ->queryAll();

        $ge = new ArrayDataProvider([
            'allModels' => $ge,
            'pagination' => false,
            'sort' => !empty($cols) ? ['attributes' => $cols] : FALSE,
        ]);

        $pe = Yii::$app->db->createCommand('SELECT * FROM kpi_index where ex = "pe"')
        //->bindValues($params)
        ->queryAll();

        $pe = new ArrayDataProvider([
            'allModels' => $pe,
            'pagination' => false,
            'sort' => !empty($cols) ? ['attributes' => $cols] : FALSE,
        ]);

        $ncd = Yii::$app->db->createCommand('SELECT * FROM kpi_index where ex = "ncd"')
        //->bindValues($params)
        ->queryAll();

        $ncd = new ArrayDataProvider([
            'allModels' => $ncd,
            'pagination' => false,
            'sort' => !empty($cols) ? ['attributes' => $cols] : FALSE,
        ]);

        $null = Yii::$app->db->createCommand('SELECT * FROM kpi_index where ex = ""')
        //->bindValues($params)
        ->queryAll();

        $null = new ArrayDataProvider([
            'allModels' => $null,
            'pagination' => false,
            'sort' => !empty($cols) ? ['attributes' => $cols] : FALSE,
        ]);



        return $this->render('kpi', [
            'kpi' => $kpi,  'dataProvider' => $dataProvider, 'pp' => $pp,
            'se' => $se, 'ge' => $ge, 'pe' => $pe, 'ncd' => $ncd, 'null' => $null,
            
        ]);
    }

    public function actionAmphur($kpi_id)
    {
        $params = [':kpi_id' => $kpi_id];
        $kpi = Yii::$app->db->createCommand('SELECT * FROM input_amphur
        left join amphur on input_amphur.apcode = amphur.amphurcode
        left join kpi_index on kpi_index.kpi =:kpi_id
        WHERE kpi_id = :kpi_id')
        //$kpi = Yii::$app->db->createCommand()
        //->select('id')
        //->from('amphur')
        /* ->join('kpi_index', 'kpi_index.kpi = 00400') */
        //->joinWith('kpi_index','kpi_index =: $kpi')
        ->bindValues($params)
        ->queryAll();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $kpi,
            'pagination' => false,
            'sort' => !empty($cols) ? ['attributes' => $cols] : FALSE,
        ]);
        return $this->render('amphur', [
            'kpi' => $kpi,  'dataProvider' => $dataProvider, 'kpi_id' => $kpi_id,
        ]);
    }

    public function actionRpst($kpi_id, $amphurcode)
    {
        $params = [':kpi_id' => $kpi_id, ':amphurcode' => $amphurcode];
        //$params = [":kpi_id" => $kpi_id, ":amphurcode" => $amphurcode];
        /* $kpi = Yii::$app->db->createCommand('SELECT input_client.id as id, client.hospname as hospname,
        input_client.a1, input_client.a2, input_client.a3, input_client.a4, input_client.a5,
        input_client.a6, input_client.a7, input_client.a8, input_client.a9, input_client.a10,
        input_client.a11, input_client.a12, input_client.hospcode,
        amphur.amphurcode, client.amphurname, kpi_index.kpi, kpi_index.kpi_name
        FROM input_client 
        left join client on input_client.hospcode = client.hospcode
        left join amphur on input_client.apcode = amphur.amphurcode
        left join kpi_index on kpi_index.kpi =:kpi_id
        WHERE kpi_id = :kpi_id and apcode=:amphurcode') */
        $kpi = Yii::$app->db->createCommand('SELECT input_client.id as id, client.hospname as hospname,
        input_client.a1, input_client.a2, input_client.a3, input_client.a4, input_client.a5,
        input_client.a6, input_client.a7, input_client.a8, input_client.a9, input_client.a10,
        input_client.a11, input_client.a12, input_client.hospcode, 
        amphur.amphurcode, client.amphurname, kpi_index.kpi, kpi_index.kpi_name,
        tsum.t1, tsum.t2, tsum.t3, tsum.t4
        FROM input_client 
        left join client on input_client.hospcode = client.hospcode
        left join amphur on input_client.apcode = amphur.amphurcode
        left join kpi_index on kpi_index.kpi = 00100
        left join
        (select hospcode,input_client.kpi_id, sum(a1+a2+a3) as t1,
        sum(a4+a5+a6) as t2, sum(a7+a8+a9) as t3, sum(a10+a11+a12) as t4
        from input_client
        GROUP by input_client.kpi_id, hospcode
        ) tsum on input_client.kpi_id = tsum.kpi_id and input_client.hospcode = tsum.hospcode
        WHERE input_client.kpi_id = :kpi_id and input_client.apcode=:amphurcode')
        //$kpi = Yii::$app->db->createCommand()
        //->select('id')
        //->from('amphur')
        /* ->join('kpi_index', 'kpi_index.kpi = 00400') */
        //->joinWith('kpi_index','kpi_index =: $kpi')
        ->bindValues($params)
        ->queryAll();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $kpi,
            'pagination' => false,
            'sort' => !empty($cols) ? ['attributes' => $cols] : FALSE,
        ]);
        return $this->render('rpst', [
            'kpi' => $kpi,  'dataProvider' => $dataProvider, 'kpi_id' => $kpi_id, 'amphurcode' => $amphurcode,
        ]);
    }

    public function actionSql($id)
    {
        $username = 'sirslowbs';
        $password = 'sodsongig4';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://nrt.hdc.moph.go.th/hdc/admin/chklogin.php');
        curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/32.0.1700.107 Chrome/32.0.1700.107 Safari/537.36');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$username&pass=$password");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_COOKIESESSION, true);
        curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie-name');  //could be empty, but cause problems on some hosts
        curl_setopt($ch, CURLOPT_COOKIEFILE, '/var/www/ip4.x/file/tmp');  //could be empty, but cause problems on some hosts
        $answer = curl_exec($ch);
        if (curl_error($ch)) {
            echo curl_error($ch);
        }
        
        //another request preserving the session
        
        curl_setopt($ch, CURLOPT_URL, "https://nrt.hdc.moph.go.th/hdc/reports/pformated/format1.php?Id=$id&Zone=11&Province=80&Mastercup=&Amphur=&Tumbon=&Hospcode=&Year=2562&CmiHospcode=&CmiStd=null&selSP=1&selAllProv=undefined&selHAll=1&selPeriod=undefined&selMonth=undefined&Nation=undefined&Nation_group=undefined&Labor_group=undefined&SetFreeze=undefined&mFreeze=undefined&Moph=&Dep=&Ministry=&_=1557908811635");
        /* curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, ""); */
        $answer = curl_exec($ch);
        if (curl_error($ch)) {
            echo curl_error($ch);
        }
        
        //echo $answer;
        
        preg_match_all("!:</h4>[\s\S]*?</div>!", $answer, $matches);
        
        $num = array_values($matches[0]);
        $num = preg_replace("!:</h4>!", "", $num );
        $num = preg_replace("!</div>!", "", $num );
        //$num = preg_replace("!<br />!", "", $num );
        //print_r($matches);
        
        //print_r($matches[0]);
        
        echo $num[0];
        exit;
    }
}
