<div class="w-fit d-block p-20 bg-white">
    <div class="w-fit d-flex pt-20 pb-10 jc-space-between">
        <span class="w-fit d-block fc-black fw-700 fs-36 lh-38 xs:fs-26">Đối tác</span>

    </div>
    <div class="w-fit d-block">
        <div class="d-flex ai-top fw-wrap" style="--column:4; --gutter: 1px;">
            @foreach($partners as $partner)
                <div class="ai-center d-flex mb-25 p-5" style="width: calc((100% - var(--gutter)) / var(--column));">
                    <img src="{{ url(env('FOLDER_UPLOAD') . $partner->logo) }}" class="object-cover object-center w-fit">
                </div>
            @endforeach
        </div>
    </div>
</div>
