<aside class="left-sidebar" data-sidebarbg="skin6">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar" data-sidebarbg="skin6">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
          <ul id="sidebarnav">
              <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/"
                      aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                          class="hide-menu">HOME</span></a></li>
              <li class="list-divider"></li>
              <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href={{ route('orders.index') }}
                aria-expanded="false"><i data-feather="sliders" class="feather-icon"></i><span
                    class="hide-menu">Orders</span></a></li>


              <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('task.index') }}"
                  aria-expanded="false"><i data-feather="feather" class="feather-icon"></i><span
                      class="hide-menu">REVIEW
                  </span></a>
          </li>
          <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
            aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                class="hide-menu">Reports </span></a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a href="{{ route('content-writer_dailyreport.designers') }}" class="sidebar-link"><span
              class="hide-menu"> DAILY Designers
          </span></a>
  </li>
                  <li class="sidebar-item"><a href="{{ route('content-writer_monthlyreport.designers') }}" class="sidebar-link"><span
                    class="hide-menu"> MONTHLY Designers
                </span></a>

              </li>
        </ul>
    </li>




              <li class="list-divider"></li>

              <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
              <li class="sidebar-item">
                <form action="{{ route('logout') }}" method="post">
                @csrf
                <a class="sidebar-link sidebar-link" href=""
                    aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                        class="hide-menu">
                        <input type="submit" style="border:none;background:none;padding: 0"
                    value=" Logout">

                    </span></a>
                </form>
                </li>
          </ul>
      </nav>
      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
