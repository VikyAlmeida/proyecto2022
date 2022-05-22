        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
              <a href="index.html" class="app-brand-link">
                <span class="app-brand-text demo menu-text fw-bolder ms-2">Inaya</span>
              </a>
  
              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>
  
            <div class="menu-inner-shadow"></div>
  
            <ul class="menu-inner py-1">
              <!-- Dashboard -->
              <li class="menu-item active">
                <a href="{{ url('/')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Home</div>
                </a>
              </li>
              <li class="menu-item active">
                <a href="{{ url('/admin')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Home administrativo</div>
                </a>
              </li>
              <!-- Usuarios -->
              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Administracion</span>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Usuarios</div>
                </a>
  
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{ route('admin.customer') }}" class="menu-link">
                      <div data-i18n="Without navbar">Clientes</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ route('admin.request') }}" class="menu-link">
                      <div data-i18n="Without menu">Solicitudes</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ route('admin.accept') }}" class="menu-link">
                      <div data-i18n="Without navbar">Clientes aceptados</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ route('admin.cancel') }}" class="menu-link">
                      <div data-i18n="Container">Clientes cancelados</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ route('admin.ban') }}" class="menu-link">
                      <div data-i18n="Fluid">Clientes baneados</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="layouts-container.html" class="menu-link">
                      <div data-i18n="Container">Usuarios baneados</div>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Eventos</div>
                </a>
  
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{ route('admin.events.index') }}" class="menu-link">
                      <div data-i18n="Without menu">Ver eventos</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ route('admin.events.create') }}" class="menu-link">
                      <div data-i18n="Without navbar">Añadir un evento</div>
                    </a>
                  </li>
                </ul>
              </li>

            </ul>
          </aside>