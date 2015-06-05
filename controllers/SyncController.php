<?php

namespace app\controllers;
use app\models\User;
use Yii;
use app\components\SoapClient;
use app\components\SoapConfig;
use app\components\Util;

class SyncController extends \yii\web\Controller
{
    public function actionStart($token = null)
    {
        if(!is_null($token) && ($token === Yii::$app->params['token'])){

            $config = new SoapConfig(Yii::$app->params['wsdl_url'], Yii::$app->params['wsdl_login'], Yii::$app->params['wsdl_password']);
            $client = new SoapClient($config, 'Рейтинг', ['НомерПриемнойКомиссии' => '000000002']);

            $abiturients = Util::toArray($client->getResponse()->РейтингСтрока);

            foreach($abiturients as $abiturient){
                $this->createUser($abiturient);
            }
            echo 'done';

        }else{
            echo 'token not exist or invalid';
        }
        //return $this->render('start');
    }

    protected function createUser($abiturient)
    {
        $user = new User();
        $user->object1                      = $abiturient->Предмет1;
        $user->object2                      = $abiturient->Предмет2;
        $user->object3                      = $abiturient->Предмет3;
        $user->ind_achivement               = $abiturient->ИндивидуальноеДостижение1;
        $user->type_document                = $abiturient->ВидДокумента;
        $user->is_benefit                   = ($abiturient->Льготник) ? 1 : 0;
        $user->is_olymp                     = ($abiturient->Олимпиадник) ? 1 : 0;
        $user->is_target                    = ($abiturient->Целевик) ? 1 : 0;
        $user->is_enrolled                  = ($abiturient->Зачислен) ? 1 : 0;
        $user->priority                     = $abiturient->Приоритет;
        $user->order                        = $abiturient->Приказ;
        $user->oop_base                     = $abiturient->НаБазеОбразовательнойПрограммы;
        $user->is_expelled                  = ($abiturient->Отчислен) ? 1 : 0;
        $user->enrollee_code                = $abiturient->ФизическоеЛицо->Код;
        $user->enrollee_name                = $abiturient->ФизическоеЛицо->Наименование;
        $user->total_balls                  = $abiturient->СуммаБалловПоПредметам;
        $user->is_concurs_out               = ($abiturient->ВыбылИзКонкурса) ? 1 : 0;
        $user->is_rec_by_priority           = ($abiturient->РекомендованПоПриоритету) ? 1 : 0;
        $user->is_rec_by_other              = ($abiturient->РекомендованПоДругомуПриоритету) ? 1 : 0;
        $user->cg_code                      = $abiturient->КонкурснаяГруппа->Код;
        $user->cg_view                      = $abiturient->КонкурснаяГруппа->Представление;
        $user->cg_form                      = $abiturient->КонкурснаяГруппа->ФормаОбучения;
        $user->cg_oop_code                  = $abiturient->КонкурснаяГруппа->Специальность->Код;
        $user->cg_oop_name                  = $abiturient->КонкурснаяГруппа->Специальность->Наименование;
        $user->cg_level                     = $abiturient->КонкурснаяГруппа->УровеньПодготовки;
        $user->cg_base                      = $abiturient->КонкурснаяГруппа->ОснованиеПоступления;
        $user->cg_unique_right              = ($abiturient->КонкурснаяГруппа->ПриемЛицИмеющихОсобоеПраво) ? 1 : 0;
        $user->stat_plan                    = $abiturient->ЦифрыПриема->ПланПриема;
        $user->stat_quota                   = $abiturient->ЦифрыПриема->Квота;

        $user->save();
        unset($user);
    }



}
