<ul>
    <li {{ menu_active('job') }}>
        <a href="{{ URL::to('client/job') }}">
            <i class="fui-gear"></i>Job Posts
        </a>
    </li>
    <li {{ menu_active('app') }}>
        <a href="{{ URL::to('client/app/filter') }}">
            <i class="fui-new"></i>App Filter
        </a>
    </li>
    <li {{ menu_active('company') }}>
        <a href="{{ URL::to('client/company') }}">
            <i class="fui-export"></i>Company Profile
        </a>
    </li>
</ul>