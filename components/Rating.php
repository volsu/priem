<?php
/**
 * Created by PhpStorm.
 * User: Vuilov
 * Date: 16.06.2015
 * Time: 12:39
 */

namespace app\components;
use app\models\User;

class Rating {
    const ORIGINAL  = 'Оригинал';
    const COPY      = 'Копия';
    public static function isPassByConcurs(User $user){

        if($user->is_rec_by_priority && mb_strtolower($user->type_document) === mb_strtolower(self::ORIGINAL)){
            return true;
        }
        if($user->is_rec_by_priority && $user->agreement_enroll){
            return true;
        }
        return false;
    }
}