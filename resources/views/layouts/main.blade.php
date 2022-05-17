<!DOCTYPE html>
<html lang = "it">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Font Awesone -->
<script src="https://kit.fontawesome.com/d1478bb10b.js" crossorigin="anonymous"></script>
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- style css -->
<link rel="stylesheet" href="{{asset("css/app.css")}}">
<title>Comics</title>
</head>

<body>

    <header>
        @include('partials.header')
    </header>


    <main>
        @yield('main-content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>

</body>

</html>
