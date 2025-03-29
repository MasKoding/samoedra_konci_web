<aside
    class="sidebar-wrapper fixed top-0 z-30 block h-full w-[308px] bg-white dark:bg-darkblack-600 sm:hidden xl:block">
    <div
        class="sidebar-header relative z-30 flex h-[108px] w-full items-center border-b border-r border-b-[#F7F7F7] border-r-[#F7F7F7] pl-[50px] dark:border-darkblack-400">
        <a href="/">
            <img src="{{ asset('images/logo/logo_samoedra.JPG') }}"
                 class="h-16 w-auto object-contain"
                 alt="Samoedra Logo" />
        </a>
        <button type="button" class="drawer-btn absolute right-0 top-auto" title="Ctrl+b">
            <span>
                <svg width="16" height="40" viewBox="0 0 16 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 10C0 4.47715 4.47715 0 10 0H16V40H10C4.47715 40 0 35.5228 0 30V10Z" fill="#22C55E" />
                    <path d="M10 15L6 20.0049L10 25.0098" stroke="#ffffff" stroke-width="1.2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </span>
        </button>
    </div>
    <div
        class="sidebar-body overflow-style-none relative z-30 h-screen w-full overflow-y-scroll pb-[200px] pl-[48px] pt-[14px]">
        <div class="nav-wrapper mb-[36px] pr-[50px]">
            @php
                $PermissionUser = App\Models\PermissionRoleModel::getPermission(Auth::user()->role_id, 'User');
                $PermissionRole = App\Models\PermissionRoleModel::getPermission(Auth::user()->role_id, 'Role');
                $PermissionBermain = App\Models\PermissionRoleModel::getPermission(Auth::user()->role_id, 'Bermain');
                $PermissionBimbel = App\Models\PermissionRoleModel::getPermission(Auth::user()->role_id, 'Bimbel');
                $PermissionBerita = App\Models\PermissionRoleModel::getPermission(Auth::user()->role_id, 'Berita');
                $PermissionLayanan = App\Models\PermissionRoleModel::getPermission(Auth::user()->role_id, 'Layanan');
                $PermissionJournal = App\Models\PermissionRoleModel::getPermission(Auth::user()->role_id, 'Journal');
                $PermissionEvent = App\Models\PermissionRoleModel::getPermission(Auth::user()->role_id, 'Event');
                $PermissionDaycare = App\Models\PermissionRoleModel::getPermission(Auth::user()->role_id, 'Daycare');
                $PermissionStimulasi = App\Models\PermissionRoleModel::getPermission(Auth::user()->role_id, 'Stimulasi');
            @endphp

            <!-- Dashboard -->
            <div class="item-wrapper mb-5">
                <h4 class="border-b border-bgray-200 text-sm font-medium leading-7 text-bgray-700 dark:border-darkblack-400 dark:text-bgray-50">
                    Dashboard
                </h4>
                <ul class="mt-2.5">
                    <li class="item py-[11px] text-bgray-900 dark:text-white">
                        <a href="{{ url('/dashboard') }}"
                           class="flex items-center justify-between {{ Request::is('dashboard*') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="item-ico">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M17.5 7.5V15.8333C17.5 16.2754 17.3244 16.6993 17.0118 17.0118C16.6993 17.3244 16.2754 17.5 15.8333 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M19.1666 4.16667L9.99998 1.66667L0.833313 4.16667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="item-text text-lg font-medium leading-none">Dashboard</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Layanan Anak -->
            @if(!empty($PermissionBermain) || !empty($PermissionBimbel) || !empty($PermissionDaycare) || !empty($PermissionStimulasi))
            <div class="item-wrapper mb-5">
                <h4 class="border-b border-bgray-200 text-sm font-medium leading-7 text-bgray-700 dark:border-darkblack-400 dark:text-bgray-50">
                    Layanan Anak
                </h4>
                <ul class="mt-2.5">
                    @if(!empty($PermissionBermain))
                    <li class="item py-[11px] text-bgray-900 dark:text-white">
                        <a href="{{ route('bermain.index') }}"
                           class="flex items-center justify-between {{ Request::is('bermain*') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="item-ico">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.1667 10C16.1667 13.4467 13.4467 16.1667 10 16.1667C6.55333 16.1667 3.83333 13.4467 3.83333 10C3.83333 6.55333 6.55333 3.83333 10 3.83333C13.4467 3.83333 16.1667 6.55333 16.1667 10Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="item-text text-lg font-medium leading-none">Bermain</span>
                            </div>
                        </a>
                    </li>
                    @endif

                    @if(!empty($PermissionBimbel))
                    <li class="item py-[11px] text-bgray-900 dark:text-white">
                        <a href="{{ route('bimbel.index') }}"
                           class="flex items-center justify-between {{ Request::is('bimbel*') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="item-ico">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 13.3333L13.3333 10L16.6667 13.3333M13.3333 10L10 6.66667M13.3333 10H3.33333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="item-text text-lg font-medium leading-none">Bimbel</span>
                            </div>
                        </a>
                    </li>
                    @endif

                    @if(!empty($PermissionDaycare))
                    <li class="item py-[11px] text-bgray-900 dark:text-white">
                        <a href="{{ route('daycare.index') }}"
                           class="flex items-center justify-between {{ Request::is('daycare*') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="item-ico">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.6667 5H3.33333C2.41286 5 1.66667 5.74619 1.66667 6.66667V15C1.66667 15.9205 2.41286 16.6667 3.33333 16.6667H16.6667C17.5872 16.6667 18.3333 15.9205 18.3333 15V6.66667C18.3333 5.74619 17.5872 5 16.6667 5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13.3333 16.6667V3.33333C13.3333 2.89131 13.1577 2.46738 12.8452 2.15482C12.5326 1.84226 12.1087 1.66667 11.6667 1.66667H8.33333C7.89131 1.66667 7.46738 1.84226 7.15482 2.15482C6.84226 2.46738 6.66667 2.89131 6.66667 3.33333V16.6667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="item-text text-lg font-medium leading-none">Daycare</span>
                            </div>
                        </a>
                    </li>
                    @endif

                    @if(!empty($PermissionStimulasi))
                    <li class="item py-[11px] text-bgray-900 dark:text-white">
                        <a href="{{ route('stimulasi.index') }}"
                           class="flex items-center justify-between {{ Request::is('stimulasi*') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="item-ico">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.6667 5H3.33333C2.41286 5 1.66667 5.74619 1.66667 6.66667V15C1.66667 15.9205 2.41286 16.6667 3.33333 16.6667H16.6667C17.5872 16.6667 18.3333 15.9205 18.3333 15V6.66667C18.3333 5.74619 17.5872 5 16.6667 5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13.3333 16.6667V3.33333C13.3333 2.89131 13.1577 2.46738 12.8452 2.15482C12.5326 1.84226 12.1087 1.66667 11.6667 1.66667H8.33333C7.89131 1.66667 7.46738 1.84226 7.15482 2.15482C6.84226 2.46738 6.66667 2.89131 6.66667 3.33333V16.6667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="item-text text-lg font-medium leading-none">Stimulasi</span>
                            </div>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            @endif

            <!-- Konten -->
            @if(!empty($PermissionBerita) || !empty($PermissionEvent) || !empty($PermissionJournal))
            <div class="item-wrapper mb-5">
                <h4 class="border-b border-bgray-200 text-sm font-medium leading-7 text-bgray-700 dark:border-darkblack-400 dark:text-bgray-50">
                    Konten
                </h4>
                <ul class="mt-2.5">
                    @if(!empty($PermissionBerita))
                    <li class="item py-[11px] text-bgray-900 dark:text-white">
                        <a href="{{ url('/berita') }}"
                           class="flex items-center justify-between {{ Request::is('berita*') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="item-ico">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.6667 5H3.33333C2.41286 5 1.66667 5.74619 1.66667 6.66667V15C1.66667 15.9205 2.41286 16.6667 3.33333 16.6667H16.6667C17.5872 16.6667 18.3333 15.9205 18.3333 15V6.66667C18.3333 5.74619 17.5872 5 16.6667 5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13.3333 16.6667V3.33333C13.3333 2.89131 13.1577 2.46738 12.8452 2.15482C12.5326 1.84226 12.1087 1.66667 11.6667 1.66667H8.33333C7.89131 1.66667 7.46738 1.84226 7.15482 2.15482C6.84226 2.46738 6.66667 2.89131 6.66667 3.33333V16.6667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="item-text text-lg font-medium leading-none">Berita</span>
                            </div>
                        </a>
                    </li>
                    @endif

                    @if(!empty($PermissionEvent))
                    <li class="item py-[11px] text-bgray-900 dark:text-white">
                        <a href="{{ route('event.index') }}"
                           class="flex items-center justify-between {{ Request::is('event') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="item-ico">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M13.3333 9.16667V3.33333L18.3333 1.66667V7.5M13.3333 9.16667L18.3333 7.5M13.3333 9.16667L8.33333 7.5M18.3333 7.5V13.3333L13.3333 15V9.16667M8.33333 7.5V13.3333M8.33333 7.5L3.33333 9.16667V15L8.33333 13.3333M1.66667 5L6.66667 3.33333L11.6667 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="item-text text-lg font-medium leading-none">Event</span>
                            </div>
                        </a>
                    </li>

                    <li class="item py-[11px] text-bgray-900 dark:text-white">
                        <a href="{{ route('event.master') }}"
                           class="flex items-center justify-between {{ Request::is('event/master*') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="item-ico">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M7.5 10H12.5M2.5 6.66667H17.5M5.83333 3.33333H14.1667C15.0871 3.33333 15.8333 4.07952 15.8333 5V15C15.8333 15.9205 15.0871 16.6667 14.1667 16.6667H5.83333C4.91286 16.6667 4.16667 15.9205 4.16667 15V5C4.16667 4.07952 4.91286 3.33333 5.83333 3.33333Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="item-text text-lg font-medium leading-none">Master Event</span>
                            </div>
                        </a>
                    </li>
                    @endif

                    @if(!empty($PermissionJournal))
                    <li class="item py-[11px] text-bgray-900 dark:text-white">
                        <a href="{{ route('journal.index') }}"
                           class="flex items-center justify-between {{ Request::is('journal*') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="item-ico">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M7.5 10H12.5M2.5 6.66667H17.5M5.83333 3.33333H14.1667C15.0871 3.33333 15.8333 4.07952 15.8333 5V15C15.8333 15.9205 15.0871 16.6667 14.1667 16.6667H5.83333C4.91286 16.6667 4.16667 15.9205 4.16667 15V5C4.16667 4.07952 4.91286 3.33333 5.83333 3.33333Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="item-text text-lg font-medium leading-none">Journal</span>
                            </div>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            @endif

            <!-- Pengaturan -->
            @if(!empty($PermissionUser) || !empty($PermissionRole) || !empty($PermissionLayanan))
            <div class="item-wrapper mb-5">
                <h4 class="border-b border-bgray-200 text-sm font-medium leading-7 text-bgray-700 dark:border-darkblack-400 dark:text-bgray-50">
                    Pengaturan
                </h4>
                <ul class="mt-2.5">
                    @if(!empty($PermissionUser))
                    <li class="item py-[11px] text-bgray-900 dark:text-white">
                        <a href="{{ route('user.list') }}"
                           class="flex items-center justify-between {{ Request::is('user*') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="item-ico">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M16.6667 17.5V15.8333C16.6667 14.9493 16.3155 14.1014 15.6904 13.4763C15.0653 12.8512 14.2174 12.5 13.3333 12.5H6.66667C5.78261 12.5 4.93476 12.8512 4.30964 13.4763C3.68452 14.1014 3.33333 14.9493 3.33333 15.8333V17.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 9.16667C11.841 9.16667 13.3333 7.67428 13.3333 5.83333C13.3333 3.99238 11.841 2.5 10 2.5C8.15905 2.5 6.66667 3.99238 6.66667 5.83333C6.66667 7.67428 8.15905 9.16667 10 9.16667Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="item-text text-lg font-medium leading-none">User</span>
                            </div>
                        </a>
                    </li>
                    @endif

                    @if(!empty($PermissionRole))
                    <li class="item py-[11px] text-bgray-900 dark:text-white">
                        <a href="{{ route('role.list') }}"
                           class="flex items-center justify-between {{ Request::is('role*') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="item-ico">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M7.5 10H12.5M2.5 6.66667H17.5M5.83333 3.33333H14.1667C15.0871 3.33333 15.8333 4.07952 15.8333 5V15C15.8333 15.9205 15.0871 16.6667 14.1667 16.6667H5.83333C4.91286 16.6667 4.16667 15.9205 4.16667 15V5C4.16667 4.07952 4.91286 3.33333 5.83333 3.33333Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="item-text text-lg font-medium leading-none">Role</span>
                            </div>
                        </a>
                    </li>
                    @endif

                    @if(!empty($PermissionLayanan))
                    <li class="item py-[11px] text-bgray-900 dark:text-white">
                        <a href="{{ route('layanan') }}"
                           class="flex items-center justify-between {{ Request::is('layanan*') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="item-ico">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M17.5 5.83333H2.5M7.5 9.16667V14.1667M12.5 9.16667V14.1667M16.6667 5.83333L15.4167 15.9583C15.3333 16.7083 14.6667 17.5 13.9167 17.5H6.08333C5.25 17.5 4.66667 16.7083 4.58333 15.9583L3.33333 5.83333M8.33333 5.83333V3.33333C8.33333 2.875 8.70833 2.5 9.16667 2.5H10.8333C11.2917 2.5 11.6667 2.875 11.6667 3.33333V5.83333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="item-text text-lg font-medium leading-none">Layanan</span>
                            </div>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            @endif
        </div>
    </div>
