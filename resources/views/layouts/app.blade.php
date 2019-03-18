@if(request()->ajax())
    @yield('content')
@else
    @include('layouts.full')
@endif

@if(Session::has('toastr'))
    <script>
    toastr.{{Session::get('toastr')['statut']}}('{{Session::get('toastr')['message']}}');
    </script>
@endif