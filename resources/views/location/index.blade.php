@extends('layouts.default')
@section('content')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<!--- socket io -->
<script src="https://gody.vn/public/v3/js/socket.io-1.4.5.js"></script>
<script type="text/javascript">
    var socket_comment  = io.connect('https://realtime.timvere.vn');
</script>
<div class="w-fit hide p-0 m-0 h-60 lh-60" id="position-fixed-top">
    <div class="w-fit d-flex" style="justify-content: center!important;position: fixed;top: 57px;background: white;z-index: 5;">
        <div class="w-fit d-flex fw-wrap top-destination-ver02" style="justify-content: center!important;">
            <div class="mr-35 h:fc-primary fc-fourteenth c-pointer"  data-type="range-viet-nam">
                <span class="fs-18 fw-700 tt-uppercase">Việt Nam</span>
            </div>
            <div class="mr-35 h:fc-primary fc-fourteenth c-pointer" data-type="data-euro">
                <span class="fs-18 fw-700 tt-uppercase">Châu Âu</span>
            </div>
            <div class="mr-35 h:fc-primary fc-fourteenth c-pointer" data-type="data-americas">
                <span class="fs-18 fw-700 tt-uppercase">Châu Mỹ</span>
            </div>
            <div class="mr-35 h:fc-primary fc-fourteenth c-pointer" data-type="data-afirca">
                <span class="fs-18 fw-700 tt-uppercase">Châu Phi</span>
            </div>
            <div class="mr-35 h:fc-primary fc-fourteenth c-pointer" data-type="data-asian">
                <span class="fs-18 fw-700 tt-uppercase">Châu Á</span>
            </div>
            <div class="mr-35 h:fc-primary fc-fourteenth c-pointer" data-type="data-australia">
                <span class="fs-18 fw-700 tt-uppercase">Châu Đại Dương</span>
            </div>
        </div>
    </div>
</div>

