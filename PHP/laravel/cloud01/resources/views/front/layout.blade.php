<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
    <meta name="description" content="專案">
    <link rel="preload" as="script" href="js/script.min.js">
    <link rel="preload" as="style" href="css/layput.min.css">
    <link rel="preload" as="image" href="images/map.svg">
    <link rel="stylesheet" type="text/css" href="css/index.min.css">
    <link rel="stylesheet" type="text/css" href="css/menu.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/layout.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700&display=swap" rel="stylesheet">
    <title>專案實作</title>
</head>

<body>
    <div class="loading-window" style="background-image: url('images/map.svg');">
        <img src="images/load-icon.svg" alt="">
        <div class="jump-dots">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--loading-->
    <div id="page" class="bg-linear-primary pos-r container-fluid px-0">
        <div class="pos-ab w-100 pos-ab-b pos-ab-t pos-ab-l bg-cover bgpos-x-center bgpos-y-right" style="background-image: url('images/map.png')"></div>
        <!--pos-ab-->
        <div class="pos-ab w-100 pos-ab-b pos-ab-t pos-ab-l pos-ab-y-e" style="background-image: url('images/world-view.png');"></div>
        <!--pos-ab-->
        <div class="pos-ab w-100 h-100 pos-ab-t pos-ab-l pos-ab-y-s " style="background-image: url('images/idx-bg-top.png')"></div>
        <!--pos-ab-->
        <input type="checkbox" id="m-ctrl" hidden>
        <header class="">

            <div class="container-max-1920 px-xl-3 px-xs-2">
                <div class="row justify-content-xs-between align-items-center mx-0">
                    <h1><a href="index.html" class="logo"></a></h1>
                    <label for="m-ctrl"></label>
                    <div class="menu">
                        <ul class="">
                            <li class="nav_btn"><a href="index.html">活動首頁</a></li>
                            <li class="nav_btn"><a href="act.html">活動說明</a></li>
                            <li class="nav_btn"><a href="notice.html">注意事項</a></li>
                            <li class="nav_btn"><a href="qa.html">活動Q&A</a></li>
                            <li class="nav_btn"><a href="pro.html">產品介紹</a></li>
                            <li class="nav_btn"><a href="list.html">中獎專區</a></li>
                        </ul>
                    </div>
                </div>
                <!--row-->
            </div>
            <!--container-->

        </header>
        <main class="gw pt-lg-0 remove-bg">
            <div class="row-flex">
                <div class="img-wrap">
                    <img src="images/index-left.png" alt="">
                </div>
                <!--w-50-->
                <div class="img-wrap">
                    <img src="images/index-right.png" alt="">
                </div>
                <!--w-50-->
                <div class="text-lg-right">
                    <a href="act.html" class="bunce-btn">
                        <img src="images/btn.png" class="flower">
                    </a>
                </div>
                <!--w-50-->
            </div>
            <!--row-->
        </main>
    </div>
    <!--page-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.min.js"></script>
</body>

</html>