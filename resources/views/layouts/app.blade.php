<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-head />
    <body class="font-sans antialiased">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            <div style="height: 200px;"></div>
            {{ $slot }}
        </main>
    </body>
</html>
