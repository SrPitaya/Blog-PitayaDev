<header class="bg-white px-6 shadow dark:bg-slate-900">
    <div class="mx-auto flex h-16 max-w-6xl items-center justify-between">
        <!-- Botón para alternar el menú móvil -->
        <button id="toggle-mobile-menu"
            class="-ml-1 rounded p-1 text-slate-500 transition-colors hover:bg-sky-500 hover:text-slate-100 focus:ring-2 focus:ring-slate-200 md:hidden dark:text-slate-400 dark:hover:text-slate-100">
            <!-- Ícono de menú abierto -->
            <svg id="open-menu-icon" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
            <!-- Ícono de menú cerrado -->
            <svg id="close-menu-icon" class="hidden h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Enlace de bienvenida (visible en desktop) -->
        <a class="hidden text-sky-500 duration-200 hover:rotate-6 md:block" href="{{ route('welcome') }}">
            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                <path
                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                </path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                </path>
            </svg>
        </a>

        <!-- Menú de navegación -->
        <div class="-mr-4 flex items-center">
            <!-- Enlace de bienvenida (visible en móvil) -->
            <a class="text-sky-500 duration-200 hover:rotate-6 md:hidden" href="{{ route('welcome') }}">
                <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                    </path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                    </path>
                </svg>
            </a>

            <!-- Enlaces del menú (visible en desktop) -->
            <div class="ml-8 hidden space-x-8 md:flex">
                <a class="px-3 py-2 {{ request()->routeIs('welcome') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                    href="{{ route('welcome') }}"> {{ __('Welcome') }} </a>
                <a class="px-3 py-2 {{ request()->routeIs('posts.*') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                    href="{{ route('posts.index') }}"> {{ __('Posts') }} </a>
                <a class="px-3 py-2 {{ request()->routeIs('about') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                    href="{{ route('about') }}"> {{ __('About') }} </a>
                <a class="px-3 py-2 {{ request()->routeIs('contact') ? 'text-sky-500' : 'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}"
                    href="{{ route('contact') }}"> {{ __('Contact') }} </a>
            </div>
        </div>

        <!-- Controles de tema y perfil -->
        <div class="flex items-center space-x-2 pt-1">
            <!-- Selector de tema -->
            <div class="relative">
                <button id="toggle-theme-menu"
                    class="rounded-full text-slate-500 transition-colors hover:text-sky-500 focus:ring-2 focus:ring-slate-200 focus:ring-offset-1 focus:ring-offset-transparent dark:text-slate-400 dark:hover:text-sky-500 dark:focus:ring-slate-700">
                    <!-- Ícono de tema claro -->
                    <svg id="light-icon" class="hidden h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    <!-- Ícono de tema oscuro -->
                    <svg id="dark-icon" class="hidden h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z">
                        </path>
                    </svg>
                    <!-- Ícono de tema del sistema -->
                    <svg id="system-icon" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25">
                        </path>
                    </svg>
                </button>

                <!-- Menú de opciones de tema -->
                <div id="theme-menu"
                    class="absolute right-0 z-20 hidden w-28 overflow-hidden rounded-md bg-white/90 shadow-lg dark:bg-slate-800/90">
                    <button data-theme-option="light"
                        class="flex w-full items-center space-x-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 focus:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900 dark:focus:bg-slate-900">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z">
                            </path>
                        </svg>
                        <span>Light</span>
                    </button>
                    <button data-theme-option="dark"
                        class="flex w-full items-center space-x-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 focus:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900 dark:focus:bg-slate-900">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z">
                            </path>
                        </svg>
                        <span>Dark</span>
                    </button>
                    <button data-theme-option="system"
                        class="flex w-full items-center space-x-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 focus:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900 dark:focus:bg-slate-900">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25">
                            </path>
                        </svg>
                        <span>System</span>
                    </button>
                </div>
            </div>

            <!-- Botón de perfil -->
            <button
                class="ml-4 rounded-full text-slate-500 transition-colors hover:text-sky-500 focus:ring-2 focus:ring-slate-200 focus:ring-offset-1">

            </button>

            @auth
                <!-- Dropdown de enlaces -->
                <div class="relative">
                    <button id="toggle-links-menu"
                        class="rounded-full text-slate-500 transition-colors hover:text-sky-500 focus:ring-2 focus:ring-slate-200 focus:ring-offset-1 dark:text-slate-400 dark:hover:text-sky-500 dark:focus:ring-slate-700">
                        <img class="h-6 w-6 rounded-full" src="https://ui-avatars.com/api?name={{ Auth::user()->name }}"
                            alt="{{ urlencode(Auth::user()->name) }}" />
                    </button>

                    <!-- Menú de enlaces -->
                    <div id="links-menu"
                        class="absolute right-0 z-20 hidden w-48 overflow-hidden rounded-md bg-white/90 shadow-lg dark:bg-slate-800/90">
                        <a href="{{ route('dashboard') }}"
                            class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900">{{ __('Dashboard') }}</a>
                        <a href="{{ route('settings.profile') }}"
                            class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900">{{ __('Profile') }}</a>

                        <!-- Formulario para logout -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="block w-full text-left px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <!-- Dropdown de enlaces -->
                <div class="relative">
                    <button id="toggle-links-menu-guest"
                        class="rounded-full text-slate-500 transition-colors hover:text-sky-500 focus:ring-2 focus:ring-slate-200 focus:ring-offset-1 dark:text-slate-400 dark:hover:text-sky-500 dark:focus:ring-slate-700">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z">
                            </path>
                        </svg>
                    </button>

                    <!-- Menú de enlaces -->
                    <div id="links-menu-guest"
                        class="absolute right-0 z-20 hidden w-48 overflow-hidden rounded-md bg-white/90 shadow-lg dark:bg-slate-800/90">
                        <a href="{{ route('login') }}"
                            class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900">{{ __('Login') }}</a>
                        <a href="{{ route('register') }}"
                            class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900">{{ __('Register') }}</a>
                    </div>
                </div>
            @endauth
        </div>
    </div>

    <!-- Menú móvil -->
    <div id="mobile-menu" class="hidden space-y-1 border-t pb-3 pt-2 dark:border-slate-500">
        <a class="block rounded-md px-3 py-2 {{ request()->routeIs('welcome') ? 'bg-sky-500 text-white' : 'text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white' }}"
            href="{{ route('welcome') }}"> {{ __('Welcome') }} </a>
        <a class="block rounded-md px-3 py-2 {{ request()->routeIs('posts.*') ? 'bg-sky-500 text-white' : 'text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white' }}"
            href="{{ route('posts.index') }}"> {{ __('Posts') }} </a>
        <a class="block rounded-md px-3 py-2 {{ request()->routeIs('about') ? 'bg-sky-500 text-white' : 'text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white' }}"
            href="{{ route('about') }}"> {{ __('About') }} </a>
        <a class="block rounded-md px-3 py-2 {{ request()->routeIs('contact') ? 'bg-sky-500 text-white' : 'text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white' }}"
            href="{{ route('contact') }}"> {{ __('Contact') }} </a>
    </div>
