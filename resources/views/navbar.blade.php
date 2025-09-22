<aside id="application-sidebar-brand"
       class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full  transform hidden xl:block xl:translate-x-0 xl:end-auto xl:bottom-0 fixed xl:top-[90px] xl:left-auto top-0 left-0 with-vertical h-screen z-[999] shrink-0  w-[270px] shadow-md xl:rounded-md rounded-none bg-white left-sidebar   transition-all duration-300">
    <div class="p-4">
        <a href="../" class="text-nowrap">
            <img
                src="{{ asset('assets/images/logos/logo-light.svg') }}"
                alt="Logo-Dark"
            />
        </a>
    </div>
    <div class="scroll-sidebar" data-simplebar="">
        <nav class=" w-full flex flex-col sidebar-nav px-4 mt-5">
            <ul id="sidebarnav" class="text-gray-600 text-sm">
                <li class="text-xs font-bold pb-[5px]">
                    <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                    <span class="text-xs text-gray-400 font-semibold">Menüler</span>
                </li>
                <li class="sidebar-item" {{ request()->is('index') ? "active" : "" }}>
                    <a class="sidebar-link gap-3 py-2.5 my-1 text-base  flex items-center relative  rounded-md text-gray-500  w-full"
                       href="/index">
                        <i class="ti ti-layout-dashboard ps-2  text-2xl"></i> <span>Kontrol Paneli</span>
                    </a>
                </li>
                <li class="sidebar-item" {{ request()->is('sales') ? "active" : "" }}>
                    <a class="sidebar-link gap-3 py-2.5 my-1 text-base flex items-center justify-between relative rounded-md text-gray-500 w-full"
                       href="/sales-contract">
                        <div class="flex items-center gap-2">
                            <i class="ti ti-clipboard ps-2 text-2xl"></i> <span>Satış Sözleşmesi</span>
                        </div>
                    </a>
                </li>
                <li class="sidebar-item" {{ request()->is('rent') ? "active" : "" }}>
                    <a class="sidebar-link gap-3 py-2.5 my-1 text-base flex items-center justify-between relative rounded-md text-gray-500 w-full"
                       href="/rent-contracts">
                        <div class="flex items-center gap-2">
                            <i class="ti ti-key ps-2 text-2xl"></i> <span>Kira Sözleşmesi</span>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
