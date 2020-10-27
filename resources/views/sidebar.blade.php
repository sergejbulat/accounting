<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="{{route('admin.project.index')}}"><span>{{ __('projects') }}</span></a></li>
            <li><a href="{{route('admin.users-projects.index')}}"><span>{{ __('users-projects') }}</span></a></li>
            <li><a href="{{route('admin.invoice.index')}}"><span>{{ __('invoice') }}</span></a></li>
            <li><a href="{{route('admin.tax.index')}}"><span>{{ __('tax') }}</span></a></li>
            <li><a href="{{route('admin.category.index')}}"><span>{{ __('category') }}</span></a></li>
            <li><a href="{{route('admin.product.index')}}"><span>{{ __('product') }}</span></a></li>
            <li><a href="{{route('admin.invoice-products.index')}}"><span>{{ __('invoice-products') }}</span></a></li>
            <li><a href="{{route('admin.sales.index')}}"><span>{{ __('sales') }}</span></a></li>
            <li><a href="{{route('admin.rules.index')}}"><span>{{ __('rules') }}</span></a></li>
            <li><a href="{{route('admin.users-rules.index')}}"><span>{{ __('users-rules') }}</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