<div class="w-fit d-block mb-40">
    <div class="w-fit d-block ps-relative">
        <img
                data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2021/2/19/nguyenkhanhvukhoa6536/7f16da46ae8675051d4939b6b66d6fbe.jpg?v=2"
                data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2021/2/19/nguyenkhanhvukhoa6536/7f16da46ae8675051d4939b6b66d6fbe.jpg?v=2"
                height="380px"
                class="lazy-load object-cover object-center w-fit"
        />
        <img
                data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png"
                data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png"
                class="lazy-load"
                height="380px"
                style="position: absolute; width: 100%; left: 0; "
        />
        <div class="w-fit d-block ps-absolute b0 h-200">
            <div class="container">
                <div class="navbar-header h-42 mr-5">
                    <a href="/" class="logo"></a>
                </div>

                <div class="w-fit d-block p-0 m-0">
                    <div class="w-fit d-flex pt-25 pb-10" style="justify-content: center!important;">
                        <div class="w-fit d-flex fw-wrap top-destination-ver02" style="justify-content: center!important;">
                            <div class="mr-35 mb-25 h:fc-primary fc-white c-pointer"  data-type="range-viet-nam">
                                <span class="fs-18 fw-700 tt-uppercase">Việt Nam</span>
                            </div>
                            <div class="mr-35 mb-25 h:fc-primary fc-white c-pointer" data-type="data-euro">
                                <span class="fs-18 fw-700 tt-uppercase">Châu Âu</span>
                            </div>
                            <div class="mr-35 mb-25 h:fc-primary fc-white c-pointer" data-type="data-americas">
                                <span class="fs-18 fw-700 tt-uppercase">Châu Mỹ</span>
                            </div>
                            <div class="mr-35 mb-25 h:fc-primary fc-white c-pointer" data-type="data-afirca">
                                <span class="fs-18 fw-700 tt-uppercase">Châu Phi</span>
                            </div>
                            <div class="mr-35 mb-25 h:fc-primary fc-white c-pointer" data-type="data-asian">
                                <span class="fs-18 fw-700 tt-uppercase">Châu Á</span>
                            </div>
                            <div class="mr-35 mb-25 h:fc-primary fc-white c-pointer" data-type="data-australia">
                                <span class="fs-18 fw-700 tt-uppercase">Châu Đại Dương</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<section class="p-0 m-0">
    <div class="container">
        <div class="d-block w-fit pb-10" style="border-bottom: 2px solid rgba(0,0,0,.2);">
            <a class="fc-primary fs-18 fw-700 tt-uppercase">Việt Nam</a>
        </div>
        <div class="w-fit d-block item-range" id="range-viet-nam">
            <div class="w-fit d-flex jc-space-between" style="--column:4; --gutter: 10px;">
                <div class="w-fit d-block mb-20 pt-20">
                    <div class="col-md-4 p-0 m-0">
                        <ul class="pl-10">
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/an-giang" class="fc-fourteenth fs-18 lh-21">
                                    An Giang                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/ben-tre" class="fc-fourteenth fs-18 lh-21">
                                    Bến Tre                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/bac-giang" class="fc-fourteenth fs-18 lh-21">
                                    Bắc Giang                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/binh-phuoc" class="fc-fourteenth fs-18 lh-21">
                                    Bình Phước                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/binh-duong" class="fc-fourteenth fs-18 lh-21">
                                    Bình Dương                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/dak-lak" class="fc-fourteenth fs-18 lh-21">
                                    Buôn Ma Thuột - Đắk Lắk                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/bac-ninh" class="fc-fourteenth fs-18 lh-21">
                                    Bắc Ninh                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/bac-lieu" class="fc-fourteenth fs-18 lh-21">
                                    Bạc Liêu                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/bac-kan" class="fc-fourteenth fs-18 lh-21">
                                    Bắc Kạn                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/ca-mau" class="fc-fourteenth fs-18 lh-21">
                                    Cà Mau                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/can-tho" class="fc-fourteenth fs-18 lh-21">
                                    Cần Thơ                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/cao-bang" class="fc-fourteenth fs-18 lh-21">
                                    Cao Bằng                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/ba-ria-vung-tau" class="fc-fourteenth fs-18 lh-21">
                                    Côn Đảo - Vũng Tàu                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/dong-nai" class="fc-fourteenth fs-18 lh-21">
                                    Đồng Nai                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/dien-bien" class="fc-fourteenth fs-18 lh-21">
                                    Điện Biên                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/dak-nong" class="fc-fourteenth fs-18 lh-21">
                                    Đắk Nông                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/da-nang" class="fc-fourteenth fs-18 lh-21">
                                    Đà Nẵng                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/lam-dong" class="fc-fourteenth fs-18 lh-21">
                                    Đà Lạt - Lâm Đồng                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/dong-thap" class="fc-fourteenth fs-18 lh-21">
                                    Đồng Tháp                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/hai-phong" class="fc-fourteenth fs-18 lh-21">
                                    Hải Phòng                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/hau-giang" class="fc-fourteenth fs-18 lh-21">
                                    Hậu Giang                            </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 p-0 m-0">
                        <ul class="pl-10">
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/hau-giang" class="fc-fourteenth fs-18 lh-21">
                                    Hậu Giang                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/ha-noi" class="fc-fourteenth fs-18 lh-21">
                                    Hà Nội                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/ha-nam" class="fc-fourteenth fs-18 lh-21">
                                    Hà Nam                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/quang-ninh" class="fc-fourteenth fs-18 lh-21">
                                    Hạ Long - Quảng Ninh                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/hai-duong" class="fc-fourteenth fs-18 lh-21">
                                    Hải Dương                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/ha-giang" class="fc-fourteenth fs-18 lh-21">
                                    Hà Giang                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/ha-tinh" class="fc-fourteenth fs-18 lh-21">
                                    Hà Tĩnh                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/hung-yen" class="fc-fourteenth fs-18 lh-21">
                                    Hưng Yên                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/quang-nam" class="fc-fourteenth fs-18 lh-21">
                                    Hội An - Quảng Nam                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/hoa-binh" class="fc-fourteenth fs-18 lh-21">
                                    Hòa Bình                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/ho-chi-minh" class="fc-fourteenth fs-18 lh-21">
                                    Hồ Chí Minh                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/kon-tum" class="fc-fourteenth fs-18 lh-21">
                                    Kon Tum                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/lai-chau" class="fc-fourteenth fs-18 lh-21">
                                    Lai Châu                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/long-an" class="fc-fourteenth fs-18 lh-21">
                                    Long An                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/lang-son" class="fc-fourteenth fs-18 lh-21">
                                    Lạng Sơn                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/son-la" class="fc-fourteenth fs-18 lh-21">
                                    Mộc Châu - Sơn La                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/nghe-an" class="fc-fourteenth fs-18 lh-21">
                                    Nghệ An                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/nam-dinh" class="fc-fourteenth fs-18 lh-21">
                                    Nam Định                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/khanh-hoa" class="fc-fourteenth fs-18 lh-21">
                                    Nha Trang - Khánh Hòa                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/ninh-binh" class="fc-fourteenth fs-18 lh-21">
                                    Ninh Bình                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/phu-tho" class="fc-fourteenth fs-18 lh-21">
                                    Phú Thọ                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/phu-yen" class="fc-fourteenth fs-18 lh-21">
                                    Phú Yên                            </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 p-0 m-0">
                        <ul class="pl-10">
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/phu-yen" class="fc-fourteenth fs-18 lh-21">
                                    Phú Yên                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/gia-lai" class="fc-fourteenth fs-18 lh-21">
                                    Pleiku - Gia Lai                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/kien-giang" class="fc-fourteenth fs-18 lh-21">
                                    Phú Quốc - Kiên Giang                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/ninh-thuan" class="fc-fourteenth fs-18 lh-21">
                                    Phan Rang - Ninh Thuận                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/binh-thuan" class="fc-fourteenth fs-18 lh-21">
                                    Phan Thiết - Bình Thuận                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/quang-ngai" class="fc-fourteenth fs-18 lh-21">
                                    Quảng Ngãi                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/binh-dinh" class="fc-fourteenth fs-18 lh-21">
                                    Quy Nhơn - Bình Định                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/quang-tri" class="fc-fourteenth fs-18 lh-21">
                                    Quảng Trị                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/quang-binh" class="fc-fourteenth fs-18 lh-21">
                                    Quảng Bình                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/soc-trang" class="fc-fourteenth fs-18 lh-21">
                                    Sóc Trăng                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/lao-cai" class="fc-fourteenth fs-18 lh-21">
                                    Sapa - Lào Cai                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/thai-binh" class="fc-fourteenth fs-18 lh-21">
                                    Thái Bình                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/thai-nguyen" class="fc-fourteenth fs-18 lh-21">
                                    Thái Nguyên                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/thanh-hoa" class="fc-fourteenth fs-18 lh-21">
                                    Thanh Hóa                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/tay-ninh" class="fc-fourteenth fs-18 lh-21">
                                    Tây Ninh                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/tien-giang" class="fc-fourteenth fs-18 lh-21">
                                    Tiền Giang                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/tra-vinh" class="fc-fourteenth fs-18 lh-21">
                                    Trà Vinh                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/tuyen-quang" class="fc-fourteenth fs-18 lh-21">
                                    Tuyên Quang                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/thua-thien-hue" class="fc-fourteenth fs-18 lh-21">
                                    Thừa Thiên Huế                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/vinh-long" class="fc-fourteenth fs-18 lh-21">
                                    Vĩnh Long                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/vinh-phuc" class="fc-fourteenth fs-18 lh-21">
                                    Vĩnh Phúc                            </a>
                            </li>
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/yen-bai" class="fc-fourteenth fs-18 lh-21">
                                    Yên Bái                            </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 p-0 m-0">
                        <ul class="pl-10">
                            <li class="w-fit mb-20">
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/yen-bai" class="fc-fourteenth fs-18 lh-21">
                                    Yên Bái                            </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-0 m-0">
    <div class="container mt-40">
        <div class="d-block w-fit pb-10" style="border-bottom: 2px solid rgba(0,0,0,.2);">
            <a class="fc-primary fs-18 fw-700 tt-uppercase">Châu Á</a>
        </div>
        <!-- -->
        <div class="w-fit d-block pt-40 item-range-data" id="data-asian">
            <div class="w-fit d-flex jc-space-between" style="--column:3; --gutter: 10px;">
                <div class="col-md-4 p-0 m-0">
                    <ul class="pl-15">
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/afghanistan" class="fc-fourteenth fs-18 lh-21">
                                Afghanistan                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/armenia" class="fc-fourteenth fs-18 lh-21">
                                Armenia (Cộng hoà Armenia)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/bangladesh" class="fc-fourteenth fs-18 lh-21">
                                Bangladesh                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/bhutan" class="fc-fourteenth fs-18 lh-21">
                                Bhutan (Bhutan)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/brunei" class="fc-fourteenth fs-18 lh-21">
                                Brunei                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/campuchia" class="fc-fourteenth fs-18 lh-21">
                                Cambodia ( Campuchia )                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/hong-kong" class="fc-fourteenth fs-18 lh-21">
                                HongKong ( Hồng Kông )                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/india-an-do" class="fc-fourteenth fs-18 lh-21">
                                India (Ấn Độ)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/indonesia" class="fc-fourteenth fs-18 lh-21">
                                indonesia                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/iran" class="fc-fourteenth fs-18 lh-21">
                                Iran                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/iraq" class="fc-fourteenth fs-18 lh-21">
                                Iraq                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/israel" class="fc-fourteenth fs-18 lh-21">
                                Israel (Quốc gia Israel)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/Japan" class="fc-fourteenth fs-18 lh-21">
                                Japan ( Nhật bản )                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/jordan" class="fc-fourteenth fs-18 lh-21">
                                Jordan (Vương quốc Jordan thuộc Hashim)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/kazakhstan" class="fc-fourteenth fs-18 lh-21">
                                Kazakhstan (Cộng hoà Kazakhstan)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/kyrgyzstan" class="fc-fourteenth fs-18 lh-21">
                                Kyrgyzstan (Cộng hoà Kyrgyzstan)                        </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 p-0 m-0">
                    <ul class="pl-15">
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/kyrgyzstan" class="fc-fourteenth fs-18 lh-21">
                                Kyrgyzstan (Cộng hoà Kyrgyzstan)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/lao" class="fc-fourteenth fs-18 lh-21">
                                Lào                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/macau" class="fc-fourteenth fs-18 lh-21">
                                Macau (Ma cao)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/malaysia" class="fc-fourteenth fs-18 lh-21">
                                Malaysia                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/maldives" class="fc-fourteenth fs-18 lh-21">
                                Maldives                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/maldives" class="fc-fourteenth fs-18 lh-21">
                                Maldives (Cộng hoà Maldives)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/mongolia" class="fc-fourteenth fs-18 lh-21">
                                Mongolia (Mông Cổ)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/myanmar" class="fc-fourteenth fs-18 lh-21">
                                myanmar                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/nepal" class="fc-fourteenth fs-18 lh-21">
                                Nepal                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/north-korea-trieu-tien" class="fc-fourteenth fs-18 lh-21">
                                North Korea (Triều Tiên)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/oman" class="fc-fourteenth fs-18 lh-21">
                                Oman (Vương quốc Hồi giáo Oman)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/pakistan" class="fc-fourteenth fs-18 lh-21">
                                Pakistan                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/palestine" class="fc-fourteenth fs-18 lh-21">
                                Palestine                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/philippines" class="fc-fourteenth fs-18 lh-21">
                                Philippines                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/qatar" class="fc-fourteenth fs-18 lh-21">
                                Qatar (Quốc gia Qatar)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/saudi-arabia" class="fc-fourteenth fs-18 lh-21">
                                Saudi Arabia                        </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 p-0 m-0">
                    <ul class="pl-15">
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/saudi-arabia" class="fc-fourteenth fs-18 lh-21">
                                Saudi Arabia                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/singapore" class="fc-fourteenth fs-18 lh-21">
                                Singapore                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/south-korea" class="fc-fourteenth fs-18 lh-21">
                                South Korea ( Hàn quốc )                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/sri-lanka" class="fc-fourteenth fs-18 lh-21">
                                Sri Lanka                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/syria" class="fc-fourteenth fs-18 lh-21">
                                Syria                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/taiwan" class="fc-fourteenth fs-18 lh-21">
                                Taiwan ( Đài loan )                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/tajikistan" class="fc-fourteenth fs-18 lh-21">
                                Tajikistan                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/tay-tang" class="fc-fourteenth fs-18 lh-21">
                                Tibet (Tây Tạng)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/thailand" class="fc-fourteenth fs-18 lh-21">
                                Thailand ( Thái lan )                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/trung-quoc" class="fc-fourteenth fs-18 lh-21">
                                China (Trung Quốc)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/turkey" class="fc-fourteenth fs-18 lh-21">
                                Turkey (Thổ Nhĩ Kỳ)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/united-arab-emirates" class="fc-fourteenth fs-18 lh-21">
                                United Arab Emirates                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/uzbekistan" class="fc-fourteenth fs-18 lh-21">
                                Uzbekistan                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/viet-nam" class="fc-fourteenth fs-18 lh-21">
                                Việt nam                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-a/yemen" class="fc-fourteenth fs-18 lh-21">
                                Yemen                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- -->

    </div>
</section>

