<?php

namespace app\controllers\api;

class YouTubeApiController extends \app\controllers\ApiController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
