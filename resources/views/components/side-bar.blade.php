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
          aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
              class="hide-menu">DOMAINS & FONTS </span></a>
      <ul aria-expanded="false" class="collapse  first-level base-level-line">
          <li class="sidebar-item"><a href="{{ route('fonts.index') }}" class="sidebar-link"><span
                      class="hide-menu"> SHOW & ADD FONTS
                  </span></a>
          </li>
          <li class="sidebar-item"><a href="{{ route('scopes.create') }}" class="sidebar-link"><span
                      class="hide-menu">
                     ADD DOMAIN
                  </span></a>
          </li>
          <li class="sidebar-item"><a href="{{ route('scopes.index') }}"class="sidebar-link"><span
              class="hide-menu">
             SHOW DOMAIN
          </span></a>
  </li>

      </ul>
  </li>

  <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
    aria-expanded="false"><i data-feather="slack" class="feather-icon"></i><span
        class="hide-menu">TYPES OF DESIGNES </span></a>
<ul aria-expanded="false" class="collapse  first-level base-level-line">

    <li class="sidebar-item"><a href="{{ route('types.index') }}" class="sidebar-link"><span
                class="hide-menu"> SHOW TYPES
            </span></a>
    </li>
    <li class="sidebar-item"><a href="{{ route('types.create') }}" class="sidebar-link"><span
                class="hide-menu">
                ADD TYPE
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
                          <li class="sidebar-item"><a href="form-checkbox-radio.html" class="sidebar-link"><span
                                      class="hide-menu">WORKING TASK
                                  </span></a>
                          </li>
                          <li class="sidebar-item"><a href="add role.html" class="sidebar-link"><span
                              class="hide-menu">ADD RULE
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
