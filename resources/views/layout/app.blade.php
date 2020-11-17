<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>{{ config('app.name') }}</title>
  <link href="https://db.onlinewebfonts.com/c/2547970600ac97f5d9bd0ebcc1f2dd9d?family=Font+Awesome+5+Brands" rel="stylesheet" type="text/css"/>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>
</head>

<body class="body">
  <div class="container-fluid">

    @include('_header')
    
    <main>
      @include('_section-1')
      @include('_section-2')
      @include('_section-3')
      @include('_section-4')
    </main>

    @include('_footer')

  </div>
    <!-- INCLUDE REACT -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
      const backToTop = () => { $('html, body').animate({ scrollTop: 0 }, 'slow');}
    </script>

</body>
</html>