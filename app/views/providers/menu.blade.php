<ul>
    <li {{ menu_active('settings') }}>
        <a href="{{ URL::to('provider/settings') }}">
            <i class="fui-gear"></i>Provider settings
        </a>
    </li>
    <li {{ menu_active('client') }}>
        <a href="{{ URL::to('provider/client') }}"><i class="fui-user"></i>Clients</a>
        <ul>
            <li>
                <a href="{{ URL::to('provider/client/new') }}">
                    <i class="fui-plus"></i>New Clients
                </a>
            </li>
        </ul>
    </li>
    <li {{ menu_active('job') }}>
        <a href="{{ URL::to('provider/job') }}">
            <i class="fui-new"></i>Job Posts
        </a>
        <ul>
            <li>
                <a href="{{ URL::to('provider/job/new') }}">
                    <i class="fui-plus"></i>New Job
                </a>
            </li>
        </ul>
    </li>
    <li {{ menu_active('app') }}>
        <a href="{{ URL::to('provider/app') }}">
            <i class="fui-export"></i>Applications
        </a>
        <ul>
            <li>
                <a href="{{ URL::to('provider/app/mail') }}">
                    <i class="fui-mail"></i>Mailout/Blast
                </a>
            </li>
        </ul>
    </li>
    <li {{ menu_active('banner') }}><a href="{{ URL::to('provider/banner') }}">Banners</a></li>
</ul>