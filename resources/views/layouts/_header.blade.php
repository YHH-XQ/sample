<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <a href="{{ route('home') }}" id="logo">Sample App</a>
            <nav>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <li><a href="#">用户列表</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{Auth::user()->name}} <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('users.show',Auth::user()->id)}}">个人中心</a></li>
                                <li><a href="#">编写资料</a></li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" id="logout">
                                        <form action="{{route('logout')}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <input type="submit" class="btn btn-danger" name="button" value="退出">
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @else
                    <li><a href="{{ route('help')}}">帮助</a></li>
                    <li><a href="{{route('login')}}">登录</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>