</aside>

<div style="z-index: 25" class="aside-overlay fixed left-0 top-0 block h-full w-full bg-black bg-opacity-30 sm:hidden">
</div>

<aside class="relative hidden w-[96px] bg-white dark:bg-black sm:block">
    <div class="sidebar-wrapper-collapse relative top-0 z-30 w-full">
        <div class="sidebar-header sticky top-0 z-20 flex h-[108px] w-full items-center justify-center border-b border-r border-b-[#F7F7F7] border-r-[#F7F7F7] bg-white dark:border-darkblack-500 dark:bg-darkblack-600">
            <a href="/">
                <img src="{{ asset('images/logo/logo-icon.svg') }}"
                     class="h-10 w-10 object-contain"
                     alt="Little Star Kids Icon" />
            </a>
        </div>
        <div class="sidebar-body w-full pt-[14px]">
            <div class="flex flex-col items-center">
                <div class="nav-wrapper mb-[36px]">
                    <div class="item-wrapper mb-5">
                        <ul class="mt-2.5 flex flex-col items-center justify-center">
                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ url('/dashboard') }}" class="{{ Request::is('dashboard*') ? 'active' : '' }}">
                                    <span class="item-ico">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M17.5 7.5V15.8333C17.5 16.2754 17.3244 16.6993 17.0118 17.0118C16.6993 17.3244 16.2754 17.5 15.8333 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.1666 4.16667L9.99998 1.66667L0.833313 4.16667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            @if(!empty($PermissionBermain))
                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ route('bermain.index') }}" class="{{ Request::is('bermain*') ? 'active' : '' }}">
                                    <span class="item-ico">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16.1667 10C16.1667 13.4467                                             <path d="M16.1667 10C16.1667 13.4467 13.4467 16.1667 10 16.1667C6.55333 16.1667 3.83333 13.4467 3.83333 10C3.83333 6.55333 6.55333 3.83333 10 3.83333C13.4467 3.83333 16.1667 6.55333 16.1667 10Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            @endif
                            @if(!empty($PermissionBimbel))
                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ route('bimbel.index') }}" class="{{ Request::is('bimbel*') ? 'active' : '' }}">
                                    <span class="item-ico">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M10 13.3333L13.3333 10L16.6667 13.3333M13.3333 10L10 6.66667M13.3333 10H3.33333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            @endif
                            @if(!empty($PermissionBerita))
                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ url('/berita') }}" class="{{ Request::is('berita*') ? 'active' : '' }}">
                                    <span class="item-ico">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16.6667 5H3.33333C2.41286 5 1.66667 5.74619 1.66667 6.66667V15C1.66667 15.9205 2.41286 16.6667 3.33333 16.6667H16.6667C17.5872 16.6667 18.3333 15.9205 18.3333 15V6.66667C18.3333 5.74619 17.5872 5 16.6667 5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M13.3333 16.6667V3.33333C13.3333 2.89131 13.1577 2.46738 12.8452 2.15482C12.5326 1.84226 12.1087 1.66667 11.6667 1.66667H8.33333C7.89131 1.66667 7.46738 1.84226 7.15482 2.15482C6.84226 2.46738 6.66667 2.89131 6.66667 3.33333V16.6667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            @endif
                            @if(!empty($PermissionUser))
                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ route('user.list') }}" class="{{ Request::is('user*') ? 'active' : '' }}">
                                    <span class="item-ico">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16.6667 17.5V15.8333C16.6667 14.9493 16.3155 14.1014 15.6904 13.4763C15.0653 12.8512 14.2174 12.5 13.3333 12.5H6.66667C5.78261 12.5 4.93476 12.8512 4.30964 13.4763C3.68452 14.1014 3.33333 14.9493 3.33333 15.8333V17.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10 9.16667C11.841 9.16667 13.3333 7.67428 13.3333 5.83333C13.3333 3.99238 11.841 2.5 10 2.5C8.15905 2.5 6.66667 3.99238 6.66667 5.83333C6.66667 7.67428 8.15905 9.16667 10 9.16667Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            @endif
                            @if(!empty($PermissionRole))
                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ route('role.list') }}" class="{{ Request::is('role*') ? 'active' : '' }}">
                                    <span class="item-ico">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M7.5 10H12.5M2.5 6.66667H17.5M5.83333 3.33333H14.1667C15.0871 3.33333 15.8333 4.07952 15.8333 5V15C15.8333 15.9205 15.0871 16.6667 14.1667 16.6667H5.83333C4.91286 16.6667 4.16667 15.9205 4.16667 15V5C4.16667 4.07952 4.91286 3.33333 5.83333 3.33333Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            @endif
                            @if(!empty($PermissionLayanan))
                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ route('layanan') }}" class="{{ Request::is('layanan*') ? 'active' : '' }}">
                                    <span class="item-ico">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M17.5 5.83333H2.5M7.5 9.16667V14.1667M12.5 9.16667V14.1667M16.6667 5.83333L15.4167 15.9583C15.3333 16.7083 14.6667 17.5 13.9167 17.5H6.08333C5.25 17.5 4.66667 16.7083 4.58333 15.9583L3.33333 5.83333M8.33333 5.83333V3.33333C8.33333 2.875 8.70833 2.5 9.16667 2.5H10.8333C11.2917 2.5 11.6667 2.875 11.6667 3.33333V5.83333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            @endif
                            @if(!empty($PermissionJournal))
                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ route('journal.index') }}" class="{{ Request::is('journal*') ? 'active' : '' }}">
                                    <span class="item-ico">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M7.5 10H12.5M2.5 6.66667H17.5M5.83333 3.33333H14.1667C15.0871 3.33333 15.8333 4.07952 15.8333 5V15C15.8333 15.9205 15.0871 16.6667 14.1667 16.6667H5.83333C4.91286 16.6667 4.16667 15.9205 4.16667 15V5C4.16667 4.07952 4.91286 3.33333 5.83333 3.33333Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            @endif
                            @if(!empty($PermissionEvent))
                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ route('event.index') }}" class="{{ Request::is('event') ? 'active' : '' }}">
                                    <span class="item-ico">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M13.3333 9.16667V3.33333L18.3333 1.66667V7.5M13.3333 9.16667L18.3333 7.5M13.3333 9.16667L8.33333 7.5M18.3333 7.5V13.3333L13.3333 15V9.16667M8.33333 7.5V13.3333M8.33333 7.5L3.33333 9.16667V15L8.33333 13.3333M1.66667 5L6.66667 3.33333L11.6667 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </a>
                            </li>

                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ route('event.master') }}" class="{{ Request::is('event/master*') ? 'active' : '' }}">
                                    <span class="item-ico">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M7.5 10H12.5M2.5 6.66667H17.5M5.83333 3.33333H14.1667C15.0871 3.33333 15.8333 4.07952 15.8333 5V15C15.8333 15.9205 15.0871 16.6667 14.1667 16.6667H5.83333C4.91286 16.6667 4.16667 15.9205 4.16667 15V5C4.16667 4.07952 4.91286 3.33333 5.83333 3.33333Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            @endif
                            @if(!empty($PermissionDaycare))
                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ route('daycare.index') }}" class="{{ Request::is('daycare*') ? 'active' : '' }}">
                                    <span class="item-ico">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16.6667 5H3.33333C2.41286 5 1.66667 5.74619 1.66667 6.66667V15C1.66667 15.9205 2.41286 16.6667 3.33333 16.6667H16.6667C17.5872 16.6667 18.3333 15.9205 18.3333 15V6.66667C18.3333 5.74619 17.5872 5 16.6667 5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M13.3333 16.6667V3.33333C13.3333 2.89131 13.1577 2.46738 12.8452 2.15482C12.5326 1.84226 12.1087 1.66667 11.6667 1.66667H8.33333C7.89131 1.66667 7.46738 1.84226 7.15482 2.15482C6.84226 2.46738 6.66667 2.89131 6.66667 3.33333V16.6667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            @endif
                            @if(!empty($PermissionStimulasi))
                            <li class="item px-[43px] py-[11px]">
                                <a href="{{ route('stimulasi.index') }}" class="{{ Request::is('stimulasi*') ? 'active' : '' }}">
                                    <span class="item-ico">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16.6667 5H3.33333C2.41286 5 1.66667 5.74619 1.66667 6.66667V15C1.66667 15.9205 2.41286 16.6667 3.33333 16.6667H16.6667C17.5872 16.6667 18.3333 15.9205 18.3333 15V6.66667C18.3333 5.74619 17.5872 5 16.6667 5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M13.3333 16.6667V3.33333C13.3333 2.89131 13.1577 2.46738 12.8452 2.15482C12.5326 1.84226 12.1087 1.66667 11.6667 1.66667H8.33333C7.89131 1.66667 7.46738 1.84226 7.15482 2.15482C6.84226 2.46738 6.66667 2.89131 6.66667 3.33333V16.6667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<style>
.active {
    color: #22C55E; /* Warna hijau untuk item yang aktif */
}
.active .item-ico svg {
    stroke: #22C55E; /* Warna hijau untuk icon yang aktif */
}
</style>