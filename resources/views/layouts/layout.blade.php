<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <title>@yield('title')</title>
</head>

<body>
  @component('components.header')
  @endcomponent
  @yield('main')
  @component('components.footer')
  @endcomponent
</body>

</html>