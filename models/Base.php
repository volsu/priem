<?php
namespace app\models;
use yii\db\Query;
use app\components\Util;

class Base
{
    public static function items($level, $oop, $form)
    {
        $query = new Query();
        $query->select('cg_base')->distinct()->from('user');

        if($level && $oop && $form){
            $query->andWhere('cg_level = :level', [
                ':level'    => $level,
            ]);
            $query->andWhere('cg_oop_name = :oop', [
                ':oop'      => $oop
            ]);
            $query->andWhere('cg_form = :form', [
               ':form'      => $form
            ]);
        }
        else{
            $query->andWhere('0=1');
        }

        $bases  = $query->orderBy('cg_base')->all();
        return Util::indexArray($bases, 'cg_base');
    }
}