</header>
<script>
    const icons = {
        light: document.getElementById("light-icon"),
        dark: document.getElementById("dark-icon"),
        system: document.getElementById("system-icon"),
    };

    const themeMenu = document.getElementById("theme-menu");
    const themeOptions = document.querySelectorAll("[data-theme-option]");
    const isDarkMode = window.matchMedia("(prefers-color-scheme: dark)");
    const html = document.documentElement;

    let currentTheme = localStorage.getItem("theme") || "system";
    localStorage.setItem("theme", currentTheme);

    updateTheme(currentTheme);
    updateThemeUI(currentTheme);

    function updateThemeUI(theme) {
        Object.entries(icons).forEach(([key, icon]) =>
            key === theme ? icon.classList.remove("hidden") : icon.classList.add("hidden")
        );
        themeMenu.classList.add("hidden");
        localStorage.setItem("theme", theme);
    }

    function updateTheme(theme) {
        if (theme === "dark" || (theme === "system" && isDarkMode.matches)) {
            html.classList.add("dark");
        } else {
            html.classList.remove("dark");
        }
        currentTheme = theme;
    }

    isDarkMode.addEventListener("change", ({
        matches
    }) => {
        if (currentTheme === "system") {
            matches ? html.classList.add("dark") : html.classList.remove("dark");
        }
    });

    themeOptions.forEach(option => {
        option.addEventListener("click", () => {
            const theme = option.dataset.themeOption;
            updateThemeUI(theme);
            updateTheme(theme);
        });
    });

    document.getElementById("toggle-theme-menu").addEventListener("click", () =>
        themeMenu.classList.toggle("hidden")
    );

    document.getElementById("toggle-mobile-menu").addEventListener("click", () => {
        document.getElementById("mobile-menu").classList.toggle("hidden");
        document.getElementById("open-menu-icon").classList.toggle("hidden");
        document.getElementById("close-menu-icon").classList.toggle("hidden");
    });

    document.querySelectorAll("[id^='toggle-links-menu']").forEach(button => {
        button.addEventListener("click", () => {
            const menuId = button.id.replace("toggle-", "");
            document.getElementById(menuId).classList.toggle("hidden");
        });
    });
</script>
