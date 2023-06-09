<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Quản lý</h3>
        <ul class="nav side-menu">
            <li><a href="{{ url('cms/dashboard') }}"><i class="fa fa-home"></i>Bảng điều khiển</a></li>
            <li><a href="{{ url('cms/categories') }}"><i class="fa fa fa-list-alt"></i>Danh mục</a></li>
            <li><a href="{{ url('cms/locations') }}"><i class="fa fa-location-arrow"></i>Quản lý điểm đến</a></li>
            <li><a href="{{ url('cms/destinations') }}"><i class="fa fa-map"></i>Quản lý điểm du lịch</a></li>
            <li><a href="{{ url('cms/posts') }}"><i class="fa fa-file-text"></i>Danh sách bài viết</a></li>
            <li><a href="{{ url('cms/pages') }}" title="Các trang giới thiệu"><i class="fa fa-legal"></i> Các trang giới thiệu</a></li>
            <li><a href="{{ url('cms/customers') }}"><i class="fa fa-users"></i>Quản lý người dùng đăng ký</a></li>
            <li><a href="{{ url('cms/partner') }}"><i class="fa fa-hand-peace-o"></i>Quản lý đối tác</a></li>
            <li><a href="{{ url('cms/contact') }}"><i class="fa fa-globe"></i>Quản lý thông tin website</a></li>
            <li><a><i class="fa fa-laptop"></i>QL nội dung trang chủ<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('cms/widgets/homepage/top_banner') }}">Banner đầu trang</a></li>
                    <li><a href="{{ url('cms/widgets/homepage/right_banner') }}">Banner bên phải trang</a></li>
                    <li><a href="{{ url('cms/widgets/homepage/middle_banner') }}">Banner giữa trang</a></li>
                    <li><a href="{{ url('cms/widgets/homepage/trend') }}">Xu hướng</a></li>
                </ul>
            </li>
            <li><a href="{{ url('cms/users') }}"><i class="fa fa-user"></i>Quản lý tài khoản</a></li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->
