<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">{{trans('admin.index')}}</li>
            <li><a href="/"><i class="fa fa-home"></i> <span>{{trans('admin.index')}}</span></a></li>
            <!-- Optionally, you can add icons to the links -->
            <li class="header">{{trans('admin.account')}}</li>
            <li><a href="/users"><i class="fa fa-users"></i> <span>{{trans('admin.users')}}</span></a></li>
            <li><a href="/admins"><i class="fa  fa-user-secret"></i> <span>{{trans('admin.admins')}}</span></a></li>
            <li class="header">{{trans('admin.gift')}}</li>
            <li><a href="/gift"><i class="fa fa-gift"></i> <span>{{trans('admin.gift')}}</span></a></li>
            <li><a href="/get"><i class="fa fa-table"></i> <span>{{trans('admin.get')}}</span></a></li>
            <li><a href="/share"><i class="fa fa-table"></i> <span>{{trans('admin.share')}}</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>