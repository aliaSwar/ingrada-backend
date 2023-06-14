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
              aria-expanded="false"><i data-feather="sliders" class="feather-icon"></i><span
                  class="hide-menu">PERMISSION </span></a>
          <ul aria-expanded="false" class="collapse  first-level base-level-line">
              <li class="sidebar-item"><a href="permission.html" class="sidebar-link"><span
                          class="hide-menu"> SHOW & ADD
                      </span></a>
              </li>
              <li class="sidebar-item"><a href="Editpermition.html" class="sidebar-link"><span
                          class="hide-menu">EDIT
                      </span></a>
              </li>

          </ul>
          </li>
              <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-calendar.html"
                      aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                          class="hide-menu">Calendar</span></a></li>
                          <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                              aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                  class="hide-menu">REPORTS </span></a>
                          <ul aria-expanded="false" class="collapse  first-level base-level-line">
                              <li class="sidebar-item"><a href="DailyReport.html" class="sidebar-link"><span
                                          class="hide-menu"> DAILY
                                      </span></a>
                              </li>
                              <li class="sidebar-item"><a href="monthlyReport.html" class="sidebar-link"><span
                                          class="hide-menu"> MONTHLY
                                      </span></a>
                              </li>
                              <li class="sidebar-item"><a href="AnnulyReport.html" class="sidebar-link"><span
                                          class="hide-menu"> ANNUAL
                                      </span></a>
                              </li>
                          </ul>
                      </li>
                      <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                          aria-expanded="false"><i data-feather="trello" class="feather-icon"></i><span
                              class="hide-menu">RULE MANGMENT </span></a>
                      <ul aria-expanded="false" class="collapse  first-level base-level-line">
                          <li class="sidebar-item"><a href="form-inputs.html" class="sidebar-link"><span
                                      class="hide-menu"> CLASS TASK
                                  </span></a>
                          </li>
                          <li class="sidebar-item"><a href="form-input-grid.html" class="sidebar-link"><span
                                      class="hide-menu"> CLASS DESIGNER
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
                  <li class="menu-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf

                        <a href="" class="menu-link menu-toggle">
                            <i class="bx bx-power-off me-2"></i>

                            <input type="submit" style="border:none;background:none;padding: 0"
                                value="تسجيل خروج"></span>
                            <a>
                    </form>
                </li>

              <li class="list-divider"></li>







          </ul>
      </nav>
      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
