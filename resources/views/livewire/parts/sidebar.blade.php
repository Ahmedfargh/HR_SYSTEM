<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image ">
          @if (auth()->user()->personal_image)
          
            <img src="{{asset(auth()->user()->personal_image)}}" class="img-circle d-block mx-auto" alt="{{auth()->user()->name}}" />
          @else
          
            <img src="{{asset("dist\img\avatar5.png")}}" class="img-circle d-block mx-auto" alt="{{auth()->user()->name}}" />
          @endif
          
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
            الموظفين
            <i class="fa-solid fa-users"title="الموظفين"></i>
          </a>
        </li>
        @endif
        @if(is_allowed("view_departments"))
        <li class="trewwview text-center">
          <a href="{{route('department_index')}}">
            الادارات
            <i class="fa-solid fa-section"title="الادارات"></i>
          </a>
        </li>
        @endif
        @if(is_allowed("view_candidates"))
        <li class="treeview text-center">
          <a href="{{route('candidate_index')}}">
            المرشحين
            <i class="fa-solid fa-filter-circle-dollar"title="المرشحين"></i>              
          </a>
        </li>
        @endif
        @if(is_allowed("view_positions"))
        <li class="treeview text-center">
          <a href="{{route('position_index')}}">
            المناصب
            <i class="fa-solid fa-user-tie"></i>              
          </a>
        </li>
        @endif
        @if(is_allowed("view_permissions"))
        <li class="treeview text-center">
          <a href="{{route('permissions_roles_index')}}">
            الاذونات
            <i class="fa-solid fa-user-gear"></i>
          </a>
        </li>
        @endif
        <li class="treeview text-center">
          <a href="{{route('getUserPage')}}">
            الحساب الشخصى
            <i class="fa-solid fa-user"></i>
          </a>
        </li>
      </ul>       
                  
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>