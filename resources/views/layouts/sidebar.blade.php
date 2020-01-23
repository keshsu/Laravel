
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('customers.index')}}">
              <i class="mdi mdi-account-box  menu-icon"></i>
              <span class="menu-title">Customer</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('users.index')}}">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('posts.index')}}">
              <i class="mdi mdi-book  menu-icon"></i>
              <span class="menu-title">Blog Posts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('blogcategories.index')}}">
              <i class="mdi mdi-format-list-bulleted-type menu-icon"></i>
              <span class="menu-title">Blog Category</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('tags.index')}}">
              <i class="mdi mdi-tag-multiple menu-icon"></i>
              <span class="menu-title">Blog Tags</span>
            </a>
          </li>
        </ul>
      </nav>