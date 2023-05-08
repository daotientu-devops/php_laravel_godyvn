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
