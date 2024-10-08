<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand (you can adjust in backend/css/styles.css; source was from scss but does not work so try in styles.css) -->
      <div class="app-brand" style="background-color: #9197a4;">
        <a href="{{ route('dashboard') }}" style="padding-left: 1em;">

          <img src="{{ asset('frontend/assets/img/dc_logo.png') }}" style="width: 50px; height:auto;" type="image/png" alt="">
          <span class="brand-name" style="text-shadow: 5px 3px 3px #305965;">Duck-Cloud Admin</span>
        </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">



            <li  class="has-sub active expand" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Home</span> <b class="caret"></b>
              </a>
              <ul  class="collapse show"  id="dashboard"
                data-parent="#sidebar-menu">
                <div class="sub-menu">



                  <li  class="active" >
                      <a class="sidenav-item-link" href="{{ route('home.slider') }}">
                      <span class="nav-text">Slider</span>

                      </a>
                  </li>
                  <li  class="active" >
                      <a class="sidenav-item-link" href="{{ route('home.about') }}">
                      <span class="nav-text">Home About</span>

                      </a>
                  </li>

                  <li  class="active" >
                      <a class="sidenav-item-link" href="{{ route('multi.image') }}">
                      <span class="nav-text">Home Portfolio</span>

                      </a>
                  </li>

                  <li  class="active" >
                      <a class="sidenav-item-link" href="{{ route('all.brand') }}">
                      <span class="nav-text">Home Brand</span>

                      </a>
                  </li>

                  <li  class="active" >
                      <a class="sidenav-item-link" href="{{ route('admin.subscribers') }}">
                      <span class="nav-text">Subscribers</span>

                      </a>
                  </li>

                </div>
              </ul>
            </li>

            {{-- Quotation Sections --}}
            <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#quotations"
                    aria-expanded="false" aria-controls="quotations">
                    <i class="mdi mdi-file-document-box"></i>
                    <span class="nav-text">Quotations</span> <b class="caret"></b>
                </a>
                <ul class="collapse" id="quotations" data-parent="#sidebar-menu">
                    <div class="sub-menu">
                        <li class="active">
                            <a class="sidenav-item-link" href="{{ route('admin.quotations') }}">
                                <span class="nav-text">View Quotations</span>
                            </a>
                        </li>
                    </div>
                </ul>
            </li>

            {{-- Contact Page --}}
            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                aria-expanded="false" aria-controls="ui-elements">
                <i class="mdi mdi-folder-multiple-outline"></i>
                <span class="nav-text">Contact Page</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="ui-elements"
                data-parent="#sidebar-menu">
                <div class="sub-menu">

                <li  class="active" >
                      <a class="sidenav-item-link" href="{{ route('admin.contact') }}">
                      <span class="nav-text">Contact Profile</span>

                      </a>
                  </li>
                  <li  class="active" >
                      <a class="sidenav-item-link" href="{{ route('admin.message') }}">
                      <span class="nav-text">Contact Message</span>

                      </a>
                  </li>

                </div>
              </ul>
            </li>

            <!-- Add Privacy Policy section -->
          <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#privacy-policy"
                  aria-expanded="false" aria-controls="privacy-policy">
                  <i class="mdi mdi-lock-outline"></i>
                  <span class="nav-text">Privacy Policy</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="privacy-policy" data-parent="#sidebar-menu">
                  <div class="sub-menu">
                      <li class="active">
                          <a class="sidenav-item-link" href="{{ route('admin.privacy.policy') }}">
                              <span class="nav-text">Manage Privacy Policy</span>
                          </a>
                      </li>
                      <li class="active">
                          <a class="sidenav-item-link" href="{{ route('add.privacy.policy') }}">
                              <span class="nav-text">Add Privacy Policy</span>
                          </a>
                      </li>
                  </div>
              </ul>
          </li>
          <!-- End Privacy Policy section -->

        </ul>

      </div>

      <hr class="separator" />


    </div>
  </aside>
