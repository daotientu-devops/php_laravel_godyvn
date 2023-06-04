<div class="w-fit d-block bar-8 bg-white px-20">
    <div class="w-fit d-flex pt-10 pb-0 jc-space-between">
        <span class="w-fit d-block fc-black fw-700 fs-36 lh-38 xs:fs-26">Bài viết xem nhiều</span>
    </div>
    <div class="w-fit d-block">
        <div class="d-flex ai-top fw-wrap jc-space-between" style="--column:2; --gutter: 20px;">
            @foreach($most_views as $view)
                <div class="g-item ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                    <div class="ps-relative p-0 mt-12 overflow-hidden xs:p-0 w-fit">
                        <a href="{{url($view->share_url)}}" title="{{ $view->title }}">
                            <img style="min-height: 150px;" class="w-fit object-cover object-center bar-8" src="{{ url(env('FOLDER_UPLOAD') . $view->thumbnail_url) }}" alt="{{ $view->title }}"></a>
                        <div class="my-10 ps-relative c-pointer">
                            <div class="_i-content-t">
                                <a href="{{url($view->share_url)}}" title="{{ $view->title }}" class="mb-5 fs-16_5 fc-fourteenth fw-600 xs:mb-0">
                                    {{ $view->title }}
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="d-flex ai-center jc-space-between py-10">
                                <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                    <a href="{{url('/')}}" title="{{ $view->author_name }}" class="bar-circle bbar-circle ps-relative w-30 h-30 td-none outline-none mr-8 fc-sixth">
                                        <img class="w-fit h-fit object-cover object-center bar-circle" style="filter: none;" src="https://gody.vn/public/v7/images/v7-avatar-default.jpg" alt="{{ $view->author_name }}">
                                    </a>
                                    <div class="fl-1">
                                        <a href="{{url('/')}}" title="{{ $view->author_name }}" class="d-inline-block va-middle truncate td-none
                                        outline-none fs-14 fw-600" style="color: #828282;">{{ $view->author_name }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
