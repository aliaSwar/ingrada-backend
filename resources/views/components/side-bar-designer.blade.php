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
              <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('to_do') }}"
                  aria-expanded="false"><i data-feather="target" class="feather-icon"></i><span
                      class="hide-menu">TODO
                  </span></a>
              </li>
              <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('in_ex') }}"
                aria-expanded="false"><i data-feather="target" class="feather-icon"></i><span
                    class="hide-menu">External Order
                </span></a>
            </li>




                          <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                              aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                  class="hide-menu">REPORTS </span></a>
                          <ul aria-expanded="false" class="collapse  first-level base-level-line">
                              <li class="sidebar-item"><a href="{{ route('Daily_repo') }}" class="sidebar-link"><span
                                          class="hide-menu"> DAILY
                                      </span></a>
                              </li>
                              <li class="sidebar-item"><a href="{{ route('Monthly_repo') }}" class="sidebar-link"><span
                                          class="hide-menu"> MONTHLY
                                      </span></a>
                              </li>
                          </ul>
                      </li>

                      <li class="sidebar-item"> <a class="sidebar-link " href="{{ route('tasks.index') }}"
                          aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                              class="hide-menu">Tasks </span></a>

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
