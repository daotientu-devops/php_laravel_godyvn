<div class="w-fit d-block">
    <div class="bg-white w-fit d-block overflow-hidden">
        <div class="w-fit d-block" style="border-bottom: 1px solid #e5e5e5; ">
            <div class="w-fit d-block bg-white pt-20 pl-20 pr-20 pb-10 bar-8 pb-0">
                <div class="ps-relative p-0 overflow-hidden xs:p-0">
                    <a href="{{url($first_post->share_url)}}">
                        <img src="{{ url(env('FOLDER_UPLOAD') . $first_post->thumbnail_url) }}" style="height: 400px;" class="w-fit object-cover object-center bar-8 d-h:o50 xs:h-184">
                    </a>
                    <div class="xs:mt-5 ps-relative c-pointer mt-20" data-x="my-20">
                        <div class="_i-content-t">
                            <a href="{{url($first_post->share_url)}}" data-class="mb-5 truncate-line lineclamp2 fs-28 fc-black fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 lh-24 xs:fs-24 xs:my-10" class="fs-28 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-24 xs:my-0 my-10 d-block w-fit h:fc-sixth" style="line-height: 120%;padding-top: 10px !important;margin-top: 0px !important;">
                                {{ $first_post->title }}
                            </a>
                        </div>
                        <span class="c-auto _i-des fc-fourteenth fs-15 truncate-line lineclamp4 mb-0 xs:lineclamp5 xs:lh-md td-none fw-400 lh-24 xs:fs-14 xs:my-0 ta-justify">{{ $first_post->excerpt }}</span>
                        <div class="clearfix"></div>
                        <div class="d-flex ai-center jc-space-between py-10 xs:pb-3 c-auto">
                            <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                <a href="{{url('/')}}" class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-8 fc-sixth">
                                    <img data-src="https://gody.vn/public/v3/images/user/avatar/olipnoi4502/132526927-20201007111625.jpg" data-srcset="https://gody.vn/public/v3/images/user/avatar/olipnoi4502/132526927-20201007111625.jpg" class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;" src="https://gody.vn/public/v3/images/user/avatar/olipnoi4502/132526927-20201007111625.jpg"
                                         srcset="https://gody.vn/public/v3/images/user/avatar/olipnoi4502/132526927-20201007111625.jpg">
                                </a>
                                <div class="fl-1">
                                    <a href="{{url('/')}}" class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">{{ $first_post->author_name }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-fit d-block" style="border-bottom: 1px solid #e5e5e5;" data-total="13-0">
            @if (!empty((array)$list_posts))
                @foreach ($list_posts as $post)
                    <div class="w-fit p-20 bar-8">
                        <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                            <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                                <a href="{{url($post->share_url)}}" class="d-block w-fit h-fit ps-relative" target="">
                                    <img src="{{ url(env('FOLDER_UPLOAD') . $post->thumbnail_url) }}" alt="{{ $post->title }}" class="w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84">
                                </a>
                            </div>
                            <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="{{url($post->share_url)}}" class="mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                        {{ $post->title }}
                                    </a>
                                </div>
                                <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">{{ $post->excerpt }}</span>
                                <div class="clearfix"></div>
                                <div class="d-flex ai-center jc-space-between py-10 c-auto">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                        <a href="{{url('/')}}" class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-8 fc-sixth" target="">
                                            <img data-src="https://media2.gody.vn//public/images/user-2/2023/03/09/caztushouse9399/thumbnail-70/640a0317b83e3-1678377751.png" data-srcset="https://media2.gody.vn//public/images/user-2/2023/03/09/caztushouse9399/thumbnail-70/640a0317b83e3-1678377751.png" class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;" alt="house caztus"
                                                 src="https://media2.gody.vn//public/images/user-2/2023/03/09/caztushouse9399/thumbnail-70/640a0317b83e3-1678377751.png" srcset="https://media2.gody.vn//public/images/user-2/2023/03/09/caztushouse9399/thumbnail-70/640a0317b83e3-1678377751.png">
                                        </a>
                                        <div class="fl-1">
                                            <a href="{{url('/')}}" class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;" target="">{{ $post->author_name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach()
            @endif
        </div>
    </div>
</div>
