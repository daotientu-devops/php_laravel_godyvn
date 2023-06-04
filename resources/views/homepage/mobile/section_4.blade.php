<section class="bg-white pt-20 d-px-20">
    <div class="container">
        <div class="row">
            <div class="w-fit d-block">
                <div class="d-block w-fit" data-style="box-shadow: #ff8c00 1px 1px, #ff8c00 2px 2px, #ff8c00 3px 3px, #ff8c00 4px 4px, #ff8c00 5px 5px, #ff8c00 6px 6px, #ff8c00 7px 7px, #ff8c00 8px 8px, #ff8c00 9px 9px, #ff8c00 10px 10px, #ff8c00 11px 11px, #ff8c00 12px 12px, #ff8c00 13px 13px, #ff8c00 14px 14px">
                    <div class="w-fit d-block barr-black-2 ps-relative" data-style="border-left: 2px solid #333;border-bottom: 2px solid #333;border-right: 2px solid #333;background: white;">
                        <div class="w-fit d-block mb-12 pt-15 pb-10 pl-20 pr-20" style="background: #f7b15c !important;">
                            <div class="w-fit d-block mb-15">
                                <h3 class="fc-fourteenth fs-26 fw-700 lh-120% p-0 m-0 tt-capitalize ai-center d-flex"> Editor's Picks </h3>
                            </div>
                            <div class="w-fit d-block">
                                @foreach($editor_picks as $pick)
                                    <div class="ps-relative d-flex fd-column mb-10 w-fit">
                                        <a href="{{url($pick->share_url)}}" title="{{ $pick->title }}">
                                            <img style="height: 200px;" class="bar-8 w-fit object-cover object-center" src="{{ url(env('FOLDER_UPLOAD') . $pick->thumbnail_url) }}" alt="{{ $pick->title }}"></a>
                                        <div class="w-fit d-block pt-15 pb-0">
                                            <a href="{{url($pick->share_url)}}" title="{{ $pick->title }}" class="fc-fourteenth fs-18 fw-600 lh-24">
                                                {{ $pick->title }}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
