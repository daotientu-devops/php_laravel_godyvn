<nav class="navbar navbar-primary card5 bg-white ">
    <div class="container-fluid wmn-1260 pr-5 ps-relative">
        <div class="navbar-header h-42 mr-5">
            <a href="{{url('/')}}" class="logo"></a>
        </div>

        <div class="collapse navbar-collapse px-0 d-flex d-after-none d-before-none jc-space-between ai-center" id="bs-example-navbar-collapse-1" style="display: flex!important;">
            <ul class="nav navbar-nav p-0 m-0">
                <li class="ps-relative main-menu-search-wrapper ml-0 h-fit d-flex ai-center">
                    <label for="inputSearch" id="search-header" class="c-pointer bar-50 bc-primary ba d-flex ai-center jc-space-between fc-sixth fw-normal h-44 w-300 pl-20 pr-8 mb-0">
                        <span>Bạn muốn đi đâu?</span>
                        <div class="bar-circle bg-primary d-flex ai-center jc-center p-8">
                            <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/search-outline.svg" class="ml-0 w-16 filter-white">
                        </div>
                    </label>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right mrn-6 d-flex ai-center">
                <li class="py-0 px-0 h:bg-grayf2 bar-50 h-42 px-12 t-all t-duration-slow mr-0">
                    <a class="h-fit text-center p-0 fc-sixth bg-transparent d-flex fw-500 ai-center jc-center px-6 mt-0 w-auto c-pointer" href="{{url('diem-den')}}">
                        <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/earth.svg" class="w-20 mtn-3 mr-8" />
                        <p class="m-0 p-0 fs-16 fc-nineth">Điểm đến</p>
                    </a>
                </li>
                <li class="py-0 px-0 h:bg-grayf2 bar-50 h-42 px-12 t-all t-duration-slow mr-0">
                    <a class="h-fit text-center p-0 fc-sixth bg-transparent d-flex fw-500 ai-center jc-center px-6 mt-0 w-auto c-pointer" href="{{url('ban-do-du-lich/viet-nam')}}">
                        <img class="w-20 mtn-4 filter-black va-middle mr-8" src="https://gody.vn/public/v6/images/logo-filled-100x100.png">
                        <p class="m-0 p-0 fs-16 fc-nineth">My Travel Map</p>
                    </a>
                </li>

                <li class="dropdown nav-add-box py-0 pr-1 pl-5 h:bg-grayf2 bar-50 px-12 t-all t-duration-slow">
                    <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="nav-button-add fw-500 bg-transparent py-0 px-6 h-fit d-flex ai-center jc-center c-pointer">
                        <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/pencil.svg" class="w-18 mb-1 mr-8" width="23"/>
                        <p class="m-0 p-0 fs-16 fc-nineth">Viết ngay</p>
                    </a>

                    <ul class="dropdown-menu bar-0 mtn-1 " aria-labelledby="nav-button-add">
                        <li class="mt-10">
                            <a href="{{url('blog/viet-bai/note')}}" class="fc-sixth" id=" " style="color: #ff8c00 !important;">
                                <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/create-outline.svg" class="filter-primary w-24 mr-8">Chia sẻ trải nghiệm & review
                            </a>
                        </li>

                        <li class="mt-10">
                            <a href="{{url('photo-blog/dang-bai/note')}}" class="fc-sixth" id=" ">
                                <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/image-outline.svg" class="filter-sixth w-24 mr-8">Chia sẻ hình ảnh
                            </a>
                        </li>

                        <li class="mt-10">
                            <a href=/facebook/login?modal=modal-fetch-fb class="fc-sixth" id=" ">
                                <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/images-outline.svg" class="filter-sixth w-24 mr-8">Chia sẻ hình từ Facebook
                            </a>
                        </li>

                        <li class="mt-10 mb-10">
                            <a href="{{url('hoi-dap')}}" class="fc-sixth" id=" ">
                                <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/people-outline.svg" class="filter-sixth w-24 mr-8">Hỏi đáp du lịch
                            </a>
                        </li>

                        <li class="mt-10 mb-10">
                            <a href="{{url('lich-trinh-du-lich')}}" class="fc-sixth" id=" ">
                                <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/footsteps-outline.svg" class="filter-sixth w-24 mr-8">Lập & chia sẻ hành trình
                            </a>
                        </li>

                        <li class="mt-10 mb-10">
                            <a href="{{url('cong-tac-vien/viet-bai/note')}}" class="fc-sixth">
                                <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/trail-sign-outline.svg" class="filter-sixth w-24 mr-8">Chia sẻ, giới thiệu địa điểm mới
                            </a>
                        </li>

                    </ul>
                    <style>
                        .nav-add-box{height: 42px;padding: 5px;}
                        .nav-add-box ul.dropdown-menu{margin-top:-1px;border-radius:0;}
                        .nav-add-box ul.dropdown-menu:before{content:'';display:block;width:10px;height:10px;position:absolute;border:1px solid #ccc;right:12px;top:-5px;transform:rotate(45deg);background:#fff;border-right-color:transparent;border-bottom-color:transparent;z-index:-1}
                        .nav-add-box ul li{margin-top:10px;}
                    </style>
                </li>

                <li class="dropdown d-flex ai-center jc-center mr-20 ml-0 h-42 px-12 ">
                    <button type="button" class="outline-none bn clearfix fc-sixth bg-eleventh bar-50 px-25 py-6 mr-0 d-flex fw-500 ai-center jc-center" href="#" data-toggle="dropdown" id="dang-nhap-header">
                        <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/menu-outline.svg" width="18" class="w-18 mr-8 mb-1" />
                        <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/person-circle-outline.svg" width="28" class="w-28 mb-1" />
                    </button>

                    <ul class="dropdown-menu account-dropdown bar-8 w-250 card6 bn mt-7">
                        <li class="ps-absolute w-10 h-10 baw1 bas-solid bc-tenth r12 tn6 rotate-1/8 bg-white brs-unset bbs-unset zn-1"></li>
                        <li>
                            <a href="#modal-login" data-toggle="modal" class="fc-fourteenth py-10 px-15 fw-500">Đăng ký / Đăng nhập</a>
                        </li>
                        <li class="d-none">
                            <a href="http://125.212.224.111/dang-ky" class="fc-fourteenth py-10 px-15">Đăng ký</a>
                        </li>
                        <li class="bt bc-eleventh mt-6 mb-6"></li>


                        <li>
                            <a href="http://125.212.224.111/blog/form/dang-ky" class="fc-fourteenth py-10 px-15">Kiếm tiền cùng Gody</a>
                        </li>
                        <li>
                            <a href="#modal-login" data-toggle="modal" id="thiet-lap-trang-blog-trong-profile" class="fc-fourteenth py-10 px-15">Tạo Blog du lịch</a>
                        </li>
                        <li>
                            <a href="http://125.212.224.111/ban-do-du-lich/viet-nam" id="cap-nhat-mytravelmap-trong-profile" class="fc-fourteenth py-10 px-15">My Travel Map</a>
                        </li>
                        <li>
                            <a href="http://125.212.224.111/lich-trinh-du-lich" class="fc-fourteenth py-10 px-15">Tạo lịch trình</a>
                        </li>
                        <li>
                            <a href="http://125.212.224.111/vi-du-lich" class="fc-fourteenth py-10 px-15">Ví du lịch</a>
                        </li>

                    </ul>
                </li>


                <li class="dropdown create-map-success-alert" style="height: 56px;">
                    <a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="padding:0;">
                    </a>
                    <ul class="dropdown-menu" style="z-index: 1;">
                        <button class="close" style="top:8px;right:12px;position:absolute;"><span aria-hidden="true">×</span></button>
                        <script>
                            document.querySelector(".create-map-success-alert .close").addEventListener("click", function(){
                                document.querySelector(".create-map-success-alert .dropdown-menu").style.display = 'none';
                            });
                        </script>
                        <p style="margin-bottom:6px;text-align:center;"><b>Chúc mừng!</b>!</p>
                        <p style=" text-align:center;color:#ff8c00;font-size:30px;margin:0;"><i class="fa fa-bell-o" aria-hidden="true"></i></p>
                        <p style="margin:0;line-height:23px; text-align: center;">Bạn đã có 20,000VND trong tài khoản. <a href="http://125.212.224.111/qua-tang" class="fc-nineth fw-bold">Bạn muốn sử dụng ngay ?</a></p>
                    </ul>
                    <style>
                        .create-map-success-alert .dropdown-menu:before{content:'';display:block;width:10px;height:10px;position:absolute;border:1px solid #ccc;right:12px;top:-5px;transform:rotate(45deg);background:#fff;border-right-color:transparent;border-bottom-color:transparent;z-index:-1}
                        .create-map-success-alert .dropdown-menu{margin-right:3px;margin-top:-1px !important;border-top-left-radius:4px !important;border-top-right-radius:4px!important; min-width:300px; padding:15px;}
                    </style>
                </li>
            </ul>
        </div>
    </div>
</nav>
