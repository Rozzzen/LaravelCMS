<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Traveling</title>
    <link href="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/10best-cars-group-cropped-1542126037.jpg"
          rel="stylesheet">
    <style>
        body {
            font-family: PT Serif;
        }

        h1 {
            color: black;
        }

        ul li {
            margin-bottom: 3px;

            text-decoration: none;
        }

        ul {
            text-decoration: none;
        }

        li {
            text-decoration: none;
        }

        a {
            text-decoration: none;
        }

        .container {
            max-width: 1200px;
            padding: 0 15px;
            margin: 0 auto;
        }

        .header__title {
            font-weight: bold;
            font-size: 200px;
            line-height: 227px;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
            margin: auto;
            font-weight: 700;
            color: white;
        }

        .title {
            display: flex;
            justify-content: center;
            ALIGN-CONTENT: center;
            align-items: center;
            width: 100%;
        }

        .main-content {
            width: 100%;
            display: flex;
            justify-content: center;
            ALIGN-CONTENT: center;
            align-items: center;
        }

        .text {
            padding: 0 16px;

            width: 100%;
            color: black;
            font-size: 1.1875em;
            font-weight: 400;
            font-style: normal;
            font-family: Georgia;
            line-height: 1.5;
            animation: fadeInLorem 1000ms linear
        }

        @font-face {
            font-family: 'Lato', sans-serif;

            src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/sucrose.woff2') format('woff2');
        }

        @font-face {
            font-family: Georgia;
            src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/im-fell-french-canon-pro.woff2') format('woff2');
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        main {
            background: #fff;

            border: 1px solid #fff;
            font-family: 'IM Fell French Canon Pro';
            font-size: 1.4rem;
            padding: 0;
            line-height: 1.6;

        }

        @media all and (max-width: 1200px) {
            main {
                padding: 2rem;
            }
        }

        .sidebar {

            width: 200%;
            color: black;

        }

        .sidebar ul {
            font-family: Georgia;
            color: black;
            font-size: 1.1875em;
            font-weight: 400;
            font-style: normal;

            line-height: 1.5;
            list-style-type: none;
            animation: fadeInLorem 1000ms linear;
            margin: 100px 100px 0 25px;
            padding: 0;
            margin-right: 16px;

        }

        ul li {
            margin-bottom: 3px;

            text-decoration: none;
        }

        ul {
            text-decoration: none;
        }

        li {
            text-decoration: none;
        }

        a {
            text-decoration: none;
        }

        .content {
            display: flex;

        }

        .header__top {
            background-image: url({{url('/img/trav.jpg')}});
            height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            padding: 40px;
        }

        .header__top-inner {

            border-bottom: none;
            display: flex;
            flex-direction: column;
            height: 100%;
            color: #FFFFFF;
            font-family: Georgia;
        }

        .footer {
            background: black;
            padding: 50px 0 32px;
            margin-top: 70px;
        }

        .footer__item {
            width: 140px;
        }

        .footer__copy {
            padding-top: 40px;
            text-align: center;
            font-size: 14px;
            line-height: 19px;
        }

        .footer__items {
            display: flex;
            justify-content: space-between;
        }

        .footer__item-title {
            font-weight: bold;
            font-size: 14px;
            line-height: 19px;
            color: #505050;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .footer__item--company {
            width: 300px;
            padding-left: 180px;
        }

        p img {
            display: flex;
            justify-content: center;
            text-align: center;
            margin: 0 auto;
        }

    </style>
</head>
<!-- Страница просмотра постов -->
<header>
    <div class="header__top">
        <div class="header__top-inner">
            <h1 class="header__title">
                Traveling
            </h1>
            <p class="header__text">


            </p>
        </div>
    </div>

</header>

<body>
<main>
    <div
        style="height: 60px;width: 100%;display: flex;justify-content: center;align-items: center;align-content:center;margin-bottom:20px;text-align:center;color:black;">


    </div>

    <div class="content">
        <div class="sidebar">

            <ul style='margin-top: 100px;'>
                <!-- Тип сортировки тем, по дате по порядку за орден намом -->
                <li>Sort</li>
                <li><a href="{{url($page->url)}}?sort=createdDate">by Date</a></li>
                <li><a href="{{url($page->url)}}?sort=orderNum">by Order</a></li>
                <li>Category</li>
                @foreach($children as $child)
                    @if($child->url !='default')
                        @if($child->aliasOf)
                            <li><a href="{{url($child->aliasOf)}}?alias={{$child->url}}">{{$child->caption}}</a></li>
                        @else
                            <li><a href="{{url($child->url)}}">{{$child->caption}}</a></li>
                        @endif
                    @endif
                @endforeach
            </ul>
        </div>
        <div style="margin: 0px 250px 0px 150px;">
            <h1 class="title">{{$page->caption}}</h1>
            <div class="main-content text">
                <?php echo($page->content) ?>
            </div>
        </div>
    </div>


</main>
<footer class="footer">
    <div class="container">
        <div class="footer__items">
            <div class="footer__item footer__item--company">
                <h5 class="footer__item-title ">Company</h5>


                </ul>
            </div>

            <div class="footer__item">
                <h5 class="footer__item-title">Details</h5>


                </ul>
            </div>

            <div class="footer__item">
                <h5 class="footer__item-title">Contact</h5>

                </ul>
            </div>


        </div>
        <div class="footer__copy"></div>
    </div>
</footer>
</body>
</html>
