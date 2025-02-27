<header class="main-header">
        <a href="{{route('Log_url')}}" class="logo">الموارد البشريه</a>
        
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <div class=" ">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-bell"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"style="heigh:300px">
              
              @foreach (auth()->user()->notifications  as $notification)
                <li class="border border-1">
                @if ($notification->data["type"]=="EMPLOYEE_ADDED")
                  {{$notification->data["text"]}}<a href="{{$notification->data["link"]}}" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">الموظف</a>
                  @elseif ($notification->data["type"]=="ُEMPLOYEE_UPDATED")
                    {{$notification->data["text"]}}<a href="{{$notification->data["link"]}}" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">الموظف</a>
                  @elseif ($notification->data["type"]=="EMPLOYEE_DELETED")
                    {{$notification->data["text"]}}
                @endif
                </li>
              @endforeach

            </ul>
          </div>
        </nav>
        
      </header>