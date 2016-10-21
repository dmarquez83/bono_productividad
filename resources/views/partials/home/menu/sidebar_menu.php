        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu  page-header-fixed "
            data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200" style="padding-top: 20px"  >
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler"> </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="nav-item start active open">
                <a href="#" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start active open">
                        <a href="#" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Dashboard</span>
                            <span class="badge badge-danger">5</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="heading" >
                <h3 class="uppercase">Titulo</h3>
            </li>
            <li class="nav-item "  ng-hide="loading" ng-repeat="modules in accessModules">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">{{ modules[0].modules_name }}</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  "  ng-repeat="module in modules track by $index">
                        <a href="{{ module.route_uri }}" class="nav-link ">
                            <span class="title">{{ module.menu_modules_name }}</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
