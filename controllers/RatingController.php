<?php

namespace app\controllers;
use app\components\Util;
use app\models\Base;
use app\models\Form;
use app\models\Program;
use Yii;
use app\models\UserSearch;
use yii\db\Query;
use yii\helpers\Json;

class RatingController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $searchModel    = new UserSearch();
        $dataProvider   = $searchModel->search(Yii::$app->request->queryParams);
        $count          = $this->enrolleeCount();

        return $this->render('index', [
            'searchModel'   => $searchModel,
            'dataProvider'  => $dataProvider,
            'count'         => $count
        ]);
    }

    public function actionProgrammes()
    {
        $level = Yii::$app->request->post('depdrop_parents');
        $programmes = Program::items($level[0]);
        echo Json::encode(['output' => $programmes]);
    }

    public function actionForms()
    {
        $request    = Yii::$app->request->post('depdrop_parents');
        $level      = $request[0];
        $program    = $request[1];

        $forms      = Form::items($level, $program);
        echo Json::encode(['output' => $forms]);
    }

    public function actionBases()
    {
        $request    = Yii::$app->request->post('depdrop_parents');
        $level      = $request[0];
        $program    = $request[1];
        $form       = $request[2];

        $bases      = Base::items($level, $program, $form);
        echo Json::encode(['output' => $bases]);
    }

    public function actionEnrollee()
    {
        /*$level      = Yii::$app->request->post('level');
        $program    = Yii::$app->request->post('oop');
        $form       = Yii::$app->request->post('form');
        $base       = Yii::$app->request->post('base');

        if($level && $program && $form && $base){

            $searchModel    = new UserSearch();
            //$dataProvider   = $searchModel->search()

        }else{
            echo 'Не все данные переданы';
        }*/



        $searchModel    = new UserSearch();
        $dataProvider   = $searchModel->search(Yii::$app->request->bodyParams);

        //var_dump($dataProvider->getModels());

        $gc             = Util::groupUsersByGCCode($dataProvider->getModels());
        //echo Json::encode($dataProvider);
        return $this->renderAjax('rating', [
            'models' => $gc
        ]);
    }

    protected function enrolleeCount()
    {
        $count = (new Query())->from('user')->count();
        return $count;
    }
}
