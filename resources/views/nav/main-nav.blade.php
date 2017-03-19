<nav id="main-nav" class="main-nav">
    <div class="panel-body">
        {{--<form class="sidebar-form visible-xs">--}}
        {{--<div class="form-group">--}}
        {{--<input type="text" class="form-control" placeholder="Search">--}}
        {{--</div>--}}
        {{--</form>--}}
    </div>
    <ul class="nav nav-stacked">

        <li>
            <a href="/artists">
                <i class="fa fa-microphone" aria-hidden="true"></i> Artists
            </a>
        </li>
        <li>
            <a href="/profile">
                <i class="fa fa-user" aria-hidden="true"></i> Profile
            </a>
        </li>

        <li>
            <a href="/offers">
                <i class="fa fa-ticket" aria-hidden="true"></i> Offers <span style="background: white;
    border-radius: 50%;
    padding: 0 5px;
    color: #ff7d00;
    font-weight: 600; font-size: .9em">1</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-calendar" aria-hidden="true"></i> Events
            </a>
        </li>
        <li>
            <form method="post" action="{{ route('logout') }}">
                {{ csrf_field() }}
                <button type="submit" class="btn-link">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out
                </button>
            </form>

        </li>

    </ul>
</nav>