<section class="p-0 m-0">
    <div class="container mt-40">
        <div class="d-block w-fit pb-10" style="border-bottom: 2px solid rgba(0,0,0,.2);">
            <a class="fc-primary fs-18 fw-700 tt-uppercase">Châu Âu</a>
        </div>
        <!-- -->
        <div class="w-fit d-block pt-40 item-range-data" id="data-euro">
            <div class="w-fit d-flex jc-space-between" style="--column:3; --gutter: 10px;">
                <div class="col-md-4 p-0 m-0">
                    <ul class="pl-15">
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/albania" class="fc-fourteenth fs-18 lh-21">
                                Albania                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/andorra" class="fc-fourteenth fs-18 lh-21">
                                Andorra                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/ao" class="fc-fourteenth fs-18 lh-21">
                                Austria (Áo)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/azerbaijan" class="fc-fourteenth fs-18 lh-21">
                                Azerbaijan (Cộng hoà Azerbaijan)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/belarus" class="fc-fourteenth fs-18 lh-21">
                                Belarus (Cộng hoà Belarus)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/belgium" class="fc-fourteenth fs-18 lh-21">
                                Belgium (Bỉ)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/bosnia-and-herzegovina" class="fc-fourteenth fs-18 lh-21">
                                Bosnia and Herzegovina (Liên bang Bosnia và Herzegovina)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/bulgaria" class="fc-fourteenth fs-18 lh-21">
                                Bulgaria (Bungari)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/croatia" class="fc-fourteenth fs-18 lh-21">
                                Croatia                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/cyprus" class="fc-fourteenth fs-18 lh-21">
                                Cyprus (Đảo Síp)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/czech-republic" class="fc-fourteenth fs-18 lh-21">
                                Czech Republic (Cộng hoà Séc)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/Denmark" class="fc-fourteenth fs-18 lh-21">
                                Denmark (Đan Mạch)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/estonia" class="fc-fourteenth fs-18 lh-21">
                                Estonia (Cộng hoà Estonia)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/finland" class="fc-fourteenth fs-18 lh-21">
                                Finland (Phần Lan)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/france-phap" class="fc-fourteenth fs-18 lh-21">
                                France (Pháp)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/georgia" class="fc-fourteenth fs-18 lh-21">
                                Georgia                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/germany-duc" class="fc-fourteenth fs-18 lh-21">
                                Germany (Đức)                        </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 p-0 m-0">
                    <ul class="pl-15">
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/germany-duc" class="fc-fourteenth fs-18 lh-21">
                                Germany (Đức)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/hungary" class="fc-fourteenth fs-18 lh-21">
                                Hungary (Hungari)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/hy-lap" class="fc-fourteenth fs-18 lh-21">
                                Greece (Hy Lạp)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/iceland" class="fc-fourteenth fs-18 lh-21">
                                Iceland                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/ireland" class="fc-fourteenth fs-18 lh-21">
                                Ireland                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/italia-y" class="fc-fourteenth fs-18 lh-21">
                                Italia (Ý)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/kosovo" class="fc-fourteenth fs-18 lh-21">
                                Kosovo                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/latvia" class="fc-fourteenth fs-18 lh-21">
                                Latvia                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/liechtenstein" class="fc-fourteenth fs-18 lh-21">
                                Liechtenstein                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/lithuania" class="fc-fourteenth fs-18 lh-21">
                                Lithuania                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/luxembourg" class="fc-fourteenth fs-18 lh-21">
                                Luxembourg                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/macedonia" class="fc-fourteenth fs-18 lh-21">
                                Macedonia (FYROM)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/malta" class="fc-fourteenth fs-18 lh-21">
                                Malta                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/moldova" class="fc-fourteenth fs-18 lh-21">
                                Moldova                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/monaco" class="fc-fourteenth fs-18 lh-21">
                                Monaco                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/montenegro" class="fc-fourteenth fs-18 lh-21">
                                Montenegro                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/netherlands" class="fc-fourteenth fs-18 lh-21">
                                Netherlands (Hà Lan)                        </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 p-0 m-0">
                    <ul class="pl-15">
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/netherlands" class="fc-fourteenth fs-18 lh-21">
                                Netherlands (Hà Lan)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/norway" class="fc-fourteenth fs-18 lh-21">
                                Norway (Nauy)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/poland" class="fc-fourteenth fs-18 lh-21">
                                Poland (Ba Lan)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/portugal" class="fc-fourteenth fs-18 lh-21">
                                Portugal (Bồ Đào Nha)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/romania" class="fc-fourteenth fs-18 lh-21">
                                Romania (Romani)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/russia" class="fc-fourteenth fs-18 lh-21">
                                Russia (Liên bang Nga)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/san-marino" class="fc-fourteenth fs-18 lh-21">
                                San Marino                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/serbia" class="fc-fourteenth fs-18 lh-21">
                                Serbia                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/slovakia" class="fc-fourteenth fs-18 lh-21">
                                Slovakia                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/slovenia" class="fc-fourteenth fs-18 lh-21">
                                Slovenia                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/spain-tay-ban-nha" class="fc-fourteenth fs-18 lh-21">
                                Spain (Tây Ban Nha)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/sweden" class="fc-fourteenth fs-18 lh-21">
                                Sweden                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/switzerland" class="fc-fourteenth fs-18 lh-21">
                                Switzerland (Thuỵ Sỹ)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/thuy-si" class="fc-fourteenth fs-18 lh-21">
                                Switzerland (Thụy Sĩ)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/Ukraine" class="fc-fourteenth fs-18 lh-21">
                                Ukraine (Ukraina)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/united-kingdom" class="fc-fourteenth fs-18 lh-21">
                                United Kingdom (UK) (Anh Quốc)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-au/united-kingdom-vuong-quoc-anh" class="fc-fourteenth fs-18 lh-21">
                                United Kingdom (Vương Quốc Anh)                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- -->
    </div>
</section>

<section class="p-0 m-0">
    <div class="container mt-40">
        <div class="d-block w-fit pb-10" style="border-bottom: 2px solid rgba(0,0,0,.2);">
            <a class="fc-primary fs-18 fw-700 tt-uppercase">Châu Mỹ</a>
        </div>
        <!-- -->
        <div class="w-fit d-block pt-40 item-range-data" id="data-americas">
            <div class="w-fit d-flex jc-space-between" style="--column:3; --gutter: 10px;">
                <div class="col-md-4 p-0 m-0">
                    <ul class="pl-15">
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/anguilla" class="fc-fourteenth fs-18 lh-21">
                                Anguilla                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/antigua-va-barbuda" class="fc-fourteenth fs-18 lh-21">
                                Antigua and Barbuda (Antigua và Barbuda)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/argentina" class="fc-fourteenth fs-18 lh-21">
                                Argentina                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/aruba" class="fc-fourteenth fs-18 lh-21">
                                Aruba                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/bahamas" class="fc-fourteenth fs-18 lh-21">
                                Bahamas                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/barbados" class="fc-fourteenth fs-18 lh-21">
                                Barbados                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/belize" class="fc-fourteenth fs-18 lh-21">
                                Belize                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/bermuda" class="fc-fourteenth fs-18 lh-21">
                                Bermuda                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/bolivia" class="fc-fourteenth fs-18 lh-21">
                                Bolivia                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/brasil" class="fc-fourteenth fs-18 lh-21">
                                Brasil                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/canada" class="fc-fourteenth fs-18 lh-21">
                                Canada                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/chile" class="fc-fourteenth fs-18 lh-21">
                                Chile                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/colombia" class="fc-fourteenth fs-18 lh-21">
                                Colombia                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/costa-rica" class="fc-fourteenth fs-18 lh-21">
                                Costa Rica                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/cuba" class="fc-fourteenth fs-18 lh-21">
                                Cuba                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/cura%C3%A7ao" class="fc-fourteenth fs-18 lh-21">
                                Curaçao (Lãnh thổ Curaçao)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/dominicana" class="fc-fourteenth fs-18 lh-21">
                                Dominicana (Cộng hoà Dominicana)                        </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 p-0 m-0">
                    <ul class="pl-15">
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/dominicana" class="fc-fourteenth fs-18 lh-21">
                                Dominicana (Cộng hoà Dominicana)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/ecuador" class="fc-fourteenth fs-18 lh-21">
                                Ecuador                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/el-salvador" class="fc-fourteenth fs-18 lh-21">
                                El Salvador                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/grenada" class="fc-fourteenth fs-18 lh-21">
                                Grenada                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/guadeloupe" class="fc-fourteenth fs-18 lh-21">
                                Guadeloupe                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/guatemala" class="fc-fourteenth fs-18 lh-21">
                                Guatemala                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/guyana" class="fc-fourteenth fs-18 lh-21">
                                Guyana (Cộng hòa Hợp tác Guyana)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/guyane" class="fc-fourteenth fs-18 lh-21">
                                Guyane                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/haiti" class="fc-fourteenth fs-18 lh-21">
                                Haiti                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/honduras" class="fc-fourteenth fs-18 lh-21">
                                Honduras (Cộng hòa Honduras)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/jamaica" class="fc-fourteenth fs-18 lh-21">
                                Jamaica                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/martinique" class="fc-fourteenth fs-18 lh-21">
                                Martinique                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/mexico" class="fc-fourteenth fs-18 lh-21">
                                Mexico                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/montserrat" class="fc-fourteenth fs-18 lh-21">
                                Montserrat                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/nicaragua" class="fc-fourteenth fs-18 lh-21">
                                Nicaragua                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/panama" class="fc-fourteenth fs-18 lh-21">
                                Panama                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/paraguay" class="fc-fourteenth fs-18 lh-21">
                                Paraguay (Cộng hòa Paraguay)                        </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 p-0 m-0">
                    <ul class="pl-15">
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/paraguay" class="fc-fourteenth fs-18 lh-21">
                                Paraguay (Cộng hòa Paraguay)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/peru" class="fc-fourteenth fs-18 lh-21">
                                Peru                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/puerto-rico" class="fc-fourteenth fs-18 lh-21">
                                Puerto Rico                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/quan-dao-cayman" class="fc-fourteenth fs-18 lh-21">
                                Cayman Island (Quần đảo Cayman)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/quan-dao-falkland" class="fc-fourteenth fs-18 lh-21">
                                Falkland Islands (Quần đảo Falkland)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/quan-dao-turks-va-caicos" class="fc-fourteenth fs-18 lh-21">
                                Turks and Caicos Islands (Quần đảo Turks và Caicos)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/quan-dao-virgin" class="fc-fourteenth fs-18 lh-21">
                                Virgin Island (Quần đảo Virgin)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/saint-kitts-va-nevis" class="fc-fourteenth fs-18 lh-21">
                                Saint Kitts and Nevis (Saint Kitts và Nevis)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/saint-lucia" class="fc-fourteenth fs-18 lh-21">
                                Saint Lucia                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/saint-vincent-va-the-grenadines" class="fc-fourteenth fs-18 lh-21">
                                Saint Vincent and The Grenadines (Saint Vincent và The Grenadines)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/sint-maarten" class="fc-fourteenth fs-18 lh-21">
                                Sint Maarten                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/suriname" class="fc-fourteenth fs-18 lh-21">
                                Suriname (Cộng hòa Suriname)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/trinidad-va-tobago" class="fc-fourteenth fs-18 lh-21">
                                Trinidad and Tobago (Cộng hòa Trinidad và Tobago)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/united-states-of-america-my" class="fc-fourteenth fs-18 lh-21">
                                United States of America (Mỹ)                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/uruguay" class="fc-fourteenth fs-18 lh-21">
                                Uruguay                        </a>
                        </li>
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-my/venezuela" class="fc-fourteenth fs-18 lh-21">
                                Venezuela                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- -->
    </div>
