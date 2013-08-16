<ul>
    <li class="active">
        <a href="{{ URL::to('provider/settings') }}">
            <i class="fui-gear"></i>Provider settings
        </a>
    </li>
    <li>
        <a href="{{ URL::to('provider/client') }}"><i class="fui-user"></i>Clients</a>
        <ul>
            <li>
                <a href="{{ URL::to('provider/client/new') }}">
                    <i class="fui-plus"></i>New Clients
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{ URL::to('provider/client/job') }}">
            <i class="fui-new"></i>Job Posts
        </a>
        <ul>
            <li>
                <a href="{{ URL::to('provider/client/job/new') }}">
                    <i class="fui-plus"></i>New Job
                </a>
            </li>
        </ul>
    </li>
    <li>
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
    <li><a href="{{ URL::to('provider/banners') }}">Banners</a></li>
</ul>