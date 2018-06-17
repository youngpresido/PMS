<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="{{ route('prison.index') }}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
            </a>
          </li>
          <li class="active">
            <a class="" href="{{ route('add_prisoner')}}">
                          <i class="icon_house_alt"></i>
                          <span>Add Prisoner</span>
            </a>
          </li>
          @if(Auth::check())
          @if(Auth::user()->id=='1' || Auth::user()->type=="admin")
          <li class="active">
            <a class="" href="{{ route('ward')}}">
                          <i class="icon_house_alt"></i>
                          <span>All Users</span>
            </a>
          </li>
          @endif
          @endif
          </ul>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>