    <div class="wrap">
        <div class="box">
            <div class="box__side">
                <div class="options">
                    <div class="option__item option__head">
                        <a class="option__label" href="#">
                            <div class="icon">
                                <i class="ico ico-plus"></i>
                            </div>
                            Прислать Видео
                        </a>
                    </div>
                    <div class="option__item">
                        <div class="option__label">Поори с Друзьями:</div>
                        <div class="input">
                            <button class="button" name="copy">
                                ctrl+c
                            </button>
                            <input type="text" name="link" value="http://virat.cc/n87tN8" class="input__area" readonly>
                        </div>
                    </div>
                    <div class="option__item">
                        <div class="option__label">Поделиться:</div>
                        <div class="social">
                            <a class="social__item social__facebook" href="#"></a>
                            <a class="social__item social__twitter" href="#"></a>
                            <a class="social__item social__google" href="#"></a>
                            <a class="social__item social__linkedin" href="#"></a>
                            <a class="social__item social__vk" href="#"></a>
                        </div>
                    </div>
                    <div class="option__item">
                        <div class="like">
                            <div class="like__count">540k</div>
                            <div class="like__content">
                                <div class="like__ico"></div>Мне нравится
                            </div>
                        </div>
                    </div>
                </div>

                <div class="next">
                    <a class="button button_main" onclick="newClip()">
                      Следующее Видео
                      <span class="icon"><i class="ico ico-next"></i></span>
                    </a>
                    <div class="next__footnote">
                        или нажмите <mark>[пробел]</mark>
                    </div>
                </div>
            </div>
            <div class="box__video">
                <div class="video-link">
                    <div class="icon" data-tip="Сообщить о Баяне">
                        <i class="ico ico-accordion"></i>
                    </div>
                </div>
                <!--iframe width="560" height="315" src="https://www.youtube.com/embed/5LkJxTT9veI?rel=0&amp;controls=0&amp;showinfo=0;autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe-->
                <div id="coub">
                <?php $html->find('.viewer__controls__container.-no-select')->remove();
                echo $html;
                ?>
              </div>
                </div>
        </div>
        <input type="button" onclick="$('.viewer__hand.viewer__click.-hand').on('click')" name="play" value="хуй">
        <h2 class="title"><?=$title?></h2>
    </div>
    <div class="overlay">
        <div class="overlay__stripe">
            <div class="wrap">
                <h3>Лучшее за неделю</h3>
                <ul class="half">
                    <li class="half__item">
                        <a href="#" class="play-box">
                            <span class="play-box__button">
                                <span class="button button_main">
                                    Смотреть подборку<span class="icon"><i class="ico ico-play"></i></span>
                                </span>
                            </span>
                            <span class="bg-title">
                                <span class="bg-title__inner">
                                    <span>
                                        <span>
                                            Лучшие вины за неделю
                                        </span>
                                    </span>
                                </span>
                            </span>
                            <img src="img/content/video-00.jpg" alt="">
                        </a>
                    </li>
                    <li class="half__item">
                        <a href="#" class="play-box">
                            <span class="play-box__button">
                                <span class="button button_main">
                                    Смотреть подборку<span class="icon"><i class="ico ico-play"></i></span>
                                </span>
                            </span>
                            <span class="bg-title">
                                <span class="bg-title__inner">
                                    <span>
                                        <span>
                                            Лучшие вины за неделю
                                        </span>
                                    </span>
                                </span>
                            </span>
                            <img src="img/content/video-00.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="wrap">
            <div class="layout layout_indent">
                <div class="layout__side">
                    <div class="bnr">
                        <img src="img/content/bnr-v.jpg" alt="">
                    </div>
                    <div class="bnr">
                        <img src="img/content/bnr-v.jpg" alt="">
                    </div>
                </div>
                <div class="layout__content">
                    <h3>Лучшие видео за сегодня</h3>
                    <a href="#" class="play-box">
                        <span class="play-box__button">
                            <span class="button button_main">
                                Смотреть подборку<span class="icon"><i class="ico ico-play"></i></span>
                            </span>
                        </span>
                        <span class="bg-title">
                            <span class="bg-title__inner">
                                <span>
                                    <span>
                                        Лучшие вины за неделю
                                    </span>
                                </span>
                            </span>
                        </span>
                        <img src="img/content/video-00.jpg" alt="">
                    </a>
                    <a href="#" class="play-box">
                        <span class="play-box__button">
                            <span class="button button_main">
                                Смотреть подборку<span class="icon"><i class="ico ico-play"></i></span>
                            </span>
                        </span>
                        <span class="bg-title">
                            <span class="bg-title__inner">
                                <span>
                                    <span>
                                        Лучшие вины за неделю
                                    </span>
                                </span>
                            </span>
                        </span>
                        <img src="img/content/video-00.jpg" alt="">
                    </a>
                    <div class="bnr bnr-h">
                        <img src="img/content/bnr-h.jpg" alt="">
                    </div>
                    <a href="#" class="play-box">
                        <span class="play-box__button">
                            <span class="button button_main">
                                Смотреть подборку<span class="icon"><i class="ico ico-play"></i></span>
                            </span>
                        </span>
                        <span class="bg-title">
                            <span class="bg-title__inner">
                                <span>
                                    <span>
                                        Лучшие вины за неделю
                                    </span>
                                </span>
                            </span>
                        </span>
                        <img src="img/content/video-00.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
<style media="screen">
  .viewer__player{
    top: 0px !important;
    left: 0px !important;
    margin: 0px !important;
  }
  .viewer__controls__container.-no-select{
    display: none;
  }
  img.viewer__img{
    opacity: 0.5;
  }
</style>
<script type="text/javascript">
var i = 0;
function newClip(){
  $.ajax({
    url: "/coub/" + coubs[i] + "/?width=" + $('.box__video').css('width') + "&height=" + $('.box__video').css('height'),
    success: function(data) {
      response = $.parseJSON(data)
      $('#coub').html(response.data.template)
      setTimeout(function() {
        $('img.viewer__img').css('opacity', '0.1')
        $('.viewer__hand.viewer__click.-hand').trigger('click')
        $('.viewer__player video').ready(checkContainer)
        i++
      },2000)
    }
  });
}

function checkContainer () {
  if($('.viewer__player video').is(':visible')) { //if the container is visible on the page
    $('.viewer__player video').attr('width', $('.box__video').css('width'))
    $('.viewer__player video').attr('height', $('.box__video').css('height'))
  } else {
    setTimeout(checkContainer, 50); //wait 50 ms, then try again
  }
}

    $('.viewer__hand.viewer__click').trigger('click')
</script>