</section>

<section class="p-0 m-0">
    <div class="container mt-40">
        <div class="d-block w-fit pb-10" style="border-bottom: 2px solid rgba(0,0,0,.2);">
            <a class="fc-primary fs-18 fw-700 tt-uppercase">Châu Đại Dương</a>
        </div>
        <!-- -->
        <div class="w-fit d-block pt-40 item-range-data" id="data-australia">
            <div class="w-fit d-flex jc-space-between" style="--column:3; --gutter: 10px;">
                <div class="col-md-4 p-0 m-0">
                    <ul class="pl-15">
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-dai-duong/uc" class="fc-fourteenth fs-18 lh-21">
                                Australia (úc)                        </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 p-0 m-0">
                    <ul class="pl-15">
                    </ul>
                </div>
                <div class="col-md-4 p-0 m-0">
                    <ul class="pl-15">
                    </ul>
                </div>
            </div>
        </div>
        <!-- -->
    </div>
</section>

<section class="p-0 m-0">
    <div class="container mt-40 mb-50">
        <div class="d-block w-fit pb-10" style="border-bottom: 2px solid rgba(0,0,0,.2);">
            <a class="fc-primary fs-18 fw-700 tt-uppercase">Châu Phi</a>
        </div>
        <!-- -->
        <div class="w-fit d-block pt-40 item-range-data" id="data-afirca">
            <div class="w-fit d-flex jc-space-between" style="--column:3; --gutter: 10px;">
                <div class="col-md-4 p-0 m-0">
                    <ul class="pl-10">
                        <li class="w-fit mb-20">
                            <a href="{{url('diem-den')}}/chau-phi/ai-cap" class="fc-fourteenth fs-18 lh-21">
                                Ai Cập                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 p-0 m-0">
                    <ul class="pl-10">
                    </ul>
                </div>
                <div class="col-md-4 p-0 m-0">
                    <ul class="pl-10">
                    </ul>
                </div>
            </div>
        </div>
        <!-- -->
    </div>
</section>

<section class="p-0 m-0">
    <div class="container">
        <div class="w-fit d-block p-0 m-0 ta-center pt-10 pb-20">
            <h2 class="fc-fourteenth fs-36 lh-38 fw-700">Top 10 điểm du lịch trong nước</h2>
        </div>
        <div class="w-fit d-block mb-30">
            <div class="w-fit d-flex fw-wrap x-jc-space-between" style="--column:5; --gutter: 100px;">
                <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-a/viet-nam/ho-chi-minh/pho-tay">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn//images/ho-chi-minh/pho-tay/10-2016/20161024085927-pho-tay-gody (9).jpg"
                                        data-src="https://media.gody.vn//images/ho-chi-minh/pho-tay/10-2016/20161024085927-pho-tay-gody (9).jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-a/viet-nam/ho-chi-minh/pho-tay" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            Phố T&acirc;y B&ugrave;i Viện
                        </a>
                    </div>                </div>
                <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-a/viet-nam/phu-yen/nha-tho-mang-lang">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn//images/phu-yen/nha-tho-mang-lang/2-2018/28727418-20180226043010-phu-yen-nha-tho-mang-lang.jpg"
                                        data-src="https://media.gody.vn//images/phu-yen/nha-tho-mang-lang/2-2018/28727418-20180226043010-phu-yen-nha-tho-mang-lang.jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-a/viet-nam/phu-yen/nha-tho-mang-lang" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            Nh&agrave; thờ Mằng Lăng
                        </a>
                    </div>                </div>
                <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-a/viet-nam/phu-yen/dam-o-loan">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn//images/phu-yen/dam-o-loan/2-2018/98645889-20180226034435-phu-yen-dam-o-loan.jpg"
                                        data-src="https://media.gody.vn//images/phu-yen/dam-o-loan/2-2018/98645889-20180226034435-phu-yen-dam-o-loan.jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-a/viet-nam/phu-yen/dam-o-loan" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            Đầm &Ocirc; Loan
                        </a>
                    </div>                </div>
                <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-a/viet-nam/phu-yen/deo-ca-phu-yen">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn/images/phu-yen/deo-ca-phu-yen/02058662b6f05dde1940cee96e801fafcb899b20.jpg"
                                        data-src="https://media.gody.vn/images/phu-yen/deo-ca-phu-yen/02058662b6f05dde1940cee96e801fafcb899b20.jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-a/viet-nam/phu-yen/deo-ca-phu-yen" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            Đ&egrave;o Cả (Ph&uacute; Y&ecirc;n)
                        </a>
                    </div>                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-0 m-0">
    <div class="container">
        <div class="w-fit d-block p-0 m-0 ta-center pt-10 pb-20">
            <h2 class="fc-fourteenth fs-36 lh-38 fw-700">Top 10 điểm du lịch nước ngoài</h2>
        </div>
        <div class="w-fit d-block mb-30">
            <div class="w-fit d-flex fw-wrap x-jc-space-between" style="--column:5; --gutter: 100px;">
                <div class="fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-a/campuchia">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn/images/siem-reap/quan-the-den-roluos-roluos-temples/da66cb2126ac971ca8c1bd43d3a59d75c073d899.jpg"
                                        data-src="https://media.gody.vn/images/siem-reap/quan-the-den-roluos-roluos-temples/da66cb2126ac971ca8c1bd43d3a59d75c073d899.jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-a/campuchia" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            Cambodia ( Campuchia )
                        </a>
                    </div>                </div>
                <div class="fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-a/hong-kong">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn//images/hong-kong/victoria-peak/11-2016/20161117064823-victoria-peak-hong-kong-gody (12).jpg"
                                        data-src="https://media.gody.vn//images/hong-kong/victoria-peak/11-2016/20161117064823-victoria-peak-hong-kong-gody (12).jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-a/hong-kong" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            HongKong ( Hồng K&ocirc;ng )
                        </a>
                    </div>                </div>
                <div class="fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-a/trung-quoc">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn/images/thanh-do/pho-sifang/8fb21ed3fb6ed3dae4d7f0b99c52320758944eff.jpeg"
                                        data-src="https://media.gody.vn/images/thanh-do/pho-sifang/8fb21ed3fb6ed3dae4d7f0b99c52320758944eff.jpeg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-a/trung-quoc" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            China (Trung Quốc)
                        </a>
                    </div>                </div>
                <div class="fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-au/italia-y">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn/images/naples/bao-tang-khao-co-quoc-gia-naples-museo-archeologico-nazionale//eec8f775e7d9ebad6aaab188905c7eec856e29b0.jpg"
                                        data-src="https://media.gody.vn/images/naples/bao-tang-khao-co-quoc-gia-naples-museo-archeologico-nazionale//eec8f775e7d9ebad6aaab188905c7eec856e29b0.jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-au/italia-y" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            Italia (&Yacute;)
                        </a>
                    </div>                </div>
                <div class="fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-au/ao">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn//images/hinh-tong-hop/kdl-ho-may-park-vung-tau-gody/12-2018/74117390-20181227074238-hinh-tong-hop-kdl-ho-may-park-vung-tau-gody.jpg"
                                        data-src="https://media.gody.vn//images/hinh-tong-hop/kdl-ho-may-park-vung-tau-gody/12-2018/74117390-20181227074238-hinh-tong-hop-kdl-ho-may-park-vung-tau-gody.jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-au/ao" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            Austria (&Aacute;o)
                        </a>
                    </div>                </div>
                <div class="fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-au/hy-lap">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn//images/athens/thanh-co-athens/2-2018/thumbs550//27152568-20180224030714-athens-thanh-co-athens.jpg"
                                        data-src="https://media.gody.vn//images/athens/thanh-co-athens/2-2018/thumbs550//27152568-20180224030714-athens-thanh-co-athens.jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-au/hy-lap" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            Greece (Hy Lạp)
                        </a>
                    </div>                </div>
                <div class="fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-a/qatar">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn//images/hinh-tong-hop/huong-dan-cach-xin-visa-han-quoc-gody/12-2018/83851783-20181225082206-hinh-tong-hop-huong-dan-cach-xin-visa-han-quoc-gody.jpg"
                                        data-src="https://media.gody.vn//images/hinh-tong-hop/huong-dan-cach-xin-visa-han-quoc-gody/12-2018/83851783-20181225082206-hinh-tong-hop-huong-dan-cach-xin-visa-han-quoc-gody.jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-a/qatar" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            Qatar (Quốc gia Qatar)
                        </a>
                    </div>                </div>
                <div class="fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-au/belarus">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn//images/hinh-tong-hop/kdl-ho-may-park-vung-tau-gody/12-2018/81896570-20181227090644-hinh-tong-hop-kdl-ho-may-park-vung-tau-gody.jpg"
                                        data-src="https://media.gody.vn//images/hinh-tong-hop/kdl-ho-may-park-vung-tau-gody/12-2018/81896570-20181227090644-hinh-tong-hop-kdl-ho-may-park-vung-tau-gody.jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-au/belarus" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            Belarus (Cộng ho&agrave; Belarus)
                        </a>
                    </div>                </div>
                <div class="fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-au/czech-republic">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn//images/hinh-tong-hop/bhutan/12-2018/123534753-20181228040737-hinh-tong-hop-bhutan.jpg"
                                        data-src="https://media.gody.vn//images/hinh-tong-hop/bhutan/12-2018/123534753-20181228040737-hinh-tong-hop-bhutan.jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-au/czech-republic" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            Czech Republic (Cộng ho&agrave; S&eacute;c)
                        </a>
                    </div>                </div>
                <div class="fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-au/Denmark">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn//images/hinh-tong-hop/dao-nam-du-tong-hop/4-2019/110445802-20190403072049-hinh-tong-hop-dao-nam-du-tong-hop.jpg"
                                        data-src="https://media.gody.vn//images/hinh-tong-hop/dao-nam-du-tong-hop/4-2019/110445802-20190403072049-hinh-tong-hop-dao-nam-du-tong-hop.jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-au/Denmark" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            Denmark (Đan Mạch)
                        </a>
                    </div>                </div>
                <div class="fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-au/greece">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn/images/athens/bao-tang-lich-su-quoc-gia-national-historical-museum/595d42897431be3fdf3b1f965c7623c05f924242.jpg"
                                        data-src="https://media.gody.vn/images/athens/bao-tang-lich-su-quoc-gia-national-historical-museum/595d42897431be3fdf3b1f965c7623c05f924242.jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-au/greece" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            Greece (Hy Lạp)
                        </a>
                    </div>                </div>
                <div class="fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-au/poland">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn//images/hinh-tong-hop/hinh-banner-gody/12-2018/112696028-20181220104653-hinh-tong-hop-hinh-banner-gody.jpg"
                                        data-src="https://media.gody.vn//images/hinh-tong-hop/hinh-banner-gody/12-2018/112696028-20181220104653-hinh-tong-hop-hinh-banner-gody.jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-au/poland" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            Poland (Ba Lan)
                        </a>
                    </div>                </div>
                <div class="fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-au/Ukraine">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn/images/kherson/bao-tang-nghe-thuat-khu-vuc-kherson-kherson-regional-art-museum/c251ff9fd472751457586de074cf23e8724307ae.jpg"
                                        data-src="https://media.gody.vn/images/kherson/bao-tang-nghe-thuat-khu-vuc-kherson-kherson-regional-art-museum/c251ff9fd472751457586de074cf23e8724307ae.jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-au/Ukraine" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            Ukraine (Ukraina)
                        </a>
                    </div>                </div>
                <div class="fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );margin-bottom: calc( var(--gutter) / var(--column) );margin-right: calc( var(--gutter) / var(--column) );">
                    <div class="ps-relative" style="height: 220px;">
                        <a href="{{url('diem-den')}}/chau-au/vatican">
                            <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                <img
                                        data-srcset="https://media.gody.vn/images/vatican-city/quang-truong-belvedere-cortile-del-belvedere/720c468144509b7de98019ac95aa7e1dd1078cbc.jpg"
                                        data-src="https://media.gody.vn/images/vatican-city/quang-truong-belvedere-cortile-del-belvedere/720c468144509b7de98019ac95aa7e1dd1078cbc.jpg"
                                        class="lazy-load w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"
                                />
                                <img
                                        data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/services/Rectangle 53.png"
                                        class="lazy-load ps-absolute b0 l0 w-fit h-fit bar-8 h:o50"
                                />
                            </div>
                        </a>
                        <a href="{{url('diem-den')}}/chau-au/vatican" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                            Vatican City (Holy See)
                        </a>
                    </div>                </div>
            </div>
        </div>
    </div>
