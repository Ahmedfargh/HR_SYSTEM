<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image ">
              <img src="../../dist/img/user2-160x160.jpg" class="img-circle d-block mx-auto" alt="{{auth()->user()->name}}" />
            </div>
            <div class="pull-left info">
              <p>{{auth()->user()->name}}</p>

            </div>
          </div>
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            @if(is_allowed("view_employees"))
            <li class="treeview text-center">
              <a href="{{route('employee_management')}}">
                <i class="fa-solid fa-users"></i>
              </a>
            </li>
            @endif
            @if(is_allowed("view_departments"))
            <li class="trewwview text-center">
              <a href="{{route('department_index')}}">
                <i class="fa-solid fa-section"></i>
              </a>
            </li>
            @endif
            @if(is_allowed("view_candidates"))
            <li class="treeview text-center">
              <a href="{{route('candidate_index')}}">
                <i class="fa-solid fa-filter-circle-dollar"></i>              
              </a>
            </li>
            @endif
            @if(is_allowed("view_positions"))
            <li class="treeview text-center">
              <a href="{{route('position_index')}}">
                <i class="fa-solid fa-user-tie"></i>              
              </a>
            </li>
            @endif
            @if(is_allowed("view_permissions"))
            <li class="treeview text-center">
              <a href="{{route('permissions_roles_index')}}">
                <i class="fa-solid fa-user-gear"></i>
              </a>
            </li>
            @endif
            <li class="treeview text-center">
              <a href="{{route('getUserPage')}}">
                <i class="fa-solid fa-user"></i>
              </a>
            </li>
          </ul>       
                      
            
            
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>