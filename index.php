<?php

if (!empty($_POST['phone'])) {
    send_the_order ($_POST);
}

function send_the_order ($post){
    $params=array(
        "flow" => 4554,
        "offer" => 385,
        'ip' => $_SERVER['REMOTE_ADDR'],
        "name" => $post["name"],
        "phone" => $post["phone"],
        "country" => "UA",
        "ua" => $_SERVER["HTTP_USER_AGENT"],
        "us" => isset( $post["utm_source"] ) ? $post["utm_source"] : "",
        "uc" => isset( $post["utm_campaign"] ) ? $post["utm_campaign"] : "",
        "un" => isset( $post["utm_content"] ) ? $post["utm_content"] : "",
        "ut" => isset( $post["utm_term"] ) ? $post["utm_term"] : "",
        "um" => isset( $post["utm_medium"] ) ? $post["utm_medium"] : "",
    );
    $url = "https://just-traffic.org/api/wm/push.json?id=76-a8b0d976dc1233970fd46cd345f6aabb";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    $return= curl_exec($ch);
    curl_close($ch);
    header('Location: success.php');
}
?>
    <!DOCTYPE html>
    <html lang="ru">

    <head>

        <meta charset="utf-8">
        <title>Money Amulet - Талисман приносящий удачу всего за 69 грн	</title>
        <!-- Favicon -->
        <link rel="icon" href="img/products_new/4565.png" type="image/png">
        <link rel="shortcut icon" href="img/products_new/4565.png" type="image/png">
        <!-- OG -->
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Money Amulet - Талисман приносящий удачу Бесплатно" />
        <meta property="og:image" content="img/products_new/4565.png" />
        <meta property="og:image:width" content="150" />
        <meta property="og:image:height" content="150" />
        <meta property="og:site_name" content="Money Amulet - Талисман приносящий удачу Бесплатно" />
        <meta property="og:description" content="Money Amulet - Талисман приносящий удачу Бесплатно" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width">
        <!-- CSS -->
        <link href="font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="css/css.css" rel="stylesheet" type="text/css">
        <link href="css/css-1.css" rel="stylesheet" type="text/css">
        <link href="css/css-2.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <link href="css/jsdguifgwsiugiqdgqweifgdqwdqfd.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
        <!-- JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script defer type="text/javascript" src="js/text.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

    </head>

    <body>
        <div class="all_content">
            <!-- start:page outer wrap -->
            <div id="page-outer-wrap">
                <!-- start:page inner wrap -->
                <div id="page-inner-wrap">
                    <!-- start:page header mobile -->
                    <header id="page-header-mobile" class="visible-xs">
                        <!-- start:sidr -->
                        <div id="sidr" class="sidr right">
                            <ul>
                                <li class="cat-news">
                                    <a style="cursor:pointer;">Главная</a>
                                </li>
                                <li class="cat-news">
                                    <a style="cursor:pointer;">2019</a>
                                </li>
                                <li class="cat-news">
                                    <a style="cursor:pointer;">Гороскопы</a>
                                </li>
                                <li class="cat-news">
                                    <a style="cursor:pointer;">Лунный календарь</a>
                                </li>
                                <li class="cat-news">
                                    <a style="cursor:pointer;">Восточный календарь</a>
                                </li>
                                <li class="cat-news">
                                    <a style="cursor:pointer;">Нумерология</a>
                                </li>
                                <li class="cat-news">
                                    <a style="cursor:pointer;">Гадания</a>
                                </li>
                                <li class="cat-news">
                                    <a style="cursor:pointer;">Тесты</a>
                                </li>
                                <li class="cat-news">
                                    <a style="cursor:pointer;">Разное</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end:sidr -->
                        <!-- start:row -->
                        <div class="row">
                            <!-- start:col -->
                            <div class="col-xs-6">
                                <!-- start:logo -->
                                <a style="cursor:pointer;"><img src="img/logo-white-mobile.png" alt="Твой астрологический помощник"></a>
                                <!-- end:logo -->
                            </div>
                            <!-- end:col -->
                            <!-- start:col -->
                            <div class="col-xs-6 text-right">
                                <a id="nav-expander" style="cursor:pointer;"><span
									class="glyphicon glyphicon-th"></span></a>
                            </div>
                            <!-- end:col -->
                        </div>
                        <!-- end:row -->
                    </header>
                    <!-- end:page header mobile -->
                    <!-- start:page header -->
                    <header id="page-header" class="hidden-xs">
                        <!-- start:header-branding -->
                        <div id="header-branding">
                            <!-- start:container -->
                            <div class="container">
                                <!-- start:row -->
                                <div class="row">
                                    <!-- start:col -->
                                    <div style="padding-top: 5px;" class="col-sm-6 col-md-4">
                                        <!-- start:logo -->
                                        <a style="cursor:pointer;"><img src="img/logo.png" alt="Твой астрологический помощник"></a>
                                        <!-- end:logo -->
                                    </div>
                                    <!-- end:col -->
                                    <!-- start:col -->
                                    <div class="col-sm-6 col-md-8 text-center">
                                        <!-- start:service -->
                                        <div style="" class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-2 sser-pad hidden-sm">
                                                <a title="Подробный гороскоп совместимости" style="cursor:pointer;">
                                                    <div class="s-ser s-sovm"></div>
                                                </a>
                                                <div class="s-text"><span class="slink"><a
													style="cursor:pointer;">Гороскоп<br> совместимости</a></span></div>
                                            </div>
                                            <div class="col-md-2 sser-pad hidden-sm">
                                                <a title="Задай вопросы астрологу и получи ответы" style="cursor:pointer;">
                                                    <div class="s-ser s-astr"></div>
                                                </a>
                                                <div class="s-text"><span class="slink"><a
													style="cursor:pointer;">Консультация<br> астролога</a></span></div>
                                            </div>
                                            <div class="col-md-2 sser-pad hidden-sm">
                                                <a title="Узнай какой камень принесет тебе удачу" style="cursor:pointer;">
                                                    <div class="s-ser s-kam"></div>
                                                </a>
                                                <div class="s-text"><span class="slink"><a
													style="cursor:pointer;">Подбор<br> камня-талисмана</a></span></div>
                                            </div>
                                            <div class="col-md-2 sser-pad hidden-sm">
                                                <a title="Подробное толкование значения снов" style="cursor:pointer;">
                                                    <div class="s-ser s-son"></div>
                                                </a>
                                                <div class="s-text"><span class="slink"><a
													style="cursor:pointer;">Толкование<br> снов</a></span></div>
                                            </div>
                                        </div>
                                        <!-- end:service -->
                                    </div>
                                    <!-- end:col -->
                                </div>
                                <!-- end:row -->
                            </div>
                            <!-- end:container -->
                        </div>
                        <!-- end:header-branding -->
                        <!-- start:header-navigation -->
                        <div id="header-navigation">
                            <!-- start:container -->
                            <div class="container">
                                <!-- start:menu -->
                                <nav id="menu">
                                    <ul class="nav clearfix">
                                        <li class="home"><a style="cursor:pointer;"><span
											class="glyphicon glyphicon-home"></span></a></li>
                                        <li class="cat-news">
                                            <a style="cursor:pointer;">2020</a>
                                            <!-- end:submenu-news -->
                                        </li>
                                        <li class="cat-news">
                                            <a style="cursor:pointer;">Гороскопы</a>
                                            <!-- end:submenu-news -->
                                        </li>
                                        <li class="cat-news">
                                            <a style="cursor:pointer;">Лунный календарь</a>
                                            <!-- end:submenu-news -->
                                        </li>
                                        <li class="cat-news">
                                            <a style="cursor:pointer;">Восточный календарь</a>
                                            <!-- end:submenu-news -->
                                        </li>
                                        <li class="cat-news">
                                            <a style="cursor:pointer;">Нумерология</a>
                                            <!-- end:submenu-news -->
                                        </li>
                                        <li class="cat-news">
                                            <a style="cursor:pointer;">Гадания</a>
                                            <!-- end:submenu-news -->
                                        </li>
                                        <li class="cat-news">
                                            <a style="cursor:pointer;">Тесты</a>
                                            <!-- end:submenu-news -->
                                        </li>
                                        <li class="cat-news">
                                            <a style="cursor:pointer;">Разное</a>
                                            <!-- end:submenu-news -->
                                        </li>
                                    </ul>
                                </nav>
                                <!-- end:menu -->
                            </div>
                            <!-- end:container -->
                        </div>
                        <!-- end:header-navigation -->
                    </header>
                    <!-- end:page header -->
                    <!-- start:container -->
                    <div class="container">
                        <!-- start:page content -->
                        <div id="page-content" class="clearfix">
                            <!-- start:main -->
                            <div id="main" class="article">
                                <article id="article-post">
                                    <header>
                                        <h1 class="zodi-1">Тамара Глоба: "Деньги упадут с неба на 3 знака зодиака до мая 2020 г., а 2 знака потеряют все сбережения"
                                        </h1>
                                    </header>
                                    <p class="lead">Этот гороскоп уже наделал много шума. К сожалению, апрель будет очень тяжелым для 2 знаков зодиака, но 3 знака неожиданно получат много денег. Просто нажмите на свой знак и узнайте - что вас ждет. Надеюсь мой гороскоп
                                        поможет избежать многих проблем, и сделать правильный выбор. Гороскоп бесплатный, и вы можете пользоваться им ежедневно!
                                    </p>
                                    <div class="row">
                                        <div>
                                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-6" onclick="show_znak_oven()">
                                                <div style="text-decoration: none;cursor:pointer" title="Овен">
                                                    <div class="zsign-ogon">
                                                        <i class="ai aries"></i>
                                                        <div class="ztext">
                                                            Овен
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-6" onclick="show_znak_telec()">
                                                <div style="text-decoration: none;cursor:pointer" title="Телец">
                                                    <div class="zsign-zemlya">
                                                        <i class="ai taurus"></i>
                                                        <div class="ztext">
                                                            Телец
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-6" onclick="show_znak_bliznec()">
                                                <div style="text-decoration: none;cursor:pointer" title="Близнец">
                                                    <div class="zsign-vozduh">
                                                        <i class="ai gemini"></i>
                                                        <div class="ztext">
                                                            Близнецы
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-6" onclick="show_znak_rak()">
                                                <div style="text-decoration: none;cursor:pointer" title="Рак">
                                                    <div class="zsign-voda">
                                                        <i class="ai cancer"></i>
                                                        <div class="ztext">
                                                            Рак
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-6" onclick="show_znak_lev()">
                                                <div style="text-decoration: none;cursor:pointer" title="Лев">
                                                    <div class="zsign-ogon">
                                                        <i class="ai leo"></i>
                                                        <div class="ztext">
                                                            Лев
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-6" onclick="show_znak_deva()">
                                                <div style="text-decoration: none;cursor:pointer" title="Дева">
                                                    <div class="zsign-zemlya">
                                                        <i class="ai virgo"></i>
                                                        <div class="ztext">
                                                            Дева
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-6" onclick="show_znak_vesi()">
                                                <div style="text-decoration: none;cursor:pointer" title="Весы">
                                                    <div class="zsign-vozduh">
                                                        <i class="ai libra"></i>
                                                        <div class="ztext">
                                                            Весы
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-6" onclick="show_znak_scorp()">
                                                <div style="text-decoration: none;cursor:pointer" title="Скорпион">
                                                    <div class="zsign-voda">
                                                        <i class="ai scorpio"></i>
                                                        <div class="ztext">
                                                            Скорпион
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-6" onclick="show_znak_strel()">
                                                <div style="text-decoration: none;cursor:pointer" title="Стрелец">
                                                    <div class="zsign-ogon">
                                                        <i class="ai sagittarius"></i>
                                                        <div class="ztext">
                                                            Стрелец
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-6" onclick="show_znak_koz()">
                                                <div style="text-decoration: none;cursor:pointer" title="Козерог">
                                                    <div class="zsign-zemlya">
                                                        <i class="ai capricorn"></i>
                                                        <div class="ztext">
                                                            Козерог
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-6" onclick="show_znak_vod()">
                                                <div style="text-decoration: none;cursor:pointer" title="Водолей">
                                                    <div class="zsign-vozduh">
                                                        <i class="ai aquarius"></i>
                                                        <div class="ztext">
                                                            Водолей
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-6" onclick="show_znak_riba()">
                                                <div style="text-decoration: none;cursor:pointer" title="Водолей">
                                                    <div class="zsign-voda">
                                                        <i class="ai pisces"></i>
                                                        <div class="ztext">
                                                            Рыбы
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <br><br>
                                <div class="comments">
                                    <div class="title">Комментарии:</div>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="img/avatar1.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a style="cursor:pointer;">Мария Ковалева</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Тамара, большое спасибо за гороскоп. Все что вы предсказали мне 2 недели назад у меня сбылось, я сама не поверила сначала, но это правда! Вы просто астролог от Бога
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment answer">
                                        <div class="avatar">
                                            <img src="img/avatargl.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a style="cursor:pointer;">Тамара Глобина</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Спасибо за Ваш отзыв. Очень рада, что мои гороскопы и советы помогают людям принимать правильные решения, для меня это действительно Важно
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="img/avatar2.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a style="cursor:pointer;">Наталья Бодрова</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Оставляю свой отзыв впервые, ваш гороскоп и советы по привлечению денег и удачи, мне помогли вылезть из черной полосы невезения, надеюсь дальше будет также
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="img/avatar6.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a style="cursor:pointer;">Сергей Панов</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Систематически получаю от тебя гороскопы, не могу сказать что все сбылось на 100% , но 80 есть точно, а остальные 20% я может неправильно поняла
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="img/avatar3.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a style="cursor:pointer;">Наталья Леонова</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Тамара, ваша жизнь для меня пример для подражания! подскажите как мне изменить свою жизнь?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment answer">
                                        <div class="avatar">
                                            <img src="img/avatargl.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a style="cursor:pointer;">Тамара Глобина</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Все очень просто, для этого я и делаю гороскопы и оставляю советы для каждого знака, просто нажимайте на свой знак, читайте, и следуйте определенным правилам. Удача сама постучится к вам в дверь
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="img/avatar4.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a style="cursor:pointer;">Ирина Кузьмина</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Здравствуйте Тамара, вы меня конечно не помните, но я когда то учавствовала в программе «Давай поженимся» и хочу сказать, что все , что вы мне тогда нагадали - сбылось! Я нашла свое личное счастье и теперь замужем! Спасибо вам огромное!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="img/avatar5.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a style="cursor:pointer;">Валерия Горельшева</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Тамара, здравствуйте. Хотелось бы получить от вас гороскоп на деньги и финансовую удачу. Как это можно сделать?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment answer">
                                        <div class="avatar">
                                            <img src="img/avatargl.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a style="cursor:pointer;">Тамара Глобина</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Все очень просто, здесь я постоянно обновляю гороскоп и вы можете получить самый свежий. Гороскоп общий и финансовый и личный одновременно. жмите на свой знак и читайте - все очень просто
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="img/avatar7.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a style="cursor:pointer;">Антон Геращенко</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Добрый день, всегда скептически относился к гороскопам, но в этот раз неудержался и 2 недели назад получил свой, получил еще несколько советов как привлечь к себе финансовую удачу. Уж не знаю совпало или просто повезло, но меня повысили 3 дня назад. Вот
                                                как после этого не верить вашим гороскопам?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="img/avatar8.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a style="cursor:pointer;">Екатерина Бабич</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Алена, добрый вечер. Когда то была на вашем семинаре и вы мне дали несколько дельных советов - спасибо большое, мне это было очень важно
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment answer">
                                        <div class="avatar">
                                            <img src="img/avatargl.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a style="cursor:pointer;">Тамара Глобина</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Добрый вечер, всегда пожалуйста :)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end:main -->
                            <!-- start:sidebar -->
                            <div id="sidebar">
                                <section class="module-signs">
                                    <!-- start:header -->
                                    <header>
                                        <h2>Тамара Глобина</h2>
                                        <span class="borderline"></span>
                                    </header>
                                    <!-- end:header -->
                                    <div style="background-color: #e5f3fd;">
                                        <ul class="horoscope-list">
                                            <center><img src="img/fotos.jpg"> </center>
                                            <br>
                                            <p>«Астрология - моя жизнь и наука. Без ее ежедневных открытий все казалось бы туманным, примитивным, ограниченным, обыденным.» — Тамара Глобина
                                            </p>
                                        </ul>
                                    </div>
                                </section>
                                <div style="clear: both"></div>
                            </div>
                            <!-- end:sidebar -->
                        </div>
                        <!-- end:page content -->
                    </div>
                    <!-- end:container -->
                    <!-- footer:page footer -->
                    <footer id="page-footer">
                        <!-- start:container -->
                        <div class="container">
                            <!-- start:row -->
                            <div class="copyright row">
                                <div class="footer_text" style="text-align: center"></div>
                            </div>
                            <!-- end:row -->
                        </div>
                        <!-- end:container -->
                    </footer>
                    <!-- end:page footer -->
                </div>
                <!-- end:page inner wrap -->
            </div>
            <!-- end:page outer wrap -->
            <!-- start:scripts -->
        </div>
        <div class="znak_content hide">
            <!-- start:page outer wrap -->
            <div id="page-outer-wrap">
                <!-- start:page inner wrap -->
                <div id="page-inner-wrap">
                    <!-- start:page header mobile -->
                    <header id="page-header-mobile" class="visible-xs">
                        <!-- start:sidr -->
                        <div id="sidr" class="sidr right">
                            <ul>
                                <li class="cat-news">
                                    <a href="#roulette">Как привлечь удачу?</a>
                                </li>
                                <li class="cat-news">
                                    <a href="#roulette">Как привлечь деньги?</a>
                                </li>
                                <li class="cat-news">
                                    <a href="#roulette">Хочешь разбогатеть за 7 дней?</a>
                                </li>
                                <li class="cat-news">
                                    <a href="#roulette">Деньги начнут падать с неба, если...</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end:sidr -->
                        <!-- start:row -->
                        <div class="row">
                            <!-- start:col -->
                            <div class="col-xs-6">
                                <!-- start:logo -->
                                <a href="#roulette"><img src="img/logo-white-mobile.png" alt="Твой астрологический помощник"></a>
                                <!-- end:logo -->
                            </div>
                            <!-- end:col -->
                            <!-- start:col -->
                            <div class="col-xs-6 text-right">
                                <a id="nav-expander" href="#roulette"><span class="glyphicon glyphicon-th"></span></a>
                            </div>
                            <!-- end:col -->
                        </div>
                        <!-- end:row -->
                    </header>
                    <!-- end:page header mobile -->
                    <!-- start:page header -->
                    <header id="page-header" class="hidden-xs">
                        <!-- start:header-branding -->
                        <div id="header-branding">
                            <!-- start:container -->
                            <div class="container">
                                <!-- start:row -->
                                <div class="row">
                                    <!-- start:col -->
                                    <div style="padding-top: 5px;" class="col-sm-6 col-md-4">
                                        <!-- start:logo -->
                                        <a href="#roulette"><img src="img/logo.png" alt="Твой астрологический помощник"></a>
                                        <!-- end:logo -->
                                    </div>
                                    <!-- end:col -->
                                    <!-- start:col -->
                                    <div class="col-sm-6 col-md-8 text-center">
                                        <!-- start:service -->
                                        <div style="" class="row">
                                            <div class="col-md-2"></div>
                                        </div>
                                        <!-- end:service -->
                                    </div>
                                    <!-- end:col -->
                                </div>
                                <!-- end:row -->
                            </div>
                            <!-- end:container -->
                        </div>
                        <!-- end:header-branding -->
                        <!-- start:header-navigation -->
                        <div id="header-navigation">
                            <!-- start:container -->
                            <div class="container">
                                <!-- start:menu -->
                                <nav id="menu">
                                    <ul class="nav clearfix">
                                        <li class="cat-news">
                                            <a href="#roulette">Как привлечь удачу?</a>
                                        </li>
                                        <li class="cat-news">
                                            <a href="#roulette">Как привлечь деньги?</a>
                                        </li>
                                        <li class="cat-news">
                                            <a href="#roulette">Хочешь разбогатеть за 7 дней?</a>
                                        </li>
                                        <li class="cat-news">
                                            <a href="#roulette">Деньги начнут падать с неба, если...</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- end:menu -->
                            </div>
                            <!-- end:container -->
                        </div>
                        <!-- end:header-navigation -->
                    </header>
                    <!-- end:page header -->
                    <!-- start:container -->
                    <div class="container">
                        <!-- start:page content -->
                        <div id="page-content" class="clearfix">
                            <!-- start:main -->
                            <div id="main" class="article">
                                <article id="article-post">
                                    <header>
                                        <a href="#roulette"> </a>
                                        <h1 class="zodi-1">
                                            <a href="#roulette">
                                                <p class="znak"></p>
                                                До мая 2020 г. Вы получите много денег, если привлечете к себе энергию удачи. Это очень просто сделать, я расскажу как...
                                            </a>
                                        </h1>
                                    </header>
                                    <p class="znak2"></p>
                                    <p class="znak3"></p>
                                    <h2><b>Как привлечь к себе деньги и удачу?</b></h2>
                                    <p class="znak4"></p>
                                    <p class="lead"><a href="#roulette">Амулет</a> стягивает на своего хозяина, позитивную энергию и наполняет ей жизнь хозяина. Первые результаты вы почувствуете очень быстро. У каждого человека действие амулета выражается по своему:
                                    </p>
                                    <p class="lead">
                                        - вам начнет везти в денежных делах; <br> - неожиданно получите дополнительные деньги (откроете свой маленький бизнес или получите премию на работе); <br> - вам вернут старые долги; <br> - дадут повышение на работе;
                                        <br> - бизнес даст дополнительный доход и получит неожиданное развите.
                                    </p>
                                    <p class="znak5"></p>
                                    <p class="lead">Силу денежного амулета уже ощутили на себе много людей. Это и простые люди и звезды шоу бизнеса. Вот лишь немного примеров.
                                    </p>
                                    <center>
                                        <a href="#roulette">
                                            <img src="img/stas1.jpg">
                                        </a>
                                    </center>
                                    <br>
                                    <center>
                                        <p class="lead"><b>Стас Михайлов: "Часто ношу свой амулет, вы сами это видите на
											концертах. Придает мне уверенности в своей удаче"</b>
                                        </p>
                                    </center>
                                    <center>
                                        <a href="#roulette">
                                            <img src="img/alla1.jpg">
                                        </a>
                                    </center>
                                    <br>
                                    <center>
                                        <p class="lead"><b>Алла Пугачева: "Знаю Тамару 100 лет и часто к ней обращаюсь как
											к экстрасенсу. Ее советы меня никогда не подводили"</b>
                                        </p>
                                    </center>
                                    <center>
                                        <a href="#roulette">
                                            <img src="img/lara1.jpg">
                                        </a>
                                    </center>
                                    <br>
                                    <center>
                                        <p class="lead"><b>Лариса Гузеева: "Познакомилась с Тамарой задолго до "Давай
											поженимся". Знаю на все 100%, что плохого она не посоветует"</b>
                                        </p>
                                    </center>
                                    <p class="lead">Я и сама постоянно ношу <a href="#roulette">денежный амулет</a>, и считаю, что именно ему я обязана своей удачей и успехом в жизни.
                                    </p>
                                    <center>
                                        <a href="#roulette">
                                            <img src="img/volo.jpg">
                                        </a>
                                    </center>
                                    <br>
                                    <p class="lead">Я хочу вам помочь, и добавить в вашу жизнь денежную удачу. Поэтому до 8 апреля 2020 я даю вам шанс выиграть скидку на амулет!.
                                    </p>
                                    <p class="lead"><b>Я гарантирую что заказанный на моем <a href="#roulette">официальном
										сайте</a> амулет является настоящим и дает результат!</b>
                                    </p>
                                    <div class="ruletka-p" id="roulette">
                                        <h2>ВНИМАНИЕ! Остерегайтесь подделок!</h2>
                                        <div>Амулет можно приобрести С МАКСИМАЛЬНОЙ СКИДКОЙ, только <a href="#roulette" class="ruletka-a">приняв участие в розыгрыше
											скидки!</a>
                                        </div>
                                    </div>
                                    <div class="spin-wrapper">
                                        <p class="ruletka-p">Испытай удачу!<br>Нажми на колесо! Попробуй получить скидку на амулет!
                                        </p>
                                        <div class="wheel-wrapper">
                                            <div class="wheel">
                                                <img alt="" class="wheel-img" src="img/prizewheel.png">
                                                <div class="wheel-cursor">
                                                    <img alt="" src="img/wheel-cursor.png"><span class="cursor-text lt48">КРУТИ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order_block">
                                        <div><img src="img/tov.png"></div>
                                        <h3>Все что Вам нужно — это ввести имя и номер телефона.<br>Поторопитесь! У Вас осталось времени:<br><span class="time_remains" id="min">10</span> : <span class="time_remains" id="sec">00</span>
                                        </h3>
                                        <form class="main-order-form orderformcdn" id="luckyshop_form" action="" method="post" >
                                       
                                        <input type="text" class="input-roulette" name="name" placeholder="Ваше имя" value="">
                                            <input type="tel" class="input-roulette" id="phone" name="phone" placeholder="Ваш телефон" value="">
                                            <button class="submit-roulette">Получить за 69 грн</button>
                                        </form>
                                    </div>
                                    <div class="spin-result-wrapper">
                                        <div class="pop-up-window">
                                            <div class="close-popup"></div>
                                            <span class="pop-up-heading">Поздравляем!</span>
                                            <p class="ruletka-p pop-up-text">Вы можете забрать амулет только сегодня за 69 грн <span class="danger-text">!</span></p>
                                            <a class="pop-up-button" href="#roulette">OK</a>
                                        </div>
                                    </div>
                                    <br>
                                </article>
                                <div class="comments">
                                    <div class="title">Комментарии:</div>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="img/avatar11.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a href="#roulette">Юлия Зиновьева</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Здравствуйте Тамара. Я уже отправила вам отзыв на ящик, но и продублирую здесь. Полгода назад на меня начали сыпаться одна проблема за другой, уволили с работы, муж начал пить, ребёнок попал в плохую кампанию. Подруга посоветовала заказать амулет на вашем
                                                сайте, и я отважилась, хоть раньше и не думала что такое сможет помочь. Но произошло чудо, не буду вдаваться в подробности, но сейчас у меня все отлично - новая работа с большой зарплатой, муж закодировался
                                                и каждую неделю дарит цветы за тля то я его терпела, а ребёнок поступил в ВУЗ и как то сам сосредоточился на учебе и забыл о старой кампании. Огромное вам спасибо, Тамара. Желаю вам удачи!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment answer">
                                        <div class="avatar">
                                            <img src="img/avatargl.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a href="#roulette">Тамара Глобина</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Здравствуйте. Большое спасибо за ваш отзыв, письмо Ваше я тоже получила. Очень рада что смогла вам помочь, я каждый день получаю письма с благодарностью, но ваша история меня особенно зацепила.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="img/avatar12.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a href="#roulette">Ольга Ширшова</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Тамара, добрый день. Заказала амулет на вашем сайте 3 недели назад, быстро его получила по почте. Уж не знаю помог мне амулет или просто повезло, но неделю назад мужу предложили должность директора. Мы о таком даже не мечтали, уверена, что это благодаря
                                                амулетику. Теперь мы сможем и ремонт закончить и шубку мне к зиме купить)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="img/avatar17.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a href="#roulette">Виталий Коловрат</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Добрый день. Я всегда относился к числу сомневающихся к подобным вещам, но 2 месяца назад в жизни наступила чёрная полоса и я готов был пойти на все, лишь бы из неё выйти. Уже месяц ношу в кармане амулет, и бизнес потихоньку начал выходить из кризиса.
                                                Посоветовал и своим знакомым
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="img/avatar13.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a href="#roulette">Анна Солдатова</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Хочу и я поделиться своим отзывом. Амулет приобрела полгода назад. И я на 100% уверена, что именно он помог мне закрыть кредит досрочно на несколько лет.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment answer">
                                        <div class="avatar">
                                            <img src="img/avatargl.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a href="#roulette">Тамара Глобина</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Добрый день. Рада, что смогла Вам помочь
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="img/avatar14.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a href="#roulette">Ольга Селянина</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Давно слышала о подобных амулетах, которые делают монахи в сибири. Я пока не получила свой амулет, вчера только заказала, так что не могу сказать работает или нет. Но думаю что к амулету обязательно нужно приложить веру! И тогда все получится
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment answer">
                                        <div class="avatar">
                                            <img src="img/avatargl.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a href="#roulette">Тамара Глобина</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Добрый день. Абсолютно верно, своей верой вы как бы постоянно подзаряжаете амулет, и его действие становится сильнее. Я то это точно знаю, мой амулет со мной уже 7 лет
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="img/avatar15.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a href="#roulette">Наталия Шевцова</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Получила свой амулетик вчера, он такой красивый, даже не ожидала ) спасибо большое за скидку! Обязательно отпишусь когда получу от него то, что загадала )
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment answer">
                                        <div class="avatar">
                                            <img src="img/avatargl.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a href="#roulette">Тамара Глобина</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Пожалуйста. Носите амулет с собой всегда и удивитесь его силе, уж я то знаю )
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="img/avatar18.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a href="#roulette">Сергей Шевченко</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Неужели здесь есть кто то, кто сомневается в том, что Тамара плохого не посоветует? Я очень вам верю и мой амулет со мной уже год, я не буду хвастаться успехами, но поверьте они есть, и я благодарен Тамаре за ее помощь
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="img/avatar16.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a href="#roulette">Елена Ткачук</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                Сегодня заказала амулет, и вот что вам скажу. Главное это покупать амулет у надежных и проверенных людей, тогда он точно будет действовать. Ато много сейчас китайских подделок
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment answer">
                                        <div class="avatar">
                                            <img src="img/avatargl.jpg" alt="">
                                        </div>
                                        <div class="message">
                                            <div class="info">
                                                <b><a href="#roulette">Тамара Глобина</a></b>
                                                <span>
													<script type="text/javascript">
														d = new Date(); p = new Date(d.getTime() - 3*86400000);
														var addNull = function(num) {
														var result = '0' + num;
														return  result.slice(-2);
														}
														    document.write(addNull(p.getDate()) + '.' + addNull(p.getMonth()+1) + '.' + p.getFullYear());
													</script>
												</span>
                                            </div>
                                            <div class="text">
                                                К сожалению да, подделок очень много, но я гарантирую, что амулеты заказанные через мой сайт - рабочие и настоящие
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="push-comments"></div>
                                <center>
                                    <a class="ord_button" href="#roulette">Принять участие в розыгрыше</a>
                                </center>
                            </div>
                            <!-- end:main -->
                            <!-- start:sidebar -->
                            <div id="sidebar">
                                <section class="module-signs">
                                    <!-- start:header -->
                                    <header>
                                        <h2>Тамара Глобина</h2>
                                        <span class="borderline"></span>
                                    </header>
                                    <!-- end:header -->
                                    <div style="background-color: #e5f3fd;">
                                        <ul class="horoscope-list">
                                            <center><img src="img/fotos.jpg"> </center>
                                            <br>
                                            <p>«Астрология - моя жизнь и наука. Без ее ежедневных открытий все казалось бы туманным, примитивным, ограниченным, обыденным.» — Тамара Глобина
                                            </p>
                                        </ul>
                                    </div>
                                </section>
                                <div style="clear: both"></div>
                                <section style="" class="module-news top-margin">
                                    <!-- start:header -->
                                    <header>
                                        <h2>Как помог людям<br> амулет. <br><b>Видео отзывы</b></h2>
                                        <span class="borderline"></span>
                                    </header>
                                    <!-- end:header -->
                                    <!-- start:article-container -->
                                    <div class="article-container">
                                        <!-- start:article -->
                                        <div class="video_block">
                                            <div class="youtube" id="WwTIJw8JBA4">
                                                <iframe width="100%" height="100%" src="videotube/db4a99a0453f562ae1f2cb70778533f41586420914.html" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="video_block">
                                            <div class="youtube" id="u9DUB0Sv0cY">
                                                <iframe width="100%" height="100%" src="videotube/1ba116a4ce88c727190b6c73a4cdb4551586421015.html" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="video_block">
                                            <div class="youtube" id="xHvQCR82Fvo">
                                                <iframe width="100%" height="100%" src="videotube/f1f6a060cb0bae31306b32fa70a5b7611586421069.html" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <!-- end:article -->
                                    </div>
                                    <!-- end:article-container -->
                                </section>
                            </div>
                            <!-- end:sidebar -->
                        </div>
                        <!-- end:page content -->
                    </div>
                    <!-- end:container -->
                    <!-- footer:page footer -->
                    <footer id="page-footer">
                        <!-- start:container -->
                        <div class="container">
                            <!-- start:row -->
                            <div class="copyright row">
                                <!-- start:col -->
                                <div class="col-sm-12">
                                    <div class="footer_text" style="text-align: center;"></div>
                                </div>
                                <!-- end:col -->
                                <!-- start:col -->
                                <!-- end:col -->
                            </div>
                            <!-- end:row -->
                        </div>
                        <!-- end:container -->
                    </footer>
                    <!-- end:page footer -->
                </div>
                <!-- end:page inner wrap -->
            </div>
            <!-- end:page outer wrap -->
            <!-- start:scripts -->
        </div>
     
    </body>

    </html>