</section>

<div id="modal-destination" class="modal fade modal-simple" role="dialog">
    <div class="modal-dialog modal-lg" style="max-width: 750px; margin-top:20%; text-align: center;">
        <!-- Modal content-->
        <img src="/public/images/1x1.png" data-src="/public/v3/images/loading.gif" data-srcset="/public/v3/images/loading.gif, /public/v3/images/loading.gif" alt="Loading..." class="bg-white">
    </div>
    <!-- /Evaluate popup -->
</div><!-- /.modal-destination -->

<div class="modal fade modal-custom-global" id="modal-user-request" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-request-body">
            <div class="modal_user_request_loading hide" style="display:block;width:100%;max-width:450px;position:fixed;top:0;text-align:center;right:0;bottom:0;left:0;overflow:hidden;-webkit-overflow-scrolling:touch;outline:0;padding-top:100px;background:rgba(255,255,255,.7); z-index: 1;"><img src="/public/images/1x1.png" data-src="/public/v3/images/loading.gif" data-srcset="/public/v3/images/loading.gif" alt="Loading..."></div>

            <form action="https://gody.vn/a/goc-yeu-cau/store" method="post" id="modal-user-request-form" novalidate>
                <input type="hidden" name="_token" value="RwVeLdeMZBiM3GobuQZvQ6wIJmq2n1fyZHEgjYl5">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title"> Góc yêu cầu </h4>
                </div>
                <div class="modal-body">
                    <div class="subject col-md-6 cold-sm-6 col-xs-12 padding_0">
                        <label for="name"></label>
                        <select placeholder="Subject line" name="modal_user_request_option" id="modal_user_request_option">
                            <option value="0">Bài viết, review</option>
                            <option value="1">Cập nhật điểm đến mới</option>
                        </select>
                        <span class="error modal_user_request_option_msg" style="display: none"></span>
                    </div>
                    <div class="email col-md-6 cold-sm-6 col-xs-12 pr-0">
                        <label for="email"></label>
                        <input type="email" placeholder="Email" name="modal_user_request_email" id="modal_user_request_email" value="aquafina9416@gmail.com">
                        <span class="error modal_user_request_email_msg" style="display: none"></span>
                    </div>
                    <div class="name col-md-12 cold-sm-12 col-xs-12 padding_0">
                        <label for="name"></label>
                        <input type="text" placeholder="Tên địa điểm: ( Ghi rõ địa điểm, tỉnh thành, đất nước )" name="modal_user_request_name" id="modal_user_request_name">
                        <span class="error modal_user_request_name_msg" style="display: none"></span>
                    </div>

                    <div class="clearfix"></div>

                    <div class="message" data-option="0">Thành viên có thể gửi bài yêu cầu về: <b>info@gody.vn</b></div>
                    <div class="message hide" data-option="1">Thành viên có thể đóng góp thông tin địa điểm ( hình ảnh, nội dung ...) về: <b>info@gody.vn</b></div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Gửi ngay</button>
                </div>
            </form>
        </div>

        <div class="modal-content modal-request-body-success hide">
            <div class="modal-header">
                <button type="button" class="close close-report-success" data-dismiss="modal" aria-label="Close" onclick="user_request_success();"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title margin-0">Gửi yêu cầu thành công!</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert" style=" margin-top:10px;margin-bottom:0;">Cảm ơn bạn đã gửi yêu cầu cho GODY.VN biết. Chúng tôi sẽ hồi âm trong thời gian sớm nhất!</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="user_request_success();">Gửi yêu cầu khác</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="user_request_success();">Đóng</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade v5-layouts-i-md modal__va-middle " id="modal-banner-ads" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content xs:wmx-100%-10">
            <div class="modal-body pl-0 pr-0 pt-0 pb-0">
                <button type="button" class="close ps-absolute w-26 h-26 bg-white bar-circle o100 tn20 rn20" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-search-v2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" ref="modalSearchV2" style="background: rgba(255,255,255,0.85);">
    <div class="modal-dialog modal-lg bar-8" role="document">
        <div class="modal-content bar-8">
            <div class="modal-body">
                <div class="d-flex ai-center">
                    <div class="ps-relative fs-14 px-12 my-12 fl-1">
                        <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/search-outline.svg"
                             class="
                w-24
                filter-sixth
                o90
                va-middle
                d-inline-block
                ps-absolute
                l24
                t50%
                translateYn50%
              ">
                        <input
                                type="text"
                                v-model.trim="searchInput"
                                class="
                bar-25
                ba
                bc-twentyth
                outline-none
                pl-45
                pr-40
                py-6
                w-fit
                box-border
                fc-sixth
                fs-15
                h-40
              "
                                id="search-header-2"
                                autofocus
                                placeholder="Địa điểm bạn muốn tìm ?"
                                ref="globalSearchInput"
                                @keydown="actGlobalSearch"
                        />
                        <button
                                class="
                bg-transparent
                outline-none
                f:outline-none
                fv:outline-none
                a:outline-none
                ps-absolute
                bn
                fs-22
                r16
                t0
                h-fit
                d-flex
                ai-center
                jc-center
                fc-twentyth
              "
                                v-if="!!searchInput"
                                @click.prevent.stop="clearInput"
                        >
                            <img class="w-20 filter-sixth" src="/public/v6/js/ionicons/5.5.2/svg/close-outline.svg" />
                        </button>
                    </div>
                </div>
                <div class="px-12">
                    <template v-if="!dataEmpty && isActive && !!searchInput">
                        <div class="overflow-y-auto overflow-x-hidden">
                            <div class="d-flex ai-center ps-relative py-12 bb bc-eleventh">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img src="/public/v6/js/ionicons/5.5.2/svg/location-outline.svg" class="filter-sixth w-20"/>
                                </div>
                                <div class="fl-1">
                                    <p class="fw-500 fs-16 m-0 tt-capitalize fc-nineth mb-2">
                                        {( data?._source?.type || null )}
                                        {( data?._source?.title || '' )}
                                    </p>
                                    <p class="fs-14 m-0 tt-capitalize fc-sixth">
                                        {(
                                        (data?._source?.province?.title &&
                                        `${data?._source?.province?.title} - `) ||
                                        ''
                                        )}
                                        {( data?._source?.country?.title || '' )}
                                    </p>
                                </div>
                                <a :href="detailUrl" class="d-block ps-absolute t0 r0 b0 l0"></a>
                            </div>

                            <div class="d-none ai-center ps-relative py-12">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img src="/public/v6/js/ionicons/5.5.2/svg/bed-outline.svg" class="filter-sixth w-20"/>
                                </div>
                                <div class="fl-1">
                                    <p class="fs-16 m-0 fc-nineth mb-2">
                                        Khách sạn tại
                                        <span class="fw-500 tt-capitalize">{(
                      data?._source?.title || ''
                    )}</span>
                                    </p>
                                    <p class="fs-14 m-0 tt-capitalize fc-sixth">
                                        {(
                                        (data?._source?.province?.title &&
                                        `${data?._source?.province?.title} - `) ||
                                        ''
                                        )}
                                        {( data?._source?.country?.title || '' )}
                                    </p>
                                </div>
                                <a
                                        :href="data?.stay22"
                                        target="_blank"
                                        class="d-block ps-absolute t0 r0 b0 l0"
                                ></a>
                            </div>

                            <div class="d-none ai-center ps-relative py-12 bb bc-eleventh">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img src="/public/v6/js/ionicons/5.5.2/svg/ticket-outline.svg" class="filter-sixth w-20"/>
                                </div>
                                <div class="fl-1">
                                    <p class="fs-16 m-0 fc-nineth mb-2">
                                        Vé tham quan tại
                                        <span class="fw-500 tt-capitalize">{(
                      data?._source?.title || ''
                    )}</span>
                                    </p>
                                    <p class="fs-14 m-0 tt-capitalize fc-sixth">
                                        {(
                                        (data?._source?.province?.title &&
                                        `${data?._source?.province?.title} - `) ||
                                        ''
                                        )}
                                        {( data?._source?.country?.title || '' )}
                                    </p>
                                </div>
                                <a
                                        :href="`${detailUrl}/ve-tham-quan`"
                                        class="d-block ps-absolute t0 r0 b0 l0"
                                ></a>
                            </div>

                            <div class="d-flex ai-center ps-relative py-12">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img src="/public/v6/js/ionicons/5.5.2/svg/reader-outline.svg" class="filter-sixth w-20"/>
                                </div>
                                <div class="fl-1">
                                    <p class="fs-16 m-0 fc-nineth mb-2">
                                        Blog du lịch
                                        <span class="fw-500 tt-capitalize">{(
                      data?._source?.title || ''
                    )}</span>
                                    </p>
                                    <p class="fs-14 m-0 tt-capitalize fc-sixth">
                                        {(
                                        (data?._source?.province?.title &&
                                        `${data?._source?.province?.title} - `) ||
                                        ''
                                        )}
                                        {( data?._source?.country?.title || '' )}
                                    </p>
                                </div>
                                <a :href="blogUrl" class="d-block ps-absolute t0 r0 b0 l0"></a>
                            </div>

                            <div class="d-flex ai-center ps-relative py-12 bb bc-eleventh">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img src="/public/v6/js/ionicons/5.5.2/svg/images-outline.svg" class="filter-sixth w-20"/>
                                </div>
                                <div class="fl-1">
                                    <p class="fs-16 m-0 fc-nineth mb-2">
                                        Hình ảnh du lịch
                                        <span class="fw-500 tt-capitalize">{(
                      data?._source?.title || ''
                    )}</span>
                                    </p>
                                    <p class="fs-14 m-0 tt-capitalize fc-sixth">
                                        {(
                                        (data?._source?.province?.title &&
                                        `${data?._source?.province?.title} - `) ||
                                        ''
                                        )}
                                        {( data?._source?.country?.title || '' )}
                                    </p>
                                </div>
                                <a :href="photoUrl" class="d-block ps-absolute t0 r0 b0 l0"></a>
                            </div>

                            <div class="d-flex ai-center ps-relative py-12">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img src="/public/v6/js/ionicons/5.5.2/svg/people-outline.svg" class="filter-sixth w-20"/>
                                </div>
                                <div class="fl-1">
                                    <p class="fs-16 m-0 fc-nineth mb-2">
                                        Hỏi đáp du lịch
                                        <span class="fw-500 tt-capitalize">{(
                      data?._source?.title || ''
                    )}</span>
                                    </p>
                                    <p class="fs-14 m-0 tt-capitalize fc-sixth">
                                        {(
                                        (data?._source?.province?.title &&
                                        `${data?._source?.province?.title} - `) ||
                                        ''
                                        )}
                                        {( data?._source?.country?.title || '' )}
                                    </p>
                                </div>
                                <a
                                        :href="communityUrl"
                                        class="d-block ps-absolute t0 r0 b0 l0"
                                ></a>
                            </div>

                            <div class="d-none ai-center ps-relative py-12 bb bc-eleventh">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img src="/public/v6/js/ionicons/5.5.2/svg/map-outline.svg" class="filter-sixth w-20"/>
                                </div>
                                <div class="fl-1">
                                    <p class="fs-16 m-0 fc-nineth mb-2">
                                        Hành trình khám phá
                                        <span class="fw-500 tt-capitalize">{(
                      data?._source?.title || ''
                    )}</span>
                                    </p>
                                    <p class="fs-14 m-0 tt-capitalize fc-sixth">
                                        {(
                                        (data?._source?.province?.title &&
                                        `${data?._source?.province?.title} - `) ||
                                        ''
                                        )}
                                        {( data?._source?.country?.title || '' )}
                                    </p>
                                </div>
                                <a :href="planUrl" class="d-block ps-absolute t0 r0 b0 l0"></a>
                            </div>

                            <div class="d-flex ai-center ps-relative py-12">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/search-outline.svg" class="filter-sixth w-20"/>
                                </div>
                                <div class="fl-1">
                                    <p class="fs-16 m-0 fc-sixth mb-2">
                                        Xem tất cả kết quả cho
                                        <span class="fw-500"
                                        >"{( searchInput )}"</span
                                        >
                                    </p>
                                </div>
                                <a
                                        :href="searchAllUrl"
                                        class="d-block ps-absolute t0 r0 b0 l0"
                                ></a>
                            </div>
                        </div>
                    </template>
                    <template v-if="dataEmpty && loaded && isActive && !!searchInput">
                        <div
                                class="bg-white w-fit z-1"
                        >
                            <div class="d-flex ai-center ps-relative py-12 wb-break-word">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img
                                            src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/search-outline.svg"
                                            class="filter-sixth w-20"
                                    />
                                </div>
                                <div class="fl-1">
                                    <p class="fs-16 m-0 fc-sixth mb-2">
                                        Xem tất cả kết quả cho
                                        <span class="fw-500">"{( searchInput )}"</span>
                                    </p>
                                </div>
                                <a :href="searchAllUrl" class="d-block ps-absolute t0 r0 b0 l0"></a>
                            </div>
                        </div>
                    </template>

                    <template v-if="loading && isActive">
                        <load-stream
                                v-for="n in 5"
                                :key="n"
                                :wrapper-classes="['h-40', 'overflow-hidden', 'mb-20']"
                        ></load-stream>
                    </template>

                    <template v-else-if="(isActive && !loaded && dataEmpty) || (isActive && !searchInput)">
                        <template v-if="!!recentlyViewed()">
                            <div class="py-12 fw-500 fs-16">Kết quả tìm kiếm gần đây</div>
                            <div class="overflow-y-auto overflow-x-hidden">
                                <template v-for="(r, rIdx) in recentlyViewed()">
                                    <div class="d-flex ai-center ps-relative py-12 bb bc-eleventh" :key="r?._id">
                                        <div class="ps-relative d-flex ai-center fl-1">
                                            <div
                                                    class="
                          bar-circle
                          ba
                          bc-eleventh
                          d-flex
                          ai-center
                          jc-center
                          p-10
                          mr-15
                        "
                                            >
                                                <img src="/public/v6/js/ionicons/5.5.2/svg/location-outline.svg" class="filter-sixth w-20"/>
                                            </div>
                                            <div class="fl-1">
                                                <p class="fw-500 fs-16 m-0 tt-capitalize fc-nineth mb-2">
                                                    {( r?._source?.type || null )}
                                                    {( r?._source?.title || '' )}
                                                </p>
                                                <p class="fs-14 m-0 tt-capitalize fc-sixth">
                                                    {(
                                                    (r?._source?.province?.title &&
                                                    `${r?._source?.province?.title} - `) ||
                                                    ''
                                                    )}
                                                    {( r?._source?.country?.title || '' )}
                                                </p>
                                            </div>
                                            <a :href="recentDetailUrl(r)" class="d-block ps-absolute t0 r0 b0 l0"></a>
                                        </div>
                                        <div class="d-flex ai-center jc-center p-10 c-pointer bar-circle h:card6 mr-2" @click="clearRecentlyViewed(r)">
                                            <img src="/public/v6/js/ionicons/5.5.2/svg/close-outline.svg" class="w-22 filter-sixth">
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </template>

                        <template v-if="!!topDes.length">
                            <div class="pb-0 pt-20 fw-500 fs-16">Tìm kiếm nhiều</div>
                            <div class="overflow-y-auto overflow-x-hidden d-flex fw-wrap">
                                <div class="d-flex ai-center ps-relative py-12 mr-40 ws-nowrap fl-1" v-for="(d, dIdx) in topDes" :key="d?._id">
                                    <div class="ps-relative d-flex ai-center fl-1">
                                        <div
                                                class="
                        bar-circle
                        ba
                        bc-eleventh
                        d-flex
                        ai-center
                        jc-center
                        p-0
                        w-42
                        h-42
                        mr-15
                      "
                                        >
                                            <img :src="d.image" class="bar-circle w-fit h-fit object-center object-cover" :alt="d?.title" loading="lazy"/>
                                        </div>
                                        <div class="fl-1">
                                            <p class="fw-500 fs-16 m-0 tt-capitalize fc-nineth mb-2">
                                                {( d?.title || null )}
                                            </p>
                                        </div>
                                        <a :href="d.link" class="d-block ps-absolute t0 r0 b0 l0"></a>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <!-- <default-destination :wrap-class="'bg-white'"></default-destination> -->
                    </template>

                    <!-- <default-destination :wrap-class="'bg-white'"
            v-else-if="(isActive && !loaded && dataEmpty) || (isActive && !searchInput)"
          ></default-destination> -->

                </div>
            </div>
        </div>
    </div>
