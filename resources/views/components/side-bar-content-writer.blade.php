<aside class="left-sidebar" data-sidebarbg="skin6">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar" data-sidebarbg="skin6">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
          <ul id="sidebarnav">
              <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.html"
                      aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                          class="hide-menu">HOME</span></a></li>
              <li class="list-divider"></li>
              <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                  aria-expanded="false"><i data-feather="sliders" class="feather-icon"></i><span
                      class="hide-menu">ORDERS </span></a>
              <ul aria-expanded="false" class="collapse  first-level base-level-line">
                  <li class="sidebar-item"><a href="enternal.html" class="sidebar-link"><span
                      class="hide-menu"> ENTENAL ORDERS
                  </span></a>
          </li>
          <li class="sidebar-item"><a href="{{ route('content-writer.external-orders.index') }}" class="sidebar-link"><span
                      class="hide-menu">EXTERNAL ORDERS
                  </span></a>
          </li>

              </ul>
              </li>
              <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="review.html"
                  aria-expanded="false"><i data-feather="feather" class="feather-icon"></i><span
                      class="hide-menu">REVIEW
                  </span></a>
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




                      
                      <li class="menu-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf

                            <a href="" class="menu-link menu-toggle">
                                <i class="bx bx-power-off me-2"></i>

                                <input type="submit" style="border:none;background:none;padding: 0"
                                    value=" Logout"></span>
                                <a>
                        </form>
                    </li>
          </ul>
      </nav>
      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
