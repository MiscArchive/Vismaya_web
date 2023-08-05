@include('frontEnd.layouts.header')
@include('frontEnd.layouts.navbar', ['curriculams' => \App\Models\Curriculum::where('status', 1)->get()])
<div class="page-content">
@yield('content')
</div>
@include('frontEnd.layouts.footer')