</div>

<div
        class="modal-feedback js-feedback-modal ps-fixed t0 r0 b0 l0 outline-none overflow-hidden w-fit h-fit d-flex ai-center jc-center t-all t-duration-slow"
        tabindex="-1"
        role="dialog"
        id="modal-feedback"
        style="opacity: 0; z-index: -1"
>
    <div class="ps-absolute t0 r0 b0 l0 w-fit h-fit bg-black o70 c-pointer js-feedback-modal-close"></div>
    <div class="wmx-600 ps-relative xs:h-fit" role="document">
        <div class="bg-white card5 bar-8 xs:h-fit xs:bar-0 xs:d-flex xs:fd-column">
            <div class="d-flex ai-center jc-space-between p-15 bb bc-tenth">
                <h4 class="modal-title ta-center fl-1 fs-18 m-0">Đóng góp ý kiến, thông báo lỗi</h4>
                <div
                        class="bg-seventh h:bg-tenth lh-unset h-40 w-40 d-flex ai-center jc-center c-pointer bar-circle t-all t-duration-slow fc-sixth c-pointer o100 fs-40 fw-normal bn js-feedback-modal-close c-pointer"
                        data-dismiss="modal"
                        aria-label="Close"
                >
                    <img src="/public/v6/js/ionicons/5.5.2/svg/close-outline.svg" class="filter-sixth w-24">
                </div>
            </div>
            <div class="p-15 ps-relative xs:overflow-y-auto">
                <div class="mb-15">
                    <label class="fs-15 mb-5 fw-500 d-block" for=""
                    >Bạn gặp lỗi, đóng góp ý kiến nội dung:</label
                    >
                    <div class="ps-relative">
                        <select
                                class="d-block w-fit py-6 px-12 fs-14 bg-white bar-4 bs-none appearance-none h-50 outline-none ba bc-tenth js-feedback-page"
                                require
                        >
                            <option value="">Chọn sản phẩm</option>
                            <option value="Trang chủ">Trang chủ</option>
                            <option value="Trang Travelmap">Trang Travelmap</option>
                            <option value="Trang điểm đến">Trang điểm đến</option>
                            <option value="Trang chi tiết điểm đến">
                                Trang chi tiết điểm đến
                            </option>
                            <option value="Trang viết bài">Trang viết bài</option>
                            <option value="Trang chia sẻ hình ảnh">
                                Trang chia sẻ hình ảnh
                            </option>
                            <option value="Trang chi tiết bài viết">
                                Trang chi tiết bài viết
                            </option>
                            <option value="Trang chi tiết hình ảnh">
                                Trang chi tiết hình ảnh
                            </option>
                            <option value="Trang pfofile">Trang profile</option>
                            <option value="Khác">Khác</option>
                        </select>
                        <img
                                src="/public/v6/js/ionicons/5.5.2/svg/chevron-down-outline.svg"
                                class="filter-nineth w-20 ps-absolute t50% r12 translateYn50%"
                        />
                    </div>
                    <p
                            class="m-0 fc-thirteenth js-feedback-page__error"
                            style="display: none"
                    >
                        Vui lòng cung cấp trang bạn gặp lỗi.
                    </p>
                </div>
                <div class="mb-15">
                    <label class="fs-15 mb-5 fw-500 d-block" for="">Mô tả chi tiết</label>
                    <textarea
                            rows="4"
                            class="d-block w-fit py-6 px-12 fs-14 bg-white bar-4 bs-none appearance-none outline-none ba bc-tenth bs-none wmx-fit lh-20 js-feedback-desc"
                            placeholder="Vui lòng chia sẻ chi tiết nhất có thể..."
                            require
                    ></textarea>
                    <p
                            class="m-0 fc-thirteenth js-feedback-desc__error"
                            style="display: none"
                    >
                        Vui lòng cung cấp lỗi mà bạn gặp phải.
                    </p>
                </div>
                <div class="mb-15">
                    <label
                            class="d-flex ai-center h-36 px-12 bg-seventh bar-5 fs-15 c-pointer mb-5 fw-500"
                            style="width: fit-content"
                            for="feedback-attach"
                    ><img
                                src="/public/v6/js/ionicons/5.5.2/svg/attach.svg"
                                class="filter-nineth w-24"
                        />
                        Thêm ảnh chụp màn hình (đề xuất)</label
                    >
                    <input
                            type="file"
                            multiple=""
                            accept="image/jpeg,image/png,image/gif,.JPEG,video/mp4,video/x-m4v,video/*"
                            class="hidden d-none js-feedback-attach"
                            name="feedback-attach"
                            id="feedback-attach"
                    />
                    <div class="w-fit d-flex ai-center">
                        <div class="w-auto ws-nowrap overflow-y-hidden d-flex ai-top h-fit js-feedback-gallery">
                        </div>
                    </div>
                </div>
                <div class="mb-15">
                    <p class="m-0 p-12 bg-seventh bar-5 fs-15" style="line-height:22px;">
                        Bạn có ý tưởng để cải thiện sản phẩm, hãy cho GODY biết nhé. Nếu cần trao đổi để khắc phục vấn đề cụ thể, hãy nhắn tin về <a
                                href="https://www.facebook.com/GodyTravel/"
                                class="fc-fourth td-none"
                                target="_blank"
                        >Fanpage Gody.vn</a
                        >. Tất cả ý kiến của bạn đều được chúng tôi trân trọng.
                    </p>
                </div>
                <div class="mb-15 mb-0 ta-right">
                    <button
                            type="button"
                            class="px-18 bar-6 h-36 bn js-feedback-modal-close"
                    >
                        Huỷ
                    </button>
                    <button
                            type="button"
                            class="bn outline-none bg-sixteenth fc-white bar-6 w-100 h-36 ml-6 js-feedback-submit"
                    >
                        Gửi
                    </button>
                </div>

                <div class="ps-absolute w-fit h-fit t0 r0 b0 l0 jc-feedback-sending" style="display: none;">
                    <div class="bg-white w-fit h-fit o90"></div>
                    <div class="ps-absolute w-fit h-fit t0 r0 b0 l0 d-flex ai-center jc-center fd-column">
                        <div class="donut"></div>
                        <p class="mb-0 mt-6 ta-center fc-sixth">Đang gửi dữ liệu ...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="feedback-success js-feedback-success ps-fixed l20 b20 bar-10 bg-white z-9" style="display: none;">
    <div class="d-flex bg-seventh ba bc-fourth ai-center jc-space-between bar-10 px-20 py-14 card7">
        <div class="d-flex ai-center mr-25">
            <img
                    src="/public/v6/js/ionicons/5.5.2/svg/checkmark-outline.svg"
                    class="filter-fourth w-20 mr-8">
            Gửi phản hồi thành công
        </div>
        <div class="c-pointer p-6 bar-circle h:bg-tenth t-all t-delay-slowx2 h:fc-fourth js-feedback-success-close">
            <img
                    src="/public/v6/js/ionicons/5.5.2/svg/close-outline.svg"
                    class="filter-nineth w-20">
        </div>
    </div>
