<!DOCTYPE html>
<html lang="vi" prefix="og:http://ogp.me/ns#">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>{{ !empty($metaData['meta_title']) ? $metaData['meta_title'] : config()->get('constants.SITE_NAME') }}</title>
    <meta name="description" content="{{ !empty($metaData['meta_description']) ? $metaData['meta_description'] : 'Chuyên trang chia sẻ về những kinh nghiệm, hỏi đáp thắc mắc khi đi du lịch, du lịch phượt, tour du lịch, vé tham quan' }}"/>
    <meta name="robots" content="noindex, nofollow"/>
    <meta property="fb:app_id" content=""/>
    <meta name="google-signin-client_id" content="">
    <meta name="google-site-verification" content=""/>
    <link rel="canonical" href="<?php echo config()->get('constants.FRONTEND_URL') . $_SERVER['REQUEST_URI'] ?>"/>
    <meta name="twitter:title" content="{{ !empty($metaData['meta_title']) ? $metaData['meta_title'] : config()->get('constants.SITE_NAME') }}"/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="{{ !empty($metaData['meta_image']) ? $metaData['meta_image'] : '/images/logo@3x.png' }}">
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:title" content="{{ !empty($metaData['meta_title']) ? $metaData['meta_title'] : config()->get('constants.SITE_NAME') }}" itemprop="headline"/>
    <meta property="og:description" content="{{ !empty($metaData['meta_description']) ? $metaData['meta_description'] : 'Chuyên trang chia sẻ về những kinh nghiệm, hỏi đáp thắc mắc khi đi du lịch, du lịch phượt, tour du lịch, vé tham quan' }}" itemprop="description"/>
    <meta property="og:image" content="{{ !empty($metaData['meta_image']) ? $metaData['meta_image'] : '/images/logo@3x.png' }}" itemprop="thumbnailUrl"/>
    <meta property="og:image:alt" content="{{ !empty($metaData['meta_title']) ? $metaData['meta_title'] : config()->get('constants.SITE_NAME') }}">
    <meta property="og:image:width" content="600"/>
    <meta property="og:image:height" content="315"/>
    <meta property="og:url" content="{{ Request::fullUrl() }}" itemprop="url"/>
    <meta property="og:type" content="website"/>
    <meta property="og:ttl" content="2419200"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="https://gody.vn/public/images/icon-1.png?v=1235">
    <link rel="stylesheet" href="https://media2.gody.vn/public/v3/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://gody.vn/public/v6/css/fancybox-3.1/jquery.fancybox.min.css">
    <!-- <link rel="stylesheet" href="https://media2.gody.vn/public/v3/plugins/fancybox-3.0/jquery.fancybox.min.css"> -->
    <link rel="stylesheet" href="https://media2.gody.vn/public/v3/plugins/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lora|Montserrat:400,500,600&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/temp/Minified.css?v=1235')}}">
    <link rel="stylesheet" href="https://gody.vn/public/v5/css/temp/main.css?v=1235">
    @if ($agent->isMobile())
        <link rel="stylesheet" href="https://gody.vn/public/v3/mobile/css/temp/custom_modal.css?v=645a4b7829005">
    @else
        <link rel="stylesheet" href="https://gody.vn/public/v5/css/temp/custom.css?v=1235">
    @endif
    <link rel="stylesheet" href="https://gody.vn/public/v6/css/atomic.css?v=1235">
    <link rel="stylesheet" href="{{asset('public/css/jquery.datetimepicker.css')}}">
    <link rel="stylesheet" href="https://media2.gody.vn/public/v3/plugins/slick/slick.css">
    <!-- bxSlider CSS file -->
    <link href="https://media2.gody.vn/public/v3/css/jquery.bxslider.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://media2.gody.vn/public/v3/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" href="https://gody.vn/public/v3/cropper/cropper.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://gody.vn/public/v3/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    @if ($agent->isMobile())
        <link rel="stylesheet" type="text/css" href="https://gody.vn/public/v4/css/customv2.css?v=9">
    @else
        <link rel="stylesheet" href="https://gody.vn/public/v5/css/custom_travel.css?v=641efc30450e6">
    @endif
    @if ($agent->isMobile())
        <link rel="stylesheet" type="text/css" href="https://gody.vn/public/v3/mobile/css/temp/styles.css?v=645a4b7829079">
    @endif
    @if ($agent->isMobile())
    <style>
        @font-face {
            font-family: 'SVN-Gilroy';
            font-style: Regular;
            font-weight: 400;
            src: url('https://media2.gody.vn/public/v7/SVN-Gilroy-Black/SVN-Gilroy Regular.otf') format("opentype");
        }
        @font-face {
            font-family: 'SVN-Gilroy';
            font-style: Bold;
            font-weight: 700;
            src: url('https://media2.gody.vn/public/v7/SVN-Gilroy-Black/SVN-Gilroy-Bold.otf') format("opentype");
        }
        @font-face {
            font-family: 'SVN-Gilroy';
            font-style: Medium;
            font-weight: 500;
            src: url('https://media2.gody.vn/public/v7/SVN-Gilroy-Black/SVN-Gilroy Medium.otf') format("opentype");
        }
        @font-face {
            font-family: 'SVN-Gilroy';
            font-style: SemiBold;
            font-weight: 600;
            src: url('https://media2.gody.vn/public/v7/SVN-Gilroy-Black/SVN-Gilroy SemiBold.otf') format("opentype");
        }
        body, .navbar-primary {
            font-family: 'SVN-Gilroy' !important;
        }
        .box-shadow-1 {
            box-shadow: inset 0px -1px 0px rgb(0 0 0 / 10%);
        }
        .block-content {

        }
        .block-content div {
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 140%;
            color: #333333;
        }
        .block-content img{
            width: 100% !important;
        }
        /**/
        .banners-reward__item {

        }
        .banners-reward__item:nth-child(-n+3){

        }
        .banners-reward__item:nth-child(even){

        }
        .gody-pagination {

        }
        .gody-pagination ul{

        }
        .gody-pagination ul li{

        }
        .gody-pagination ul li.active{

        }
        .gody-pagination ul li.active span{
            background-color: #ff8c00;
            border: 1px solid #ff8c00;
            line-height: 24px;
        }
        .gody-pagination .pagination>.active>a {
            background-color: #ff8c00;
            border: 1px solid #ff8c00;
            line-height: 24px;
        }

        .gody-pagination .pagination>li:first-child>a, .pagination>li:first-child>span {
            border-radius: 100%;
        }
        .gody-pagination .pagination>li:last-child>a, .pagination>li:last-child>span {
            border-radius: 100%;
        }

        .gody-pagination ul li a{
            border-radius: 100%;
            margin-right: 10px;
            width: 38px;
            height: 38px;
            text-align: center;
            background: #fff;
            border: 1px solid #E0E0E0;
        }
        .gody-pagination ul li a{
            color: #828282;
            font-size: 16px;
            line-height: 24px;
            font-weight: 500px;
        }
        .gody-pagination ul li span{
            border-radius: 100%;
            margin-right: 10px;
            width: 38px;
            height: 38px;
            text-align: center;
            background: #fff;
            border: 1px solid #E0E0E0;
        }
        .gody-pagination ul li span{
            color: #828282;
            font-size: 16px;
            line-height: 24px;
            font-weight: 500px;
        }
        .gb-item-border {
            padding-bottom: 24px !important;
            box-shadow: inset 0px -1px 0px rgba(0, 0, 0, 0.1);
        }
        .gb-item-border:nth-last-child(-n+3) {

        }
        .gd-item {

        }
        .gd-item {
            border-right: 1px solid #E0E0E0;
        }
        .gd-item:nth-child(3n+3) {
            border-right: 1px solid #F4F4F4 !important;
        }
        /**/
        .list-menu .dropdown {
            position: relative;
            display: inline-block;
        }
        .z-8 {
            z-index: 8;
        }
        .list-menu .dropbtn {
            color: white;
            padding: 13px;
            border: 0;
            cursor: pointer;
            display: inline-block;
        }

        .capitalize-first:first-letter {
            text-transform: uppercase !important;
        }
        .fw-700 {
            font-weight: 700 !important;
        }
        .lh-120\% {
            line-height: 120% !important;
        }
        .lh-140\% {
            line-height: 140% !important;
        }
        .box-shadow-primary {
            box-shadow: inset 0px -2px 0px #FF8C01;
        }
        .box-shadow-02 {
            box-shadow: inset 0px -1px 0px rgba(0, 0, 0, 0.1);
        }
        .barr-black {
            border: 2px solid #333333;
        }

        .item-post {
            border-bottom: 0.5px solid #BDBDBD;
        }
        .item-post:last-child {
            border: 0.5px solid white;
        }
        .align-self {
            align-self: flex-end!important;
        }
        .align-items {
            align-items: center!important;
        }
        .fc-828282 {
            color: #828282;
        }
        .align-self-center {
            align-self: center!important;
        }

        input.focus-visible:focus-visible {
            border: 1px solid #ff8c00 !important;
            outline: 1px solid #ff8c00;
            border-radius: 5px;
        }

        input.focus-visible:focus {
            border: 1px solid #ff8c00 !important;
        }
        textarea.focus-visible:focus {
            border: 1px solid #ff8c00 !important;
        }

        @media  screen and (max-width: 768px) {
            .gody-pagination li.page-item:first-child {
                display: none !important;
            }
            .gody-pagination li.page-item:last-child {
                display: none !important;
            }
        }

        .slick-item {

        }
        .slick-item .g-item{
            width: 250px;
            margin-right: 15px;
        }
        .slick-prev {
            left: -50px;
        }
        .slick-next {
            right: -50px;
        }
        .slick-prev, .slick-next {
            font-size: 0;
            line-height: 0;
            position: absolute;
            top: 50%;
            display: block;
            width: 34px;
            height: 34px;
            padding: 0;
            -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
            cursor: pointer;
            color: transparent;
            border: none;
            outline: none;
            background: transparent;
        }
        .slick-item .slick-prev:before {
            display: inline-block;
            content: "\f104";
            border-radius: 50%;
            width: 34px;
            height: 34px;
            color: white;
            font: normal normal normal 14px/1 FontAwesome;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-size: 23px;
            font-weight: bold;
            text-align: center;
            transition: opacity .1s linear;
            margin-top: -6px;
            line-height: 34px;
            box-shadow: 0 2px 4px 0 rgb(0 0 0 / 30%);
            letter-spacing: 3px;
            cursor: pointer;
            background: #ff8c00;
        }
        .slick-item .slick-next:before {
            display: inline-block;
            content: "\f105";
            border-radius: 50%;
            width: 34px;
            height: 34px;
            color: white;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-size: 23px;
            font-weight: bold;
            text-align: center;
            transition: opacity .1s linear;
            margin-top: -6px;
            line-height: 34px;
            box-shadow: 0 2px 4px 0 rgb(0 0 0 / 30%);
            cursor: pointer;
            background: #ff8c00;
        }
        .item-border-top-first:first-child {
            border-top: 1px solid #e5e5e5;
        }

        /** scrollbar-vertical */
        .scrollbar-vertical-white::-webkit-scrollbar {

        }
        .scrollbar-vertical-white::-webkit-scrollbar {
            width: 3px;
            height: 4px;
        }
        .scrollbar-vertical-white::-webkit-scrollbar-track {
            background: white;
            box-shadow: inset 0 0 2px rgb(0 0 0 / 10%);
        }
        .scrollbar-vertical-white::-webkit-scrollbar-thumb {
            background: white;
            border: 0.5px solid white;
        }
        .horizontal-scrolling::-webkit-scrollbar{
            display: none;
        }
        /** scrollbar-vertical */
        .outline-0 {
            outline: 0;
        }
        .outline-none {
            outline: none !important;
        }
        .toggler-go-to-place:hover .Userstyle__UserDropDown {
            display: block !important;
        }
        a:hover {
            text-decoration: none !important;
        }
        input.outline-none:focus {
            outline: none !important;
        }
        input.invalid-focus-bottom:invalid:focus {
            border-bottom: 1px solid red !important;
        }
        input.invalid-focus:invalid:focus {
            border: 1px solid red !important;
        }
        textarea.invalid-focus:invalid:focus {
            border: 1px solid red !important;
        }
        /** img */
        ul#list-images {
            padding: 0;
            margin: 0;
        }
        ul#list-images li {
            width: 80px;
            height: 80px;
            display: inline-block;
            text-align: center;
            margin: 10px;
            cursor: pointer;
            position: relative;
            vertical-align: top;
        }
        #list-images li a {
            width: 100%;
            height: 100%;
            background: #fff;
            display: flex;
            flex-direction: column;
            border-radius: 4px;
            transition: border-color .2s ease-in-out;
            border: 1px dashed #1791f2;
        }
        #list-images .cl {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            border: none;
            background: #fafafa;
        }
        #list-images li span.title {
            margin-top: 10px;
            display: block;
            color: #666;
            font-size: 14px;
        }
        #list-images li a img {
            object-fit: cover;
            object-fit: cover;
            width: 100%;
            height: 100%;
            opacity: .8;
        }
        /** img */
        /** radio checked */
        .radio-primary {
            margin: 0.5rem;
        }
        .radio-primary input[type=radio] {
            position: absolute;
            opacity: 0;
        }
        .radio-primary input[type=radio] + .radio-label:before {
            content: "";
            background: #f4f4f4;
            border-radius: 100%;
            border: 1px solid #b4b4b4;
            display: inline-block;
            width: 1.4em;
            height: 1.4em;
            position: relative;
            top: -0.2em;
            margin-right: 1em;
            vertical-align: top;
            cursor: pointer;
            text-align: center;
            transition: all 250ms ease;
        }
        .radio-primary input[type=radio]:checked + .radio-label:before {
            background-color: #ff8c00;
            box-shadow: inset 0 0 0 4px #f4f4f4;
        }
        .radio-primary input[type=radio]:focus + .radio-label:before {
            outline: none;
            border-color: #3197ee;
        }
        .radio-primary input[type=radio]:disabled + .radio-label:before {
            box-shadow: inset 0 0 0 4px #f4f4f4;
            border-color: #b4b4b4;
            background: #b4b4b4;
        }
        .radio-primary input[type=radio] + .radio-label:empty:before {
            margin-right: 0;
        }
        .checkbox+.checkbox, .radio-primary+.radio {
            margin-top: 0px !important;
        }
        /** radio */

        .qu-hover--bg--darken:hover {
            background-color: rgba(0,0,0,0.03)!important;
        }
        .fw-700 p {
            font-weight: 700 !important;
        }
        .truncate {
            display: inline-block;
            width: 250px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .truncate + a {
            display: inline-block;
            vertical-align: top;
            margin-top: -1px;
        }
        .readMore .addText {
            display: none;
        }
        .sidebar{
            will-change: min-height;
        }


        .sidebar__inner{
            transform: translate(0, 0); /* For browsers don't support translate3d. */
            transform: translate3d(0, 0, 0);
            will-change: position, transform;
        }

        @media  screen and (max-width: 768px) {
            .xs\:fs-16_5 {
                font-size: 16.5px !important;
            }
        }
        .fs-16_5 {
            font-size: 16.5px !important;
        }
        .bg-color-red {
            border-color: red !important;
        }

        .box-shadow-primary {
            box-shadow: inset 0px -1px 0px #ff8c00;
        }

        .box-shadow-default {
            box-shadow: inset 0px -1px 0px rgb(0 0 0 / 10%);
        }

    </style>
    @else
    <style>
        html,body{
            font-family:'Montserrat',sans-serif
        }

        .ff-sans{
            font-family:'Montserrat',sans-serif!important
        }

        .ff-serif{
            font-family:'Lora',serif!important
        }

        .img-thumb-post .img-thumb-post-remove {
            opacity: 1 !important;
        }

        .quick-insert-container {
            opacity: 0;
            visibility: hidden;
        }

        .quick-insert-container.visible {
            opacity: 1;
            visibility: visible;
        }

        .quick-insert-container.open .floating-btn {
            transform: rotate(270deg) !important;
        }

        .quick-insert-helper button .title {
            transition: all .2s;
            opacity: 0;
            visibility: hidden;
            z-index: -1;
        }

        .quick-insert-helper button:hover .title {
            opacity: 1;
            visibility: visible;
            z-index: 0;
        }

        #travelPostContent div.placeholder:first-child:before {
            content: 'Nội dung bài viết ... (Click + để chèn hình ảnh, clip, fb, instagram ...)';
            color: #999;
            display: block;
            position: absolute;
        }

        #travelPostContent>div:first-child:empty {
            height: 32px;
        }

        #travelPostContent div.insert-embeds:empty:before {
            content: 'Dán link YouTube, Vimeo, Facebook hoặc Instagram và nhấn Enter';
            color: #999;
            display: block;
            height: 32px;
        }

        .quick-insert:hover:after {
            content: 'Chèn nhanh';
            font-size: 12px;
            white-space: nowrap;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            background: #ff8c00;
            color: #fff;
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            height: auto;
            line-height: 16px;
            transition: all .25s;
        }

        .ce-element--focused:not(:empty) {
            position: relative;
        }

        .ce-element--focused:not(:empty):after {
            content: '';
            height: 100%;
            border-right: 2px solid #ff8c00;
            display: block;
            position: absolute;
            top: 0;
            right: -10px;
        }

        .travel-post-content h2 {
            font-size: 20px;
            font-weight: bold;
            margin-top: 0;
            line-height: 32px;
        }

        .tag {
            display: inline-block;
        }

        #travelPostContent .img-thumb-post .img-thumb-post-remove {
            display: block !important;
        }
    </style>
    @endif
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

    <!--- socket io -->

    <!-- Facebook Pixel Code -->
    <!-- End Facebook Pixel Code -->
    <!-- Facebook Pixel Code -->
    <!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Google Tag Manager -->
    <!-- End Google Tag Manager -->
    <!-- Yandex.Metrika counter -->
    <!-- /Yandex.Metrika counter -->
</head>

<body class="dest-details " ng-app="MyApp" itemscope="" itemtype="http://schema.org/WebPage" @if ($agent->isMobile()) style="padding-top: 89px;" @endif>
<!-- Google Tag Manager (noscript) -->
<!-- End Google Tag Manager (noscript) -->

