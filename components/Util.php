<?php
/**
 * Created by PhpStorm.
 * User: Vuilov
 * Date: 04.06.2015
 * Time: 16:08
 */

namespace app\components;


class Util {
    public static function toArray($object){
        $arr = [];
        if(is_array($object))
            return $object;
        if(is_object($object)){
            $arr = [$object];
        }
        return $arr;
    }
}