</div>

<div
        class="modal fade ff-sans"
        id="modal-flight-search"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        ref="modalFlightSearch"
        style="background: rgba(255, 255, 255, 0.85)"
>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex btr-5 bg-seventh ai-center">
                <h4 class="m-0 tt-uppercase ta-center fl-1 lh-sm fs-18">
                    Tìm kiếm chuyến bay
                </h4>
                <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="global-flight-search-app">
                <flight-component extra-service-class="d-none"></flight-component>
            </div>
        </div>
    </div>
</div>
<div
        class="modal fade ff-sans"
        id="modal-experience-search"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        ref="modalExperienceSearch"
        style="background: rgba(255, 255, 255, 0.85)"
>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex ai-center btr-5 bg-seventh">
                <h4 class="m-0 tt-uppercase ta-center fl-1 lh-sm fs-18">
                    Vé tham quan
                </h4>
                <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="global-experience-search-app">
                <experience-component :no-dropdown="true"></experience-component>
            </div>
        </div>
    </div>
</div>

<script src="https://gody.vn/public/v3/js/sweetalert.min.js"></script>
<script src="https://gody.vn/public/home/js/lodash.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@latest/dist/ionicons/ionicons.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var lazyImages = [].slice.call(document.querySelectorAll("img.lazy-load"));
        if ("IntersectionObserver" in window) {
            let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        let lazyImage = entry.target;
                        lazyImage.src = lazyImage.dataset.src;
                        lazyImage.srcset = lazyImage.dataset.srcset;
                        lazyImage.classList.remove("lazy");
                        lazyImageObserver.unobserve(lazyImage);
                    }
                });
            });

            lazyImages.forEach(function(lazyImage) {
                lazyImageObserver.observe(lazyImage);
            });
        } else {
            // Possibly fall back to event handlers here
        }
    });
