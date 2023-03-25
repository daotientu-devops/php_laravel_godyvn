@extends('layouts.default')
@section('content')
<div class="travel-blog-create-page _create1 create-current-page create-v3">
    <div data-toggle="modal" data-target="#modal-login" class="pos-f cursor-pointer w-fit h-fit t0 r0 b0 l0 z-8" style="display:none"></div>

    <div class="container-fluid pr-0 pl-0 min-width-1170 travel-post-header">
        <div class="set-index ">

            <div class="set-bg">
            </div>

            <div class="set-page">
                <!--<a role="button" class="set-add" hreft="#"></a>-->
                <div class="dropdown">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li>
                            <a href="" class="set-add"><i class="fa fa-picture-o mr-10" aria-hidden="true"></i> Thêm hình cover</a>
                        </li>
                        <li>
                            <a href="" class="set-add-video"><i class="fa fa-video-camera mr-10" aria-hidden="true"></i> Thêm video </a>
                        </li>
                    </ul>
                </div>

                <h3 class="mt-2">Thêm hình/video cover bài viết</h3>
                <p style="padding-left:130px;">( Hình ảnh tối ưu: 1350px <strong>x</strong> 480px. )</p>
                <div class="clear"></div>
                <div class="moxie-shim moxie-shim-html5" style="position: absolute; top: 10vw; left: 275px; width: 67px; height: 67px; overflow: hidden; z-index: -1;">
                    <input type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,.JPEG,image/png,image/gif" name="setPageInput">
                </div>
            </div>

            <div class="set-title bar-10 card6 ww-break-word w-1140 h-62 bg-white ba bc-white ps-absolute b25 z-1 l50% translateXn50% lh-20">
                <input type="text" value="" placeholder="Tiêu đề bài viết" name="travelPostTitle" id="travelPostTitle" class="bar-10 w-1140 h-60 fs-18 bn py-0 px-15 fc-sixth float-left d-inline-block ta-start m-0 outline-none">
            </div>

            <div class="dropdown set-btn primary-dropdown-more">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-cog" aria-hidden="true"></i> Thay đổi cover bài viết</button>
                <ul class="dropdown-menu mt-0 border-radius-0" aria-labelledby="dLabel">
                    <li>
                        <a role="button" class="set-add" hreft="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Thay hình ảnh</a>
                    </li>
                    <!-- <li>
                        <a role="button" class="set-add-re-edit" hreft="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Sửa hình ảnh</a>
                    </li> -->
                    <li>
                        <a role="button" hreft="#" class="set-add-remove"><i class="fa fa-picture-o" aria-hidden="true"></i> Xóa</a>
                    </li>
                </ul>
            </div>

            <div class="clip-layer">
                <div class="clip-mask cursor-pointer"></div>
                <span class="clip-close clip-cancel" aria-hidden="true">×</span>
                <div class="clip-panel">
                    <img id="clip-windown" src="" alt="" style="max-width: 100%; vertical-align: middle; ">
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-20 min-width-1170 travel-blog-body" style="min-height: 85vh;">
        <div class="row">
            <form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="" id="travelPostForm" name="travelPostForm" novalidate="">
                <input type="hidden" name="_token" value="RwVeLdeMZBiM3GobuQZvQ6wIJmq2n1fyZHEgjYl5">
                <input type="hidden" value="" name="travelPostID" id="travelPostID">
                <input type="hidden" value="" name="travelPostUsername" id="travelPostUsername">
                <input type="hidden" value="" name="travelPostLink" id="travelPostLink">
                <input type="hidden" value="0" name="travelPostStatus" id="travelPostStatus">

                <div class="col-xs-12 mt-20 ps-relative">
                    <a href="#modal-tutorial" data-toggle="modal" class="fc-sixteenth"><i class="fa fa-info-circle mr-5 fs-18" aria-hidden="true"></i>Hướng dẫn tính năng viết Blog trên Gody.vn</a>
                </div>

                <div class="col-xs-12 mt-20 ps-relative">
                    <!-- <span class="input-count-top-right tn20 bg-transparent"><span class="__count">0</span>/<span>350</span></span> -->

                    <textarea id="travelPostDescription" name="travelPostDescription" type="text" class="form-control travelPostDescription bar-10 bn card6 p-15 resize-none w-fit h-inherit bn fs-18 bar-2" placeholder="Giới thiệu ngắn ..." rows="4"></textarea>
                </div>

                <div class="col-xs-12 mt-40 ps-relative">
                    <div class="col-xs-3 pr-10 pl-0 ps-relative datepicker-box">
                        <label for="" class="ps-absolute c-pointer t0 l20 h-50 lh-50 fs-16 w-30 ta-left"><i class="fa fa-calendar" aria-hidden="true"></i></label>

                        <input type="text" placeholder="Ngày bắt đầu" value="" class="w-fit fs-16 pl-50 pr-14 h-50 lh-50 bn card6 outline-none bar-10 datepicker c-pointer trip-start-datepicker" readonly="readonly">

                        <input type="hidden" name="tripStartDate" id="tripStartDate" value="">
                        <label for="" class="ps-absolute c-pointer t0 r20 h-50 lh-50 fs-26 w-30 ta-left fc-sixth hide" id="tripStartDateClear">&times;</label>

                    </div>
                    <div class="col-xs-3 px-10 ps-relative">
                        <label for="tripDuration" class="ps-absolute c-pointer t0 l30 h-50 lh-50 fs-16 w-30 ta-left"><i class="fa fa-clock-o" aria-hidden="true"></i></label>

                        <input type="number" placeholder="Tổng số ngày" value="" name="tripDuration" class="w-fit fs-16 pl-50 pr-14 h-50 lh-50 bn card6 outline-none bar-10 appearance-none js-enter-none" min="0" id="tripDuration">
                    </div>
                    <div class="col-xs-3 px-10 ps-relative">
                        <label for="tripCost" class="ps-absolute c-pointer t0 l30 h-50 lh-50 fs-16 w-30 ta-left"><i class="fa fa-dollar" aria-hidden="true"></i></label>

                        <input type="text" placeholder="Chi phí chuyến đi" value="" name="tripCost" class="w-fit fs-16 pl-50 pr-14 h-50 lh-50 bn card6 outline-none bar-10 appearance-none" id="tripCost" onChange="formatCurrency(this);">
                    </div>

                    <div class="col-xs-3 pl-10 pr-0 ps-relative dropdown">
                        <label for="travelPostTagSearch" class="ps-absolute c-pointer t0 l30 h-50 lh-50 fs-16 w-30 ta-left"><i class="fa fa-tags" aria-hidden="true"></i></label>

                        <input type="text" placeholder="Nhập tìm kiếm tag" value="" class="w-fit fs-16 pl-50 pr-14 h-50 lh-50 bn card6 outline-none bar-10 travel-post-tag-search js-enter-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" aria-invalid="false" name="travelPostTagSearch">

                        <ul class="dropdown-menu travel-post-tag-dropdown-list card6 bn mt-12 wmn-fit bar-10 pl-30 py-12 pr-12 list-ls-disc hmx-350  lauto r0 wmx-300 overflow-x-hidden" id="hashtags-list">
                            Nhập từ khóa...
                        </ul>

                        <input type="hidden" name="travelPostTags" id="travelPostTags" value="">
                        <input type="hidden" name="travelPostTagsRemove" id="travelPostTagsRemove">
                    </div>
                </div>

                <div class="col-xs-12 mt-12 travel-post-tag-list">
                </div>

                <div class="col-xs-9 mt-40">
                    <div class="form-group ps-relative">
                        <div class="travelPostContent travel-post-content hmn-250 bn bs-none pb-100 resize-none w-fit h-inherit fs-18" id="travelPostContent" name="travelPostContent" placeholder="Nội dung bài viết ... (Click + để chèn hình ảnh, clip, fb, instagram ...)" contenteditable="true"><div><br></div></div>

                        <textarea name="travelPostContentCheck" id="travelPostContentCheck" class="hide"></textarea>


                        <div class="dropdown ps-absolute quick-insert-container" style="top: -5px; left: -50px;">
                            <div class="quick-insert ps-absolute h-40 w-40 lh-40 bar-circle ta-center fs-40 fc-primary ba bc-primary c-pointer bg-white h:bg-eighth card4" data-toggle="dropdown">
                                <span class="d-block va-middle rotate-1/8 t-all t-duration-slow h-40 floating-btn">&times;</span>
                            </div>

                            <div class="quick-insert-helper ps-absolute c-pointer pl-20 bg-white t-all t-duration-slowx2 dropdown-menu l50 bn bs-none ws-nowrap mt-0 py-0">
                                <button type="button" class="d-inline-block ps-relative h-40 w-40 fc-sixth ta-center mr-10 h:fc-primary bn bs-none bg-white outline-none p-0 add-btn-picture">
                                    <span class="d-inline-block h-fit va-middle"></span><i class="fa fa-picture-o fs-26 va-middle" aria-hidden="true"></i>

                                    <span class="fs-12 ps-absolute ws-nowrap bn18 l50% translateXn50% title bg-primary px-8 fc-white z-2 bar-4">Chèn hình ảnh</span>
                                </button>
                                <button type="button" class="d-inline-block ps-relative h-40 w-40 fc-sixth ta-center mr-10 h:fc-primary bn bs-none bg-white outline-none p-0 add-btn-albums">
                                    <i class="fa fa-picture-o fs-26 ps-absolute l2 bg-white t3" aria-hidden="true"></i>
                                    <span class="d-inline-block h-fit va-middle"></span><i class="fa fa-picture-o fs-26 va-middle" aria-hidden="true"></i>

                                    <span class="fs-12 ps-absolute ws-nowrap bn18 l50% translateXn50% title bg-primary px-8 fc-white z-2 bar-4">Chèn Albums, Frame hình</span>
                                </button>
                                <button type="button" class="d-inline-block ps-relative h-40 w-40 fc-sixth ta-center mr-10 h:fc-primary bn bs-none bg-white outline-none p-0 add-btn-video add-btn-embeds">
                                    <span class="d-inline-block h-fit va-middle"></span><i class="fa fa-video-camera fs-26 va-middle" aria-hidden="true"></i>

                                    <span class="fs-12 ps-absolute ws-nowrap bn18 l50% translateXn50% title bg-primary px-8 fc-white z-2 bar-4">Chèn Video ( Lấy link từ thanh trình duyệt )
                                        <img src="https://media2.gody.vn/public/mytravelmap/images/2016/12/6/nguyen_tu_7a/df6484703b472290b2b7653b1efecfff.png" class="ps-absolute l0" style="top: 113%;">
                                    </span>
                                </button>
                                <button type="button" class="d-inline-block ps-relative h-40 w-40 fc-sixth ta-center mr-10 h:fc-primary bn bs-none bg-white outline-none p-0 add-btn-embeds">
                                    <span class="d-inline-block h-fit va-middle"></span><i class="fa fa-facebook-official fs-26 va-middle" aria-hidden="true"></i>

                                    <span class="fs-12 ps-absolute ws-nowrap bn18 l50% translateXn50% title bg-primary px-8 fc-white z-2 bar-4">Hình ảnh từ Facebook ( Lấy link từ thanh trình duyệt )
                                        <img src="https://media2.gody.vn/public/mytravelmap/images/2016/12/6/nguyen_tu_7a/3fc8f358589f1c1059d180ec185fe936.png" class="ps-absolute l0" style="width: 150%;top: 113%;">
                                    </span>
                                </button>
                                <button type="button" class="d-inline-block ps-relative h-40 w-40 fc-sixth ta-center mr-10 h:fc-primary bn bs-none bg-white outline-none p-0 add-btn-embeds">
                                    <span class="d-inline-block h-fit va-middle"></span><i class="fa fa-instagram fs-26 va-middle" aria-hidden="true"></i>

                                    <span class="fs-12 ps-absolute ws-nowrap bn18 l50% translateXn50% title bg-primary px-8 fc-white z-2 bar-4">Hình ảnh từ Instagram ( Lấy link từ thanh trình duyệt )
                                        <img src="https://media2.gody.vn/public/mytravelmap/images/2016/12/6/nguyen_tu_7a/31273fb63d9d2bc8555ed3e7779505d7.png" class="ps-absolute l0" style="top: 113%;">
                                    </span>
                                </button>
                                <button type="button" class="ps-relative h-40 w-40 fc-sixth ta-center mr-10 h:fc-primary bn bs-none bg-white outline-none p-0 hide">
                                    <span class="d-inline-block h-fit va-middle"></span><i class="fa fa-sort-amount-desc fs-26 va-middle" aria-hidden="true"></i>

                                    <span class="fs-12 ps-absolute ws-nowrap bn18 l50% translateXn50% title bg-primary px-8 fc-white z-2 bar-4">Mục lục bài viết</span>
                                </button>
                                <button type="button" class="ps-relative h-40 w-40 fc-sixth ta-center mr-10 h:fc-primary bn bs-none bg-white outline-none p-0 add-btn-link hide">
                                    <span class="d-inline-block h-fit va-middle"></span><i class="fa fa-link fs-26 va-middle" aria-hidden="true"></i>

                                    <span class="fs-12 ps-absolute ws-nowrap bn18 l50% translateXn50% title bg-primary px-8 fc-white z-2 bar-4">Chèn link</span>
                                </button>

                                <button type="button" class="ps-relative h-40 w-40 fc-sixth ta-center mr-10 h:fc-primary bn bs-none bg-white outline-none p-0 add-btn-embeds">
                                    <span class="d-inline-block h-fit va-middle"></span><i class="fa fa-link fs-26 va-middle" aria-hidden="true"></i>

                                    <span class="fs-12 ps-absolute ws-nowrap bn18 l50% translateXn50% title bg-primary px-8 fc-white z-2 bar-4">Chèn bài chi tiết blog Gody ( Lấy link từ thanh trình duyệt )
                                        <img src="https://media2.gody.vn/public/mytravelmap/images/2016/12/6/nguyen_tu_7a/f716ce08bfc93d220d96c575ab8b5da1.png" class="ps-absolute l0" style="top: 113%;">
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="display-inline-block txt-sub-color-blue cursor-pointer font-weight-normal" for="travelPostGalleryIn"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tạo albums ảnh cuối bài viết</label>
                        <label class="selectit display-inline-block txt-sub-color-blue cursor-pointer font-weight-normal pull-right" style="display: none !important;"><input class="custom-checkbox" type="checkbox" value="1" name="travelPostPin" id="travelPostPin">Ghim bài viết</label>

                        <input type="file" name="travelPostGalleryIn" class="hidden" id="travelPostGalleryIn" multiple="" accept="image/jpeg,image/png,image/gif,.JPEG">
                        <input type="hidden" name="travelPostGalleryRemove" id="travelPostGalleryRemove">
                        <div class="travel-post-gallery gallery-119">
                        </div>
                    </div>

                    <div class="form-group text-center ps-fixed b0 w-fit l0 card1 mb-0 p-12 bg-white z-9">
                        <a class="btn btn-default travel-post-btn-draft">Lưu nháp</a>
                        <button class="btn btn-primary travel-post-btn-submit bg-primary bc-primary h:bs-lg" id="pc-dang-blog-thanh-cong-nut-viet-ngay">Đăng bài</button>
                    </div>

                    <div class="form-group hide" style=" ">
                        <span style=" font-weight:bold;text-decoration:underline;color:#D02028;"><i class="fa fa-clock-o" aria-hidden="true"></i> Lưu ý:</span> <br>
                        - Bạn chỉ có thể chỉnh sửa bài viết trong vòng <span style="color:#D02028;">2 tiếng </span>kể từ khi đăng bài. <br>
                        - Hãy sử dụng chức năng <span style="color:#D02028;">"Lưu nháp"</span> cho bài viết chưa hoàn thiện.
                    </div>
                </div>

            </form>

            <div class="col-xs-3 sidebar mt-40 ps-relative hmn-fit">
                <div class="ps-relative clearfix trip-spot-container" id="tripSpotContainer">

                    <div class="spot-placeholder c-pointer lh-32 fc-sixth ps-absolute l0 h:fc-sixth py-12 pl-12 pr-0 hide" id="spotPlaceholder">
                        <span class="d-inline-block va-middle mr-10 fs-20 fc-fourth"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span class="d-inline-block va-middle">Bạn đã đến đâu? Check-in ngay</span>
                    </div>

                    <div class="createtrip-spot ps-absolute w-fit bar-10 ba bc-seventh l0 bg-white z-8 hide" id="createtripSpot">
                        <div class="d-flex p-12 dropdown">
                            <span class="d-inline-block va-middle mr-10 fs-20 fc-fourth"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            <input type="text" class="form-control bs-none bn h-auto p-0 createtrip-spot-loc" placeholder="Bạn đã đến đâu?" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" autofocus="autofocus" data-o="">

                            <ul class="dropdown-menu m-0 p-0 bar-10 bn card6 pl-30 pt-12 pb-0 pr-12 list-ls-disc w-fit hmx-350 overflow-x-hidden overflow-y-auto createtrip-spot-tags hide" id="createtripSpotTags">

                            </ul>

                            <div class="donut ps-absolute r12 t12 hide"></div>
                        </div>
                        <div class="d-flex">
                            <div class="dropdown w-50% createtrip-spot-calendar">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="bn bs-none bg-eighth bblr-10 h-40 w-fit outline-none select-day-button" data-day="0">
                                    <span class="text d-inline-block w-80 ta-center">Chọn ngày</span>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu h-180 overflow-x-hidden overflow-y-auto bar-10 p-0 m-0 mt-3 list-ls-none z-1 w-fit wmn-fit">
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12 hide" data-day="0">Xóa ngày</li>

                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="1">Ngày 1</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="2">Ngày 2</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="3">Ngày 3</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="4">Ngày 4</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="5">Ngày 5</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="6">Ngày 6</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="7">Ngày 7</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="8">Ngày 8</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="9">Ngày 9</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="10">Ngày 10</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="11">Ngày 11</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="12">Ngày 12</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="13">Ngày 13</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="14">Ngày 14</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="15">Ngày 15</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="16">Ngày 16</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="17">Ngày 17</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="18">Ngày 18</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="19">Ngày 19</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="20">Ngày 20</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="21">Ngày 21</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="22">Ngày 22</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="23">Ngày 23</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="24">Ngày 24</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="25">Ngày 25</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="26">Ngày 26</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="27">Ngày 27</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="28">Ngày 28</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="29">Ngày 29</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="30">Ngày 30</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="31">Ngày 31</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="32">Ngày 32</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="33">Ngày 33</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="34">Ngày 34</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="35">Ngày 35</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="36">Ngày 36</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="37">Ngày 37</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="38">Ngày 38</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="39">Ngày 39</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="40">Ngày 40</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="41">Ngày 41</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="42">Ngày 42</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="43">Ngày 43</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="44">Ngày 44</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="45">Ngày 45</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="46">Ngày 46</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="47">Ngày 47</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="48">Ngày 48</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="49">Ngày 49</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="50">Ngày 50</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="51">Ngày 51</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="52">Ngày 52</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="53">Ngày 53</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="54">Ngày 54</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="55">Ngày 55</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="56">Ngày 56</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="57">Ngày 57</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="58">Ngày 58</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="59">Ngày 59</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="60">Ngày 60</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="61">Ngày 61</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="62">Ngày 62</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="63">Ngày 63</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="64">Ngày 64</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="65">Ngày 65</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="66">Ngày 66</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="67">Ngày 67</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="68">Ngày 68</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="69">Ngày 69</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="70">Ngày 70</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="71">Ngày 71</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="72">Ngày 72</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="73">Ngày 73</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="74">Ngày 74</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="75">Ngày 75</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="76">Ngày 76</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="77">Ngày 77</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="78">Ngày 78</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="79">Ngày 79</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="80">Ngày 80</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="81">Ngày 81</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="82">Ngày 82</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="83">Ngày 83</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="84">Ngày 84</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="85">Ngày 85</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="86">Ngày 86</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="87">Ngày 87</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="88">Ngày 88</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="89">Ngày 89</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="90">Ngày 90</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="91">Ngày 91</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="92">Ngày 92</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="93">Ngày 93</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="94">Ngày 94</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="95">Ngày 95</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="96">Ngày 96</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="97">Ngày 97</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="98">Ngày 98</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="99">Ngày 99</li>
                                    <li class="h:bg-eighth h-40 lh-40 c-pointer pl-12" data-day="100">Ngày 100</li>
                                </ul>
                            </div>
                            <button type="button" class="fl-auto bn bg-primary bs-none bar-0 bbrr-10 h-40 createtrip-spot-save">Lưu</button>
                        </div>
                    </div>
                </div>
                <!-- /.trip-spot-container -->

                <div class="sticky mt-10 hide">
                    <div>
                        <div>
                            <a href="#" class="display-block mb-20 add-btn add-btn-picture">
                                <span class="travel-blog-color-main add-btn-icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span> Chèn hình ảnh</a>
                            <div>
                                <input type="file" multiple="" accept="image/jpeg,image/png,image/gif,.JPEG" class="hidden" id="InsertPicture" name="InsertPicture">
                            </div>
                        </div>

                        <div>
                            <a href="#modal-login" data-toggle=modal class="display-block mb-20 add-btn add-btn-albums">
                                <span class="travel-blog-color-main add-btn-icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span> Chèn Albums, Frame hình</a>
                        </div>

                        <div class="position-relative">
                            <a href="#" class="display-block mb-20 add-btn add-btn-paragraph">
                                <span class="travel-blog-color-main add-btn-icon"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i></span> Mục lục bài viết
                            </a>
                            <div class="add-panel add-paragraph">
                                <div class="inner">
                                    <div class="form-group mb-0 clearfix">
                                        <div class="pull-left inpwrap">
                                            <input type="text" class="form-control" id="add-paragraph-input" name="addParagraphInput" placeholder="Nhập tiêu đề" autofocus="autofocus"></div>
                                        <div class="pull-right">
                                            <button class="btn btn-default border-radius-25">Chèn ngay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-panel-bg"></div>
                        </div>

                        <div class="position-relative">
                            <a href="" class="display-block mb-20 add-btn add-btn-link">
                                <span class="travel-blog-color-main add-btn-icon"><i class="fa fa-link" aria-hidden="true"></i></span> Link
                            </a>
                            <div class="add-panel add-link">
                                <div class="inner">
                                    <div class="form-group mb-0 clearfix">
                                        <div class="pull-left inpwrap mb-15">

                                            <input type="text" class="form-control" placeholder="Mô tả" autofocus="autofocus" id="addTextInput" name="addTextInput">
                                        </div>
                                        <div class="pull-left inpwrap">
                                            <input type="text" class="form-control" placeholder="Đường dẫn" autofocus="autofocus" id="addURLInput" name="addURLInput">
                                        </div>
                                        <div class="pull-right">
                                            <button class="btn btn-default border-radius-25">Chèn ngay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-panel-bg"></div>
                        </div>

                        <div class="position-relative">
                            <a href="" class="display-block mb-20 add-btn add-btn-video">
                                <span class="travel-blog-color-main add-btn-icon"><i class="fa fa-video-camera" aria-hidden="true"></i></span> Video
                            </a>
                            <div class="add-panel add-video">
                                <div class="inner">
                                    <div class="form-group mb-0 clearfix">
                                        <div class="pull-left inpwrap">
                                            <input type="text" class="form-control" placeholder="https://www.youtube.com/...." autofocus="autofocus" id="addVideoInput" name="addVideoInput"></div>
                                        <div class="pull-right">
                                            <button class="btn btn-default border-radius-25">Chèn ngay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-panel-bg"></div>
                        </div>
                    </div>

                    <div class="card1 content-card travel-post-box hide">
                        <h2 class="hndle ui-sortable-handle">
                            <span>Chuyên mục</span>
                        </h2>
                        <div class="inside">
                            <div id="category-pop" class="tabs-panel categorydiv">
                                <ul id="categorychecklist-pop" class="categorychecklist form-no-clear">
                                    <div class="donut"></div>
                                </ul>
                            </div>
                            <input type="hidden" name="categoryCheck" id="categoryCheck" value="0">
                            <input type="hidden" name="travelPostCate" id="travelPostCate" value="">
                            <input type="hidden" name="travelPostCateRemove" id="travelPostCateRemove">
                        </div>
                    </div>

                    <div class="travel-post-catalog mt-12 hide">
                        <div class="hndle mb-12 font-weight-bold">Mục lục bài viết</div>
                        <ul class="catalog-content">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="set-video-wrap">
        <div class="cursor-pointer set-video-bg"></div>
        <div class="set-video-panel">
            <div class="inner pr-20 pl-20 pt-20 pb-20">
                <div class="form-group mb-0 clearfix">
                    <div class="pull-left inpwrap">
                        <input type="text" class="form-control border-radius-25" placeholder="Sử dụng link youtube.com" autofocus="autofocus">
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-default border-radius-25">Thêm ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.set-video-wrap -->

    <!-- Sortable -->
    <div class="wrapper-sortable">
        <a hreft="#" class="btn-close"><span aria-hidden="true">×</span></a>
        <div class="container-fluid">
            <div class="row container-primary">
                <div class="panel panel-default pull-left mb-0 preview">
                    <div class="wrapper__preview filter-item-1 pt-0">
                        <div class="content__preview" style="max-height: inherit;background: #fff !important;text-align: center;font-weight: bold;line-height: 22px;">Kéo và thả hình ảnh vào khung <span style="display: block;color: #a5a5a5; font-size: 14px;font-weight: normal;">(Không giới hạn hình ảnh, tối thiểu 3 hình)</span>
                        </div>
                        <div class="VCSortableInPreviewMode mb-0" contenteditable="false">
                            <div class="layout-album__preview">
                                <div class="layout-update__preview">
                                    <div class="text-right">
                                        <a title="Xóa" href="#" class="btnD-layout-update__preview"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        <a title="Sửa" href="#" class="btnU-layout-update__preview"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="layout-album-row clearfix mb-4 layout-album-row1"></div>
                                <div class="layout-album-row clearfix layout-album-row2"></div>
                            </div>
                            <div class="layout-caption__preview" contenteditable="true" data-placeholder="[nhập chú thích]"></div>
                        </div>
                        <div id="anchor-content__preview" class="content__preview pt-0 pl-0" style="max-height: inherit; background: #fff !important; font-size: 14px;">
                            Xem video <strong><a href="https://www.youtube.com/watch?v=iAb2gH9zjgQ&feature=youtu.be" target="_blank" style="color: #337ab7 !important;">Hướng dẫn sử dụng </a></strong>
                        </div>

                    </div>

                    <div class="text-right action__wrapper-sortable">
                        <button class="btn btn-default btn-cancel">Hủy</button>
                        <button class="btn btn-success btn-insert">Chèn ngay</button>
                    </div>
                </div>

                <div class="panel panel-default pull-right mb-0 filter">
                    <div class="mb-10 text-center font-weight-bold">Chọn kiểu</div>
                    <div class="filter-item active" data-filter="normal" title="Canh giữa">
                        <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                        <span class="width-60percent height-30percent float-none margin-auto mt-3 content__filter-item"></span>
                        <span class="width-60percent height-30percent float-none margin-auto mt-3 background-sweet"></span>

                        <span class="width-60percent height-30percent float-none margin-auto mt-3 content__filter-item"></span>
                    </div>
                    <div class="text-center mb-12">Canh giữa</div>
                    <div class="filter-item" data-filter="full" title="Tràn lề">
                        <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                        <span class="width-60percent height-30percent float-none margin-auto mt-3 content__filter-item"></span>
                        <span class="width-100percent height-30percent float-none margin-auto mt-3 background-sweet"></span>

                        <span class="width-60percent height-30percent float-none margin-auto mt-3 content__filter-item"></span>
                    </div>
                    <div class="text-center mb-12">Tràn lề</div>

                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="panel panel-default pull-left images mb-0 clearfix">
                    <div class="filter-item pull-left upload__images pos-r">
                        <label for="fileSortable">
                            <i class="fa fa-camera"></i>
                        </label>
                        <label for="fileSortable">Tải hình lên</label>
                        <label for="fileSortable" style="position:absolute;top:0;left:0;right:0;bottom:0; cursor: pointer;"></label>
                        <input id="fileSortable" name="fileSortable" type="file" class="hide" multiple="multiple" accept="image/jpeg,image/png,image/gif,.JPEG">
                    </div>
                    <div class="preview-images pull-left">
                        <div id="sortable-images" class="list__preview-images"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>    <!-- End sortable -->
