@include('layouts.partials.header')
@if ($agent->isMobile())
    @include('layouts.partials.mobile.nav')
@else
    @include('layouts.partials.nav')
@endif
@yield('content')
@include('layouts.partials.footer')
