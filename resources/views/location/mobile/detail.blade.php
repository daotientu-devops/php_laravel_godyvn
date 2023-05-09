@extends('layouts.default')
@section('content')
    <link rel="stylesheet" as="style" onload="this.onload=null;this.rel='stylesheet'" href="https://gody.vn/public/v6/css/desktop/home/non-critical-styles.css?v=1088">
    <link rel="stylesheet" href="https://gody.vn/public/v7/css/post-detail.css?v=1237">
    <style>
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
    </style>
    @if ($location->top_background_url)
        <div class="w-fit d-block ps-relative">
            <div style="width: 100%; height: 210px;">
                <img class="w-fit h-fit object-center object-cover d-block ps-absolute t0 r0 b0 l0" data-srcset="https://media.gody.vn//images/an-giang/rung-tram-tra-su/4-2018/6686704-20180414035805-an-giang-rung-tram-tra-su.jpg"
                     src="{{ env('FOLDER_UPLOAD') . $location->top_background_url }}" alt="">
            </div>
        </div>
    @endif
    <style>
        ul.menu-destination {
            scrollbar-width: auto;
        }
        ul.menu-destination {
            display: flex;
            overflow: scroll;
        }
        ul.menu-destination li{
            display: flex;
            align-items: center;
            height: 40px;
            line-height: 40px;
            text-align: center;
        }
        ul.menu-destination li a{}

        ul.menu-destination::-webkit-scrollbar {
            width: 3px;
            height: 4px;
        }
        ul.menu-destination::-webkit-scrollbar-track {
            background: white;
            box-shadow: inset 0 0 2px rgb(0 0 0 / 10%);
        }
        ul.menu-destination::-webkit-scrollbar-thumb {
            background: #ff8c00;
            border: 0.5px solid white;
        }
    </style>
    <div class="h-44">
        <ul class="w-fit p-0 m-0 menu-destination h-50" id="menu-destination-data">
            <li>
                <a href="{{ url('diem-den' . $location->share_url) }}" class="fs-14 fw-600 ml-10 ws-nowrap px-12{{ $destinations === null && $lastUri !== 'hinh-anh' ? ' fc-primary bb bc-primary' : '' }}" style="color: #828282;padding-top: 5px;">Giới thiệu</a>
            </li>
            <li>
                <a href="{{ url('diem-den' . $location->share_url . '/diem-du-lich') }}" class="fs-14 fw-600 ml-10 ws-nowrap px-12{{ $destinations !== null ? ' fc-primary bb bc-primary' : '' }}" style="color: #828282;padding-top: 5px;">Điểm du lịch</a>
            </li>
            <li>
                <a href="{{ url('diem-den' . $location->share_url . '/hinh-anh') }}" class="fs-14 fw-600 ml-10 ws-nowrap px-12{{ $lastUri === 'hinh-anh' ? ' fc-primary bb bc-primary' : '' }}" style="color: #828282;padding-top: 5px;">Hình ảnh</a>
            </li>
        </ul>
    </div>
    <div class="w-fit d-block p-20 bg-white">
        <div class="w-fit d-block block-content">
            @if (!empty($location->content))
                <?php echo html_entity_decode($location->content) ?>
            @endif
        </div>
@endsection()
