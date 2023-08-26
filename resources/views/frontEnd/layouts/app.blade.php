@include('frontEnd.layouts.header',  ['settings' => \App\Models\Setting::first()])
@include('frontEnd.layouts.navbar', ['settings' => \App\Models\Setting::first()])
<div class="page-content">
@yield('content')
</div>
@include('frontEnd.layouts.footer', ['settings' => \App\Models\Setting::first()])
