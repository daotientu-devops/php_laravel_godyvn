<nav class="navbar navbar-primary mb-14 p-0 ps-fixed t0 r0 l0 z-1030 bg-white ">
    <div class="d-flex ai-center h-48 px-12  card6 bb bc-eleventh ">
        <div class="fl1 ta-start d-flex ai-center">
            <label for="sidebar__checkbox" class="fs-26 fc-sixth mr-12 d-block ps-relative h-26 o70 w-34 ta-center js-open-sidebar-menu">
                <ion-icon name="menu-outline" role="img" class="md hydrated" aria-label="menu outline"></ion-icon>
            </label>
            <a href="{{url('/')}}" class="d-inline-block outline-none">
                <img src="/public/images/logo-new.jpg" alt="logo" class="va-middle" style="width: 60px !important">
            </a>
        </div>
        <div class="d-flex ai-center">
            {{--<a href="#modal-seach-v2" class="fs-26 fc-sixth mr-15 d-block ps-relative h-26 o70" data-toggle="modal" data-target="#modal-seach-v2">--}}
            {{--<ion-icon name="search-outline" class="md hydrated" role="img" aria-label="search outline"></ion-icon>--}}
            {{--</a>--}}
            <div class="dropdown">
                <a type="button" data-toggle="dropdown" class="d-block bbar-circle ps-relative bar-circle w-26 h-26">
                    <img src="https://gody.vn/public/v7/images/v7-avatar-default.jpg" alt="avatar" class="w-fit h-fit object-cover object-center bar-circle">
                </a>
                <ul class="dropdown-menu account-dropdown bar-8 w-250 card6 bn mt-10" style="left: -220px">
                    <li class="ps-absolute w-10 h-10 baw1 bas-solid bc-tenth r12 tn6 rotate-1/8 bg-white brs-unset bbs-unset zn-1"></li>
                    <li>
                        <a href="#modal-login" data-toggle="modal" class="fc-fourteenth py-10 px-15 fw-500">Đăng ký / Đăng nhập</a>
                    </li>
                    <li class="d-none">
                        <a href="{{url('diem-den')}}/dang-ky" class="fc-fourteenth py-10 px-15">Đăng ký</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="d-flex ai-center w-fit card5 ">
        <div class="w-fit px-0 fs-15 d-flex ai-center h-fit jc-space-between nav-links">
            <a href="{{url('diem-den')}}" class="nav-link va-middle d-block py-8 ml-0 fc-sixth td-none fl-1 ta-center">
                <ion-icon name="person-outline" class="fs-17 fc-sixth o70 va-middle d-none mr-3 mtn-2 md hydrated" role="img" aria-label="person outline"></ion-icon>
                <span class="d-inline-block va-middle">Điểm đến</span>
            </a>
            <a href="{{url('blog/viet-bai/note')}}" class="nav-link va-middle d-block py-8 fc-sixth td-none fl-1 ta-center">
                <ion-icon name="compass-outline" class="fs-18 fc-sixth o70 va-middle d-none mr-3 md hydrated" role="img" aria-label="compass outline"></ion-icon>
                <span class="d-inline-block va-middle">Trải nghiệm</span>
            </a>
            <a href="{{url('photo-blog/dang-bai/note')}}" class="nav-link va-middle d-block py-8 fc-sixth td-none fl-1 ta-center">
                <ion-icon name="location-outline" class="fs-18 fc-sixth o70 va-middle d-none mr-3 md hydrated" role="img" aria-label="location outline"></ion-icon>
                <span class="d-inline-block va-middle">Hình ảnh</span>
            </a>
        </div>
    </div>
