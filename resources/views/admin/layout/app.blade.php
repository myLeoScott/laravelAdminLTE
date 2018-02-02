<!DOCTYPE html>
<html>
<head>
    @include('admin.layout.head.head_meta')
    @include('admin.layout.head.head_css')
    @include('admin.layout.head.head_js')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('admin.layout.body.nav')
    @include('admin.layout.body.sidebar')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                @yield('content_nav')
                <small>@yield('content_nav1')</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> {{trans('admin.index')}}</a></li>
                @yield('content_nav2')
            </ol>
        </section>
        <section class="content container-fluid">
            @yield('content')
        </section>
    </div>
    @include('admin.layout.footer.footer')

    <div class="control-sidebar-bg"></div>
</div>
@include('admin.layout.footer.footer_js')

</body>
</html>