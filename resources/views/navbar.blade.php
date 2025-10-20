<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index.html" class="text-nowrap logo-img">
                <img src="assets/images/logos/logo.svg" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-6"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">Menüler</span>
                </li>
                <li class="sidebar-item" {{ request()->is('index') ? "active" : "" }}>
                    <a class="sidebar-link" href="/index" aria-expanded="false">
                        <i class="ti ti-atom"></i>
                        <span class="hide-menu">Kontrol Paneli</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-file-text"></i>
                  </span>
                            <span class="hide-menu">Sözleşmeler</span>
                        </div>

                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between"
                               href="#">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Satış Sözleşmeleri</span>
                                </div>

                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between"
                               href="/rent-contracts">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Kira Sözleşmeleri</span>
                                </div>

                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between"
                               href="#">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Yer Gösterme Belgesi</span>
                                </div>

                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between"
                               href="#">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Kiralama Yetki Belgesi</span>
                                </div>

                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between"
                               href="#">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Satış Yetki Belgesi</span>
                                </div>

                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between"
                               href="#">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Fesih Sözleşmesi</span>
                                </div>

                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-file-text"></i>
                  </span>
                            <span class="hide-menu">Gelir / Gider</span>
                        </div>

                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between"
                               href="#">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Ofis Giderleri</span>
                                </div>

                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between"
                               href="/rent-contracts">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Satış / Komisyon Gelirleri</span>
                                </div>

                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-file-text"></i>
                  </span>
                            <span class="hide-menu">Tanımlamalar</span>
                        </div>

                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item" {{ request()->is('special-conditions') ? 'active' : '' }}>
                            <a class="sidebar-link justify-content-between"
                               href="/assets-definitions">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Demirbaş Tanımları</span>
                                </div>

                            </a>
                        </li>
                        <li class="sidebar-item" {{ request()->is('general-conditions') ? 'active' : '' }}>
                            <a class="sidebar-link justify-content-between"
                               href="/general-conditions">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Genel Koşullar</span>
                                </div>

                            </a>
                        </li>
                        <li class="sidebar-item" {{ request()->is('special-conditions') ? 'active' : '' }}>
                            <a class="sidebar-link justify-content-between"
                               href="/special-conditions">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Özel Koşullar</span>
                                </div>

                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
