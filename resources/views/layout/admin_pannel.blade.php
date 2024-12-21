@include('components.adminheader')

<div class="container-fluid page-body-wrapper">
@include('components.adminsidebar')
@hasSection('content')
@yield('content')
@else
{!!"<h1>No Content section is written for this page</h1>"!!}
@endif
@include('components.adminfooter')