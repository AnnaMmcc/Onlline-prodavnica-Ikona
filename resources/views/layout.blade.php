<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="@yield('meta_description', 'Kupite unikatne pravoslavne ikone iz radionice Anđel Šević. Ručno rađene i dostupne online.')">
    <meta property="og:title" content="@yield('title', 'Ikonopisna radionica Anđel Sević')">
    <meta property="og:description" content="@yield('meta_description', 'Kupite pravoslavne, ručno rađene ikone.')">
    <meta property="og:image" content="@yield('meta_image', asset('images/default-og.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="icon" href="{{ asset('storage/images/1000000645.jpg') }}" type="image/jpeg">

    <title>@yield('Naslov', 'Ikonopisna radionica Anđel Sević')</title>
</head>

<body class="d-flex flex-column min-vh-100 brown-bg text-white">

@include('navigation')

<main class="flex-grow-1">
    <div class="container-fluid px-0">
        <div class="content-wrapper bg-light text-dark py-5 px-3 px-md-5 rounded mx-auto">
            @yield('Sadrzaj')
        </div>
    </div>
</main>

@include('footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>

