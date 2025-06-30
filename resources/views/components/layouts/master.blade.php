@props([
    'titleKey' => 'shared/title.components__layouts__master',
    'titleParams' => [],
    'darkMode' => NULL,
])

@php
    $color_mode = auth()->user()?->settings?->color_mode;
    
    if (isset($darkMode)) {
        $quickColorMode = $darkMode ? 'dark' : '';
    } else {
        $quickColorMode = $color_mode === 'dark' ? 'dark' : '';
    }

    // ////=== TILFØJELSE START ===////
    // Detekter hvilken layout der bruges baseret på route
    $currentRoute = request()->route()->getName();
    $isGuestLayout = str_starts_with($currentRoute, 'public.');
    $isAuthLayout = $currentRoute === 'login' || $currentRoute === 'register';
    // ////=== TILFØJELSE SLUT ===////
@endphp

<!DOCTYPE html>
<html
    class="{{ $quickColorMode }}"
    x-data="{
        color_mode: '{{ $color_mode }}',
        prefersDark: window.matchMedia('(prefers-color-scheme: dark)').matches,
        forcedDarkMode: @json($darkMode),
        applyColorMode() {
            const shouldUseDark = this.color_mode === 'dark' || ((this.color_mode === 'system' || this.color_mode === '') && this.prefersDark);
            document.documentElement.classList.toggle('dark', this.forcedDarkMode ?? shouldUseDark);
        }
    }"
    x-init="
        applyColorMode();
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            prefersDark = e.matches;
            applyColorMode();
        });
        document.addEventListener('livewire:navigated', () => {
            applyColorMode();
        });
    "
    x-on:color_mode-updated="
        color_mode = $event.detail.color_mode;
        applyColorMode();
    "
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
>
    <head>
        @if (!isset($darkMode) && ($color_mode === 'system' || $color_mode === ''))
            <script>
                /* Tilføjer 'dark'-class på <html>, hvis color_mode er 'system' og brugerens OS foretrækker dark-mode */
                if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.classList.add('dark');
                }
            </script>
        @endif

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ __($titleKey, $titleParams) ?? config('app.name', 'Laravel') }}</title>

        {{-- Fonts (bruges ikke da de leveres lokalt) --}}
        {{--
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        --}}

        {{-- ////=== ÆNDRING START ===//// --}}
        @if ($isAuthLayout)
            @vite(['resources/css/app.css', 'resources/css/layouts/auth.css', 'resources/js/app.js'])
        @elseif ($isGuestLayout)
            @vite(['resources/css/app.css', 'resources/css/layouts/guest.css', 'resources/js/app.js'])
        @else
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
        {{-- ////=== ÆNDRING SLUT ===//// --}}
        
        {{--
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        --}}
        @stack('head') {{-- Akkumulerede stylesheets osv fra layout templates og pages --}}
        @stack('styles') {{-- Akkumulerede style-tags fra layout templates og pages --}}
    </head>
    <body
    {{ $attributes->merge([
        'class' => '',
    ]) }}>
        {{ $slot }}
        @stack('closingBody') {{-- Akkumulerede scripts osv fra layout templates og pages --}}
    </body>
</html>