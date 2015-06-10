<?php

namespace app\controllers;

use app\components\Util;
use app\models\Form;
use app\models\Level;
use app\models\Program;
use app\models\RatingForm;
use app\models\User;
use Yii;
use yii\db\Query;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\filters\VerbFilter;

class SiteController extends Controller
{
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

    public function actionIndex()
    {
        $users = User::find()->all();

        $levels = Level::find();

        var_dump($levels);

        return $this->render('index', ['users' => $users]);
    }

    public function actionTest()
    {
        $users  = User::find()->where('cg_form = :form', [':form' =>'Очная'])->asArray()->all();

        $map    = Util::groupUsersByGCCode($users);

        VarDumper::dump($map, 10, true);
    }
}
