@extends('layouts.default')
@section('content')
    <link rel="stylesheet" href="https://gody.vn/public/v7/css/post-detail.css?v=1237">
    <section class="p-0 m-0">
        <div class="container mt-10">
            <div class="list-menu ps-relative">
                <div class="dropdown z-8">
                <span class="dropbtn pr-0 mr-5" style="padding-left: 0px; margin-left: 0px">
                    <a href="{{ url('/') }}" class="fs-16 fw-600 fc-fourteenth h:fc-primary">Du lịch</a>
                </span>
                </div>
                <i aria-hidden="true" class="fa fa-angle-right "></i>
                <div class="dropdown z-8">
                <span class="dropbtn" style="padding-left: 0px; margin-left: 5px">
                    <a class="fs-16 fw-600 fc-primary tt-capitalize">Tin tức</a>
                </span>
                </div>
            </div>
        </div>
    </section>
    <div class="w-fit d-block overflow-hidden bg-white post pl-20 pr-20 pb-5 pt-10 mt-10">
        <h1 class="d-block w-fit fw-600 fc-black p-0 m-0 fs-28 lh-34">{{ $blog->title }}</h1>
        <div class="d-flex ai-center jc-space-between fw-wrap  py-10">
            <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
        <span target="_blank" class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-8 fc-sixth">
          <a class="fc-nineth" href="{{ url('/') }}">
            <img src="https://graph.facebook.com/v2.8/1110153672468755/picture?type=normal" class="w-fit h-fit object-cover object-center bar-circle">
          </a>
        </span>
                <div class="fl-1">
          <span class="fc-nineth d-inline-block va-middle d-truncate td-none outline-none fs-14 fw-600 d-wmx-135 xs:wmx-auto">
                        <span class="fc-nineth">{{ $blog->author_name }}</span>
                        <span class="p-10">
              <img src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/dot.png">
            </span>
            <span class="fs-14 fw-400 lh-25" style="color: #828282;">{{ date('D, d/m/Y', $blog->published_at) }}</span>
          </span>
                </div>
            </div>
        </div>
        <div class="post-description fw-600 ">{{ $blog->excerpt }}</div>
        <div class="block-content">
            <?php echo html_entity_decode($blog->content) ?>
        </div>
    </div>
    <div class="mt-20">
        <div class="bar-8 ps-relative bg-white overflow-hidden xs:bar-0">
            <div class="bbrr-8 fc-white fs-20 fw-600 py-10 pl-25 pr-35 bg-primary mb-20 d-inline-block xs:mb-10">
                Tin tài trợ
            </div>
            <div class="d-flex ai-top jc-center px-12 mt-8 mb-30 xs:mt-10 xs:px-16 xs:mb-20">
                <div class="ps-relative fl-1 px-12 d-flex fd-column pt-12 bar-8 t-all t-duration-slow xs:px-4 h:bg-grayf2">
                    <div class="bar-8 h-140 xs:h-100">
                        <img src="https://media2.gody.vn/public/mytravelmap/images/2016/12/6/nguyen_tu_7a/74a5da505cd83cc223ec8485beb0d63a.jpg" class="w-fit h-fit object-cover object-center bar-8" alt="Dịch vụ làm mới &amp; làm lại hộ chiếu">
                    </div>
                    <div class="fl-1">
                        <p class="fc-nineth fw-600 mt-16 mb-0 fs-16 truncate-line lineclamp3 xs:fs-14">Dịch vụ làm mới &amp; làm lại hộ chiếu</p>
                        <p class="fc-fourteenth mt-5 mb-0 fs-14__5 truncate-line lineclamp2 xs:d-none">Nhanh, uy tín, online, giá rẻ</p>
                    </div>

                    <a href="{{url('/')}}/ho-chieu?utm_source=sponsored&amp;utm_medium=sponsored.posts&amp;utm_campaign=sponsored&amp;utm_id=sponsored.posts&amp;utm_content=blog_details" class="ps-absolute t0 r0 b0 l0 d-block bar-8" style="text-indent: -999px;" target="_blank">Dịch vụ làm mới &amp; làm lại hộ chiếu</a>
                </div>
                <div class="ps-relative fl-1 px-12 d-flex fd-column pt-12 bar-8 t-all t-duration-slow xs:px-4 h:bg-grayf2">
                    <div class="bar-8 h-140 xs:h-100">
                        <img src="https://media2.gody.vn/public/mytravelmap/images/2016/12/6/nguyen_tu_7a/5dc303350885666062ac109c914dc1da.jpg" class="w-fit h-fit object-cover object-center bar-8" alt="Bảo hiểm du lịch trong nước &amp; nước ngoài">
                    </div>
                    <div class="fl-1">
                        <p class="fc-nineth fw-600 mt-16 mb-0 fs-16 truncate-line lineclamp3 xs:fs-14">Bảo hiểm du lịch trong nước &amp; nước ngoài</p>
                        <p class="fc-fourteenth mt-5 mb-0 fs-14__5 truncate-line lineclamp2 xs:d-none">Đặt mua bảo hiểm du lịch online, đơn giản </p>
                    </div>

                    <a href="{{url('/')}}/bao-hiem-du-lich?utm_source=sponsored&amp;utm_medium=sponsored.posts&amp;utm_campaign=sponsored&amp;utm_id=sponsored.posts&amp;utm_content=blog_details" class="ps-absolute t0 r0 b0 l0 d-block bar-8" style="text-indent: -999px;" target="_blank">Bảo hiểm du lịch trong nước &amp; nước ngoài</a>
                </div>
                <div class="ps-relative fl-1 px-12 d-flex fd-column pt-12 bar-8 t-all t-duration-slow xs:px-4 h:bg-grayf2">
                    <div class="bar-8 h-140 xs:h-100">
                        <img src="https://media2.gody.vn/public/mytravelmap/images/2016/12/6/nguyen_tu_7a/cf24a4597bc50648c4ca5f4f921cfe57.jpg" class="w-fit h-fit object-cover object-center bar-8" alt="Dịch vụ visa">
                    </div>
                    <div class="fl-1">
                        <p class="fc-nineth fw-600 mt-16 mb-0 fs-16 truncate-line lineclamp3 xs:fs-14">Dịch vụ visa</p>
                        <p class="fc-fourteenth mt-5 mb-0 fs-14__5 truncate-line lineclamp2 xs:d-none">Hồ sơ đơn giản, tỷ lệ đậu visa cao lên tới 99%</p>
                    </div>

                    <a href="{{url('/')}}/visa?utm_source=sponsored&amp;utm_medium=sponsored.posts&amp;utm_campaign=sponsored&amp;utm_id=sponsored.posts&amp;utm_content=blog_details" class="ps-absolute t0 r0 b0 l0 d-block bar-8" style="text-indent: -999px;" target="_blank">Dịch vụ visa</a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-fit d-block mt-20">
        <div class="w-fit d-block pl-20 ">
            <span class="fc-black fs-26 fw-700">Bài viết liên quan</span>
        </div>
        <div class="w-fit d-block bg-white mt-10">
            <div class="w-fit mb-5 pl-20 pt-10 pr-20 pb-10 box-shadow-1">
                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                    <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                        <a href="{{url('/')}}/du-lich/kinh-nghiem-du-lich-nam-cat-tien-chi-tiet-day-du-cap-nhat-11008" class="d-block w-fit h-fit ps-relative" target="">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/169e88ac5469a81134cfe5055af3852e10b93731.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/169e88ac5469a81134cfe5055af3852e10b93731.jpeg" alt="Kinh nghiệm du lịch Nam Cát Tiên chi tiết, đầy đủ, cập nhật" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/169e88ac5469a81134cfe5055af3852e10b93731.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/169e88ac5469a81134cfe5055af3852e10b93731.jpeg">
                        </a>
                    </div>
                    <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                        <div class="_i-content-t">
                            <a href="{{url('/')}}/du-lich/kinh-nghiem-du-lich-nam-cat-tien-chi-tiet-day-du-cap-nhat-11008" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                Kinh nghiệm du lịch Nam Cát Tiên chi tiết, đầy đủ, cập nhật
                            </a>
                        </div>
                        <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">Một trong những khu du lịch có hệ sinh thái đa dạng bậc nhất Việt Nam chính là vườn quốc gia Nam Cát Tiên. Vì thế nơi đây là điểm đến rất thích hợp với những ai muốn khám phá thế giới thiên nhiên hoang dã cùng các trải nghiệm mới lạ. Dưới đây là những kinh nghiệm du lịch Nam Cát Tiên chi tiết, đầy đủ các thông tin cần thiết để du khách có thể tham khảo cho chuyến đi sắp đến của mình.</span>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
            <div class="w-fit mb-5 pl-20 pt-10 pr-20 pb-10 box-shadow-1">
                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                    <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                        <a href="{{url('/')}}/du-lich/du-lich-singapore-thang-6-thoi-tiet-su-kien-le-hoi-di-dau-lam-gi-11002" class="d-block w-fit h-fit ps-relative" target="">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/e4eb441604fb66109d7b40ade1a57ca0feb7d06b.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/e4eb441604fb66109d7b40ade1a57ca0feb7d06b.jpeg" alt="Du lịch Singapore tháng 6: thời tiết, sự kiện lễ hội, đi đâu làm gì?" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/e4eb441604fb66109d7b40ade1a57ca0feb7d06b.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/e4eb441604fb66109d7b40ade1a57ca0feb7d06b.jpeg">
                        </a>
                    </div>
                    <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                        <div class="_i-content-t">
                            <a href="{{url('/')}}/du-lich/du-lich-singapore-thang-6-thoi-tiet-su-kien-le-hoi-di-dau-lam-gi-11002" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                Du lịch Singapore tháng 6: thời tiết, sự kiện lễ hội, đi đâu làm gì?
                            </a>
                        </div>
                        <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">Tháng 6 là thời điểm vào hè, rất nhiều du khách Việt Nam lựa chọn Singapore để đi du lịch. Đến với Singapore trong tháng 6, du khách sẽ có dịp được trải nghiệm thành phố hiện đại, khám những nền văn hóa khác nhau và thưởng thức các món ăn đặc sắc.</span>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
            <div class="w-fit mb-5 pl-20 pt-10 pr-20 pb-10 box-shadow-1">
                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                    <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                        <a href="{{url('/')}}/du-lich/du-lich-han-quoc-thang-5-thoi-tiet-su-kien-le-hoi-di-dau-lam-gi-11001" class="d-block w-fit h-fit ps-relative" target="">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/730988b03604176adb7ba90b3421352ff814083d.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/730988b03604176adb7ba90b3421352ff814083d.jpeg" alt="Du lịch Hàn Quốc tháng 5: thời tiết, sự kiện lễ hội, đi đâu, làm gì?" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/730988b03604176adb7ba90b3421352ff814083d.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/730988b03604176adb7ba90b3421352ff814083d.jpeg">
                        </a>
                    </div>
                    <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                        <div class="_i-content-t">
                            <a href="{{url('/')}}/du-lich/du-lich-han-quoc-thang-5-thoi-tiet-su-kien-le-hoi-di-dau-lam-gi-11001" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                Du lịch Hàn Quốc tháng 5: thời tiết, sự kiện lễ hội, đi đâu, làm gì?
                            </a>
                        </div>
                        <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">Hàn Quốc vào tháng 5 sẽ mang trong mình hơi thở của mùa xuân ngọt ngào nhất, đây là một trong những tháng cực kỳ lý tưởng để du khách đến thăm xứ sở kim chi. Khi mà Hàn Quốc tràn đầy ánh nắng ấm áp, nhiệt độ chỉ vừa se lạnh dễ chịu, bầu không khí yên tĩnh cùng phong cảnh đẹp như tranh vẽ. Tháng 5 mang hoa và nắng đến Hàn Quốc, khắp mọi nẻo đường nơi đây du khách đều có thể bắt gặp hoa hồng nở rộ, bầu trời thì trong xanh, mùa này Hàn Quốc thật đẹp.</span>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
            <div class="w-fit mb-5 pl-20 pt-10 pr-20 pb-10 box-shadow-1">
                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                    <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                        <a href="{{url('/')}}/du-lich/thai-lan-hop-phap-hoa-can-sa-nhung-dieu-du-khach-nen-biet-khi-su-dung-10975" class="d-block w-fit h-fit ps-relative" target="">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/25c7b7b6a6d22fbe1a7d2c88ac656611af0de151.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/25c7b7b6a6d22fbe1a7d2c88ac656611af0de151.jpeg" alt="Thái Lan hợp pháp hoá cần sa: những điều du khách nên biết khi sử dụng" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/25c7b7b6a6d22fbe1a7d2c88ac656611af0de151.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/25c7b7b6a6d22fbe1a7d2c88ac656611af0de151.jpeg">
                        </a>
                    </div>
                    <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                        <div class="_i-content-t">
                            <a href="{{url('/')}}/du-lich/thai-lan-hop-phap-hoa-can-sa-nhung-dieu-du-khach-nen-biet-khi-su-dung-10975" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                Thái Lan hợp pháp hoá cần sa: những điều du khách nên biết khi sử dụng
                            </a>
                        </div>
                        <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">Bộ Y tế Công cộng Thái Lan đã ban hành một tài liệu hướng dẫn có tiêu đề “ 10 điều khách du lịch cần biết về cần sa ở Thái Lan” để giúp khách du lịch biết và sử dụng cần sa đúng và hợp pháp khi đến Thái Lan.</span>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
            <div class="w-fit mb-5 pl-20 pt-10 pr-20 pb-10 box-shadow-1">
                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                    <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                        <a href="{{url('/')}}/du-lich/kinh-nghiem-tham-quan-jewel-san-bay-changi-singapore-10897" class="d-block w-fit h-fit ps-relative" target="">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/66b1ca6c378d74fb3eb47c8ede65ff62d9683fcd.jpg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/66b1ca6c378d74fb3eb47c8ede65ff62d9683fcd.jpg" alt="Kinh nghiệm tham quan Jewel, sân bay Changi, Singapore" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/66b1ca6c378d74fb3eb47c8ede65ff62d9683fcd.jpg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/66b1ca6c378d74fb3eb47c8ede65ff62d9683fcd.jpg">
                        </a>
                    </div>
                    <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                        <div class="_i-content-t">
                            <a href="{{url('/')}}/du-lich/kinh-nghiem-tham-quan-jewel-san-bay-changi-singapore-10897" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                Kinh nghiệm tham quan Jewel, sân bay Changi, Singapore
                            </a>
                        </div>
                        <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">Là nơi đầu tiên mà du khách đặt chân trong chuyến du lịch Singapore, sân bay Changi được đầu tư xây dựng vô cùng hoành tráng, hiện đại. Và gần nhất thì Changi ở Singapore đã ra mắt khu Jewel Changi. Đây không phải là cảng hàng không để đón khách mà Jewel Changi là khu phức hợp vui chơi, mua sắm, tham quan lẫn nghỉ ngơi. Kinh nghiệm du lịch Jewel Changi ở Singapore sẽ giúp bạn biết được lý do vì sao địa điểm này lại “hot” đến như vậy, được nhiều khách du lịch yêu thích và muốn đến tham quan khi du lịch Singapore</span>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
            <div class="w-fit mb-5 pl-20 pt-10 pr-20 pb-10 box-shadow-1">
                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                    <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                        <a href="{{url('/')}}/du-lich/apple-airtag-la-thu-ma-moi-du-khach-nen-co-khi-di-du-lich-10789" class="d-block w-fit h-fit ps-relative" target="">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/003b1931c1c3d542727e04d68eabcecdb198035d.jpg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/003b1931c1c3d542727e04d68eabcecdb198035d.jpg" alt="Apple AirTag là thứ mà mỗi du khách nên có khi đi du lịch" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/003b1931c1c3d542727e04d68eabcecdb198035d.jpg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/003b1931c1c3d542727e04d68eabcecdb198035d.jpg">
                        </a>
                    </div>
                    <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                        <div class="_i-content-t">
                            <a href="{{url('/')}}/du-lich/apple-airtag-la-thu-ma-moi-du-khach-nen-co-khi-di-du-lich-10789" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                Apple AirTag là thứ mà mỗi du khách nên có khi đi du lịch
                            </a>
                        </div>
                        <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">AirTag - một thiết bị công nghệ dùng để định vị của hãng Apple, nó đang trở thành một phụ kiện được nhiều khách du lịch yêu thích sử dụng trong các chuyến du lịch của họ. Nó giúp cho du khách theo dõi và có thể tìm lại được hành lý thất lạc, đồng thời có thể chủ động được thời gian khi phải chờ hành lý ở sân bay.</span>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
            <div class="w-fit mb-5 pl-20 pt-10 pr-20 pb-10 box-shadow-1">
                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                    <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                        <a href="{{url('/')}}/du-lich/kinh-nghiem-du-lich-han-quoc-thang-1-10766" class="d-block w-fit h-fit ps-relative" target="">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/526cfa8f4a61ffc8f4b88cc596ed230fe55e686c.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/526cfa8f4a61ffc8f4b88cc596ed230fe55e686c.jpeg" alt="Kinh nghiệm du lịch Hàn Quốc tháng 1" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/526cfa8f4a61ffc8f4b88cc596ed230fe55e686c.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/526cfa8f4a61ffc8f4b88cc596ed230fe55e686c.jpeg">
                        </a>
                    </div>
                    <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                        <div class="_i-content-t">
                            <a href="{{url('/')}}/du-lich/kinh-nghiem-du-lich-han-quoc-thang-1-10766" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                Kinh nghiệm du lịch Hàn Quốc tháng 1
                            </a>
                        </div>
                        <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">Với những ai là “Fan ruột” phim tình cảm Hàn Quốc chắc hẳn vẻ đẹp của mùa Đông không còn quá xa lạ. Mùa Đông tại Hàn Quốc mang một sự lãng mạn riêng mà khi nghĩ đến không phải là cái lạnh buốt mà là sự ấm áp từ trong tâm hồn. Du lịch Hàn Quốc tháng 1 chính là thời điểm tốt nhất cho du khách trải nghiệm tuyết trắng xóa cả vùng đất.</span>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-fit d-block">
        <div class="w-fit d-block pl-20 mt-20">
            <span class="fc-black fs-26 fw-700">Có thể bạn quan tâm</span>
        </div>
        <div class="w-fit d-block mt-10 pl-20 pr-20 pb-20">
            <div class="d-block pb-10 mb-10 gb-item-border w-fit box-shadow-1">
                <div class="ps-relative overflow-hidden xs:p-0">
                    <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                        <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                            <a href="{{url('/')}}/du-lich/tu-922023-nhap-canh-brunei-phai-dien-e-arrival-card-10848" class="d-block w-fit h-fit">
                                <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/765f357c1e11c7f8ba31147fde34462b9f706887.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/765f357c1e11c7f8ba31147fde34462b9f706887.jpeg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="Từ 9/2/2023: nhập cảnh Brunei phải điền E-Arrival Card"
                                     src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/765f357c1e11c7f8ba31147fde34462b9f706887.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/765f357c1e11c7f8ba31147fde34462b9f706887.jpeg">
                            </a>
                        </div>
                        <div class="fl-1 ml-20 ps-relative c-pointer">
                            <span class="w-fit d-block fc-primary fs-14 fw-600"></span>
                            <div class="_i-content-t">
                                <a href="{{url('/')}}/du-lich/tu-922023-nhap-canh-brunei-phai-dien-e-arrival-card-10848" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">Từ 9/2/2023: nhập cảnh Brunei phải điền E-Arrival Card</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block pb-10 mb-10 gb-item-border w-fit box-shadow-1">
                <div class="ps-relative overflow-hidden xs:p-0">
                    <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                        <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                            <a href="{{url('/')}}/du-lich/bali-se-cam-khach-du-lich-thue-xe-may-10911" class="d-block w-fit h-fit">
                                <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/c5ce094c8069069fb2f6d431585a1643a5a4fa97.jpg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/c5ce094c8069069fb2f6d431585a1643a5a4fa97.jpg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="Bali sẽ cấm khách du lịch thuê xe máy"
                                     src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/c5ce094c8069069fb2f6d431585a1643a5a4fa97.jpg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/c5ce094c8069069fb2f6d431585a1643a5a4fa97.jpg">
                            </a>
                        </div>
                        <div class="fl-1 ml-20 ps-relative c-pointer">
                            <span class="w-fit d-block fc-primary fs-14 fw-600"></span>
                            <div class="_i-content-t">
                                <a href="{{url('/')}}/du-lich/bali-se-cam-khach-du-lich-thue-xe-may-10911" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">Bali sẽ cấm khách du lịch thuê xe máy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block pb-10 mb-10 gb-item-border w-fit box-shadow-1">
                <div class="ps-relative overflow-hidden xs:p-0">
                    <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                        <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                            <a href="{{url('/')}}/du-lich/tu-62023-thai-lan-se-thu-phi-nhap-canh-doi-voi-du-khach-nuoc-ngoai-10861" class="d-block w-fit h-fit">
                                <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/61576dd7f5158b1a95aed522b5521ebcc21a9911.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/61576dd7f5158b1a95aed522b5521ebcc21a9911.jpeg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="Từ 6/2023: Thái Lan sẽ thu phí nhập cảnh đối với du khách nước ngoài"
                                     src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/61576dd7f5158b1a95aed522b5521ebcc21a9911.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/61576dd7f5158b1a95aed522b5521ebcc21a9911.jpeg">
                            </a>
                        </div>
                        <div class="fl-1 ml-20 ps-relative c-pointer">
                            <span class="w-fit d-block fc-primary fs-14 fw-600"></span>
                            <div class="_i-content-t">
                                <a href="{{url('/')}}/du-lich/tu-62023-thai-lan-se-thu-phi-nhap-canh-doi-voi-du-khach-nuoc-ngoai-10861" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">Từ 6/2023: Thái Lan sẽ thu phí nhập cảnh đối với du khách nước ngoài</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block pb-10 mb-10 gb-item-border w-fit box-shadow-1">
                <div class="ps-relative overflow-hidden xs:p-0">
                    <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                        <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                            <a href="{{url('/')}}/du-lich/ve-may-bay-tet-quy-mao-2023-chieu-lech-khuyen-mai-nhieu-10767" class="d-block w-fit h-fit">
                                <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/8ac078c41c8e7f5d58f8c5f8c5e8eff9ee0a02ad.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/8ac078c41c8e7f5d58f8c5f8c5e8eff9ee0a02ad.jpeg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="Vé máy bay Tết Quý Mão 2023 chiều lệch khuyến mãi nhiều"
                                     src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/8ac078c41c8e7f5d58f8c5f8c5e8eff9ee0a02ad.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/8ac078c41c8e7f5d58f8c5f8c5e8eff9ee0a02ad.jpeg">
                            </a>
                        </div>
                        <div class="fl-1 ml-20 ps-relative c-pointer">
                            <span class="w-fit d-block fc-primary fs-14 fw-600"></span>
                            <div class="_i-content-t">
                                <a href="{{url('/')}}/du-lich/ve-may-bay-tet-quy-mao-2023-chieu-lech-khuyen-mai-nhieu-10767" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">Vé máy bay Tết Quý Mão 2023 chiều lệch khuyến mãi nhiều</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block pb-10 mb-10 gb-item-border w-fit box-shadow-1">
                <div class="ps-relative overflow-hidden xs:p-0">
                    <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                        <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                            <a href="{{url('/')}}/du-lich/trung-quoc-mo-lai-viec-cap-visa-du-lich-cho-du-khach-nuoc-ngoai-co-viet-nam-10904" class="d-block w-fit h-fit">
                                <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7be0469e91530756117521350bd1b58bd9943ffc.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7be0469e91530756117521350bd1b58bd9943ffc.jpeg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="Trung Quốc mở lại việc cấp visa du lịch cho du khách nước ngoài (có Việt Nam)"
                                     src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7be0469e91530756117521350bd1b58bd9943ffc.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7be0469e91530756117521350bd1b58bd9943ffc.jpeg">
                            </a>
                        </div>
                        <div class="fl-1 ml-20 ps-relative c-pointer">
                            <span class="w-fit d-block fc-primary fs-14 fw-600"></span>
                            <div class="_i-content-t">
                                <a href="{{url('/')}}/du-lich/trung-quoc-mo-lai-viec-cap-visa-du-lich-cho-du-khach-nuoc-ngoai-co-viet-nam-10904" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">Trung Quốc mở lại việc cấp visa du lịch cho du khách nước ngoài (có Việt Nam)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block pb-10 mb-10 gb-item-border w-fit box-shadow-1">
                <div class="ps-relative overflow-hidden xs:p-0">
                    <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                        <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                            <a href="{{url('/')}}/du-lich/vietjetair-khuyen-mai-thang-22023-giam-90-gia-ve-10809" class="d-block w-fit h-fit">
                                <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/b15a6faeb4461dccffb0c0b02270fc8c6ae4af03.jpg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/b15a6faeb4461dccffb0c0b02270fc8c6ae4af03.jpg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="VietjetAir khuyến mãi tháng 2/2023: giảm 90% giá vé"
                                     src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/b15a6faeb4461dccffb0c0b02270fc8c6ae4af03.jpg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/b15a6faeb4461dccffb0c0b02270fc8c6ae4af03.jpg">
                            </a>
                        </div>
                        <div class="fl-1 ml-20 ps-relative c-pointer">
                            <span class="w-fit d-block fc-primary fs-14 fw-600"></span>
                            <div class="_i-content-t">
                                <a href="{{url('/')}}/du-lich/vietjetair-khuyen-mai-thang-22023-giam-90-gia-ve-10809" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">VietjetAir khuyến mãi tháng 2/2023: giảm 90% giá vé</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block pb-10 mb-10 gb-item-border w-fit box-shadow-1">
                <div class="ps-relative overflow-hidden xs:p-0">
                    <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                        <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                            <a href="{{url('/')}}/du-lich/cac-nha-hang-dat-sao-michelin-noi-tieng-o-dai-bac-10871" class="d-block w-fit h-fit">
                                <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/379e0c9d0b116c571e19b0c37c39ec39f56c372a.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/379e0c9d0b116c571e19b0c37c39ec39f56c372a.jpeg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="Các nhà hàng đạt sao Michelin nổi tiếng ở Đài Bắc"
                                     src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/379e0c9d0b116c571e19b0c37c39ec39f56c372a.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/379e0c9d0b116c571e19b0c37c39ec39f56c372a.jpeg">
                            </a>
                        </div>
                        <div class="fl-1 ml-20 ps-relative c-pointer">
                            <span class="w-fit d-block fc-primary fs-14 fw-600"></span>
                            <div class="_i-content-t">
                                <a href="{{url('/')}}/du-lich/cac-nha-hang-dat-sao-michelin-noi-tieng-o-dai-bac-10871" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">Các nhà hàng đạt sao Michelin nổi tiếng ở Đài Bắc</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block pb-10 mb-10 gb-item-border w-fit box-shadow-1">
                <div class="ps-relative overflow-hidden xs:p-0">
                    <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                        <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                            <a href="{{url('/')}}/du-lich/trung-quoc-bo-xet-nghiem-covid-19-voi-du-khach-nuoc-ngoai-10770" class="d-block w-fit h-fit">
                                <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/9902e12e2f5060ee2be848caae8f9678c26a8361.jpg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/9902e12e2f5060ee2be848caae8f9678c26a8361.jpg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="Trung Quốc bỏ xét nghiệm COVID-19 với du khách nước ngoài">
                            </a>
                        </div>
                        <div class="fl-1 ml-20 ps-relative c-pointer">
                            <span class="w-fit d-block fc-primary fs-14 fw-600"></span>
                            <div class="_i-content-t">
                                <a href="{{url('/')}}/du-lich/trung-quoc-bo-xet-nghiem-covid-19-voi-du-khach-nuoc-ngoai-10770" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">Trung Quốc bỏ xét nghiệm COVID-19 với du khách nước ngoài</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block pb-10 mb-10 gb-item-border w-fit box-shadow-1">
                <div class="ps-relative overflow-hidden xs:p-0">
                    <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                        <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                            <a href="{{url('/')}}/du-lich/korea-grand-sale-2023-voi-nhieu-uu-dai-va-khuyen-mai-lon-10787" class="d-block w-fit h-fit">
                                <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/84c0015d1099859c69302a142e524fb761c715b7.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/84c0015d1099859c69302a142e524fb761c715b7.jpeg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="Korea Grand Sale 2023 với nhiều ưu đãi và khuyến mãi lớn">
                            </a>
                        </div>
                        <div class="fl-1 ml-20 ps-relative c-pointer">
                            <span class="w-fit d-block fc-primary fs-14 fw-600"></span>
                            <div class="_i-content-t">
                                <a href="{{url('/')}}/du-lich/korea-grand-sale-2023-voi-nhieu-uu-dai-va-khuyen-mai-lon-10787" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">Korea Grand Sale 2023 với nhiều ưu đãi và khuyến mãi lớn</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-fit d-block">
        <div class="w-fit d-block pl-20 mt-0">
            <span class="fc-black fs-26 fw-700">Bài viết mới nhất</span>
        </div>
        <div class="w-fit d-block mt-10 pl-20 pr-20 pb-20">
            <div class="d-flex ai-top fw-wrap jc-space-between" style="--column:2; --gutter: 15px;">
                <div class="ps-relative d-flex fd-column gd-item mb-10 pb-10 box-shadow-1" style="width: calc( (100% - var(--gutter)) / var(--column) ); ">
                    <div class="ps-relative d-flex fd-column">
                        <a href="{{url('/')}}/du-lich/kinh-nghiem-du-lich-nam-cat-tien-chi-tiet-day-du-cap-nhat-11008" class="d-block ps-relative w-fit bar-8 fl-shrink0">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/169e88ac5469a81134cfe5055af3852e10b93731.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/169e88ac5469a81134cfe5055af3852e10b93731.jpeg" class="lazy-load w-fit object-cover object-center bar-8 xs:h-120" height="168px" alt="Kinh nghiệm du lịch Nam Cát Tiên chi tiết, đầy đủ, cập nhật"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/169e88ac5469a81134cfe5055af3852e10b93731.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/169e88ac5469a81134cfe5055af3852e10b93731.jpeg">
                        </a>
                        <div class="bn fl-1 d-flex fd-column py-12">
                            <a href="{{url('/')}}/du-lich/kinh-nghiem-du-lich-nam-cat-tien-chi-tiet-day-du-cap-nhat-11008" class="fs-16 fw-500 truncate-line lineclamp2 fc-nineth xs:fs-16">Kinh nghiệm du lịch Nam Cát Tiên chi tiết, đầy đủ, cập nhật</a>
                        </div>
                    </div>
                </div>
                <div class="ps-relative d-flex fd-column gd-item mb-10 pb-10 box-shadow-1" style="width: calc( (100% - var(--gutter)) / var(--column) ); ">
                    <div class="ps-relative d-flex fd-column">
                        <a href="{{url('/')}}/du-lich/tat-tan-tat-ve-le-hoi-phao-hoa-quoc-te-da-nang-diff-2023-11005" class="d-block ps-relative w-fit bar-8 fl-shrink0">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/c6e3f4c2c771a90fff0b2390d675c405fe23802a.jpg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/c6e3f4c2c771a90fff0b2390d675c405fe23802a.jpg" class="lazy-load w-fit object-cover object-center bar-8 xs:h-120" height="168px" alt="Tất tần tật về Lễ hội Pháo hoa Quốc tế Đà Nẵng (DIFF) 2023"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/c6e3f4c2c771a90fff0b2390d675c405fe23802a.jpg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/c6e3f4c2c771a90fff0b2390d675c405fe23802a.jpg">
                        </a>
                        <div class="bn fl-1 d-flex fd-column py-12">
                            <a href="{{url('/')}}/du-lich/tat-tan-tat-ve-le-hoi-phao-hoa-quoc-te-da-nang-diff-2023-11005" class="fs-16 fw-500 truncate-line lineclamp2 fc-nineth xs:fs-16">Tất tần tật về Lễ hội Pháo hoa Quốc tế Đà Nẵng (DIFF) 2023</a>
                        </div>
                    </div>
                </div>
                <div class="ps-relative d-flex fd-column gd-item mb-10 pb-10 box-shadow-1" style="width: calc( (100% - var(--gutter)) / var(--column) ); ">
                    <div class="ps-relative d-flex fd-column">
                        <a href="{{url('/')}}/du-lich/du-lich-singapore-thang-6-thoi-tiet-su-kien-le-hoi-di-dau-lam-gi-11002" class="d-block ps-relative w-fit bar-8 fl-shrink0">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/e4eb441604fb66109d7b40ade1a57ca0feb7d06b.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/e4eb441604fb66109d7b40ade1a57ca0feb7d06b.jpeg" class="lazy-load w-fit object-cover object-center bar-8 xs:h-120" height="168px" alt="Du lịch Singapore tháng 6: thời tiết, sự kiện lễ hội, đi đâu làm gì?"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/e4eb441604fb66109d7b40ade1a57ca0feb7d06b.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/e4eb441604fb66109d7b40ade1a57ca0feb7d06b.jpeg">
                        </a>
                        <div class="bn fl-1 d-flex fd-column py-12">
                            <a href="{{url('/')}}/du-lich/du-lich-singapore-thang-6-thoi-tiet-su-kien-le-hoi-di-dau-lam-gi-11002" class="fs-16 fw-500 truncate-line lineclamp2 fc-nineth xs:fs-16">Du lịch Singapore tháng 6: thời tiết, sự kiện lễ hội, đi đâu làm gì?</a>
                        </div>
                    </div>
                </div>
                <div class="ps-relative d-flex fd-column gd-item mb-10 pb-10 box-shadow-1" style="width: calc( (100% - var(--gutter)) / var(--column) ); ">
                    <div class="ps-relative d-flex fd-column">
                        <a href="{{url('/')}}/du-lich/du-lich-han-quoc-thang-5-thoi-tiet-su-kien-le-hoi-di-dau-lam-gi-11001" class="d-block ps-relative w-fit bar-8 fl-shrink0">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/730988b03604176adb7ba90b3421352ff814083d.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/730988b03604176adb7ba90b3421352ff814083d.jpeg" class="lazy-load w-fit object-cover object-center bar-8 xs:h-120" height="168px" alt="Du lịch Hàn Quốc tháng 5: thời tiết, sự kiện lễ hội, đi đâu, làm gì?"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/730988b03604176adb7ba90b3421352ff814083d.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/730988b03604176adb7ba90b3421352ff814083d.jpeg">
                        </a>
                        <div class="bn fl-1 d-flex fd-column py-12">
                            <a href="{{url('/')}}/du-lich/du-lich-han-quoc-thang-5-thoi-tiet-su-kien-le-hoi-di-dau-lam-gi-11001" class="fs-16 fw-500 truncate-line lineclamp2 fc-nineth xs:fs-16">Du lịch Hàn Quốc tháng 5: thời tiết, sự kiện lễ hội, đi đâu, làm gì?</a>
                        </div>
                    </div>
                </div>
                <div class="ps-relative d-flex fd-column gd-item mb-10 pb-10 box-shadow-1" style="width: calc( (100% - var(--gutter)) / var(--column) ); ">
                    <div class="ps-relative d-flex fd-column">
                        <a href="{{url('/')}}/du-lich/tu-125-hoa-ky-bo-yeu-cau-chung-nhan-tiem-vaccine-10990" class="d-block ps-relative w-fit bar-8 fl-shrink0">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/593c42c8f28de8f1dd2103ee810cb77ff23e065e.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/593c42c8f28de8f1dd2103ee810cb77ff23e065e.jpeg" class="lazy-load w-fit object-cover object-center bar-8 xs:h-120" height="168px" alt="Từ 12/5: Hoa Kỳ bỏ yêu cầu chứng nhận tiêm vaccine"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/593c42c8f28de8f1dd2103ee810cb77ff23e065e.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/593c42c8f28de8f1dd2103ee810cb77ff23e065e.jpeg">
                        </a>
                        <div class="bn fl-1 d-flex fd-column py-12">
                            <a href="{{url('/')}}/du-lich/tu-125-hoa-ky-bo-yeu-cau-chung-nhan-tiem-vaccine-10990" class="fs-16 fw-500 truncate-line lineclamp2 fc-nineth xs:fs-16">Từ 12/5: Hoa Kỳ bỏ yêu cầu chứng nhận tiêm vaccine</a>
                        </div>
                    </div>
                </div>
                <div class="ps-relative d-flex fd-column gd-item mb-10 pb-10 box-shadow-1" style="width: calc( (100% - var(--gutter)) / var(--column) ); ">
                    <div class="ps-relative d-flex fd-column">
                        <a href="{{url('/')}}/du-lich/tu-85-du-lich-nhat-ban-khong-can-chung-nhan-vaccine-khong-can-test-covid-19-10978" class="d-block ps-relative w-fit bar-8 fl-shrink0">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/2360803877c9f47062760ad2cc43c15df68c6b97.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/2360803877c9f47062760ad2cc43c15df68c6b97.jpeg" class="lazy-load w-fit object-cover object-center bar-8 xs:h-120" height="168px" alt="Từ 8/5: Du lịch Nhật Bản không cần chứng nhận vaccine, không cần test Covid-19"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/2360803877c9f47062760ad2cc43c15df68c6b97.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/2360803877c9f47062760ad2cc43c15df68c6b97.jpeg">
                        </a>
                        <div class="bn fl-1 d-flex fd-column py-12">
                            <a href="{{url('/')}}/du-lich/tu-85-du-lich-nhat-ban-khong-can-chung-nhan-vaccine-khong-can-test-covid-19-10978" class="fs-16 fw-500 truncate-line lineclamp2 fc-nineth xs:fs-16">Từ 8/5: Du lịch Nhật Bản không cần chứng nhận vaccine, không cần test Covid-19</a>
                        </div>
                    </div>
                </div>
                <div class="ps-relative d-flex fd-column gd-item mb-10 pb-10 box-shadow-1" style="width: calc( (100% - var(--gutter)) / var(--column) ); ">
                    <div class="ps-relative d-flex fd-column">
                        <a href="{{url('/')}}/du-lich/thai-lan-hop-phap-hoa-can-sa-nhung-dieu-du-khach-nen-biet-khi-su-dung-10975" class="d-block ps-relative w-fit bar-8 fl-shrink0">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/25c7b7b6a6d22fbe1a7d2c88ac656611af0de151.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/25c7b7b6a6d22fbe1a7d2c88ac656611af0de151.jpeg" class="lazy-load w-fit object-cover object-center bar-8 xs:h-120" height="168px" alt="Thái Lan hợp pháp hoá cần sa: những điều du khách nên biết khi sử dụng"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/25c7b7b6a6d22fbe1a7d2c88ac656611af0de151.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/25c7b7b6a6d22fbe1a7d2c88ac656611af0de151.jpeg">
                        </a>
                        <div class="bn fl-1 d-flex fd-column py-12">
                            <a href="{{url('/')}}/du-lich/thai-lan-hop-phap-hoa-can-sa-nhung-dieu-du-khach-nen-biet-khi-su-dung-10975" class="fs-16 fw-500 truncate-line lineclamp2 fc-nineth xs:fs-16">Thái Lan hợp pháp hoá cần sa: những điều du khách nên biết khi sử dụng</a>
                        </div>
                    </div>
                </div>
                <div class="ps-relative d-flex fd-column gd-item mb-10 pb-10 box-shadow-1" style="width: calc( (100% - var(--gutter)) / var(--column) ); ">
                    <div class="ps-relative d-flex fd-column">
                        <a href="{{url('/')}}/du-lich/du-khach-mang-trai-cay-vao-thai-lan-co-the-bi-phat-tu-10974" class="d-block ps-relative w-fit bar-8 fl-shrink0">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/259d83f82d3123670c2f555c69208e71316e00f1.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/259d83f82d3123670c2f555c69208e71316e00f1.jpeg" class="lazy-load w-fit object-cover object-center bar-8 xs:h-120" height="168px" alt="Du khách mang trái cây vào Thái Lan có thể bị phạt tù"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/259d83f82d3123670c2f555c69208e71316e00f1.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/259d83f82d3123670c2f555c69208e71316e00f1.jpeg">
                        </a>
                        <div class="bn fl-1 d-flex fd-column py-12">
                            <a href="{{url('/')}}/du-lich/du-khach-mang-trai-cay-vao-thai-lan-co-the-bi-phat-tu-10974" class="fs-16 fw-500 truncate-line lineclamp2 fc-nineth xs:fs-16">Du khách mang trái cây vào Thái Lan có thể bị phạt tù</a>
                        </div>
                    </div>
                </div>
                <div class="ps-relative d-flex fd-column gd-item mb-10 pb-10 box-shadow-1" style="width: calc( (100% - var(--gutter)) / var(--column) ); ">
                    <div class="ps-relative d-flex fd-column">
                        <a href="{{url('/')}}/du-lich/tu-thang-102023-japan-rail-pass-jr-pass-se-tang-gia-khoang-70-10971" class="d-block ps-relative w-fit bar-8 fl-shrink0">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/5ce308d0f518f3977594f172783328824103a042.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/5ce308d0f518f3977594f172783328824103a042.jpeg" class="lazy-load w-fit object-cover object-center bar-8 xs:h-120" height="168px" alt="Từ tháng 10/2023: Japan Rail Pass (JR Pass) sẽ tăng giá khoảng 70%"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/5ce308d0f518f3977594f172783328824103a042.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/5ce308d0f518f3977594f172783328824103a042.jpeg">
                        </a>
                        <div class="bn fl-1 d-flex fd-column py-12">
                            <a href="{{url('/')}}/du-lich/tu-thang-102023-japan-rail-pass-jr-pass-se-tang-gia-khoang-70-10971" class="fs-16 fw-500 truncate-line lineclamp2 fc-nineth xs:fs-16">Từ tháng 10/2023: Japan Rail Pass (JR Pass) sẽ tăng giá khoảng 70%</a>
                        </div>
                    </div>
                </div>
                <div class="ps-relative d-flex fd-column gd-item mb-10 pb-10 box-shadow-1" style="width: calc( (100% - var(--gutter)) / var(--column) ); ">
                    <div class="ps-relative d-flex fd-column">
                        <a href="{{url('/')}}/du-lich/nam-2070-con-nguoi-se-di-du-lich-nhu-the-nao-10968" class="d-block ps-relative w-fit bar-8 fl-shrink0">
                            <img data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7abe21376f3872f85e3e75fa1f769d779dad0af9.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7abe21376f3872f85e3e75fa1f769d779dad0af9.jpeg" class="lazy-load w-fit object-cover object-center bar-8 xs:h-120" height="168px" alt="Năm 2070: con người sẽ đi du lịch như thế nào?"
                                 src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7abe21376f3872f85e3e75fa1f769d779dad0af9.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7abe21376f3872f85e3e75fa1f769d779dad0af9.jpeg">
                        </a>
                        <div class="bn fl-1 d-flex fd-column py-12">
                            <a href="{{url('/')}}/du-lich/nam-2070-con-nguoi-se-di-du-lich-nhu-the-nao-10968" class="fs-16 fw-500 truncate-line lineclamp2 fc-nineth xs:fs-16">Năm 2070: con người sẽ đi du lịch như thế nào?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-fit d-block">
        <div class="w-fit d-block pl-20">
            <span class="fc-black fs-26 fw-700">Điểm đến nổi bật</span>
        </div>
        <div class="w-fit d-block p-20">
            <div class="w-fit d-block box-shadow-1 p-18">
                <div class="d-flex ai-center ">
                    <span class="fs-48 fw-bold lh-50" style="color: #BDBDBD">#1</span>
                    <span class="fc-black fs-20 lh-20 fw-500 ml-15">Phú Quốc</span>
                </div>
            </div>
            <div class="w-fit d-block box-shadow-1 p-18">
                <div class="d-flex ai-center ">
                    <span class="fs-48 fw-bold lh-50" style="color: #BDBDBD">#2</span>
                    <span class="fc-black fs-20 lh-20 fw-500 ml-15">Sapa</span>
                </div>
            </div>
            <div class="w-fit d-block box-shadow-1 p-18">
                <div class="d-flex ai-center ">
                    <span class="fs-48 fw-bold lh-50" style="color: #BDBDBD">#3</span>
                    <span class="fc-black fs-20 lh-20 fw-500 ml-15">Đà Nẵng</span>
                </div>
            </div>
            <div class="w-fit d-block box-shadow-1 p-18">
                <div class="d-flex ai-center ">
                    <span class="fs-48 fw-bold lh-50" style="color: #BDBDBD">#4</span>
                    <span class="fc-black fs-20 lh-20 fw-500 ml-15">Đà Lạt</span>
                </div>
            </div>
            <div class="w-fit d-block box-shadow-1 p-18">
                <div class="d-flex ai-center ">
                    <span class="fs-48 fw-bold lh-50" style="color: #BDBDBD">#5</span>
                    <span class="fc-black fs-20 lh-20 fw-500 ml-15">Nhật Bản</span>
                </div>
            </div>
            <div class="w-fit d-block box-shadow-1 p-18">
                <div class="d-flex ai-center ">
                    <span class="fs-48 fw-bold lh-50" style="color: #BDBDBD">#6</span>
                    <span class="fc-black fs-20 lh-20 fw-500 ml-15">Đài Loan</span>
                </div>
            </div>
        </div>
    </div>
    <div class="w-fit d-block">
        <div class="w-fit d-block pl-20 mt-15">
            <span class="fc-black fs-26 fw-700">Bình luận mới nhất</span>
        </div>
        <div class="w-fit d-block p-20">
            <div class="w-fit d-block mb-25">

                <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                    <div class="d-flex ai-start ps-relative mt-22">
                        <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                            <a href="{{url('/')}}/blog/duyle01074597" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                <img data-src="https://gody.vn/public/v3/images/user/avatar/duyle01074597/135537674-20190611164402.jpeg" data-srcset="https://gody.vn/public/v3/images/user/avatar/duyle01074597/135537674-20190611164402.jpeg" class="lazy-load w-fit h-fit object-cover object-center" alt="Lý Lệ" src="https://gody.vn/public/v3/images/user/avatar/duyle01074597/135537674-20190611164402.jpeg"
                                     srcset="https://gody.vn/public/v3/images/user/avatar/duyle01074597/135537674-20190611164402.jpeg">
                            </a>
                        </div>
                        <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                            <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                <a href="{{url('/')}}/blog/duyle01074597" class="fc-nineth fw-500">Lý Lệ</a>
                                <span class="fc-sixth"> bình luận trong </span>
                                <a href="{{url('/')}}/bai-viet/kinh-nghiem-kham-pha-khu-cam-trai-treefarm-coffee-glamping-cua-to-10991?action=review" class="fc-nineth fw-500"> Kinh nghiệm khám phá khu cắm trại TreeFarm Coffee &amp; Glamping của tớ</a>
                            </p>
                            <a href="{{url('/')}}/bai-viet/kinh-nghiem-kham-pha-khu-cam-trai-treefarm-coffee-glamping-cua-to-10991?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">chấm chấm .... !</a>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                    <div class="d-flex ai-start ps-relative mt-22">
                        <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                            <a href="{{url('/')}}/blog/duyle01084832" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                <img data-src="https://gody.vn/public/v3/images/user/avatar/duyle01084832/69234272-20190611164639.jpg" data-srcset="https://gody.vn/public/v3/images/user/avatar/duyle01084832/69234272-20190611164639.jpg" class="lazy-load w-fit h-fit object-cover object-center" alt="Jamie Lê" src="https://gody.vn/public/v3/images/user/avatar/duyle01084832/69234272-20190611164639.jpg" srcset="https://gody.vn/public/v3/images/user/avatar/duyle01084832/69234272-20190611164639.jpg">
                            </a>
                        </div>
                        <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                            <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                <a href="{{url('/')}}/blog/duyle01084832" class="fc-nineth fw-500">Jamie Lê</a>
                                <span class="fc-sixth"> bình luận trong </span>
                                <a href="{{url('/')}}/bai-viet/diem-moi-da-lat-samten-hills-10940?action=review" class="fc-nineth fw-500"> Điểm mới- ĐÀ LẠT SAMTEN HILLS</a>
                            </p>
                            <a href="{{url('/')}}/bai-viet/diem-moi-da-lat-samten-hills-10940?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">báo đài mấy nay đưa tin vụ cánh tay đưa lên trời này ở Đà Nẵng thì phải</a>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                    <div class="d-flex ai-start ps-relative mt-22">
                        <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                            <a href="{{url('/')}}/blog/duyle01093890" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                <img data-src="https://gody.vn/public/v3/images/user/avatar/duyle01093890/18290204-20190611164846.jpg" data-srcset="https://gody.vn/public/v3/images/user/avatar/duyle01093890/18290204-20190611164846.jpg" class="lazy-load w-fit h-fit object-cover object-center" alt="Trà Mie" src="https://gody.vn/public/v3/images/user/avatar/duyle01093890/18290204-20190611164846.jpg" srcset="https://gody.vn/public/v3/images/user/avatar/duyle01093890/18290204-20190611164846.jpg">
                            </a>
                        </div>
                        <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                            <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                <a href="{{url('/')}}/blog/duyle01093890" class="fc-nineth fw-500">Trà Mie</a>
                                <span class="fc-sixth"> bình luận trong </span>
                                <a href="{{url('/')}}/bai-viet/nho-dong-lung-cung-trekking-lung-cung-2023-10925?action=review" class="fc-nineth fw-500"> "Nho dông" Lùng Cúng - Trekking Lùng Cúng 2023</a>
                            </p>
                            <a href="{{url('/')}}/bai-viet/nho-dong-lung-cung-trekking-lung-cung-2023-10925?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">hóng thêm các chuyến đi sắp tới của bạn nè.</a>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                    <div class="d-flex ai-start ps-relative mt-22">
                        <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                            <a href="{{url('/')}}/blog/duyle01006867" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                <img data-src="https://gody.vn/public/v3/images/user/avatar/duyle01006867/27023712-20190611165100.jpg" data-srcset="https://gody.vn/public/v3/images/user/avatar/duyle01006867/27023712-20190611165100.jpg" class="lazy-load w-fit h-fit object-cover object-center" alt="Nguyệt Mi" src="https://gody.vn/public/v3/images/user/avatar/duyle01006867/27023712-20190611165100.jpg" srcset="https://gody.vn/public/v3/images/user/avatar/duyle01006867/27023712-20190611165100.jpg">
                            </a>
                        </div>
                        <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                            <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                <a href="{{url('/')}}/blog/duyle01006867" class="fc-nineth fw-500">Nguyệt Mi</a>
                                <span class="fc-sixth"> bình luận trong </span>
                                <a href="{{url('/')}}/bai-viet/nho-dong-lung-cung-trekking-lung-cung-2023-10925?action=review" class="fc-nineth fw-500"> "Nho dông" Lùng Cúng - Trekking Lùng Cúng 2023</a>
                            </p>
                            <a href="{{url('/')}}/bai-viet/nho-dong-lung-cung-trekking-lung-cung-2023-10925?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">mỗi chuyến đi là 1 trải nghiệm đáng quý, cám ơn bạn chia sẻ.</a>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                    <div class="d-flex ai-start ps-relative mt-22">
                        <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                            <a href="{{url('/')}}/blog/hazeline956496" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                <img data-src="https://gody.vn/public/v3/images/user/avatar/hazeline956496/74526982-20211213204340.jpg" data-srcset="https://gody.vn/public/v3/images/user/avatar/hazeline956496/74526982-20211213204340.jpg" class="lazy-load w-fit h-fit object-cover object-center" alt="Hà Thị Diệu Linh" src="https://gody.vn/public/v3/images/user/avatar/hazeline956496/74526982-20211213204340.jpg"
                                     srcset="https://gody.vn/public/v3/images/user/avatar/hazeline956496/74526982-20211213204340.jpg">
                            </a>
                        </div>
                        <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                            <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                <a href="{{url('/')}}/blog/hazeline956496" class="fc-nineth fw-500">Hà Thị Diệu Linh</a>
                                <span class="fc-sixth"> bình luận trong </span>
                                <a href="{{url('/')}}/bai-viet/quy-che-chi-tra-nhuan-but-bai-chia-se-tai-godyvn-6611?action=review" class="fc-nineth fw-500"> Quy chế chi trả nhuận bút bài chia sẻ tại GODY.VN</a>
                            </p>
                            <a href="{{url('/')}}/bai-viet/quy-che-chi-tra-nhuan-but-bai-chia-se-tai-godyvn-6611?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">Ad ơi mình từng đăng kí thành công và có tiền nhuận bút qua các bài chia sẻ rồi nhưng mấy tháng nay ko vào thì thấy mất luôn phần thông tin về nhuận bút đó mà chỉ còn các bài review. Ad check giúp mình với ạ?</a>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                    <div class="d-flex ai-start ps-relative mt-22">
                        <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                            <a href="{{url('/')}}/blog/lethuy3225" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                <img data-src="https://gody.vn/public/v3/images/user/avatar/lethuy3225/14550383-20191017093759.jpeg" data-srcset="https://gody.vn/public/v3/images/user/avatar/lethuy3225/14550383-20191017093759.jpeg" class="lazy-load w-fit h-fit object-cover object-center" alt="Le Thuy" src="https://gody.vn/public/v3/images/user/avatar/lethuy3225/14550383-20191017093759.jpeg" srcset="https://gody.vn/public/v3/images/user/avatar/lethuy3225/14550383-20191017093759.jpeg">
                            </a>
                        </div>
                        <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                            <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                <a href="{{url('/')}}/blog/lethuy3225" class="fc-nineth fw-500">Le Thuy</a>
                                <span class="fc-sixth"> bình luận trong </span>
                                <a href="{{url('/')}}/bai-viet/ghe-tham-ngoi-chua-lon-nhat-the-gioi-tai-viet-nam-chua-tam-chuc-ha-nam-10999?action=review" class="fc-nineth fw-500"> Ghé thăm ngôi chùa "lớn nhất" thế giới tại Việt Nam - Chùa Tam Chúc, Hà Nam!</a>
                            </p>
                            <a href="{{url('/')}}/bai-viet/ghe-tham-ngoi-chua-lon-nhat-the-gioi-tai-viet-nam-chua-tam-chuc-ha-nam-10999?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">cho mình xin tên app chỉnh hình với ạ, nhìn đẹp thực sự.</a>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                    <div class="d-flex ai-start ps-relative mt-22">
                        <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                            <a href="{{url('/')}}/blog/giaminh4723" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                <img data-src="https://gody.vn/public/v3/images/user/avatar/giaminh4723/65106225-20191017093425.jpeg" data-srcset="https://gody.vn/public/v3/images/user/avatar/giaminh4723/65106225-20191017093425.jpeg" class="lazy-load w-fit h-fit object-cover object-center" alt="Gia Minh" src="https://gody.vn/public/v3/images/user/avatar/giaminh4723/65106225-20191017093425.jpeg" srcset="https://gody.vn/public/v3/images/user/avatar/giaminh4723/65106225-20191017093425.jpeg">
                            </a>
                        </div>
                        <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                            <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                <a href="{{url('/')}}/blog/giaminh4723" class="fc-nineth fw-500">Gia Minh</a>
                                <span class="fc-sixth"> bình luận trong </span>
                                <a href="{{url('/')}}/bai-viet/ghe-tham-ngoi-chua-lon-nhat-the-gioi-tai-viet-nam-chua-tam-chuc-ha-nam-10999?action=review" class="fc-nineth fw-500"> Ghé thăm ngôi chùa "lớn nhất" thế giới tại Việt Nam - Chùa Tam Chúc, Hà Nam!</a>
                            </p>
                            <a href="{{url('/')}}/bai-viet/ghe-tham-ngoi-chua-lon-nhat-the-gioi-tai-viet-nam-chua-tam-chuc-ha-nam-10999?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">bạn đi dịp tháng máy mà khách vắng vậy ạ, mình cũng tính đi mà sợ đông quá</a>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                    <div class="d-flex ai-start ps-relative mt-22">
                        <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                            <a href="{{url('/')}}/blog/hatra2486" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                <img data-src="https://gody.vn/public/v3/images/user/avatar/hatra2486/96332653-20191017094110.jpeg" data-srcset="https://gody.vn/public/v3/images/user/avatar/hatra2486/96332653-20191017094110.jpeg" class="lazy-load w-fit h-fit object-cover object-center" alt="Ha Tra">
                            </a>
                        </div>
                        <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                            <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                <a href="{{url('/')}}/blog/hatra2486" class="fc-nineth fw-500">Ha Tra</a>
                                <span class="fc-sixth"> bình luận trong </span>
                                <a href="{{url('/')}}/bai-viet/ghe-tham-ngoi-chua-lon-nhat-the-gioi-tai-viet-nam-chua-tam-chuc-ha-nam-10999?action=review" class="fc-nineth fw-500"> Ghé thăm ngôi chùa "lớn nhất" thế giới tại Việt Nam - Chùa Tam Chúc, Hà Nam!</a>
                            </p>
                            <a href="{{url('/')}}/bai-viet/ghe-tham-ngoi-chua-lon-nhat-the-gioi-tai-viet-nam-chua-tam-chuc-ha-nam-10999?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">cám ơn chia sẻ rất thực tế của bạn.</a>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                    <div class="d-flex ai-start ps-relative mt-22">
                        <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                            <a href="{{url('/')}}/blog/thuythuy9264" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                <img data-src="https://gody.vn/public/v3/images/user/avatar/thuythuy9264/142016082-20191017094222.jpeg" data-srcset="https://gody.vn/public/v3/images/user/avatar/thuythuy9264/142016082-20191017094222.jpeg" class="lazy-load w-fit h-fit object-cover object-center" alt="Thuy Thuy">
                            </a>
                        </div>
                        <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                            <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                <a href="{{url('/')}}/blog/thuythuy9264" class="fc-nineth fw-500">Thuy Thuy</a>
                                <span class="fc-sixth"> bình luận trong </span>
                                <a href="{{url('/')}}/bai-viet/ghe-tham-ngoi-chua-lon-nhat-the-gioi-tai-viet-nam-chua-tam-chuc-ha-nam-10999?action=review" class="fc-nineth fw-500"> Ghé thăm ngôi chùa "lớn nhất" thế giới tại Việt Nam - Chùa Tam Chúc, Hà Nam!</a>
                            </p>
                            <a href="{{url('/')}}/bai-viet/ghe-tham-ngoi-chua-lon-nhat-the-gioi-tai-viet-nam-chua-tam-chuc-ha-nam-10999?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">chuyến đi tốn kém hết bao nhiêu vậy bạn ơi</a>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                    <div class="d-flex ai-start ps-relative mt-22">
                        <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                            <a href="{{url('/')}}/blog/haisonnguyen5960" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                <img data-src="https://media2.gody.vn//public/images/user-2/2022/12/22/haisonnguyen5960/thumbnail-70/63a3f758b11dc-1671690072.jpeg" data-srcset="https://media2.gody.vn//public/images/user-2/2022/12/22/haisonnguyen5960/thumbnail-70/63a3f758b11dc-1671690072.jpeg" class="lazy-load w-fit h-fit object-cover object-center" alt="Tran Anh Tuyen">
                            </a>
                        </div>
                        <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                            <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                <a href="{{url('/')}}/blog/haisonnguyen5960" class="fc-nineth fw-500">Tran Anh Tuyen</a>
                                <span class="fc-sixth"> bình luận trong </span>
                                <a href="{{url('/')}}/redirect-places/5db59180ffb2958b2641cb58" class="fc-nineth fw-500"> Gà Nướng Cơm Lam Hương Đồng</a>
                            </p>
                            <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                    <div class="d-flex ai-start ps-relative mt-22">
                        <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                            <a href="{{url('/')}}/blog/phamhung32947091" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                <img data-src="https://lh3.googleusercontent.com/a/AGNmyxY1uZVfesTABQ33hDzRsQQ9R8BZvbG6E_g3chGY=s96-c" data-srcset="https://lh3.googleusercontent.com/a/AGNmyxY1uZVfesTABQ33hDzRsQQ9R8BZvbG6E_g3chGY=s96-c" class="lazy-load w-fit h-fit object-cover object-center" alt="Thanh Hùng Phạm">
                            </a>
                        </div>
                        <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                            <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                <a href="{{url('/')}}/blog/phamhung32947091" class="fc-nineth fw-500">Thanh Hùng Phạm</a>
                                <span class="fc-sixth"> bình luận trong </span>
                                <a href="{{url('/')}}/redirect-places/5ca5782affb29504073c9869" class="fc-nineth fw-500"> Bánh căn 51 - Nha Trang</a>
                            </p>
                            <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                    <div class="d-flex ai-start ps-relative mt-22">
                        <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                            <a href="{{url('/')}}/blog/phamhung32947091" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                <img data-src="https://lh3.googleusercontent.com/a/AGNmyxY1uZVfesTABQ33hDzRsQQ9R8BZvbG6E_g3chGY=s96-c" data-srcset="https://lh3.googleusercontent.com/a/AGNmyxY1uZVfesTABQ33hDzRsQQ9R8BZvbG6E_g3chGY=s96-c" class="lazy-load w-fit h-fit object-cover object-center" alt="Thanh Hùng Phạm">
                            </a>
                        </div>
                        <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                            <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                <a href="{{url('/')}}/blog/phamhung32947091" class="fc-nineth fw-500">Thanh Hùng Phạm</a>
                                <span class="fc-sixth"> bình luận trong </span>
                                <a href="{{url('/')}}/redirect-places/5ca5753cffb29530793c986a" class="fc-nineth fw-500"> Bò nướng Lạc Cảnh - Nha Trang</a>
                            </p>
                            <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                    <div class="d-flex ai-start ps-relative mt-22">
                        <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                            <a href="{{url('/')}}/blog/minhnguyen10820003225" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                <img data-src="https://lh3.googleusercontent.com/a/AGNmyxasoOguXE3jLp_rMibkwWb2xHutrBbL_GZvA2jIEKA=s96-c" data-srcset="https://lh3.googleusercontent.com/a/AGNmyxasoOguXE3jLp_rMibkwWb2xHutrBbL_GZvA2jIEKA=s96-c" class="lazy-load w-fit h-fit object-cover object-center" alt="Minh Nguyên Phạm">
                            </a>
                        </div>
                        <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                            <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                <a href="{{url('/')}}/blog/minhnguyen10820003225" class="fc-nineth fw-500">Minh Nguyên Phạm</a>
                                <span class="fc-sixth"> bình luận trong </span>
                                <a href="{{url('/')}}/redirect-places/5de4b895ffb2958a2a052bf2" class="fc-nineth fw-500"> Bãi biển Đồi Dương - Phan Thiết</a>
                            </p>
                            <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                    <div class="d-flex ai-start ps-relative mt-22">
                        <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                            <a href="{{url('/')}}/blog/rhcnaruscudl1qqjr5vwwbhm71l2" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                <img data-src="https://gody.vn/public/v3/images/user/avatar/rhcnaruscudl1qqjr5vwwbhm71l2/59367655-20230424135544." data-srcset="https://gody.vn/public/v3/images/user/avatar/rhcnaruscudl1qqjr5vwwbhm71l2/59367655-20230424135544." class="lazy-load w-fit h-fit object-cover object-center" alt="Bắc Quý">
                            </a>
                        </div>
                        <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                            <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                <a href="{{url('/')}}/blog/rhcnaruscudl1qqjr5vwwbhm71l2" class="fc-nineth fw-500">Bắc Quý</a>
                                <span class="fc-sixth"> bình luận trong </span>
                                <a href="{{url('/')}}/redirect-places/undefined" class="fc-nineth fw-500"> undefined</a>
                            </p>
                            <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                    <div class="d-flex ai-start ps-relative mt-22">
                        <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                            <a href="{{url('/')}}/blog/rhcnaruscudl1qqjr5vwwbhm71l2" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                <img data-src="https://gody.vn/public/v3/images/user/avatar/rhcnaruscudl1qqjr5vwwbhm71l2/59367655-20230424135544." data-srcset="https://gody.vn/public/v3/images/user/avatar/rhcnaruscudl1qqjr5vwwbhm71l2/59367655-20230424135544." class="lazy-load w-fit h-fit object-cover object-center" alt="Bắc Quý">
                            </a>
                        </div>
                        <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                            <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                <a href="{{url('/')}}/blog/rhcnaruscudl1qqjr5vwwbhm71l2" class="fc-nineth fw-500">Bắc Quý</a>
                                <span class="fc-sixth"> bình luận trong </span>
                                <a href="{{url('/')}}/redirect-places/undefined" class="fc-nineth fw-500"> undefined</a>
                            </p>
                            <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                    <div class="d-flex ai-start ps-relative mt-22">
                        <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                            <a href="{{url('/')}}/blog/haiyen0104xuanlong8937" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                <img data-src="https://lh3.googleusercontent.com/a/AGNmyxYdc-MyL-UMsThOXTrokesSqxaz_5o7T8gOyRjP=s96-c" data-srcset="https://lh3.googleusercontent.com/a/AGNmyxYdc-MyL-UMsThOXTrokesSqxaz_5o7T8gOyRjP=s96-c" class="lazy-load w-fit h-fit object-cover object-center" alt="Yến Hoàng Thị Hải">
                            </a>
                        </div>
                        <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                            <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                <a href="{{url('/')}}/blog/haiyen0104xuanlong8937" class="fc-nineth fw-500">Yến Hoàng Thị Hải</a>
                                <span class="fc-sixth"> bình luận trong </span>
                                <a href="{{url('/')}}/redirect-places/5c0c8edeffb29596267e4821" class="fc-nineth fw-500"> Bãi biển Cửa Tùng</a>
                            </p>
                            <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
