<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-bordered navbar-shadow"
  role="navigation" data-menu="menu-wrapper">
    <!-- Horizontal menu content-->
    <div class="navbar-container main-menu-content" data-menu="menu-container">
      <!-- include includes/mixins-->
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="dropdown nav-item" data-menu="dropdown">
          <a class="dropdown-toggle nav-link" href="{{route('dash')}}" ><i class="icon-home"></i>
            <span data-i18n="nav.dash.main">الرئيسية</span>
          </a>
      
        </li>
        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="icon-note"></i><span data-i18n="nav.templates.main">تسجيل التحركات</span></a>
          <ul class="dropdown-menu">
           
            <li data-menu=""><a class="dropdown-item" href="{{route('arrival.create')}}" data-toggle="dropdown">وصول</a>
            </li>
            <li data-menu=""><a class="dropdown-item" href="{{route('departure.create')}}" data-toggle="dropdown">مغادرة</a>
            </li>
            <li data-menu=""><a class="dropdown-item" href="{{route('mazarat.create')}}" data-toggle="dropdown">مزارات</a>
            </li>
            <li data-menu=""><a class="dropdown-item" href="{{route('betweencity.create')}}" data-toggle="dropdown">بين المدن</a>
            </li>

          
          </ul>
        </li>
        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="icon-plus"></i><span data-i18n="nav.layouts.temp"> الموظفين</span></a>
          <ul class="dropdown-menu">
 
            <li data-menu=""><a class="dropdown-item" href="{{route('employee-index')}}" data-toggle="dropdown">عرض</a>
            </li>
            <li data-menu=""><a class="dropdown-item" href="{{route('register-employee')}}" data-toggle="dropdown">تسجيل</a>
            </li>

        
           
            
            
        
          </ul>
        </li>
        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="icon-graph"></i><span data-i18n="nav.category.general">متابعة التحركات</span></a>
          <ul class="dropdown-menu">
          
            
            <li data-menu=""><a class="dropdown-item" href="{{route('chase-movement')}}" data-toggle="dropdown">متابعة</a>
            </li>
            
            
          </ul>
        </li>


        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="icon-screen-desktop"></i><span data-i18n="nav.category.ui">استعلامات</span></a>
          <ul class="dropdown-menu">

              <li data-menu=""><a class="dropdown-item" href="changelog.html" data-toggle="dropdown">الوصول</a>
              </li>
              <li data-menu=""><a class="dropdown-item" href="changelog.html" data-toggle="dropdown">المغادرة</a>
              </li>
              <li data-menu=""><a class="dropdown-item" href="changelog.html" data-toggle="dropdown">المزارات</a>
              </li>
              <li data-menu=""><a class="dropdown-item" href="changelog.html" data-toggle="dropdown">بين المدن</a>
              </li>

            
            
           
            
       
          </ul>
        </li>






      </ul>
    </div>
    <!-- /horizontal menu content-->
  </div>