</script>
<script>
    $(document).ready(function(){
        if (!!!$('.slick-item').length) return;

        $('.slick-item').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            speed: 300,
            variableWidth: true
        })
    });

    $(document).on('click', 'div#top-destination div', function(e){
        const get_data_type = $(this).attr('data-type');
        $('.item-range').addClass('hide');
        $('.item-range').removeClass('d-block');
        $(`#${get_data_type}`).addClass('d-block');
        //active menu
        //$('.item-destination-menu').removeClass('bc-white');
        $('.item-destination-menu').removeClass('fc-primary');
        $('.item-destination-menu').removeClass('bc-primary');
        $(this).addClass('fc-primary');
        $(this).addClass('bc-primary');
    });

    $(document).on('click', 'div#menu-destination div', function(e){
        const get_data_type = $(this).attr('data-type');
        $('.item-range-data').addClass('hide');
        $('.item-range-data').removeClass('d-block');
        $(`#${get_data_type}`).addClass('d-block');
        //active menu
        //$('.item-destination-menu-data').removeClass('bc-white');
        $('.item-destination-menu-data').removeClass('fc-primary');
        $('.item-destination-menu-data').removeClass('bc-primary');
        $(this).addClass('fc-primary');
        $(this).addClass('bc-primary');
    });

    $(document).on('click', 'div#mobile-top-destination div', function(e){
        const get_data_type = $(this).attr('data-type');
        //data
        $('.item-range-mobile').addClass('hide');
        $('.item-range-mobile').removeClass('d-block');
        $(`#${get_data_type}`).addClass('d-block');
        //menu
        $('.item-destination-menu-mobile').removeClass('fc-primary');
        $('.item-destination-menu-mobile').removeClass('bc-primary');
        $(this).addClass('fc-primary');
        $(this).addClass('bc-primary');
    });

    $(document).on('click', 'div#mobile-menu-destination div', function(e){
        const get_data_type = $(this).attr('data-type');
        //data
        $('.item-range-data-mobile').addClass('hide');
        $('.item-range-data-mobile').removeClass('d-block');
        $(`#${get_data_type}`).addClass('d-block');
        //menu
        $('.item-destination-menu-data-mobile').removeClass('fc-primary');
        $('.item-destination-menu-data-mobile').removeClass('bc-primary');
        $(this).addClass('fc-primary');
        $(this).addClass('bc-primary');
    });

    $(document).on('click', 'div.top-destination-ver02 div', function(e){
        const data_type = $(this).attr('data-type');
        var afirca = $('div#data-afirca').position(),
            australia = $('div#data-australia').position(),
            americas = $('div#data-americas').position(),
            euro = $('div#data-euro').position(),
            asian = $('div#data-asian').position(),
            viet_nam = $('div#data-viet-nam').position();

        const element = $(`div#${data_type}`).position();

        $(`div.top-destination-ver02 div`).removeClass('fc-primary');
        $(`div.top-destination-ver02 div`).addClass('fc-fourteenth');
        $(this).addClass('fc-primary');
        $(this).removeClass('fc-fourteenth');

        window.scroll({
            top: element.top - 200,
            behavior: 'smooth',
        });
    });

    $(document).on('click', 'div.click-tab-01', function(e){
        const get_key = $(this).attr('data-key');
        $('div.click-tab-01').removeClass('fc-primary');
        $('div.click-tab-01').removeClass('bc-primary');

        $(this).addClass('fc-primary');
        $(this).addClass('bc-primary');
        $('div.content-tab-01').removeClass('hide');
        $('div.content-tab-01').removeClass('d-block');
        $('div.content-tab-01').addClass('hide');
        $(`div#${get_key}`).removeClass('hide');
    });

    function selectServicePassport(e)
    {
        $('#country_titleText .item-option').removeClass('hide');
    }

    function closeServicePassport()
    {
        $('#country_titleText .item-option').addClass('hide');
    }

    //service passport
    function serviceFocus(e)
    {
        const _parent = $(e).parent().find('p').removeClass('ps-absolute');

    }

    function replaceByDefault(e) {
        e.src = "https://gody.vn/public/v7/images/v7-avatar-default.jpg";
    }
    function showFullContent(e)
    {
        const _hasClass = $('div.content-guide').hasClass('hide');
        if( _hasClass )
        {
            $(e).html('Thu Gọn Nội Dung');
            $('div.content-guide').removeClass('hide');
        }else{
            $(e).html('Xem Thêm Nội Dung');
            $('div.content-guide').addClass('hide');
        }
    }
    function goToElement(e, element = null)
    {
        $(`${element}`).focus();
    }
</script>

<script>
    $(document).ready(function() {
        $('#departure-date').change(function() {
            startDate = $(this).datepicker('getDate');
            $("#return-date").datepicker("option", "minDate", startDate);
        });
        $('#return-date').change(function() {
            endDate = $(this).datepicker('getDate');
            $("#departure-date").datepicker("option", "maxDate", endDate);
        });
    });

    $(function(){
        $('#departure-date').datepicker({
            closeText: "Đóng",
            prevText: "Trước",
            nextText: "Sau",
            currentText: "Hôm nay",
            monthNames: ["Tháng một", "Tháng hai", "Tháng ba", "Tháng tư", "Tháng năm", "Tháng sáu", "Tháng bảy", "Tháng tám", "Tháng chín", "Tháng mười", "Tháng mười một", "Tháng mười hai"],
            monthNamesShort: ["Một", "Hai", "Ba", "Bốn", "Năm", "Sáu", "Bảy", "Tám", "Chín", "Mười", "Mười một", "Mười hai"],
            dayNames: ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"],
            dayNamesShort: ["CN", "Hai", "Ba", "Tư", "Năm", "Sáu", "Bảy"],
            dayNamesMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
            weekHeader: "Tuần",
            dateFormat: "dd-mm-yy", //"yy-mm-dd", //"dd/mm/yy",
            //minDate: new Date(),
            minDate: '+7d',
            //firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ""
        }).on('change', function(){
            const _val = $('#departure-date').val();
            $('input[name="departure-date"]').val(_val);
            localStorage.setItem(`plan_departure_date`, _val);
        });
    });
    $(function(){
        $('#return-date').datepicker({
            closeText: "Đóng",
            prevText: "Trước",
            nextText: "Sau",
            currentText: "Hôm nay",
            monthNames: ["Tháng một", "Tháng hai", "Tháng ba", "Tháng tư", "Tháng năm", "Tháng sáu", "Tháng bảy", "Tháng tám", "Tháng chín", "Tháng mười", "Tháng mười một", "Tháng mười hai"],
            monthNamesShort: ["Một", "Hai", "Ba", "Bốn", "Năm", "Sáu", "Bảy", "Tám", "Chín", "Mười", "Mười một", "Mười hai"],
            dayNames: ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"],
            dayNamesShort: ["CN", "Hai", "Ba", "Tư", "Năm", "Sáu", "Bảy"],
            dayNamesMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
            weekHeader: "Tuần",
            dateFormat: "dd-mm-yy",// "yy-mm-dd",
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ""
        }).on('change', function(){
            const _val = $('#return-date').val();
            $('input[name="return-date"]').val(_val);
            localStorage.setItem(`plan_return_date`, _val);
        });
    })

</script>

<script src="https://gody.vn/public/v7/js/post-detail.js?v=1235"></script>
@endsection