</div>
<div class="post-link-ewrap">
    <span class="arrow"></span>
    <div>
        <a href="#" class="btn btn-default border-radius-0 border-none edit-link" title="Edit link"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        <a href="#" class="btn btn-default border-radius-0 border-none unlink" title="Unlink"><i class="fa fa-chain-broken" aria-hidden="true"></i></a>
    </div>
</div>
<div id="content-edit-toolbar" class="content-edit-toolbar ps-absolute v-hidden o0">
    <div class="ps-absolute w-10 h-10 baw1 bas-solid bc-eighteenth l50% mln-5 bn5 rotate-1/8 bg-eighteenth brs-unset bbs-unset"></div>

    <ul class="list-ls-none p-0 m-0 clearfix">
        <li class="pull-left">
            <button type="button" class="ta-center fw-bold w-50 h-50 bn fs-14 fc-white outline-none bg-eighteenth blr-4 editor-action-bold" title="bold">B</button>
        </li>
        <li class="pull-left">
            <button type="button" class="ta-center fw-bold w-50 h-50 bn fs-14 fc-white outline-none bg-eighteenth editor-action-italic" title="italic">
                <i>I</i>
            </button>
        </li>
        <li class="pull-left">
            <button type="button" class="ta-center fw-bold w-50 h-50 bn fs-14 fc-white outline-none bg-eighteenth editor-action-underline" title="underline">
                <u>U</u>
            </button>
        </li>
        <li class="pull-left">
            <button type="button" class="ta-center fw-bold w-50 h-50 bn fs-14 fc-white outline-none bg-eighteenth editor-action-h2" title="mục lục bài viết">H2</button>
        </li>
        <li class="pull-left">
            <button type="button" class="ta-center fw-bold w-50 h-50 bn fs-14 fc-white outline-none bg-eighteenth brr-4 editor-action-link" title="link" data-toggle="dropdown"><i class="fa fa-link"></i></button>

            <div class="dropdown-menu bs-none bn bg-eighteenth t0 fc-white p-0 m-0 ws-nowrap mln-70">
                <input type="text" class="bn bs-none form-control d-inline-block w-300 va-middle bg-eighteenth fc-white editor-action-link__input" placeholder="Đường dẫn" autofocus="autofocus">
                <button type="button" class="bn bs-none bg-transparent w-36 h-50 d-inline-block outline-none va-middle editor-action-link__save h:fc-sixteenth"><i class="fa fa-check" aria-hidden="true"></i></button>
                <button type="button" class="bn bs-none bg-transparent w-36 h-50 d-inline-block outline-none va-middle editor-action-link__close fs-30 h:fc-sixteenth">&times;</button>
            </div>
        </li>
    </ul>
</div>
@endsection()
