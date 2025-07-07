<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Ikonopisna radionica Anđel Sević - Online prodaja ikona')</title>

    <meta name="description" content="@yield('meta_description', 'Kupite unikatne pravoslavne ikone iz radionice Anđel Sević. Ručno rađene i dostupne online.')">

    <meta property="og:title" content="@yield('title', 'Ikonopisna radionica Anđel Sević')">
    <meta property="og:description" content="@yield('meta_description', 'Kupite pravoslavne, ručno rađene ikone.')">
    <meta property="og:image" content="@yield('meta_image', asset('images/default-og.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('storage/images/1000000645.jpg') }}" type="image/jpeg">
    <title>@yield("Naslov")</title>
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
</body>
</html>

