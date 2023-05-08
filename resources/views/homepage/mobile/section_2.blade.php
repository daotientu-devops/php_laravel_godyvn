<div class="w-fit d-block bar-8 bg-white px-20">
    <div class="w-fit d-flex pt-20 pb-10 jc-space-between">
        <div>
            <span class="w-fit d-block fc-black fw-700 fs-36 lh-38 xs:fs-26">Điểm đến phổ biến</span>

        </div>
    </div>
    <div class="w-fit d-flex horizontal-scrolling overflow-x-auto">
        @foreach($hot_locations as $location)
            <div class="col-x-3 mr-15" style="min-width: calc(100% / 3 + 10px) !important;">
                <div class="bar-8 w-fit" style="height: 176px;overflow: hidden;">
                    <div class="w-fit h-fit d-block ps-relative">
                        <a href="{{url('diem-den' . $location->share_url)}}" class="w-fit h-fit d-block ps-relative">
                            <img src="{{ url(env('FOLDER_UPLOAD') . $location->thumbnail_url) }}" class="w-fit h-fit object-cover object-center">
                            <img data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" class="lazy-load" style="position: absolute; width: 100%; height: 100%; left: 0; " src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png" srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png">
                        </a>
                        <div class="ps-absolute b10 l10 truncate-line lineclamp2">
                            <a href="{{url('diem-den' . $location->share_url)}}" class="fc-white fs-20 fw-700">
                                {{ $location->name }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
