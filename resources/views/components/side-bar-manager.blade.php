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
              <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('users.index') }}"
                  aria-expanded="false"><i data-feather="user" class="feather-icon"></i><span
                      class="hide-menu">DEIGNERS
                  </span></a>
          </li>
          <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
              aria-expanded="false"><i data-feather="sliders" class="feather-icon"></i><span
                  class="hide-menu">ORDERS </span></a>
          <ul aria-expanded="false" class="collapse  first-level base-level-line">
              <li class="sidebar-item"><a href="{{ route('internal-orders.index') }}" class="sidebar-link"><span
                  class="hide-menu"> ENTENAL ORDERS
              </span></a>
      </li>
      <li class="sidebar-item"><a href="{{ route('external-orders.index') }}" class="sidebar-link"><span
                  class="hide-menu">EXTERNAL ORDERS
              </span></a>
      </li>
      <li class="sidebar-item"><a href="{{ route('internal-orders.create') }}" class="sidebar-link"><span
        class="hide-menu"> Create ENTENAL ORDERS
    </span></a>
</li>
          </ul>
          </li>
              <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="javascript:void(0)"
                      aria-expanded="false">
                          <i data-feather="file-text" class="feather-icon"></i><span
                                  class="hide-menu">ENTERNAL CUSTOMER </span></a>
                          <ul aria-expanded="false" class="collapse  first-level base-level-line">
                              <li class="sidebar-item"><a href="{{ route('internal-customers.create') }}" class="sidebar-link"><span
                                          class="hide-menu"> Create
                                      </span></a>
                              </li>
                              <li class="sidebar-item"><a href="{{ route('internal-customers.index') }}" class="sidebar-link"><span
                                class="hide-menu"> Show
                            </span></a>

                          </ul>
                      </li>
                      <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                          aria-expanded="false"><i data-feather="trello" class="feather-icon"></i><span
                              class="hide-menu">DEPLOYMENT </span></a>
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
                  <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                      aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                          class="hide-menu">DOMAINS & FONTS </span></a>
                  <ul aria-expanded="false" class="collapse  first-level base-level-line">
                      <li class="sidebar-item"><a href="FONT.html" class="sidebar-link"><span
                                  class="hide-menu"> SHOW & ADD FONTS
                              </span></a>
                      </li>
                      <li class="sidebar-item"><a href="domain.html" class="sidebar-link"><span
                                  class="hide-menu">
                                 ADD DOMAIN
                              </span></a>
                      </li>
                      <li class="sidebar-item"><a href="showdomain.html" class="sidebar-link"><span
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

                  <li class="sidebar-item"><a href="showtypes.html" class="sidebar-link"><span
                              class="hide-menu"> SHOW TYPES
                          </span></a>
                  </li>
                  <li class="sidebar-item"><a href="addtype(no-js).html" class="sidebar-link"><span
                              class="hide-menu">
                              ADD TYPE
                          </span></a>
                  </li>


              </ul>
          </li>

          <li class="sidebar-item">
            <form action="{{ route('logout') }}" method="post">
                @csrf

                <a href="" class="sidebar-link ">
                    <i class="feather-icon"></i>

                    <input type="submit" style="border:none;background:none;padding: 0"
                        value="LOGOUT" ></span>
                    <a>
            </form>
        </li>
          </ul>
      </nav>
      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
