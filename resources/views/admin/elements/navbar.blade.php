<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ url('admin/dashboard') }}">
            <p></p>
        </a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <span>
                            {{ Auth::user()->name }}
                    </span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    {{-- edit email and password for authenticated user --}}
                    <li>
                        <a class="dropdown-item" href="{{url('admin/editAdmin/'.Auth::user()->id)}}" >
                            edit
                        <i class="icon-wrench"></i>
                    </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">

                                Logout

                            <i class="icon-switch2"></i>
                        </a>

                        <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>

            {{-- notification Icon --}}
            @if(auth()->user()->unreadNotifications->count())
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                   <span>
                        <i class="fa fa-bell"></i>

                        @if(auth()->user()->unreadNotifications->count())
                        <span class="badge badge-danger">{{auth()->user()->unreadNotifications->count()}}</span>
                        @endif
                    </span>
                </a>

                @if(auth()->user()->unreadNotifications->count())
                <ul class="dropdown-menu dropdown-menu-right">
                    @foreach(auth()->user()->unreadNotifications as $notify)
                    <li>
                        <a class="dropdown-item" href="{{route($notify->data['link'], ['notifyId' => $notify->id])}}">
                            {{$notify->data['data']}}
                            <i class="icon-bell"></i>
                        </a>

                    </li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endif
        </ul>
    </div>
</div>
<!-- /main navbar -->
