@extends('layouts.default')
@section('content')
    <section class="p-0 m-0 bg-white">
        <div class="w-fit d-block ps-relative">
            <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2021/2/19/nguyenkhanhvukhoa6536/7f16da46ae8675051d4939b6b66d6fbe.jpg?v=2" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2021/2/19/nguyenkhanhvukhoa6536/7f16da46ae8675051d4939b6b66d6fbe.jpg?v=2" height="216px" class="lazy-load object-cover object-center w-fit"
                 src="https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2021/2/19/nguyenkhanhvukhoa6536/7f16da46ae8675051d4939b6b66d6fbe.jpg?v=2" srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2021/2/19/nguyenkhanhvukhoa6536/7f16da46ae8675051d4939b6b66d6fbe.jpg?v=2">
            <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 216px; left: 0; " src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png">
        </div>
    </section>
    <div class="w-fit d-block" data-style="position: fixed;top: 87px;background: white;z-index: 10;" id="position-fixed-top" style="">
        <div class="w-fit d-flex ai-center jc-space-between
        overflow-x-auto scrollbar-vertical-white h-56
        top-destination-mobile-ver02 pl-15">
            <div class="d-flex ai-center h-56 item-destination-menu-data-mobile mx-10" style="min-width: calc( 100% / 4 - 10px )  !important;justify-content: center!important;" data-type="data-viet-nam">
                <span class="fs-18 fw-600 tt-uppercase">Việt Nam</span>
            </div>
            <div class="d-flex ai-center h-56 item-destination-menu-data-mobile mx-10" style="min-width: calc( 100% / 4 - 10px )  !important;justify-content: center!important;" data-type="data-asian">
                <span class="fs-18 fw-600 tt-uppercase">Châu Á</span>
            </div>
            <div class="d-flex ai-center h-56 item-destination-menu-data-mobile mx-10" style="min-width: calc( 100% / 4 - 10px )  !important;justify-content: center!important;" data-type="data-euro">
                <span class="fs-18 fw-600 tt-uppercase">Châu Âu</span>
            </div>
            <div class="d-flex ai-center h-56 item-destination-menu-data-mobile mx-10" style="min-width: calc( 100% / 4 - 10px )  !important;justify-content: center!important;" data-type="data-americas">
                <span class="fs-18 fw-600 tt-uppercase">Châu Mỹ</span>
            </div>
            <div class="d-flex ai-center h-56 item-destination-menu-data-mobile mx-10" style="min-width: calc( 100% / 4 - 10px )  !important;justify-content: center!important;flex: 0 0 161px; flex: 0 0 161px;" data-type="data-australia">
                <span class="fs-18 fw-600 tt-uppercase">Châu Đại Dương</span>
            </div>
            <div class="d-flex ai-center h-56 item-destination-menu-data-mobile mx-10" style="min-width: calc( 100% / 4 - 10px )  !important;justify-content: center!important;" data-type="data-afirca">
                <span class="fs-18 fw-600 tt-uppercase">Châu Phi</span>
            </div>
        </div>
    </div>
    <div class="w-fit d-block pt-40 item-range-data-mobile p-20" id="data-viet-nam">
        <div class="d-block w-fit pb-10 mb-20" style="border-bottom: 2px solid rgba(0,0,0,.2);">
            <a class="fc-primary fs-18 fw-600 tt-uppercase">Việt Nam</a>
        </div>
        <!-- -->
        <div class="w-fit d-block">
            <div class="w-fit d-flex jc-space-between fw-wrap" style="--column:3; --gutter: 10px;">
                <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                    <ul>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/an-giang" class="fc-fourteenth fs-16 lh-17">
                                An Giang </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/ben-tre" class="fc-fourteenth fs-16 lh-17">
                                Bến Tre </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/binh-dinh" class="fc-fourteenth fs-16 lh-17">
                                Bình Định </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/binh-phuoc" class="fc-fourteenth fs-16 lh-17">
                                Bình Phước </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/binh-duong" class="fc-fourteenth fs-16 lh-17">
                                Bình Dương </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/binh-thuan" class="fc-fourteenth fs-16 lh-17">
                                Bình Thuận </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/bac-ninh" class="fc-fourteenth fs-16 lh-17">
                                Bắc Ninh </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/bac-lieu" class="fc-fourteenth fs-16 lh-17">
                                Bạc Liêu </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/bac-kan" class="fc-fourteenth fs-16 lh-17">
                                Bắc Kạn </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/bac-giang" class="fc-fourteenth fs-16 lh-17">
                                Bắc Giang </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/ba-ria-vung-tau" class="fc-fourteenth fs-16 lh-17">
                                Bà Rịa Vũng Tàu </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/ca-mau" class="fc-fourteenth fs-16 lh-17">
                                Cà Mau </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/can-tho" class="fc-fourteenth fs-16 lh-17">
                                Cần Thơ </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/cao-bang" class="fc-fourteenth fs-16 lh-17">
                                Cao Bằng </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/dong-nai" class="fc-fourteenth fs-16 lh-17">
                                Đồng Nai </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/dien-bien" class="fc-fourteenth fs-16 lh-17">
                                Điện Biên </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/dak-nong" class="fc-fourteenth fs-16 lh-17">
                                Đắk Nông </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/dak-lak" class="fc-fourteenth fs-16 lh-17">
                                Đắk Lắk </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/da-nang" class="fc-fourteenth fs-16 lh-17">
                                Đà Nẵng </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/dong-thap" class="fc-fourteenth fs-16 lh-17">
                                Đồng Tháp </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/gia-lai" class="fc-fourteenth fs-16 lh-17">
                                Gia Lai </a>
                        </li>
                    </ul>
                </div>
                <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                    <ul>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/gia-lai" class="fc-fourteenth fs-16 lh-17">
                                Gia Lai </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/hai-phong" class="fc-fourteenth fs-16 lh-17">
                                Hải Phòng </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/hau-giang" class="fc-fourteenth fs-16 lh-17">
                                Hậu Giang </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/ho-chi-minh" class="fc-fourteenth fs-16 lh-17">
                                Hồ Chí Minh </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/hoa-binh" class="fc-fourteenth fs-16 lh-17">
                                Hòa Bình </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/hung-yen" class="fc-fourteenth fs-16 lh-17">
                                Hưng Yên </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/ha-giang" class="fc-fourteenth fs-16 lh-17">
                                Hà Giang </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/ha-nam" class="fc-fourteenth fs-16 lh-17">
                                Hà Nam </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/hai-duong" class="fc-fourteenth fs-16 lh-17">
                                Hải Dương </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/ha-noi" class="fc-fourteenth fs-16 lh-17">
                                Hà Nội </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/ha-tinh" class="fc-fourteenth fs-16 lh-17">
                                Hà Tĩnh </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/khanh-hoa" class="fc-fourteenth fs-16 lh-17">
                                Khánh Hòa </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/kien-giang" class="fc-fourteenth fs-16 lh-17">
                                Kiên Giang </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/kon-tum" class="fc-fourteenth fs-16 lh-17">
                                Kon Tum </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/lao-cai" class="fc-fourteenth fs-16 lh-17">
                                Lào Cai </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/lai-chau" class="fc-fourteenth fs-16 lh-17">
                                Lai Châu </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/lam-dong" class="fc-fourteenth fs-16 lh-17">
                                Lâm Đồng </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/lang-son" class="fc-fourteenth fs-16 lh-17">
                                Lạng Sơn </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/long-an" class="fc-fourteenth fs-16 lh-17">
                                Long An </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/ninh-binh" class="fc-fourteenth fs-16 lh-17">
                                Ninh Bình </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/ninh-thuan" class="fc-fourteenth fs-16 lh-17">
                                Ninh Thuận </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/nghe-an" class="fc-fourteenth fs-16 lh-17">
                                Nghệ An </a>
                        </li>
                    </ul>
                </div>
                <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                    <ul>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/nghe-an" class="fc-fourteenth fs-16 lh-17">
                                Nghệ An </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/nam-dinh" class="fc-fourteenth fs-16 lh-17">
                                Nam Định </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/phu-tho" class="fc-fourteenth fs-16 lh-17">
                                Phú Thọ </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/phu-yen" class="fc-fourteenth fs-16 lh-17">
                                Phú Yên </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/quang-ngai" class="fc-fourteenth fs-16 lh-17">
                                Quảng Ngãi </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/quang-binh" class="fc-fourteenth fs-16 lh-17">
                                Quảng Bình </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/quang-nam" class="fc-fourteenth fs-16 lh-17">
                                Quảng Nam </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/quang-ninh" class="fc-fourteenth fs-16 lh-17">
                                Quảng Ninh </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/quang-tri" class="fc-fourteenth fs-16 lh-17">
                                Quảng Trị </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/soc-trang" class="fc-fourteenth fs-16 lh-17">
                                Sóc Trăng </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/son-la" class="fc-fourteenth fs-16 lh-17">
                                Sơn La </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/tay-ninh" class="fc-fourteenth fs-16 lh-17">
                                Tây Ninh </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/thanh-hoa" class="fc-fourteenth fs-16 lh-17">
                                Thanh Hóa </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/thai-binh" class="fc-fourteenth fs-16 lh-17">
                                Thái Bình </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/tuyen-quang" class="fc-fourteenth fs-16 lh-17">
                                Tuyên Quang </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/tra-vinh" class="fc-fourteenth fs-16 lh-17">
                                Trà Vinh </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/tien-giang" class="fc-fourteenth fs-16 lh-17">
                                Tiền Giang </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/thua-thien-hue" class="fc-fourteenth fs-16 lh-17">
                                Thừa Thiên Huế </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/thai-nguyen" class="fc-fourteenth fs-16 lh-17">
                                Thái Nguyên </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/vinh-phuc" class="fc-fourteenth fs-16 lh-17">
                                Vĩnh Phúc </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/vinh-long" class="fc-fourteenth fs-16 lh-17">
                                Vĩnh Long </a>
                        </li>
                        <li class="w-fit mb-15">
                            <a href="{{url('/')}}/diem-den/chau-a/viet-nam/yen-bai" class="fc-fourteenth fs-16 lh-17">
                                Yên Bái </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="w-fit d-block pt-40 item-range-data-mobile p-20" id="data-asian">
        <div class="d-block w-fit pb-10 mb-20" style="border-bottom: 2px solid rgba(0,0,0,.2);">
            <a class="fc-primary fs-18 fw-600 tt-uppercase">Châu Á</a>
        </div>
        <!-- -->
        <div class="w-fit d-flex jc-space-between fw-wrap" style="--column:3; --gutter: 10px;">
            <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                <ul>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/afghanistan" class="fc-fourteenth fs-16 lh-17">
                            Afghanistan </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/armenia" class="fc-fourteenth fs-16 lh-17">
                            Armenia </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/bangladesh" class="fc-fourteenth fs-16 lh-17">
                            Bangladesh </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/bhutan" class="fc-fourteenth fs-16 lh-17">
                            Bhutan </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/brunei" class="fc-fourteenth fs-16 lh-17">
                            Brunei </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/campuchia" class="fc-fourteenth fs-16 lh-17">
                            Campuchia </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/hong-kong" class="fc-fourteenth fs-16 lh-17">
                            Hong Kong </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/india-an-do" class="fc-fourteenth fs-16 lh-17">
                            Ấn Độ </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/indonesia" class="fc-fourteenth fs-16 lh-17">
                            Indonesia </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/iran" class="fc-fourteenth fs-16 lh-17">
                            Iran </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/iraq" class="fc-fourteenth fs-16 lh-17">
                            Iraq </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/israel" class="fc-fourteenth fs-16 lh-17">
                            Israel </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/Japan" class="fc-fourteenth fs-16 lh-17">
                            Nhật Bản </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/jordan" class="fc-fourteenth fs-16 lh-17">
                            Jordan </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/kazakhstan" class="fc-fourteenth fs-16 lh-17">
                            Kazakhstan </a>
                    </li>
                </ul>
            </div>
            <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                <ul>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/kazakhstan" class="fc-fourteenth fs-16 lh-17">
                            Kazakhstan </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/kyrgyzstan" class="fc-fourteenth fs-16 lh-17">
                            Kyrgyzstan </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/lao" class="fc-fourteenth fs-16 lh-17">
                            Lào </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/macau" class="fc-fourteenth fs-16 lh-17">
                            Macau (Ma cao) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/malaysia" class="fc-fourteenth fs-16 lh-17">
                            Malaysia </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/maldives" class="fc-fourteenth fs-16 lh-17">
                            Maldives </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/mongolia" class="fc-fourteenth fs-16 lh-17">
                            Mongolia (Mông Cổ) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/myanmar" class="fc-fourteenth fs-16 lh-17">
                            Myanmar </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/nepal" class="fc-fourteenth fs-16 lh-17">
                            Nepal </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/north-korea-trieu-tien" class="fc-fourteenth fs-16 lh-17">
                            North Korea (Triều Tiên) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/oman" class="fc-fourteenth fs-16 lh-17">
                            Oman (Vương quốc Hồi giáo Oman) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/pakistan" class="fc-fourteenth fs-16 lh-17">
                            Pakistan </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/palestine" class="fc-fourteenth fs-16 lh-17">
                            Palestine </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/philippines" class="fc-fourteenth fs-16 lh-17">
                            Philippines </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/qatar" class="fc-fourteenth fs-16 lh-17">
                            Qatar </a>
                    </li>
                </ul>
            </div>
            <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                <ul>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/qatar" class="fc-fourteenth fs-16 lh-17">
                            Qatar </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/saudi-arabia" class="fc-fourteenth fs-16 lh-17">
                            Saudi Arabia </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/singapore" class="fc-fourteenth fs-16 lh-17">
                            Singapore </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/south-korea" class="fc-fourteenth fs-16 lh-17">
                            South Korea (Hàn Quốc) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/sri-lanka" class="fc-fourteenth fs-16 lh-17">
                            Sri Lanka </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/syria" class="fc-fourteenth fs-16 lh-17">
                            Syria </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/taiwan" class="fc-fourteenth fs-16 lh-17">
                            Taiwan (Đài Loan) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/tajikistan" class="fc-fourteenth fs-16 lh-17">
                            Tajikistan </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/tay-tang" class="fc-fourteenth fs-16 lh-17">
                            Tibet (Tây Tạng) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/thailand" class="fc-fourteenth fs-16 lh-17">
                            Thailand (Thái Lan) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/trung-quoc" class="fc-fourteenth fs-16 lh-17">
                            China (Trung Quốc) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/turkey" class="fc-fourteenth fs-16 lh-17">
                            Turkey (Thổ Nhĩ Kỳ) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/united-arab-emirates" class="fc-fourteenth fs-16 lh-17">
                            United Arab Emirates </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/uzbekistan" class="fc-fourteenth fs-16 lh-17">
                            Uzbekistan </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-a/viet-nam" class="fc-fourteenth fs-16 lh-17">
                            Việt Nam </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="w-fit d-block pt-40 item-range-data-mobile p-20" id="data-afirca">
        <div class="d-block w-fit pb-10 mb-20" style="border-bottom: 2px solid rgba(0,0,0,.2);">
            <a class="fc-primary fs-18 fw-600 tt-uppercase">Châu Phi</a>
        </div>
        <!-- -->
        <div class="w-fit d-flex jc-space-between" style="--column:3; --gutter: 10px;">
            <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                <ul>
                    <li class="w-fit mb-10">
                        <a class="fc-fourteenth fs-16 lh-21">
                            Ai Cập </a>
                    </li>
                </ul>
            </div>
            <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                <ul>
                </ul>
            </div>
            <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                <ul>
                </ul>
            </div>
        </div>
    </div>
    <div class="w-fit d-block pt-40 item-range-data-mobile p-20" id="data-euro">
        <div class="d-block w-fit pb-10 mb-20" style="border-bottom: 2px solid rgba(0,0,0,.2);">
            <a class="fc-primary fs-18 fw-600 tt-uppercase">Châu Âu</a>
        </div>
        <!-- -->
        <div class="w-fit d-flex jc-space-between" style="--column:3; --gutter: 10px;">
            <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                <ul>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/albania" class="fc-fourteenth fs-16 lh-21">
                            Albania </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/andorra" class="fc-fourteenth fs-16 lh-21">
                            Andorra </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/ao" class="fc-fourteenth fs-16 lh-21">
                            Austria (Áo) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/azerbaijan" class="fc-fourteenth fs-16 lh-21">
                            Azerbaijan </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/belarus" class="fc-fourteenth fs-16 lh-21">
                            Belarus </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/belgium" class="fc-fourteenth fs-16 lh-21">
                            Bỉ </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/bosnia-and-herzegovina" class="fc-fourteenth fs-16 lh-21">
                            Bosnia &amp; Herzegovina </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/bulgaria" class="fc-fourteenth fs-16 lh-21">
                            Bulgaria (Bungari) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/croatia" class="fc-fourteenth fs-16 lh-21">
                            Croatia </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/cyprus" class="fc-fourteenth fs-16 lh-21">
                            Cyprus (Đảo Síp) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/czech-republic" class="fc-fourteenth fs-16 lh-21">
                            Czech (Cộng hoà Séc) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/Denmark" class="fc-fourteenth fs-16 lh-21">
                            Đan Mạch </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/estonia" class="fc-fourteenth fs-16 lh-21">
                            Estonia </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/finland" class="fc-fourteenth fs-16 lh-21">
                            Finland (Phần Lan) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/france-phap" class="fc-fourteenth fs-16 lh-21">
                            Pháp </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/georgia" class="fc-fourteenth fs-16 lh-21">
                            Georgia </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/germany-duc" class="fc-fourteenth fs-16 lh-21">
                            Đức </a>
                    </li>
                </ul>
            </div>
            <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                <ul>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/germany-duc" class="fc-fourteenth fs-16 lh-21">
                            Đức </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/hungary" class="fc-fourteenth fs-16 lh-21">
                            Hungary (Hungari) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/hy-lap" class="fc-fourteenth fs-16 lh-21">
                            Hy Lạp </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/iceland" class="fc-fourteenth fs-16 lh-21">
                            Iceland </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/ireland" class="fc-fourteenth fs-16 lh-21">
                            Ireland </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/italia-y" class="fc-fourteenth fs-16 lh-21">
                            Italia (Ý) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/kosovo" class="fc-fourteenth fs-16 lh-21">
                            Kosovo </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/latvia" class="fc-fourteenth fs-16 lh-21">
                            Latvia </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/liechtenstein" class="fc-fourteenth fs-16 lh-21">
                            Liechtenstein </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/lithuania" class="fc-fourteenth fs-16 lh-21">
                            Lithuania </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/luxembourg" class="fc-fourteenth fs-16 lh-21">
                            Luxembourg </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/macedonia" class="fc-fourteenth fs-16 lh-21">
                            Macedonia </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/malta" class="fc-fourteenth fs-16 lh-21">
                            Malta </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/moldova" class="fc-fourteenth fs-16 lh-21">
                            Moldova </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/monaco" class="fc-fourteenth fs-16 lh-21">
                            Monaco </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/montenegro" class="fc-fourteenth fs-16 lh-21">
                            Montenegro </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/netherlands" class="fc-fourteenth fs-16 lh-21">
                            Hà Lan </a>
                    </li>
                </ul>
            </div>
            <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                <ul>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/netherlands" class="fc-fourteenth fs-16 lh-21">
                            Hà Lan </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/norway" class="fc-fourteenth fs-16 lh-21">
                            Norway (Nauy) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/poland" class="fc-fourteenth fs-16 lh-21">
                            Poland (Ba Lan) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/portugal" class="fc-fourteenth fs-16 lh-21">
                            Portugal (Bồ Đào Nha) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/romania" class="fc-fourteenth fs-16 lh-21">
                            Romania (Romani) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/russia" class="fc-fourteenth fs-16 lh-21">
                            Russia (Liên bang Nga) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/san-marino" class="fc-fourteenth fs-16 lh-21">
                            San Marino </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/serbia" class="fc-fourteenth fs-16 lh-21">
                            Serbia </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/slovakia" class="fc-fourteenth fs-16 lh-21">
                            Slovakia </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/slovenia" class="fc-fourteenth fs-16 lh-21">
                            Slovenia </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/spain-tay-ban-nha" class="fc-fourteenth fs-16 lh-21">
                            Spain (Tây Ban Nha) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/sweden" class="fc-fourteenth fs-16 lh-21">
                            Sweden </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/switzerland" class="fc-fourteenth fs-16 lh-21">
                            Switzerland (Thuỵ Sỹ) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/thuy-si" class="fc-fourteenth fs-16 lh-21">
                            Switzerland (Thụy Sĩ) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/Ukraine" class="fc-fourteenth fs-16 lh-21">
                            Ukraine (Ukraina) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/united-kingdom" class="fc-fourteenth fs-16 lh-21">
                            United Kingdom (UK) (Anh Quốc) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-au/united-kingdom-vuong-quoc-anh" class="fc-fourteenth fs-16 lh-21">
                            United Kingdom (Vương Quốc Anh) </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="w-fit d-block pt-40 item-range-data-mobile p-20" id="data-australia">
        <div class="d-block w-fit pb-10 mb-20" style="border-bottom: 2px solid rgba(0,0,0,.2);">
            <a class="fc-primary fs-18 fw-600 tt-uppercase">Châu Đại Dương</a>
        </div>
        <!-- -->
        <div class="w-fit d-flex jc-space-between" style="--column:3; --gutter: 10px;">
            <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                <ul>
                    <li class="w-fit mb-10">
                        <a class="fc-fourteenth fs-16 lh-21">
                            Australia (Úc) </a>
                    </li>
                </ul>
            </div>
            <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                <ul>
                </ul>
            </div>
            <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                <ul>
                </ul>
            </div>
        </div>
    </div>
    <div class="w-fit d-block pt-40 item-range-data-mobile p-20" id="data-americas">
        <div class="d-block w-fit pb-10 mb-20" style="border-bottom: 2px solid rgba(0,0,0,.2);">
            <a class="fc-primary fs-18 fw-600 tt-uppercase">Châu Mỹ</a>
        </div>
        <!-- -->
        <div class="w-fit d-flex jc-space-between" style="--column:3; --gutter: 10px;">
            <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                <ul>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/anguilla" class="fc-fourteenth fs-16 lh-21">
                            Anguilla </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/antigua-va-barbuda" class="fc-fourteenth fs-16 lh-21">
                            Antigua and Barbuda (Antigua và Barbuda) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/argentina" class="fc-fourteenth fs-16 lh-21">
                            Argentina </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/aruba" class="fc-fourteenth fs-16 lh-21">
                            Aruba </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/bahamas" class="fc-fourteenth fs-16 lh-21">
                            Bahamas </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/barbados" class="fc-fourteenth fs-16 lh-21">
                            Barbados </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/belize" class="fc-fourteenth fs-16 lh-21">
                            Belize </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/bermuda" class="fc-fourteenth fs-16 lh-21">
                            Bermuda </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/bolivia" class="fc-fourteenth fs-16 lh-21">
                            Bolivia </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/brasil" class="fc-fourteenth fs-16 lh-21">
                            Brasil </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/canada" class="fc-fourteenth fs-16 lh-21">
                            Canada </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/chile" class="fc-fourteenth fs-16 lh-21">
                            Chile </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/colombia" class="fc-fourteenth fs-16 lh-21">
                            Colombia </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/costa-rica" class="fc-fourteenth fs-16 lh-21">
                            Costa Rica </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/cuba" class="fc-fourteenth fs-16 lh-21">
                            Cuba </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/cura%C3%A7ao" class="fc-fourteenth fs-16 lh-21">
                            Curaçao </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/dominicana" class="fc-fourteenth fs-16 lh-21">
                            Dominicana </a>
                    </li>
                </ul>
            </div>
            <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                <ul>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/dominicana" class="fc-fourteenth fs-16 lh-21">
                            Dominicana </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/ecuador" class="fc-fourteenth fs-16 lh-21">
                            Ecuador </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/el-salvador" class="fc-fourteenth fs-16 lh-21">
                            El Salvador </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/grenada" class="fc-fourteenth fs-16 lh-21">
                            Grenada </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/guadeloupe" class="fc-fourteenth fs-16 lh-21">
                            Guadeloupe </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/guatemala" class="fc-fourteenth fs-16 lh-21">
                            Guatemala </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/guyana" class="fc-fourteenth fs-16 lh-21">
                            Guyana </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/guyane" class="fc-fourteenth fs-16 lh-21">
                            Guyane </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/haiti" class="fc-fourteenth fs-16 lh-21">
                            Haiti </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/honduras" class="fc-fourteenth fs-16 lh-21">
                            Honduras </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/jamaica" class="fc-fourteenth fs-16 lh-21">
                            Jamaica </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/martinique" class="fc-fourteenth fs-16 lh-21">
                            Martinique </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/mexico" class="fc-fourteenth fs-16 lh-21">
                            Mexico </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/montserrat" class="fc-fourteenth fs-16 lh-21">
                            Montserrat </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/nicaragua" class="fc-fourteenth fs-16 lh-21">
                            Nicaragua </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/panama" class="fc-fourteenth fs-16 lh-21">
                            Panama </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/paraguay" class="fc-fourteenth fs-16 lh-21">
                            Paraguay </a>
                    </li>
                </ul>
            </div>
            <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                <ul>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/paraguay" class="fc-fourteenth fs-16 lh-21">
                            Paraguay </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/peru" class="fc-fourteenth fs-16 lh-21">
                            Peru </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/puerto-rico" class="fc-fourteenth fs-16 lh-21">
                            Puerto Rico </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/quan-dao-cayman" class="fc-fourteenth fs-16 lh-21">
                            Cayman Island (Quần đảo Cayman) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/quan-dao-falkland" class="fc-fourteenth fs-16 lh-21">
                            Falkland Islands (Quần đảo Falkland) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/quan-dao-turks-va-caicos" class="fc-fourteenth fs-16 lh-21">
                            Turks and Caicos Islands (Quần đảo Turks và Caicos) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/quan-dao-virgin" class="fc-fourteenth fs-16 lh-21">
                            Virgin Island (Quần đảo Virgin) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/saint-kitts-va-nevis" class="fc-fourteenth fs-16 lh-21">
                            Saint Kitts and Nevis (Saint Kitts và Nevis) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/saint-lucia" class="fc-fourteenth fs-16 lh-21">
                            Saint Lucia </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/saint-vincent-va-the-grenadines" class="fc-fourteenth fs-16 lh-21">
                            Saint Vincent and The Grenadines (Saint Vincent và The Grenadines) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/sint-maarten" class="fc-fourteenth fs-16 lh-21">
                            Sint Maarten </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/suriname" class="fc-fourteenth fs-16 lh-21">
                            Suriname </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/trinidad-va-tobago" class="fc-fourteenth fs-16 lh-21">
                            Trinidad and Tobago (Cộng hòa Trinidad và Tobago) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/united-states-of-america-my" class="fc-fourteenth fs-16 lh-21">
                            USA (Mỹ, Hoa Kỳ) </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/uruguay" class="fc-fourteenth fs-16 lh-21">
                            Uruguay </a>
                    </li>
                    <li class="w-fit mb-10">
                        <a href="{{url('/')}}/diem-den/chau-my/venezuela" class="fc-fourteenth fs-16 lh-21">
                            Venezuela </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!--
    <div class="w-fit d-block pb-10">
        <div class="w-fit d-block px-20">
            <a class="w-fit d-block fc-black fw-700 fs-26 lh-24" href="{{url('/')}}/diem-den/chau-my/venezuela">Top 10 điểm du lịch trong nước</a>
        </div>
        <div class="w-fit d-block p-20">
            <div class="w-fit d-flex horizontal-scrolling overflow-x-auto">
                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn//images/kuala-lumpur/batu-caves/11-2016/20161117065938-dong-batu-gody(3).jpg" data-srcset="https://media.gody.vn//images/kuala-lumpur/batu-caves/11-2016/20161117065938-dong-batu-gody(3).jpg" class="lazy-load w-fit h-fit object-cover object-center" src="https://media.gody.vn//images/kuala-lumpur/batu-caves/11-2016/20161117065938-dong-batu-gody(3).jpg"
                                     srcset="https://media.gody.vn//images/kuala-lumpur/batu-caves/11-2016/20161117065938-dong-batu-gody(3).jpg">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; " src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/kuala-lumpur/batu-caves" class="fc-white fs-18 fw-700">
                                        Động batu (batu caves)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn//images/kuala-lumpur/sultan-abdul-samad-building/12-2016/20161202024611-toa-nha-sultan-abdul-samad-gody(17).jpg" data-srcset="https://media.gody.vn//images/kuala-lumpur/sultan-abdul-samad-building/12-2016/20161202024611-toa-nha-sultan-abdul-samad-gody(17).jpg" class="lazy-load w-fit h-fit object-cover object-center"
                                     src="https://media.gody.vn//images/kuala-lumpur/sultan-abdul-samad-building/12-2016/20161202024611-toa-nha-sultan-abdul-samad-gody(17).jpg" srcset="https://media.gody.vn//images/kuala-lumpur/sultan-abdul-samad-building/12-2016/20161202024611-toa-nha-sultan-abdul-samad-gody(17).jpg">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; " src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/kuala-lumpur/sultan-abdul-samad-building" class="fc-white fs-18 fw-700">
                                        Tòa nhà sultan abdul samad
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/kuala-lumpur/cao-nguyen-genting-genting-highlands//e987a7f6945d992c9b8c7528a29d45b52f35bc58.jpg" data-srcset="https://media.gody.vn/images/kuala-lumpur/cao-nguyen-genting-genting-highlands//e987a7f6945d992c9b8c7528a29d45b52f35bc58.jpg" class="lazy-load w-fit h-fit object-cover object-center" src="https://media.gody.vn/images/kuala-lumpur/cao-nguyen-genting-genting-highlands//e987a7f6945d992c9b8c7528a29d45b52f35bc58.jpg"
                                     srcset="https://media.gody.vn/images/kuala-lumpur/cao-nguyen-genting-genting-highlands//e987a7f6945d992c9b8c7528a29d45b52f35bc58.jpg">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; " src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/kuala-lumpur/cao-nguyen-genting-genting-highlands" class="fc-white fs-18 fw-700">
                                        Cao nguyên genting (genting highlands)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/bac-ninh/den-ba-chua-kho//83d4e90ee0d5da4eef0c6edc64defb8ee8e8568d.jpg" data-srcset="https://media.gody.vn/images/bac-ninh/den-ba-chua-kho//83d4e90ee0d5da4eef0c6edc64defb8ee8e8568d.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/bac-ninh/den-ba-chua-kho" class="fc-white fs-18 fw-700">
                                        Đền bà chúa kho
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/trung-khanh/dong-phu-dung//2dd758fd44125367b0f85ad256eaafee4e58638a.jpg" data-srcset="https://media.gody.vn/images/trung-khanh/dong-phu-dung//2dd758fd44125367b0f85ad256eaafee4e58638a.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/trung-khanh/dong-phu-dung" class="fc-white fs-18 fw-700">
                                        Động phù dung
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/torino/dai-hoc-turin-khu-hoc-xa-luigi-einaudi-university-of-turin-campus-luigi-einaudi/b74175c8f62bb7f9e815ebb75471bc0ea11451e3.jpg" data-srcset="https://media.gody.vn/images/torino/dai-hoc-turin-khu-hoc-xa-luigi-einaudi-university-of-turin-campus-luigi-einaudi/b74175c8f62bb7f9e815ebb75471bc0ea11451e3.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/torino/dai-hoc-turin-khu-hoc-xa-luigi-einaudi-university-of-turin-campus-luigi-einaudi" class="fc-white fs-18 fw-700">
                                        Đại học turin- khu học xá luigi einaudi (university of turin - campus luigi einaudi)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/torino/lau-dai-valentino-castello-del-valentino/2d36291808a897cbd6aa951788f2c661c8e84265.jpg" data-srcset="https://media.gody.vn/images/torino/lau-dai-valentino-castello-del-valentino/2d36291808a897cbd6aa951788f2c661c8e84265.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/torino/lau-dai-valentino-castello-del-valentino" class="fc-white fs-18 fw-700">
                                        Lâu đài valentino (castello del valentino)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/torino/quang-tuong-castello-piazza-castello/289dd7cd043cb178a15db589d3b86e6de244707c.jpg" data-srcset="https://media.gody.vn/images/torino/quang-tuong-castello-piazza-castello/289dd7cd043cb178a15db589d3b86e6de244707c.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/torino/quang-tuong-castello-piazza-castello" class="fc-white fs-18 fw-700">
                                        Quảng tường castello (piazza castello)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/torino/cung-dien-hoang-gia-torino-palazzo-reale-torino/cf4f4b6e8b92fbe8c517aba5a9f3f3ad75118ace.jpg" data-srcset="https://media.gody.vn/images/torino/cung-dien-hoang-gia-torino-palazzo-reale-torino/cf4f4b6e8b92fbe8c517aba5a9f3f3ad75118ace.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/torino/cung-dien-hoang-gia-torino-palazzo-reale-torino" class="fc-white fs-18 fw-700">
                                        Cung điện hoàng gia torino (palazzo reale torino)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/bac-kinh/water-cube/72e541e1c5484f8efbd90c2f7d1dadfb403cd291.jpg" data-srcset="https://media.gody.vn/images/bac-kinh/water-cube/72e541e1c5484f8efbd90c2f7d1dadfb403cd291.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/bac-kinh/water-cube" class="fc-white fs-18 fw-700">
                                        Water cube
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/bac-kinh/den-thien-dang/7ce6bba917a3760c184ad7a76733144a2e2e7c8d.jpg" data-srcset="https://media.gody.vn/images/bac-kinh/den-thien-dang/7ce6bba917a3760c184ad7a76733144a2e2e7c8d.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/bac-kinh/den-thien-dang" class="fc-white fs-18 fw-700">
                                        Đền thiên Đàng
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/hang-chau/bao-tang-to-lua-trung-quoc/5a618c925b6d105957f9266066d4d7a940c34b5b.jpg" data-srcset="https://media.gody.vn/images/hang-chau/bao-tang-to-lua-trung-quoc/5a618c925b6d105957f9266066d4d7a940c34b5b.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/hang-chau/bao-tang-to-lua-trung-quoc" class="fc-white fs-18 fw-700">
                                        Bảo tàng tơ lụa trung quốc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/jeju/dai-da-ven-bien-jungmun-daepo-jungmun-daepo-coast-jusangjeolli-cliff/24c340a92acde3ef1541ce32c3f710b798fe8bf5.jpg" data-srcset="https://media.gody.vn/images/jeju/dai-da-ven-bien-jungmun-daepo-jungmun-daepo-coast-jusangjeolli-cliff/24c340a92acde3ef1541ce32c3f710b798fe8bf5.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/jeju/dai-da-ven-bien-jungmun-daepo-jungmun-daepo-coast-jusangjeolli-cliff" class="fc-white fs-18 fw-700">
                                        Dải đá ven biển jungmun daepo (jungmun daepo coast jusangjeolli cliff)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/jeju/bai-bien-cat-den-samyang-samyang-black-sand-beach/f23784b0259377143f4d972b38470dd72868c0d4.jpg" data-srcset="https://media.gody.vn/images/jeju/bai-bien-cat-den-samyang-samyang-black-sand-beach/f23784b0259377143f4d972b38470dd72868c0d4.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/jeju/bai-bien-cat-den-samyang-samyang-black-sand-beach" class="fc-white fs-18 fw-700">
                                        Bãi biển cát đen samyang (samyang black sand beach)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/ho-chi-minh/cong-vien-rin-rin-rin-rin-park/350550d5c0eb68fb4081bddf9aa7bfd0a7ea447a.jpg" data-srcset="https://media.gody.vn/images/ho-chi-minh/cong-vien-rin-rin-rin-rin-park/350550d5c0eb68fb4081bddf9aa7bfd0a7ea447a.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/ho-chi-minh/cong-vien-rin-rin-rin-rin-park" class="fc-white fs-18 fw-700">
                                        Công viên rin rin (rin rin park)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/amsterdam/cong-vien-amstel-amstelpark/8494bac6a8fa194b1953c389968b4adf8d26f0d0.jpg" data-srcset="https://media.gody.vn/images/amsterdam/cong-vien-amstel-amstelpark/8494bac6a8fa194b1953c389968b4adf8d26f0d0.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/amsterdam/cong-vien-amstel-amstelpark" class="fc-white fs-18 fw-700">
                                        Công viên amstel (amstelpark)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/mandalay/tuong-phat-om-skinny-buddha/a51af3bceb0cc4a5c6b4200b8e3aba6598656e67.jpg" data-srcset="https://media.gody.vn/images/mandalay/tuong-phat-om-skinny-buddha/a51af3bceb0cc4a5c6b4200b8e3aba6598656e67.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/mandalay/tuong-phat-om-skinny-buddha" class="fc-white fs-18 fw-700">
                                        Tượng phật ốm (skinny buddha)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media2.gody.vn/public/images/place/cho-ho-thi-ky/61aa4b3cabfd4-1638550332.jpeg" data-srcset="https://media2.gody.vn/public/images/place/cho-ho-thi-ky/61aa4b3cabfd4-1638550332.jpeg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/ho-chi-minh/cho-ho-thi-ky" class="fc-white fs-18 fw-700">
                                        Chợ hồ thị kỷ
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media2.gody.vn/public/images/place/ho-da-ton/61c1a225b7080-1640079909.jpeg" data-srcset="https://media2.gody.vn/public/images/place/ho-da-ton/61c1a225b7080-1640079909.jpeg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/dong-nai/ho-da-ton" class="fc-white fs-18 fw-700">
                                        Hồ Đa tôn
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media2.gody.vn/public/images/place/bai-bo-thon-binh-lap/61c2a4af47ce5-1640146095.jpeg" data-srcset="https://media2.gody.vn/public/images/place/bai-bo-thon-binh-lap/61c2a4af47ce5-1640146095.jpeg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/viet-nam/khanh-hoa/bai-bo-thon-binh-lap" class="fc-white fs-18 fw-700">
                                        Bãi bô thôn bình lập
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="w-fit d-block pb-10">
        <div class="w-fit d-block px-20">
            <a class="w-fit d-block fc-black fw-700 fs-26 lh-24" href="{{url('/')}}/diem-den/chau-a/viet-nam/khanh-hoa/bai-bo-thon-binh-lap">Top 10 điểm du lịch nước ngoài</a>
        </div>
        <div class="w-fit d-block p-20">
            <div class="w-fit d-flex horizontal-scrolling overflow-x-auto">
                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/siem-reap/quan-the-den-roluos-roluos-temples/da66cb2126ac971ca8c1bd43d3a59d75c073d899.jpg" data-srcset="https://media.gody.vn/images/siem-reap/quan-the-den-roluos-roluos-temples/da66cb2126ac971ca8c1bd43d3a59d75c073d899.jpg" class="lazy-load w-fit h-fit object-cover object-center" src="https://media.gody.vn/images/siem-reap/quan-the-den-roluos-roluos-temples/da66cb2126ac971ca8c1bd43d3a59d75c073d899.jpg"
                                     srcset="https://media.gody.vn/images/siem-reap/quan-the-den-roluos-roluos-temples/da66cb2126ac971ca8c1bd43d3a59d75c073d899.jpg">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; " src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/campuchia" class="fc-white fs-18 fw-700">
                                        Campuchia
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn//images/hong-kong/victoria-peak/11-2016/20161117064823-victoria-peak-hong-kong-gody (12).jpg" data-srcset="https://media.gody.vn//images/hong-kong/victoria-peak/11-2016/20161117064823-victoria-peak-hong-kong-gody (12).jpg" class="lazy-load w-fit h-fit object-cover object-center" src="https://media.gody.vn//images/hong-kong/victoria-peak/11-2016/20161117064823-victoria-peak-hong-kong-gody (12).jpg"
                                     srcset="https://media.gody.vn//images/hong-kong/victoria-peak/11-2016/20161117064823-victoria-peak-hong-kong-gody (12).jpg">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; " src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/hong-kong" class="fc-white fs-18 fw-700">
                                        Hong kong
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/thien-tan/thu-vien-thien-tan-binh-hai//40981bc1935da9328703e427483484ab82b212e9.jpg" data-srcset="https://media.gody.vn/images/thien-tan/thu-vien-thien-tan-binh-hai//40981bc1935da9328703e427483484ab82b212e9.jpg" class="lazy-load w-fit h-fit object-cover object-center" src="https://media.gody.vn/images/thien-tan/thu-vien-thien-tan-binh-hai//40981bc1935da9328703e427483484ab82b212e9.jpg"
                                     srcset="https://media.gody.vn/images/thien-tan/thu-vien-thien-tan-binh-hai//40981bc1935da9328703e427483484ab82b212e9.jpg">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; " src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/trung-quoc" class="fc-white fs-18 fw-700">
                                        China (trung quốc)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/naples/bao-tang-khao-co-quoc-gia-naples-museo-archeologico-nazionale//eec8f775e7d9ebad6aaab188905c7eec856e29b0.jpg" data-srcset="https://media.gody.vn/images/naples/bao-tang-khao-co-quoc-gia-naples-museo-archeologico-nazionale//eec8f775e7d9ebad6aaab188905c7eec856e29b0.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-au/italia-y" class="fc-white fs-18 fw-700">
                                        Italia (Ý)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn//images/hinh-tong-hop/kdl-ho-may-park-vung-tau-gody/12-2018/74117390-20181227074238-hinh-tong-hop-kdl-ho-may-park-vung-tau-gody.jpg" data-srcset="https://media.gody.vn//images/hinh-tong-hop/kdl-ho-may-park-vung-tau-gody/12-2018/74117390-20181227074238-hinh-tong-hop-kdl-ho-may-park-vung-tau-gody.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-au/ao" class="fc-white fs-18 fw-700">
                                        Austria (Áo)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn//images/athens/thanh-co-athens/2-2018/thumbs550//27152568-20180224030714-athens-thanh-co-athens.jpg" data-srcset="https://media.gody.vn//images/athens/thanh-co-athens/2-2018/thumbs550//27152568-20180224030714-athens-thanh-co-athens.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-au/hy-lap" class="fc-white fs-18 fw-700">
                                        Hy lạp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn//images/hinh-tong-hop/huong-dan-cach-xin-visa-han-quoc-gody/12-2018/83851783-20181225082206-hinh-tong-hop-huong-dan-cach-xin-visa-han-quoc-gody.jpg" data-srcset="https://media.gody.vn//images/hinh-tong-hop/huong-dan-cach-xin-visa-han-quoc-gody/12-2018/83851783-20181225082206-hinh-tong-hop-huong-dan-cach-xin-visa-han-quoc-gody.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-a/qatar" class="fc-white fs-18 fw-700">
                                        Qatar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn//images/hinh-tong-hop/kdl-ho-may-park-vung-tau-gody/12-2018/81896570-20181227090644-hinh-tong-hop-kdl-ho-may-park-vung-tau-gody.jpg" data-srcset="https://media.gody.vn//images/hinh-tong-hop/kdl-ho-may-park-vung-tau-gody/12-2018/81896570-20181227090644-hinh-tong-hop-kdl-ho-may-park-vung-tau-gody.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-au/belarus" class="fc-white fs-18 fw-700">
                                        Belarus
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn//images/hinh-tong-hop/bhutan/12-2018/123534753-20181228040737-hinh-tong-hop-bhutan.jpg" data-srcset="https://media.gody.vn//images/hinh-tong-hop/bhutan/12-2018/123534753-20181228040737-hinh-tong-hop-bhutan.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-au/czech-republic" class="fc-white fs-18 fw-700">
                                        Czech (cộng hoà séc)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn//images/hinh-tong-hop/dao-nam-du-tong-hop/4-2019/110445802-20190403072049-hinh-tong-hop-dao-nam-du-tong-hop.jpg" data-srcset="https://media.gody.vn//images/hinh-tong-hop/dao-nam-du-tong-hop/4-2019/110445802-20190403072049-hinh-tong-hop-dao-nam-du-tong-hop.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-au/Denmark" class="fc-white fs-18 fw-700">
                                        Đan mạch
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/athens/bao-tang-lich-su-quoc-gia-national-historical-museum/595d42897431be3fdf3b1f965c7623c05f924242.jpg" data-srcset="https://media.gody.vn/images/athens/bao-tang-lich-su-quoc-gia-national-historical-museum/595d42897431be3fdf3b1f965c7623c05f924242.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-au/greece" class="fc-white fs-18 fw-700">
                                        Greece (hy lạp)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn//images/hinh-tong-hop/hinh-banner-gody/12-2018/112696028-20181220104653-hinh-tong-hop-hinh-banner-gody.jpg" data-srcset="https://media.gody.vn//images/hinh-tong-hop/hinh-banner-gody/12-2018/112696028-20181220104653-hinh-tong-hop-hinh-banner-gody.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-au/poland" class="fc-white fs-18 fw-700">
                                        Poland (ba lan)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/kherson/bao-tang-nghe-thuat-khu-vuc-kherson-kherson-regional-art-museum/c251ff9fd472751457586de074cf23e8724307ae.jpg" data-srcset="https://media.gody.vn/images/kherson/bao-tang-nghe-thuat-khu-vuc-kherson-kherson-regional-art-museum/c251ff9fd472751457586de074cf23e8724307ae.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-au/Ukraine" class="fc-white fs-18 fw-700">
                                        Ukraine (ukraina)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-x-3 mr-15 bar-8" style="
                min-width: calc(100% / 3 + 10px) !important;
                height: 176px;
                overflow: hidden;
            ">
                    <div class="col-x-3 mr-15 w-fit h-fit">
                        <div class="bar-8 w-fit h-fit">
                            <div class="w-fit h-fit d-block ps-relative">
                                <img data-src="https://media.gody.vn/images/vatican-city/quang-truong-belvedere-cortile-del-belvedere/720c468144509b7de98019ac95aa7e1dd1078cbc.jpg" data-srcset="https://media.gody.vn/images/vatican-city/quang-truong-belvedere-cortile-del-belvedere/720c468144509b7de98019ac95aa7e1dd1078cbc.jpg" class="lazy-load w-fit h-fit object-cover object-center">
                                <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; ">
                                <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                                    <a href="{{url('/')}}/diem-den/chau-au/vatican" class="fc-white fs-18 fw-700">
                                        Vatican
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
@endsection()
