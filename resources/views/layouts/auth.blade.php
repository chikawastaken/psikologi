<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<script>
document.querySelectorAll('.auth-switch a').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector('.auth-card').style.opacity = 0;
        document.querySelector('.auth-card').style.transform = 'translateY(40px)';
        setTimeout(() => {
            window.location.href = this.href;
        }, 300);
    });
});
</script>

<body class="auth-body">

    <div class="auth-container">
        <div class="auth-card">
            @yield('content')
        </div>
    </div>

</body>
</html>
