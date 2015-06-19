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

    public static function indexArray(array $arr, $field){
        if(count($arr) > 0){
            $out = [];
            foreach($arr as $element){
                $out[] = ['id' => $element[$field], 'name' => $element[$field]];
            }
            return $out;
        }
    }

    public static function groupUsersByGCCode(array $arr){

        $result = [];
        $result[$arr[0]['cg_code']]= [];

        foreach($arr as $user){

            if(key($result) === $user['cg_code']){
                $result[$user['cg_code']]['view']   = $user['cg_view'];
                $result[$user['cg_code']]['plan']   = $user['stat_plan'];
                $result[$user['cg_code']]['quota']  = $user['stat_quota'];
                $result[$user['cg_code']]['data']   = $user['date_update'];
                $result[$user['cg_code']]['users'][] = $user;
            }else{
                $result[$user['cg_code']]['view'] = $user['cg_view'];
                $result[$user['cg_code']]['plan']   = $user['stat_plan'];
                $result[$user['cg_code']]['quota']  = $user['stat_quota'];
                $result[$user['cg_code']]['data']   = $user['date_update'];
                $result[$user['cg_code']]['users'][] = $user;
            }
        }
        return $result;
    }
}