<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아웃백 따라만들기 실습</title>

    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/animate.min.css">
    <link rel="stylesheet" href="./css/cdn.jsdelivr.net_npm_swiper@9_swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/main.css">

    <script src="./js/jquery-1.12.4.min.js"></script>
    <script src="./js/cdn.jsdelivr.net_npm_swiper@9_swiper-bundle.min.js"></script>
    <script src="./js/main.js"></script>
</head>

<body>
    <header class="Header">
        <div class="inner">
            <h1>
                <a href="/" class="logo">
                    <span class="blind">캥거루고기집</span>
                </a>
            </h1>
            <? include 'nav.php'; ?>
            <ul class="login">
                <li><a href="">로그인</a></li>
                <li><a href="">회원가입</a></li>
            </ul>
        </div>
        <div class="mobile_btn">
            <button>
                <span class="blind">모바일메뉴</span>
            </button>
        </div>
    </header>