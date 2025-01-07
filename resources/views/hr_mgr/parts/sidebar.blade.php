<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active treeview">
              <a href="{{route('employee_management')}}">
                 <span>الموظفيين</span>
              </a>
            </li>
            <li class="trewwview">
              <a href="{{route('department_index')}}">
                <span>الادارات</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{route('candidate_index')}}">
                <span>مرشحين</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{route('position_index')}}">
                <span>المناصب</span>
              </a>
            </li>
          </ul>       
                      
            
            
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>