<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Edukasi Kesehatan Mental')</title>
</head>
<body>

<header>
    <h2>Kesehatan Mental Gen Z</h2>
    <nav>
        <a href="/homepage">Home</a> |
        <a href="/edukasi">Edukasi</a> |
        <a href="/relaksasi">Relaksasi</a> |
        <a href="/psikolog">Psikolog</a> |
        <a href="/chat">Curhat</a>

        <form action="/logout" method="POST" style="display:inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </nav>
    <hr>
</header>

<main>
    @yield('content')
</main>

</body>
</html>
