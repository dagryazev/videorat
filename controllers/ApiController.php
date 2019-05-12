<?php

namespace app\controllers;

class ApiController extends \yii\web\Controller
{
    private $headers;
    private $content;
    private $status;

    public function setResponse($content) {
      $this->content = $content;
      return $this;
    }

    public function setHeaders($headers) {
      $this->headers = $headers;
      return $this;
    }

    public function setStatus($status) {
      $this->status = $status;
      return $this;
    }

    public function parseJson($bool = false) {
      if($bool){
        return json_encode(['data' => $this->content, 'headers' => $this->headers], JSON_UNESCAPED_UNICODE);
      } else {
        try {
          return json_encode(['data' => json_decode($this->content, true), 'headers' => $this->headers], JSON_UNESCAPED_UNICODE);
        } catch (Exception $e) {
          return [];
        }
      }
    }

}
