@include('components.admin_auth_header')



@hasSection('content')
@yield('content')
@else
{!!"<h1>No Content section is written for this page</h1>"!!}
@endif
@include('components.admin_auth_footer')