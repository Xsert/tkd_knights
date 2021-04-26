<!doctype html>
<html lang="en">

<head>
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link class="default-style" rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link class="default-style" rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
  <link class="default-style" rel="stylesheet" href="assets/vendor/themify-icons/css/themify-icons.css">
  <link class="default-style" rel="stylesheet" href="assets/vendor/pace/themes/orange/pace-theme-minimal.css">
  <link class="default-style" id="main-style" rel="stylesheet" href="assets/css/main.css">
  <link class="default-style" rel="stylesheet" href="assets/css/skins/sidebar-nav-darkgray.css" type="text/css">
  <link class="default-style" rel="stylesheet" href="assets/css/skins/navbar3.css" type="text/css">

  <!-- FOR DEMO PURPOSES ONLY. You should/may remove this in your project -->
  <link class="default-style" rel="stylesheet" href="assets/css/demo.css">

  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <a href="index.html"><img src="assets/img/logo-white.png" alt="Klorofil Pro Logo"
            class="img-responsive logo"></a>
      </div>
      <div class="container-fluid">
        <div id="tour-fullwidth" class="navbar-btn">
          <button type="button" class="btn-toggle-fullwidth"><i class="ti-arrow-circle-left"></i></button>
        </div>
        <form class="navbar-form navbar-left search-form">
          <input type="text" value="" class="form-control" placeholder="Search dashboard...">
          <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
        </form>
        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#" class="btn-toggle-rightsidebar">
                <i class="ti-layout-sidebar-right"></i>
              </a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                <i class="ti-bell"></i>
                <span class="badge bg-danger">5</span>
              </a>
              <ul class="dropdown-menu notifications">
                <li>You have 5 new notifications</li>
                <li>
                  <a href="#" class="notification-item">
                    <i class="fa fa-hdd-o custom-bg-red"></i>
                    <p><span class="text">System space is almost full</span> <span class="timestamp">11 minutes
                        ago</span></p>
                  </a>
                </li>
                <li>
                  <a href="#" class="notification-item">
                    <i class="fa fa-tasks custom-bg-yellow"></i>
                    <p><span class="text">You have 9 unfinished tasks</span> <span class="timestamp">20 minutes
                        ago</span></p>
                  </a>
                </li>
                <li>
                  <a href="#" class="notification-item">
                    <i class="fa fa-book custom-bg-green2"></i>
                    <p><span class="text">Monthly report is available</span> <span class="timestamp">1 hour ago</span>
                    </p>
                  </a>
                </li>
                <li>
                  <a href="#" class="notification-item">
                    <i class="fa fa-bullhorn custom-bg-purple"></i>
                    <p><span class="text">Weekly meeting in 1 hour</span> <span class="timestamp">2 hours ago</span></p>
                  </a>
                </li>
                <li>
                  <a href="#" class="notification-item">
                    <i class="fa fa-check custom-bg-green"></i>
                    <p><span class="text">Your request has been approved</span> <span class="timestamp">3 days
                        ago</span></p>
                  </a>
                </li>
                <li><a href="#" class="more">See all notifications</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" id="tour-help" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-help"></i> <span
                  class="hide">Help</span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="ti-direction"></i> Basic Use</a></li>
                <li><a href="#"><i class="ti-server"></i> Working With Data</a></li>
                <li><a href="#"><i class="ti-lock"></i> Security</a></li>
                <li><a href="#"><i class="ti-light-bulb"></i> Troubleshooting</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" alt="Avatar">
                <span>{{ Auth::user()->name }}</span></a>
              <ul class="dropdown-menu logged-user-menu">
                <li><a href="#"><i class="ti-user"></i> <span>My Profile</span></a></li>
                <li><a href="#"><i class="ti-email"></i> <span>Message</span></a></li>
                <li><a href="#"><i class="ti-settings"></i> <span>Settings</span></a></li>
                <li>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    <i class="ti-power-off"></i> <span>Logout</span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
      <nav>
        <ul class="nav" id="sidebar-nav-menu">
          <li class="menu-group">Main</li>
          <li class="panel">
            <a href="#dashboards" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed active"><i
                class="ti-dashboard"></i> <span class="title">Dashboards</span> <i
                class="icon-submenu ti-angle-left"></i></a>
            <div id="dashboards" class="collapse in">
              <ul class="submenu">
                <li><a href="members" class="active view-blade">Members List</a></li>
                <li><a href="members/create" class="view-blade">Create Member</a></li>
                <li><a href="dashboards/dashboard2.html">Dashboard v2</a></li>
                <li><a href="dashboards/dashboard3.html">Dashboard v3</a></li>
                <li><a href="index-topnav.html" target="_blank">Dashboard v4 <span
                      class="label label-success">NEW</span></a></li>
              </ul>
            </div>
          </li>
          <li class="panel">
            <a href="#subLayouts" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i
                class="ti-layout"></i> <span class="title">Layouts</span> <i class="icon-submenu ti-angle-left"></i></a>
            <div id="subLayouts" class="collapse ">
              <ul class="submenu">
                <li><a href="index-topnav.html" target="_blank">Top Navigation <span
                      class="label label-success">NEW</span></a></li>
                <li><a href="index-minified.html" target="_blank">Minified</a></li>
                <li><a href="index-fullwidth.html" target="_blank">Fullwidth</a></li>
                <li><a href="index.html" target="_blank">Default</a></li>
                <li><a href="layouts/layout-grid.html">Grid</a></li>
              </ul>
            </div>
          </li>
          <li class="panel">
            <a href="#forms" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i
                class="ti-receipt"></i> <span class="title">Forms</span> <i class="icon-submenu ti-angle-left"></i></a>
            <div id="forms" class="collapse ">
              <ul class="submenu">
                <li><a href="forms/forms-inputs.html">Inputs</a></li>
                <li><a href="forms/forms-multiselect.html">Multiselect</a></li>
                <li><a href="forms/forms-input-pickers.html">Input Pickers</a></li>
                <li><a href="forms/forms-input-sliders.html">Input Sliders</a></li>
                <li><a href="forms/forms-select2.html">Select2</a></li>
                <li><a href="forms/forms-xeditable.html">In-place Editing</a></li>
                <li><a href="forms/forms-dragdropupload.html">Drag and Drop Upload</a></li>
                <li><a href="forms/forms-layouts.html">Form Layouts</a></li>
                <li><a href="forms/forms-validation.html">Form Validation</a></li>
                <li><a href="forms/forms-texteditor.html">Text Editor</a></li>
              </ul>
            </div>
          </li>
          <li class="panel">
            <a href="#appViews" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i
                class="ti-layout-tab-window"></i> <span class="title">App Views</span> <i
                class="icon-submenu ti-angle-left"></i></a>
            <div id="appViews" class="collapse ">
              <ul class="submenu">
                <li><a href="appviews/appviews-project-detail.html">Project Details</a></li>
                <li><a href="appviews/appviews-projects.html">Projects</a></li>
                <li><a href="appviews/appviews-inbox.html">Inbox <span class="badge">8</span></a></li>
                <li><a href="appviews/appviews-file-manager.html">File Manager</a></li>
              </ul>
            </div>
          </li>
          <li class="panel">
            <a href="#tables" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i
                class="ti-layout-grid2"></i> <span class="title">Tables</span> <i
                class="icon-submenu ti-angle-left"></i></a>
            <div id="tables" class="collapse ">
              <ul class="submenu">
                <li><a href="tables/tables-static.html">Static Tables</a></li>
                <li><a href="tables/tables-dynamic.html">Dynamic Tables</a></li>
              </ul>
            </div>
          </li>
          <li class="menu-group">Components</li>
          <li class="panel">
            <a href="#uiElements" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i
                class="ti-panel"></i> <span class="title">UI Elements</span> <i
                class="icon-submenu ti-angle-left"></i></a>
            <div id="uiElements" class="collapse ">
              <ul class="submenu">
                <li><a href="ui/ui-sweetalert.html">Sweet Alert</a></li>
                <li><a href="ui/ui-treeview.html">Tree View</a></li>
                <li><a href="ui/ui-wizard.html">Wizard</a></li>
                <li><a href="ui/ui-dragdrop-panel.html">Drag &amp; Drop Panel</a></li>
                <li><a href="ui/ui-nestable.html">Nestable</a></li>
                <li><a href="ui/ui-gauge.html">Gauge <span class="label label-success">NEW</span></a></li>
                <li><a href="ui/ui-panels.html">Panels</a></li>
                <li><a href="ui/ui-progressbars.html">Progress Bars</a></li>
                <li><a href="ui/ui-tabs.html">Tabs</a></li>
                <li><a href="ui/ui-buttons.html">Buttons <span class="label label-info">UPDATED</span></a></li>
                <li><a href="ui/ui-bootstrap.html">Bootstrap UI</a></li>
                <li><a href="ui/ui-social-buttons.html">Social Buttons</a></li>
                <li><a href="ui/ui-icons.html">Icons</a></li>
              </ul>
            </div>
          </li>
          <li class="panel">
            <a href="#charts" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i
                class="ti-pie-chart"></i> <span class="title">Charts</span> <i
                class="icon-submenu ti-angle-left"></i></a>
            <div id="charts" class="collapse ">
              <ul class="submenu">
                <li><a href="charts/charts-chartjs.html">Chart.js</a></li>
                <li><a href="charts/charts-chartist.html">Chartist</a></li>
                <li><a href="charts/charts-flot.html">Flot Chart</a></li>
                <li><a href="charts/charts-sparkline.html">Sparkline Chart</a></li>
              </ul>
            </div>
          </li>
          <li><a href="widgets.html"><i class="ti-widget"></i> <span class="title">Widgets</span></a></li>
          <li><a href="notifications.html"><i class="ti-bell"></i> <span class="title">Notifications</span> <span
                class="badge">15</span></a></li>
          <li class="panel">
            <a href="#maps" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i
                class="ti-map"></i> <span class="title">Maps</span> <i class="icon-submenu ti-angle-left"></i></a>
            <div id="maps" class="collapse ">
              <ul class="submenu">
                <li><a href="maps/maps-jqvmap.html">JQVMap</a></li>
                <li><a href="maps/maps-mapael.html">Mapael</a></li>
              </ul>
            </div>
          </li>
          <li class="menu-group">Extras</li>
          <li class="panel">
            <a href="#subPages" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i
                class="ti-files"></i> <span class="title">Pages</span> <i class="icon-submenu ti-angle-left"></i></a>
            <div id="subPages" class="collapse">
              <ul class="submenu">
                <li><a href="pages/page-profile.html">Profile</a></li>
                <li><a href="views/pages/page-login.html" target="_blank">Login</a></li>
                <li><a href="views/pages/page-register.html" target="_blank">Register</a></li>
                <li><a href="views/pages/page-lockscreen.html" target="_blank">Lockscreen</a></li>
                <li><a href="views/pages/page-forgot-password.html" target="_blank">Forgot Password</a></li>
                <li><a href="views/pages/page-404.html" target="_blank">Page 404</a></li>
                <li><a href="views/pages/page-500.html" target="_blank">Page 500</a></li>
                <li><a href="pages/page-blank.html">Blank Page</a></li>
              </ul>
            </div>
          </li>
          <li><a href="typography.html"><i class="ti-paragraph"></i> <span class="title">Typography</span></a></li>
          <li class="panel">
            <a href="#" data-toggle="collapse" data-target="#submenuDemo" data-parent="#sidebar-nav-menu"
              class="collapsed"><i class="ti-menu"></i> <span class="title">Multilevel Menu</span><i
                class="icon-submenu ti-angle-left"></i></a>
            <div id="submenuDemo" class="collapse">
              <ul class="submenu">
                <li class="panel">
                  <a href="#" data-toggle="collapse" data-target="#submenuDemoLv2" class="collapsed">Submenu 1 <i
                      class="icon-submenu ti-angle-left"></i></a>
                  <div id="submenuDemoLv2" class="collapse">
                    <ul class="submenu">
                      <li><a href="submenu.html">Another menu level</a></li>
                      <li><a href="#">Another menu level</a></li>
                      <li><a href="#">Another menu level</a></li>
                    </ul>
                  </div>
                </li>
                <li><a href="#">Submenu 2</a></li>
                <li><a href="#">Submenu 3</a></li>
              </ul>
            </div>
          </li>
        </ul>
        <button type="button" class="btn-toggle-minified" title="Toggle Minified Menu"><i
            class="ti-arrows-horizontal"></i></button>
      </nav>
    </div>
    <!-- END LEFT SIDEBAR -->

    <!-- MAIN -->
    <div class="main">

      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="content-heading clearfix">
          <div class="heading-left">
            <h1 class="page-title" id="view-title"></h1>
            <p class="page-subtitle" id="view-description"></p>
          </div>
          <ul class="breadcrumb" id="view-breadcrumb">
            <li class="home"><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#dashboards"> Dashboards </a></li>
            <li class="active"> Members List </li>
          </ul>
        </div>
        <div class="container-fluid">
          <div id="main-view"></div>
        </div>

      </div>
      <!-- END MAIN CONTENT -->

      <!-- RIGHT SIDEBAR -->
      <div id="sidebar-right" class="right-sidebar">
        <div class="sidebar-widget">
          <h4 class="widget-heading"><i class="fa fa-calendar"></i> TODAY</h4>
          <p class="date">Wednesday, 22 December</p>

          <div class="row margin-top-30">
            <div class="col-xs-4">
              <a href="#">
                <div class="icon-transparent-area custom-color-blue first">
                  <i class="fa fa-tasks"></i> <span>Tasks</span>
                  <span class="badge">5</span>
                </div>
              </a>
            </div>
            <div class="col-xs-4">
              <a href="#">
                <div class="icon-transparent-area custom-color-green">
                  <i class="fa fa-envelope"></i> <span>Mail</span>
                  <span class="badge">12</span>
                </div>
              </a>
            </div>
            <div class="col-xs-4">
              <a href="#">
                <div class="icon-transparent-area custom-color-orange last">
                  <i class="fa fa-user-plus"></i> <span>Users</span>
                  <span class="badge">24</span>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="sidebar-widget">
          <div class="widget-header">
            <h4 class="widget-heading">YOUR APPS</h4>
            <a href="#" class="show-all">Show all</a>
          </div>
          <div class="row">
            <div class="col-xs-3">
              <a href="#" class="icon-app" title="Dropbox" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-dropbox dropbox-color"></i>
              </a>
            </div>
            <div class="col-xs-3">
              <a href="#" class="icon-app" title="WordPress" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-wordpress wordpress-color"></i>
              </a>
            </div>
            <div class="col-xs-3">
              <a href="#" class="icon-app" title="Drupal" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-drupal drupal-color"></i>
              </a>
            </div>
            <div class="col-xs-3">
              <a href="#" class="icon-app" title="Github" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-github github-color"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="sidebar-widget">
          <div class="widget-header">
            <h4 class="widget-heading">MY PROJECTS</h4>
            <a href="#" class="show-all">Show all</a>
          </div>
          <ul class="list-unstyled list-project-progress">
            <li>
              <a href="#" class="project-name">Project XY</a>
              <div class="progress progress-xs progress-transparent custom-color-orange">
                <div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"
                  style="width:67%"></div>
              </div>
              <span class="percentage">67%</span>
            </li>
            <li>
              <a href="#" class="project-name">Growth Campaign</a>
              <div class="progress progress-xs progress-transparent custom-color-blue">
                <div class="progress-bar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"
                  style="width:23%"></div>
              </div>
              <span class="percentage">23%</span>
            </li>
            <li>
              <a href="#" class="project-name">Website Redesign</a>
              <div class="progress progress-xs progress-transparent custom-color-green">
                <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"
                  style="width:87%"></div>
              </div>
              <span class="percentage">87%</span>
            </li>
          </ul>
        </div>

        <div class="sidebar-widget">
          <div class="widget-header">
            <h4 class="widget-heading">MY FILES</h4>
            <a href="#" class="show-all">Show all</a>
          </div>
          <ul class="list-unstyled list-justify list-file-simple">
            <li><a href="#"><i class="fa fa-file-word-o"></i>Proposal_draft.docx</a> <span>4 MB</span></li>
            <li><a href="#"><i class="fa fa-file-pdf-o"></i>Manual_Guide.pdf</a> <span>20 MB</span></li>
            <li><a href="#"><i class="fa fa-file-zip-o"></i>all-project-files.zip</a> <span>315 MB</span></li>
            <li><a href="#"><i class="fa fa-file-excel-o"></i>budget_estimate.xls</a> <span>1 MB</span></li>
          </ul>
        </div>

        <p class="text-center"><a href="#" class="btn btn-default btn-xs">More Widgets</a></p>
      </div>
      <!-- END RIGHT SIDEBAR -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>

    <footer>
      <div class="container-fluid">
        <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All
          Rights Reserved.</p>
      </div>
    </footer>
  </div>
  <!-- END WRAPPER -->

  <!-- JAVASCRIPTS -->
  <script class="default-js" src="assets/vendor/jquery/jquery.min.js"></script>
  <script class="default-js" src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script class="default-js" src="assets/vendor/pace/pace.min.js"></script>

  <script class="default-js" src="assets/scripts/main-menu.js"></script>
  <script class="default-js" src="assets/scripts/app.js"></script>

</body>

</html>