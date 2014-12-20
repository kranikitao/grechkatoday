<?php
/** @var $pricePresenter \KNone\Grecha\ViewModel\PricePresenter */
/** @var $debug boolean */
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Гречка Тудэй | Сколько стоит гречка сегодня?</title>
    <meta name="keywords" content="гречка, греча, курс гречи, килограмм гречки, гречневая крупа, стоимость гречки, grechkatoday, grechka, гручка тудэй, гречка сегодня, доллар, евро"/>
    <meta name="description" content="Сколько стоит гречка сегодня на прилавках российских магазинов. Курс гречки по отношению в рублю, доллару и евро."/>
    <link rel="stylesheet" href="css/styles.css" type="text/css"/>
    <link rel="icon" type="image/png" href="favicon.png"/>
</head>
<body>
<p><?= $pricePresenter->getRubles() ?></p>

<p><?= $pricePresenter->getEuro() ?></p>

<p><?= $pricePresenter->getDollars() ?></p>

<p><?= $pricePresenter->getDifferenceInRubles() ?></p>

<div class="chart">
    <div>
        <canvas id="chart-canvas" width="410" height="200"></canvas>
    </div>
    <button class="chart-button-week">неделя</button>/<button class="k-chart-button-month">месяц</button>
</div>

<div id="social" class="social"></div>

<script <?= ($debug ? 'data-main="js/app"' : 'data-main="js/scripts"') ?> src="js/lib/require.js"></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-57431312-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</body>
</html>
