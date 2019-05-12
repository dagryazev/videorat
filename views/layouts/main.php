<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/jQuery_v3.3.1.js"></script>
    <script src="/js/client.js"></script>
    <script type="text/javascript">
      var myCoub = document.getElementById('coubVideo').contentWindow;
      myCoub.postMessage('play', '*');

      var messageHandler = function(e) {
  if (e.data == 'playStarted'){
  console.log('Video starts playing');
  }
}
myCoub.addEventListener('message', messageHandler);

    </script>
<script>
  (function(e,t){var n=e.amplitude||{_q:[],_iq:{}};var r=t.createElement("script")
  ;r.type="text/javascript";r.async=true
  ;r.src="https://cdn.amplitude.com/libs/amplitude-4.1.1-min.gz.js"
  ;r.onload=function(){if(e.amplitude.runQueuedFunctions){
  e.amplitude.runQueuedFunctions()}else{
  console.log("[Amplitude] Error: could not load SDK")}}
  ;var i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)
  ;function s(e,t){e.prototype[t]=function(){
  this._q.push([t].concat(Array.prototype.slice.call(arguments,0)));return this}}
  var o=function(){this._q=[];return this}
  ;var a=["add","append","clearAll","prepend","set","setOnce","unset"]
  ;for(var u=0;u<a.length;u++){s(o,a[u])}n.Identify=o;var c=function(){this._q=[]
  ;return this}
  ;var l=["setProductId","setQuantity","setPrice","setRevenueType","setEventProperties"]
  ;for(var p=0;p<l.length;p++){s(c,l[p])}n.Revenue=c
  ;var d=["init","logEvent","logRevenue","setUserId","setUserProperties","setOptOut","setVersionName","setDomain","setDeviceId","setGlobalUserProperties","identify","clearUserProperties","setGroup","logRevenueV2","regenerateDeviceId","logEventWithTimestamp","logEventWithGroups","setSessionId"]
  ;function v(e){function t(t){e[t]=function(){
  e._q.push([t].concat(Array.prototype.slice.call(arguments,0)))}}
  for(var n=0;n<d.length;n++){t(d[n])}}v(n);n.getInstance=function(e){
  e=(!e||e.length===0?"$default_instance":e).toLowerCase()
  ;if(!n._iq.hasOwnProperty(e)){n._iq[e]={_q:[]};v(n._iq[e])}return n._iq[e]}
  ;e.amplitude=n})(window,document);
</script>
</head>
<body>
<div class="page">
    <header>
        <div class="wrap">
            <div class="burger">
                <div class="burger__bars"></div>
            </div>
            <a class="logo" href="#">
                <h1>virat.cc</h1>
            </a>
            <nav>
                <a href="#"><span class="emoji">🔥</span>Ваще огонь</a>
                <a href="#"><span class="emoji">😂</span>Поржать</a>
                <a href="#"><span class="emoji">🤷‍♂</span>Идиоты</a>
                <a href="#"><span class="emoji">🍓</span>Клубничка 18+</a>
            </nav>
        </div>
    </header>
      <?= $content ?>
</div>
<script type="text/javascript">
setTimeout(function(){
  $('.viewer__hand').click()
}, 1000)
</script>
</body>
</html>
<?php $this->endPage() ?>
