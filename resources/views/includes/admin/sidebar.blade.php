<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <li class="nav-header">Admin panel</li>
    <li class="nav-item">
        <a href="{{ route('admin.post.index') }}" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
                Posts
                <span class="badge badge-info right">{{$posts->total()}}</span>
            </p>
        </a>
    </li>
</ul>
