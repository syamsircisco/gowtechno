<?php

namespace frontend\controllers;
use Yii;
use backend\models\ServicesSearch;
use backend\models\ContactSearch;
use backend\models\PortovolioSearch;
use backend\models\Services;

class PagesController extends \yii\web\Controller
{
    public function actionServices()
    {
    	$searchModel = new ServicesSearch();
    	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

	    return $this->render('services', [
	        'searchModel' => $searchModel,
	        'dataProvider' => $dataProvider,
	    ]);
    }
    public function actionReadblog($id)
    {
    	return $this->render('readblog', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionPortofolio()
    {
    	$searchModel = new PortovolioSearch();
    	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

	    return $this->render('portofolio', [
	        'searchModel' => $searchModel,
	        'dataProvider' => $dataProvider,
	    ]);
    }
    protected function findModel($id)
    {
        if (($model = Services::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionContact()
    {
        $searchModel = new ContactSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('contact', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
      

}
