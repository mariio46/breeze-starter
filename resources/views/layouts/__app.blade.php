<!DOCTYPE html>
<html x-cloak x-data="{ darkMode: $persist(false) }" :class="{ 'dark': darkMode === true }"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Theme Scripts -->
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    {{-- <script>
        function setMetaThemeColor(setting) {
            const metaThemeColor = document.getElementById("theme-color-meta");
            if (metaThemeColor) {
                switch (setting) {
                    case 'dark':
                        metaThemeColor.setAttribute("content", "#09090b");
                        break;
                    case 'light':
                        metaThemeColor.setAttribute("content", "#ffffff");
                        break;
                    case 'system':
                        window.matchMedia('(prefers-color-scheme: dark)').matches ? metaThemeColor.setAttribute("content",
                            "#020713") : metaThemeColor.setAttribute("content", "#ffffff");
                        break;
                    default:
                        metaThemeColor.setAttribute("content", "#ffffff")
                }
            }
        }

        function updateTheme() {
            const themes = ['light', 'dark', 'system'];
            const currentTheme = localStorage.getItem('theme') || 'system';
            themes.forEach((theme) => {
                document.documentElement.classList.remove(theme)
            });
            if (currentTheme === 'system') {
                window.matchMedia('(prefers-color-scheme: dark)').matches ? document.documentElement.classList.add('dark') :
                    document.documentElement.classList.add('light')
            } else {
                document.documentElement.classList.add(currentTheme)
            }
            setMetaThemeColor(currentTheme)
        }
        updateTheme();
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            if (localStorage.getItem('theme') === 'system') {
                e.matches ? document.documentElement.classList.add('dark') : document.documentElement.classList
                    .remove('dark');
                setMetaThemeColor('system')
            }
        })
    </script> --}}
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
