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
        $id = Yii::$app->request->get()['id'];
        $clip = new CoubApiController(false, false);
        $clipframe = $clip->actionPlayVideo($id);
        $clip = json_decode($clip->actionGetVideo($id), true);
        require './../vendor/electrolinux/phpquery/phpQuery/phpQuery.php';
        $data['html'] = \phpQuery::newDocument($clipframe);
        $data['clip'] = $clipframe;
        if(isset($clip['data']['error'])){
          $data['error'] = $clip['data']['error'];
        } else {
          $data['title'] = $clip['data']['title'];
          $data['video'] = $clip['data']['file_versions']['html5']['video']['high']['url'] ?? $clip['data']['file_versions']['html5']['video']['med']['url'];
          $data['audio'] = $clip['data']['file_versions']['html5']['audio']['high']['url'] ?? $clip['data']['file_versions']['html5']['audio']['med']['url'];
        }

        return $this->render('index', $data);
    }

    public function actionGetVideoCoub(){
      require './../vendor/electrolinux/phpquery/phpQuery/phpQuery.php';
      $id = Yii::$app->request->get()['id'];
      $width = Yii::$app->request->get()['width'];
      $height = Yii::$app->request->get()['height'];
      $clip = new CoubApiController(false, false);
      $clipframe = $clip->actionPlayVideo($id);
      $data['html'] = \phpQuery::newDocument($clipframe);
      echo $this->setResponse(['template' => $data['html']->find('body')->html(), 'info' => []])->parseJson(true);
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
