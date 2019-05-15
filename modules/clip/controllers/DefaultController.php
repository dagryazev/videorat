<?php

namespace app\modules\clip\controllers;

use Yii;
use app\modules\clip\models\Clip;
use app\modules\clip\models\CoubsAndYTVideos;
use \app\controllers\CoubApiController;

/**
 * Default controller for the `clip` module
 */
class DefaultController extends \app\controllers\ApiController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        Yii::$app->view->title = 'VideoRat.cc';
        $data['id'] = Yii::$app->request->get('id');
        $view = Yii::$app->request->get('view');
        if(isset($view)){
          $data['view'] = true;
        } else {
          $data['view'] = false;
        }
        return $this->render('index',$data);
    }

    public function actionGetVideoCoub(){
      require './../vendor/electrolinux/phpquery/phpQuery/phpQuery.php';
      $id = Yii::$app->request->get()['id'];
      $width = Yii::$app->request->get()['width'];
      $height = Yii::$app->request->get()['height'];
      $clip = new CoubApiController(false, false);
      $clipframe = $clip->actionPlayVideo($id);
      $data['html'] = \phpQuery::newDocument($clipframe);
      echo $this->setResponse(['template' => $data['html']->find('body')->html(), 'info' => ['link' => 'http://' . $_SERVER['HTTP_HOST'] . '/view/' . $id . '/?view' ]])->parseJson(true);
      die;
    }

    public function actionGetClip($id) {
      $model = new Clip;
      return $model->findByPk($id);
    }

    public function actionGetClipsList() {
      $model = new CoubsAndYTVideos;
      $clipList = $model->getListUser(UserModel::getCurrent()->id);
      return $clipList;
    }
}
