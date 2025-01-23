<header class="main-header">
        <a href="../../index2.html" class="logo">الموارد البشريه</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-bell"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              @foreach ($auth()->user()->notifications  as $notification)
                  {{$notification->text}}
              @endforeach
            </ul>
          </div>
        </nav>
        
      </header>