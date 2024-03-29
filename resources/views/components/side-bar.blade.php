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
              <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                  aria-expanded="false"><i data-feather="user" class="feather-icon"></i><span
                      class="hide-menu">EMPLOYEE </span></a>
              <ul aria-expanded="false" class="collapse  first-level base-level-line">
                  <li class="sidebar-item"><a href="{{ route('users.index') }}" class="sidebar-link"><span
                              class="hide-menu"> SHOW
                          </span></a>
                  </li>
                  <li class="sidebar-item"><a href="{{ route('users.create') }}" class="sidebar-link"><span
                              class="hide-menu"> ADD NEW
                          </span></a>
                  </li>

              </ul>
          </li>



                          <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                              aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                  class="hide-menu">Reports </span></a>
                          <ul aria-expanded="false" class="collapse  first-level base-level-line">
                              <li class="sidebar-item"><a href="DailyReport.html" class="sidebar-link"><span
                                          class="hide-menu"> DAILY
                                      </span></a>
                              </li>
                              <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                          class="hide-menu"> MONTHLY
                                      </span></a>
                                      <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                        <li class="sidebar-item"><a href="{{ route('report.designers')}}" class="sidebar-link"><span
                                                    class="hide-menu"> Designer Report
                                                </span></a>
                                        </li>
                                        <li class="sidebar-item"><a href="form-inputs.html" class="sidebar-link"><span
                                          class="hide-menu">Task Reoport
                                      </span></a>
                              </li>
                                      </ul>
                              </li>
                          </ul>
                      </li>
                      <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                          aria-expanded="false"><i data-feather="trello" class="feather-icon"></i><span
                              class="hide-menu">RULE MANGMENT </span></a>
                      <ul aria-expanded="false" class="collapse  first-level base-level-line">
                          <li class="sidebar-item"><a href="{{ route('roles.index')}}" class="sidebar-link"><span
                                      class="hide-menu"> Roles
                                  </span></a>
                          </li>
                          <li class="sidebar-item"><a href="{{ route('roles.create') }}" class="sidebar-link"><span
                                      class="hide-menu"> Create Role
                                  </span></a>
                          </li>
                          <li class="sidebar-item"><a href="{{route('categories.index')}}" class="sidebar-link"><span
                                      class="hide-menu">Category
                                  </span></a>
                          </li>
                          <li class="sidebar-item"><a href="{{route('categories.create')}}" class="sidebar-link"><span
                              class="hide-menu">ADD Category
                          </span></a>
                  </li>
                      </ul>
                  </li>
                  <li class="list-divider"></li>
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










          </ul>
      </nav>
      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
