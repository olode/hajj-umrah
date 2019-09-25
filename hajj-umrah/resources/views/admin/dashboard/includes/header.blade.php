<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-dark bg-blue-grey bg-lighten-1 navbar-border navbar-brand-center">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="index.html">
              <img class="brand-logo" alt="robust admin logo" src="{{asset('dashboard/app-assets/images/logo/logo-light-sm.png')}}">
              <h3 class="brand-text">Robust Admin</h3>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu">         </i></a></li>
   
          
            
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
            <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
              <div class="search-input">
                <input class="input" type="text" placeholder="بحث">
              </div>
            </li>
          </ul>


          <ul class="nav navbar-nav float-right">
           
            <li class="dropdown dropdown-notification nav-item">
              <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                <span class="badge badge-pill badge-default badge-danger badge-default badge-up">1</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">الاشعارات</span>
                  </h6>
                  <!-- <span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span> -->
                </li>
                <li class="scrollable-container media-list w-100">
                <br>
       
         
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">
                            
                             عدد الرحلات لهذا اليوم </h6>
                          
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">2015-06-11</time>
                          <i class="badge badge-pill badge-default badge-danger badge-default ">20</i>
                        </small>
                      </div>
                    </div>
                  </a>

                  <a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">عدد رحلات الوصول</h6>
                            
                          <small>
                            <i class="badge badge-pill badge-default badge-danger badge-default ">5</i>
                          </small>
                        </div>
                      </div>
                    </a>

                    <a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading">عدد رحلات المغادرة </h6>
                              
                            <small>
                              <i class="badge badge-pill badge-default badge-danger badge-default ">5</i>
                            </small>
                          </div>
                        </div>
                      </a>

                      <a href="javascript:void(0)">
                          <div class="media">
                            <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                            <div class="media-body">
                              <h6 class="media-heading">عدد المزارات</h6>
                                
                              <small>
                                <i class="badge badge-pill badge-default badge-danger badge-default ">5</i>
                              </small>
                            </div>
                          </div>
                        </a>

                        <a href="javascript:void(0)">
                            <div class="media">
                              <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                              <div class="media-body">
                                <h6 class="media-heading"> بين المدن</h6>
                                  
                                <small>
                                  <i class="badge badge-pill badge-default badge-danger badge-default ">5</i>
                                </small>
                              </div>
                            </div>
                          </a>
                </li>
                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">متابعة التحركات</a></li>
              </ul>
            </li>

           
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="{{ route('logout') }}" data-toggle="dropdown">
                <span class="avatar avatar-online">
                  <img src="{{asset('dashboard/app-assets/images/portrait/small/avatar-s-1.png')}}"
                  alt="avatar"><i></i></span>
                <span class="user-name">{{ Auth::user()->username }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
  
                  <div class="dropdown-divider"></div>
                  <form class="dropdown-item" action="{{ route('logout') }}" method="post" style=" width:100%;">
                    @csrf
                    <button type="submit" style="border: none; background: none;"><i class="ft-power"></i>خروج</button>
                  </form>
              </div>
            </li>
          </ul>
          
        </div>
      </div>
    </div>
  </nav>