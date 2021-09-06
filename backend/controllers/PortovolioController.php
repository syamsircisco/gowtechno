<?php

namespace backend\controllers;
use Yii;
use backend\models\Portovolio;
use backend\models\PortovolioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;


/**
 * PortovolioController implements the CRUD actions for Portovolio model.
 */
class PortovolioController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error','create','delete','view','update'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
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
     * Lists all Portovolio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PortovolioSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Portovolio model.
     * @param int $id ID
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
     * Creates a new Portovolio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Portovolio();
        if ($model->load(Yii::$app->request->post())) {            
            $file = \yii\web\UploadedFile::getInstance($model, 'foto_portovolio');
            if (!empty($file))
                $model->foto_portovolio = $file;
            if($model->save())
            {
             if (!empty($file))
              $file->saveAs( Yii::getAlias('@backend') .'/web/uploads/' . $file);

              return $this->redirect('index');
            }
            // return $this->render('create', ['model' => $model]);
        } else {
            return $this->render('create', ['model' => $model]);
        }  
    }

    /**
     * Updates an existing Portovolio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())){           
            $file = \yii\web\UploadedFile::getInstance($model, 'foto_portovolio');
           if (!empty($file)){
                 $delete = $model->oldAttributes['foto_portovolio'];
                 $model->foto_portovolio= $file; 
            }
            else{
                $model->foto_portovolio = $model->oldAttributes['foto_portovolio'];
            }
            if($model->save())
            {
             if (!empty($file))
              $file->saveAs( Yii::getAlias('@backend') .'/web/uploads/' . $file);

              return $this->redirect('index');
            }
            // return $this->render('update', ['model' => $model]);
        } else {
            return $this->render('update', ['model' => $model]);
        }
    }

    /**
     * Deletes an existing Portovolio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Portovolio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Portovolio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Portovolio::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
