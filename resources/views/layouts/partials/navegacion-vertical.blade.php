<div class="sidebar">
        <div class="user-profile">
          <div class="display-avatar animated-avatar">
            <img
              class="profile-img img-lg rounded-circle"
              src="https://i.imgur.com/ztJqzrg.jpg"
              alt="profile image"
            />
          </div>
          <div class="info-wrapper">
            <p class="user-name">  {{ Auth::user()->name }} </p>
            <div class="icon-showcase-cell"><i class="flag-icon flag-icon-pe" title="pe" id="pe"></i> PE</div>
          </div>
        </div>
        <ul class="navigation-menu">
          <li class="nav-category-divider">MENU</li>
          <li>
            <a href="/home"
              ><span class="link-title">Tablero</span>
              <i class="mdi mdi-gauge link-icon"></i
            ></a>
          </li>
          <li>
            <a href="#sample-pages" data-toggle="collapse" aria-expanded="false"
              ><span class="link-title">Gestion de Datos</span>
              <i class="mdi mdi-flask link-icon"></i
            ></a>
            <ul class="collapse navigation-submenu" id="sample-pages">
              <li>
                <a
                  href="{{ route('crearprii') }}"

                  ><span class="link-title">Crear </span></a
                >

              </li>
              <li>
                <a
                        href="{{ route('listarprii') }}"
                  ><span class="link-title">Listar</span></a
                >

              </li>
            </ul>
          </li>
          {{--<li>--}}
            {{--<a href="#ui-elements" data-toggle="collapse" aria-expanded="false"--}}
              {{--><span class="link-title">UI Elements</span>--}}
              {{--<i class="mdi mdi-bullseye link-icon"></i--}}
            {{--></a>--}}
            {{--<ul class="collapse navigation-submenu" id="ui-elements">--}}
              {{--<li><a href="pages/ui-components/buttons.html">Buttons</a></li>--}}
              {{--<li>--}}
                {{--<a href="pages/ui-components/dropdowns.html">Dropdowns</a>--}}
              {{--</li>--}}
              {{--<li><a href="pages/ui-components/badges.html">Badges</a></li>--}}
              {{--<li><a href="pages/ui-components/progress.html">Progress</a></li>--}}
              {{--<li>--}}
                {{--<a href="pages/ui-components/accordions.html">Accordion</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="pages/ui-components/breadcrumbs.html">Breadcrumbs</a>--}}
              {{--</li>--}}
              {{--<li><a href="pages/ui-components/modals.html">Modals</a></li>--}}
              {{--<li>--}}
                {{--<a href="pages/ui-components/notifications.html"--}}
                  {{-->Notifications</a--}}
                {{-->--}}
              {{--</li>--}}
              {{--<li><a href="pages/ui-components/tables.html">Tables</a></li>--}}
              {{--<li><a href="pages/ui-components/tabs.html">Tabs</a></li>--}}
              {{--<li>--}}
                {{--<a href="pages/ui-components/typography.html">Typography</a>--}}
              {{--</li>--}}
            {{--</ul>--}}
          {{--</li>--}}
          {{--<li>--}}
            {{--<a href="#forms" data-toggle="collapse" aria-expanded="false"--}}
              {{--><span class="link-title">Forms</span>--}}
              {{--<i class="mdi mdi-clipboard-outline link-icon"></i--}}
            {{--></a>--}}
            {{--<ul class="collapse navigation-submenu" id="forms">--}}
              {{--<li><a href="pages/forms/form-elements.html">Form Inputs</a></li>--}}
              {{--<li><a href="pages/forms/form-validation.html">Validation</a></li>--}}
              {{--<li><a href="pages/forms/editors.html">Editors</a></li>--}}
              {{--<li><a href="pages/forms/wizard.html">Wizard</a></li>--}}
            {{--</ul>--}}
          {{--</li>--}}
          {{--<li>--}}
            {{--<a href="#tables" data-toggle="collapse" aria-expanded="false"--}}
              {{--><span class="link-title">Advanced Tables</span>--}}
              {{--<i class="mdi mdi-table-merge-cells link-icon"></i--}}
            {{--></a>--}}
            {{--<ul class="collapse navigation-submenu" id="tables">--}}
              {{--<li>--}}
                {{--<a href="pages/data-tables/basic-table.html">Basic Table</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="pages/data-tables/complex-header.html"--}}
                  {{-->Complex Header</a--}}
                {{-->--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="pages/data-tables/scrolling-table.html"--}}
                  {{-->Scrolling Table</a--}}
                {{-->--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="pages/data-tables/ajax-table.html">Ajax Source</a>--}}
              {{--</li>--}}
            {{--</ul>--}}
          {{--</li>--}}
          {{--<li>--}}
            {{--<a href="#charts" data-toggle="collapse" aria-expanded="false"--}}
              {{--><span class="link-title">Charts</span>--}}
              {{--<i class="mdi mdi-chart-donut link-icon"></i--}}
            {{--></a>--}}
            {{--<ul class="collapse navigation-submenu" id="charts">--}}
              {{--<li><a href="pages/charts/apex-charts.html">Apex Chart</a></li>--}}
              {{--<li><a href="pages/charts/c3.html">C3 Chart</a></li>--}}
              {{--<li><a href="pages/charts/chartist.html">Chartist</a></li>--}}
              {{--<li><a href="pages/charts/chartjs.html">Chart js</a></li>--}}
              {{--<li><a href="pages/charts/morris.html">Morris</a></li>--}}
            {{--</ul>--}}
          {{--</li>--}}
          {{--<li>--}}
            {{--<a href="#icons" data-toggle="collapse" aria-expanded="false"--}}
              {{--><span class="link-title">Icons</span>--}}
              {{--<i class="mdi mdi-flower-tulip-outline link-icon"></i--}}
            {{--></a>--}}
            {{--<ul class="collapse navigation-submenu" id="icons">--}}
              {{--<li><a href="pages/icons/font-awesome.html">Font Awesome</a></li>--}}
              {{--<li><a href="pages/icons/simple-line.html">Simple Line</a></li>--}}
              {{--<li>--}}
                {{--<a href="pages/icons/material-icons.html">Material Icons</a>--}}
              {{--</li>--}}
              {{--<li><a href="pages/icons/flag-icons.html">Flag Icons</a></li>--}}
              {{--<li><a href="pages/icons/themify-icons.html">Themify</a></li>--}}
            {{--</ul>--}}
          {{--</li>--}}
          {{--<li class="nav-category-divider">APPS</li>--}}
          {{--<li>--}}
            {{--<a href="pages/apps/email.html"--}}
              {{--><span class="link-title">Email</span>--}}
              {{--<i class="mdi mdi-email-outline link-icon"></i--}}
            {{--></a>--}}
          {{--</li>--}}
          {{--<li>--}}
            {{--<a href="pages/apps/kanban-board.html"--}}
              {{--><span class="link-title">Kanban Board</span>--}}
              {{--<i class="mdi mdi-folder-multiple-outline link-icon"></i--}}
            {{--></a>--}}
          {{--</li>--}}
          {{--<li>--}}
            {{--<a--}}
              {{--href="#calendar-menu"--}}
              {{--data-toggle="collapse"--}}
              {{--aria-expanded="false"--}}
              {{--><span class="link-title">Calendar</span>--}}
              {{--<i class="mdi mdi-calendar-check-outline link-icon"></i--}}
            {{--></a>--}}
            {{--<ul class="collapse navigation-submenu" id="calendar-menu">--}}
              {{--<li><a href="pages/apps/calendar.html">List View</a></li>--}}
              {{--<li><a href="pages/apps/calendar_2.html">Grid View</a></li>--}}
            {{--</ul>--}}
          {{--</li>--}}

          <li class="nav-category-divider">ADMINISTRACIÓN</li>
          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
              <span class="link-title">Cerrar Sesión</span>
              <i class="mdi mdi-logout link-icon"></i
            ></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </div>
      <div class="right-sidebar">
        <div class="sidebar-inner">
          <div class="right-sidebar-toggler">
            <i class="mdi mdi-format-color-fill"></i>
          </div>
          <div class="theme-mode-wrapper">
            <a
              id="light-theme-active"
              class="preview-image redi"
              href="#"

              ><img

                src="/plantilla/assets/images/screenshots/light.png"
                alt="Light Theme"
              />
              <p>Light</p></a
            ><a
              id="dark-theme-active"
              class="preview-image active"
              href="/home"
              class="theme-mode"
              ><img
                src="/plantilla/assets/images/screenshots/dark.png"
                alt="Dark Theme"
              />
              <p>Dark</p></a
            >
          </div>
        </div>
 </div>


