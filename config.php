<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "hi from config";


$get_lele = Yii::$app->request->get('lele', false);
if (isset($get_lele) && $get_lele != false) {
    $resultsTradeMakeTypeIn = new \app\models\Maker();
    $rtmti = $resultsTradeMakeTypeIn->shortcodesFromResult($get_lele);

    $sessionData['postedData']['Lead']['manufacturer'] = $rtmti['manufacturer'];
    $mfk = $model->getKeyForMappingKey($_mkeys, 'manufacturer');
    $sessionData['postedData']['Lead'][$mfk . '_id'] = $rtmti['manufacturer_id'];
    $sessionData['postedData']['Lead'][$mfk] = $rtmti['manufacturer'];

    $sessionData['postedData']['Lead']['year'] = $rtmti['year'];
    $mfk = $model->getKeyForMappingKey($_mkeys, 'year');
    $sessionData['postedData']['Lead'][$mfk] = $rtmti['year'];

    $sessionData['postedData']['Lead']['model'] = $rtmti['model'];
    $mfk = $model->getKeyForMappingKey($_mkeys, 'model');
    $sessionData['postedData']['Lead'][$mfk . '_id'] = $rtmti['model_id'];
    $sessionData['postedData']['Lead'][$mfk] = $rtmti['model'];
}