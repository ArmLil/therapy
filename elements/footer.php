<?php
/**
 * Created by PhpStorm.
 * User: slay
 * Date: 014 14.12.18
 * Time: 1:07
 */
?>

<footer id="footer">
    <div class="footer-top" id="era_elem_4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <div class="footer-widget">
                        <h2>Обо мне</h2>
                        <p>Полина Яковлева. Благодаря большому опыту и личным способностям, разработала собственную методику массажа и оздоровительной техники организма. Моя цель - помочь людям любого социального и материального положения почувствовать себя счастливее - вернуть вкус к жизни.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="footer-widget">
                        <h2>Быстрые ссылки</h2>
                        <ul>
                            <li><a href="#" id="foot_link_0" class="era era_li_footer">Главная</a></li>
                            <li><a href="#" id="foot_link_1" class="era era_li_footer">Лечение</a></li>
                            <li><a href="#" id="foot_link_2" class="era era_li_footer">Видео</a></li>
                            <li><a href="#" id="foot_link_3" class="era era_li_footer">Отзывы</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="footer-widget">
                        <h2>Контакты</h2>
                        <ul>
                            <li><i class="far fa-building" aria-hidden="true"></i> г. Москва,  ул Марксистская, д 22.</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> +7 (926) 926-68-36</li>
                            <li><i class="fas fa-at" aria-hidden="true"></i> polina81968@yandex.ru</li>
                            <li><i class="fab fa-skype" aria-hidden="true"></i> Skype: polina1238111</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="footer-widget">
                        <h2>Рабочее время</h2>

<!--                        <img src="" alt="" class="img-responsive">-->
                        <ul class="bussiness-hour">
                            <li>Понедельник: <span class="pull-right">10:00 - 16:00</span></li>
                            <li>Вторник: <span class="pull-right">10:00 - 16:00</span></li>
                            <li>Среда: <span class="pull-right">10:00 - 16:00</span></li>
                            <li>Четверг: <span class="pull-right">10:00 - 16:00</span></li>
                            <li>Пятница: <span class="pull-right">10:00 - 16:00</span></li>
                            <li>Суббота: <span class="pull-right">10:00 - 16:00</span></li>
                            <li>Воскресенье: <span class="pull-right">10:00 - 16:00</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="copyright text-center">
                        <p>&copy;copyright 2018 Массаж здоровья | All right reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bact to top Section-->
<div class="back-top">
    <a href="#"><i class="fa fa-angle-up"></i></a>
</div>

<!-- Modal -->
<div class="modal fade modal-vcenter" id="reservation" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2>заполните форму</h2>
            </div>
            <div class="modal-body">
                <form id="reservation-form" method="post" data-toggle="validator">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label>Ваше имя*</label>
                                <input type="text" id="rfname" class="form-control" name="fname" required data-error="Как к Вам обращаться?" placeholder="Как к Вам обращаться?">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label>Телефон*</label>
                                <input type="tel" id="rphone" class="form-control" name="phone" required data-error="Укажите свой телефон" placeholder="Укажите свой телефон">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <p>Оставьте свои данные для обратной связи</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="submit-block text-center">
                            <a href="#" class="btn btn-default" data-dismiss="modal">Закрыть</a>
                            <input value="Отправить" name="submit" class="btn btn-primary" type="submit">
                        </div>
                        <div id="msgSubmitRes" class="h3 text-center hidden"></div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Color Switcher  -->
<!--<div id="color-switcher">
    <h2>Choose Color<a href="#"><i class="fa fa-cog fa-spin"></i></a></h2>
    <div>
      <ul class="colors" id="color1">
        <li><a href="#" class="color1"></a></li>
        <li><a href="#" class="color2"></a></li>
        <li><a href="#" class="color3"></a></li>
        <li><a href="#" class="color4"></a></li>
        <li><a href="#" class="color5"></a></li>
        <li><a href="#" class="color6"></a></li>
        <li><a href="#" class="color7"></a></li>
        <li><a href="#" class="color8"></a></li>
        <li><a href="#" class="color9"></a></li>
        <li><a href="#" class="color10"></a></li>
        <li><a href="#" class="color11"></a></li>
        <li><a href="#" class="color12"></a></li>
      </ul>
    </div>
 </div>-->

<!-- jQuery -->
<script type="text/javascript" src="/subdomains/therapy/js/classie.js"></script>
<script type="text/javascript" src="/subdomains/therapy/js/photostack.js"></script>
<script type="text/javascript" src="/subdomains/therapy/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/subdomains/therapy/js/modernizr.custom.js"></script>
<script type="text/javascript" src="/subdomains/therapy/js/clipboard.min.js"></script>
<script src="/subdomains/therapy/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/subdomains/therapy/js/jquery.easing.min.js" type="text/javascript"></script>
<script src="/subdomains/therapy/js/wow.js" type="text/javascript"></script>
<script src="/subdomains/therapy/js/jquery.mixitup.min.js" type="text/javascript"></script>
<script src="/subdomains/therapy/js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="/subdomains/therapy/js/waypoints.min.js" type="text/javascript"></script>
<script src="/subdomains/therapy/js/jquery.counterup.min.js" type="text/javascript"></script>
<script src="/subdomains/therapy/js/newsticker.js" type="text/javascript"></script>
<script type="text/javascript" src="//maps.google.com/maps/api/js?js?sensor=false&key=AIzaSyCYI9QbpcEgmUSfnoBplXycjesknwlFW-w"></script>
<script src="/subdomains/therapy/js/gmap3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/subdomains/therapy/js/jquery.stellar.min.js"></script>
<script src="/subdomains/therapy/js/chosen.jquery.js" type="text/javascript"></script>
<script src="/subdomains/therapy/js/masonry.pkgd.js" type="text/javascript"></script>
<script src="/subdomains/therapy/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="/subdomains/therapy/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="/subdomains/therapy/mail/js/form-validator.min.js" type="text/javascript"></script>
<script src="/subdomains/therapy/mail/js/contact-form-script.js" type="text/javascript"></script>
<script src="/subdomains/therapy/js/switcher.js" type="text/javascript"></script>
<script src="/subdomains/therapy/js/script.js" type="text/javascript"></script>
<script>
    //[].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );

    /*new Photostack( document.getElementById( 'photostack-1' ), {
        callback : function( item ) {
            //console.log(item)
        }
    } );*/
    new Photostack( document.getElementById( 'photostack-era' ), {
        callback : function( item ) {
            //console.log(item)
        }
    } );
    (function() {
        [].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
            var menuItems = menu.querySelectorAll('.menu__link'),
                setCurrent = function(ev) {
                    ev.preventDefault();

                    var item = ev.target.parentNode; // li

                    // return if already current
                    if (classie.has(item, 'menu__item--current')) {
                        return false;
                    }
                    // remove current
                    classie.remove(menu.querySelector('.menu__item--current'), 'menu__item--current');
                    // set current
                    classie.add(item, 'menu__item--current');
                };

            [].slice.call(menuItems).forEach(function(el) {
                el.addEventListener('click', setCurrent);
            });
        });

        [].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
            link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
            new Clipboard(link);
            link.addEventListener('click', function() {
                classie.add(link, 'link-copy--animate');
                setTimeout(function() {
                    classie.remove(link, 'link-copy--animate');
                }, 300);
            });
        });
    })(window);
</script>