</nav>
<div id="modal-login" class="modal modal-simple fade ff-sans" role="dialog">
    <div class="modal-dialog w100%-60 wmn-650 wmx-600 xs:wmn-auto xs:w-fit xs:ps-fixed xs:m-0 xs:t0 xs:r0 xs:b0 xs:l0" :class="{'sm:wmn-auto': (currentTab != 'livedorvisitedform'), 'sm:ps-fixed sm:m-0 sm:t0 sm:r0 sm:b0 sm:l0 sm:wmn-auto sm:w-fit': (currentTab == 'livedorvisitedform')}">
        <div class="modal-content bar-5 bg-white xs:h-fit xs:bar-0" :class="modalContentClass">
            <div datalived="[object Object]" datavietnams="" dataworlds="" previousurl="" newuserstatus="0">
                <div class="modal-header d-none bn pb-5 px-12 pt-10 xs:d-block bg-white">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close fs-26 outline-none float-left w-40 mln-14 h-34 o40 s:mtn-6"><i aria-hidden="true" class="fa fa-angle-left"></i></button>
                    <h4 class="modal-title fs-24 m-0 fc-nineth fw-normal tt-uppercase s:fs-16">
                        Đăng nhập
                    </h4></div>
                <div class="py-12 xs:pt-0">
                    <div class="
          w-100%
          ta-center
          px-50
          brw1
          brs-solid
          bc-primary
          ps-relative
          xs:bn xs:w-fit xs:px-12
          sm:bn sm:w-fit
        ">
                        <div class="fc-nineth tt-uppercase mb-15 fs-30 xs:mb-5 xs:fs-24 xs:d-none">
                            Đăng nhập
                        </div>
                        <p class="mx-0 fc-sixth lh-lg mb-20 xs:fs-13 xs:mb-15">
                            Tham gia ngay cộng đồng du lịch hàng đầu Việt Nam và tận hưởng những
                            điều tuyệt vời nhất từ Gody
                        </p>
                        <form method="post" action="{{ url('dang-nhap') }}" id="login-form" name="login-form" novalidate="novalidate">
                            {{ csrf_field() }}
                            <div class="mb-20 ps-relative"><input type="text" placeholder="Email" class="
                form-control
                bar-5
                h-50
                lh-50
                bc-tenth
                w-fit
                bs-none
                xs:h-40 xs:lh-40
              "> <span class="
                d-inline-block
                fc-thirteenth
                ps-absolute
                l12
                b0
                fs-13
                e:d-none
              "></span></div>
                            <div class="mb-20 ps-relative"><input type="password" placeholder="Mật khẩu" class="
                form-control
                bar-5
                h-50
                lh-50
                bc-tenth
                w-fit
                mb-20
                bs-none
                xs:h-40 xs:lh-40
              "> <span class="
                d-inline-block
                fc-thirteenth
                ps-absolute
                l12
                b0
                fs-13
                e:d-none
              "></span></div>
                            <div class="d-flex jc-space-between mb-12">
                                <div class="radio checkbox m-0 checkbox-bg-primary"><label class="
                  ds-inline-block
                  container
                  w-auto
                  mb-0
                  fs-14
                  fc-nineth
                  ps-relative
                  pl-35
                  c-pointer
                  h-20
                  lh-20
                  user-select-none
                ">Ghi nhớ đăng nhập
                                        <input type="checkbox" name="remember_login" class="ps-absolute o0 c-pointer t0 r0" value="1"> <span class="
                    checkmark
                    card7
                    w-20
                    h-20
                    bar-3
                    ps-absolute
                    t0
                    l0
                    h-20
                    w-20
                    bg-white
                  "></span></label></div>
                                <a href="/quen-mat-khau" class="fc-thirteenth d-inline-block fs-16">Quên mật khẩu ?</a></div>
                            <div class="d-flex mb-8">
                                <button class="
                blr-5
                fs-16
                bs-none
                tt-uppercase
                w-50%
                p-0
                h-50
                d-inline-block
                t-duration-slow
                xs:h-44
               bn bg-primary fc-white" type="button" id="login-submit">
                                    Đăng nhập
                                </button>
                                <a href="/dang-ky" class="
                brr-5
                bc-tenth
                bg-white
                fs-16
                bs-none
                fc-sixth
                tt-uppercase
                w-50%
                lh-48
                d-inline-block
                baw1
                bas-solid
                bls-unset
                t-duration-slow
                xs:h-44
              ">Đăng ký</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-destination" class="modal fade modal-simple" role="dialog">
    <div class="modal-dialog modal-lg" style="max-width: 750px; margin-top:20%; text-align: center;">
        <!-- Modal content-->
        <img src="https://gody.vn/public/images/1x1.png" data-src="https://gody.vn/public/v3/images/loading.gif" data-srcset="/public/v3/images/loading.gif, /public/v3/images/loading.gif" alt="Loading..." class="bg-white">
    </div>
    <!-- /Evaluate popup -->
</div><!-- /.modal-destination -->
