@section ("header")


<header class="navbar navbar-fixed-top" role="banner">
    <div class="container-fluid">

        <ul class="top_links l_tinynav1">
            <!-- <li>
                <a href="#">
                    <span><i class="icon ion-chevron-right"></i></span>
                    {{ Auth::user()->district }}
                </a>
            </li> -->
            <li>
                <a href="#">
                    <span><i class="icon ion-chevron-right"></i></span>
                    {{ Auth::user()->facility->name }}
                </a>
            </li>

            <li>
                <a href="#">
                    <span><i class="icon ion-chevron-right"></i></span>
                    {{ Auth::user()->designation }}
                </a>
            </li>

            <li>
                <a href="#">
                    <span><i class="icon ion-chevron-right"></i></span>
                    <?php echo date("F"); ?>
                </a>
            </li>

        </ul>
        @if (Illuminate\Support\Facades\Auth::check())
        <ul class="nav navbar-nav navbar-right">

            <li class="user_menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    {{ Auth::user()->facility->code }} | {{Illuminate\Support\Facades\Auth::user()->name}}
                    <span class="navbar_el_icon ion-person"></span> <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href='{{ URL::to("user/".Illuminate\Support\Facades\Auth::user()->id."/edit") }}'>{{trans('messages.edit-profile')}}</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route("user.logout") }}">{{trans('messages.logout')}}</a></li>
                </ul>
            </li>

        </ul>

        @endif


    </div>
</header>




@show