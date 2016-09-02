<?php

namespace app\controllers;

use Yii;
use app\models\Guests;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * GuestsController implements the CRUD actions for Guests model.
 */
class GuestsController extends Controller
{
    /**
     * @inheritdoc
     */

    public $arr;
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['delete'],
                'rules' => [
                    [
                        'actions' => ['delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Guests models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Guests::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Guests model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Guests model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {


        $model = new Guests();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
                $cookiesrep = Yii::$app->response->cookies;
                $cookiesrep->add(new \yii\web\Cookie([
                'name' => 'id',
                'value' => $model->id,
                'expire'=>time()+3600
            ]));
//            return $this->redirect(['view', 'id' => $model->id]);
            return $this->redirect(['get-code', 'id' => $model->id]);
        } else {
            $cookies = Yii::$app->request->cookies;
            if (isset($cookies['id'])){

                echo "<script>alert('您已领取过抽奖码')</script>";
//                return $this->redirect(['get-code', 'id' =>$cookies['id'] ]);
                exit;
            }
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Guests model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Guests model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Guests model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Guests the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Guests::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionGetCode($id){
        /*
         *         <?php echo  DetailView::widget([
            'model' => $model,
            'attributes' => [
                'name',
                'phone',
//                [                      // the owner name of the model
//                    'attribute' => 'phone',
//                    'value' => $model->phone,
//
//                ],
                [                      // the owner name of the model
                    'label' => '抽奖码',
                    'value' => 'T'.substr($model->phone,-4),
                ],

            ],

            'options' => ['class' => 'table table-striped table-bordered  table-hover'],

        ]) ?>
         *
         *
         *
         *
         *
         * */

                                                                                                                                                                                                                                                                                                                                                                                                                                                                echo "hi";
        return $this->render('codeshow',['model'=> $this->findModel($id)]);
    }

    public function actionGetTen(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
//        $result = Guests::find()->where(['id'=>2])->all();
//        return $result;

        $range = Guests::find()->count();
        $arr1 = range(1,$range);
        shuffle($arr1);

        $rows = (new \yii\db\Query())
            ->select(['name', 'phone'])
            ->from('guests')
            ->where(['in', 'id',  array_slice($arr1,0,10)])
            ->all();
        header("Access-Control-Allow-Origin: *");
        return $rows;

    }

    public function actionGetSix(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
//        $result = Guests::find()->where(['id'=>2])->all();
//        return $result;

        $range = Guests::find()->count();
        $arr1 = range(1,$range);
        shuffle($arr1);
        $rows = (new \yii\db\Query())
            ->select(['name', 'phone'])
            ->from('guests')
            ->where(['in', 'id',  array_slice($arr1,-20,6)])
            ->all();
        header("Access-Control-Allow-Origin: *");
        return $rows;


    }

}
