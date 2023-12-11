            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon"
                                                data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!-- COUNTRY -->
                                        <div class="d-flex country">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        {{-- SIDE MENU --}}
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="https://yt3.googleusercontent.com/ytc/APkrFKbaWZ0qKTR0DPl6gNguvc2KNr92Z6vCLmAYfWKU=s900-c-k-c0x00ffffff-no-rj" alt="profile-user" class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold">Gian Carlos</h5>
                                                        <small class="text-muted">Administrador</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="{{ route('login') }}">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar">
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide"
                                    href="{{ route('index') }}"><i class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label">Inicio</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>UI Kit</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide"
                                    href="{{ route('personalData') }}"><i class="bi bi-card-list fs-5 mx-2"></i><span
                                        class="side-menu__label">Registrar</span></a>
                            </li>
                            <li class="slide">
                                <a class="btn side-menu__item has-link disabled" data-bs-toggle="slide"
                                    href="{{ route('workData') }}"><i class="bi bi-clipboard-check fs-5 mx-2"></i><span
                                        class="side-menu__label">Datos Laborales</span></a>
                            </li>
                            <li class="slide">
                                <a class="btn side-menu__item has-link disabled" data-bs-toggle="slide"
                                    href="{{ route('familyData') }}"><i class="bi bi-clipboard-check fs-5 mx-2"></i><span
                                        class="side-menu__label">Datos Familiares</span></a>
                            </li>
                            <li class="slide">
                                <a class="btn side-menu__item has-link disabled" data-bs-toggle="slide"
                                    href="{{ route('payData') }}"><i class="bi bi-clipboard-check fs-5 mx-2"></i><span
                                        class="side-menu__label">Datos Pago</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide"
                                    href="{{ route('reportPersonal') }}"><i class="bi bi-person fs-5 mx-2"></i><span
                                        class="side-menu__label">Reporte Personal</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide"
                                    href="{{ route('asistencia') }}"><i class="bi bi-card-checklist fs-5 mx-2"></i><span
                                        class="side-menu__label">Asistencia</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('pago') }}"><i
                                        class="bi bi-credit-card fs-5 mx-2"></i><span
                                        class="side-menu__label">Planilla</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide"
                                    href="{{ route('reportPago') }}"><i class="side-menu__icon fe fe-layers"></i><span
                                        class="side-menu__label">Reporte Pagos</span></a>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
            </div>
            <!--/APP-SIDEBAR-->
