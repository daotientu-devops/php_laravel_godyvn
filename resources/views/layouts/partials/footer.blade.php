<footer class="bt btw4 bc-primary mt-0">
    <div class="container wmn-1170">
        <div class="row pt-0">
            <div class="col-md-4">
                <a href="/" class="d-block pt-20">
                    <img src="{{asset('cms/public/assets/images/logo/logo-new.jpg')}}" alt="Gody Logo" class="w-130 d-block lazyload">
                </a>
                <div class="mt-12">
                    <p class="fc-sixth mb-5">Mạng xã hội du lịch Việt Nam</p>
                    <p class="fc-sixth mb-0">Giấy phép: 573/GP-BTTTT cấp ngày 20/11/2017</p>
                </div>
                <div class="mt-20 d-flex">
                    <a href="https://www.facebook.com/GodyTravel/" target="_blank" rel="noreferrer nofollow" class="w-50 h-50 d-flex ai-center jc-center bg-white bar-circle card6 text-center fc-fourth fs-24 lh-50 h:card3 t-duration-slow t-all t-delay-0" id="icon-mang-xa-hoi-facebook-gody-footer-trang-chu">
                        <span class="fc-transparent ps-absolute">FB</span>
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCtQWjnshk_9PPyl9M-Ip7aQ" target="_blank" rel="noreferrer nofollow" class="w-50 h-50 d-flex ai-center jc-center bg-white bar-circle ml-10 card6 text-center fc-thirteenth fs-24 lh-50 h:card3 t-duration-slow t-all t-delay-0" id="icon-mang-xa-hoi-youtube-gody-footer-trang-chu">
                        <span class="fc-transparent ps-absolute">YT</span>
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/gody_travel/" target="_blank" rel="noreferrer nofollow" class="w-50 h-50 d-flex ai-center jc-center bg-white bar-circle ml-10 card6 text-center fs-24 lh-50 h:card3 t-duration-slow t-all t-delay-0" id="icon-mang-xa-hoi-instagram-gody-footer-trang-chu">
                        <span class="fc-transparent ps-absolute">IG</span>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-2 pt-20">
                <p class="fs-18 fc-sixth mb-0">
                    Về Gody
                </p>
                <span class="d-inline-block w-30 bb bc-primary baw2"></span>
                <div class="mt-12">
                    <a href="{{ url('gioi-thieu') }}" class="show fc-sixth h:fc-primary">Giới thiệu</a>
                    <a href="{{ url('lien-he') }}" class="show fc-sixth h:fc-primary mt-5">Liên hệ</a>
                    <a href="{{ url('bao-mat-thong-tin') }}" class="show fc-sixth h:fc-primary mt-5">Chính sách bảo mật</a>
                    <a href="{{ url('quy-dinh-su-dung') }}" class="show fc-sixth h:fc-primary mt-5">Chính sách quyền riêng tư</a>
                </div>
            </div>
            <div class="col-md-2 pt-20">
                <p class="fs-18 fc-sixth mb-0">
                    Du lịch
                </p>
                <span class="d-inline-block w-30 bb bc-primary baw2"></span>
                <div class="mt-12">
                    <a href="{{url('/')}}/diem-den" class="show fc-sixth h:fc-primary mt-5">Điểm đến</a>
                </div>
            </div>
            <div class="col-md-2 pt-20">
                <p class="fs-18 fc-sixth mb-0">
                    Tiện ích
                </p>
                <span class="d-inline-block w-30 bb bc-primary baw2"></span>
                <div class="mt-12">
                    <a href="{{url('/')}}/hoi-dap" class="show fc-sixth h:fc-primary mt-5">Hỏi đáp du lịch</a>
                    <a href="{{url('/')}}/blog/viet-bai/note" class="show fc-sixth h:fc-primary mt-5">Viết blog du lịch</a>
                    <a href="{{url('/')}}/diem-den" class="show fc-sixth h:fc-primary mt-5">Điểm đến</a>
                </div>
            </div>
        </div>
        <div class="row pb-30 mt-0">
            <div class="col-md-4"></div>
        </div>
    </div>

    <div class="bg-eleventh text-center fc-nineth h-36 lh-36">
        Copyright &copy; 2017 - 2023
    </div>
</footer>

<div id="fb-root"></div>
@include('layouts.components.script')
</body>
</html>
