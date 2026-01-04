{{-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'SERENICA')</title>

    {{-- FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@stack('styles')
</head>

<body class="app-body">
    {{-- NAVBAR --}}
    <header class="nav">
        <div class="nav-brand">SERENICA</div>

        <nav class="nav-menu">
            <a href="/homepage" class="{{ request()->is('homepage') ? 'active' : '' }}">
                Home
            </a>

            <a href="/tentang" class="{{ request()->is('tentang') ? 'active' : '' }}">
                Tentang Kami
            </a>

            <a href="/panduan" class="{{ request()->is('panduan') ? 'active' : '' }}">
                Panduan
            </a>

            <a href="/profile" class="{{ request()->is('profile') ? 'active' : '' }}">
                Profile
            </a>

            <form action="/logout" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="logout">Logout</button>
            </form>
        </nav>
    </header>

    {{-- CONTENT --}}
    <main class="app-main">
         {{-- FLASH MESSAGE --}}
        @if(session('success'))
            <div class="flash flash-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="flash flash-error">
                {{ $errors->first() }}
            </div>
        @endif
        
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="footer">
        <p>© 2026 SERENICA · Ruang aman untuk Gen Z</p>
    </footer>

</body>
</html> --}}



<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Hidup Kelompok 3')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @include('components.navbar')

    @yield('content')

    @include('components.footer')

</body>
</html>