<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
              <img src="../../admin_assets/images/faces/face28.png">
          </div>
          <div class="user-name">
            @if (Auth::check()) 
            {{ Auth::user()->name }}
            @endif
          </div>
          <div class="user-designation">
            @if (Auth::check()) 
            {{ Auth::user()->role }}
            @endif
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/index.php">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#headers" aria-expanded="false" aria-controls="headers">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Headers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="headers">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.home') }}">Home</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('uploadOtherPagesHeader') }}">Other Pages</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#about" aria-expanded="false" aria-controls="about">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">About Us</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="about">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('aboutus.About') }}">About</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Stats</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('aboutus.meetTeam') }}">Meet Team</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('aboutus.testimonial') }}">Testimonials</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#causes" aria-expanded="false" aria-controls="causes">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Causes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="causes">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('causes.addCause') }}">Create New Cause</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('causes.list') }}">Causes List</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('gallery.category') }}">
              <i class="icon-image menu-icon"></i>
              <span class="menu-title">Gallery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">Contact</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="pages/icons/feather-icons.html">
              <i class="icon-help menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="docs/documentation.html">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> --}}
        </ul>
      </nav>