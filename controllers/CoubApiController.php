<?php

namespace app\controllers;

class CoubApiController extends \app\controllers\ApiController
{
    const API = 'http://coub.com/api/v2/';
    public function actionGetVideo($id)
    {
      $client = new \yii\httpclient\Client;
      $response = $client->createRequest()
        ->setMethod('GET')
        ->setUrl(self::API . 'coubs/' . $id)
        ->send()
        ->content;
      return $this->setResponse($response)->parseJson();
    }
    public function actionPlayVideo($id){
      $client = new \yii\httpclient\Client;
      $response = $client->createRequest()
        ->setMethod('GET')
        ->setUrl('https://coub.com/embed/' . $id .'?autostart=true&muted=false&originalSize=false&startWithHD=false')
        ->send()
        ->content;
      return $response;
    }

}
