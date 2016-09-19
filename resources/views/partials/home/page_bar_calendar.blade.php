<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="#">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>@yield('name')</span>
        </li>
    </ul>
    @include('partials.home.calendar')
</div>
<!-- END PAGE BAR -->