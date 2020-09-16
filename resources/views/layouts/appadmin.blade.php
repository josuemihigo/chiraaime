<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  {{-- entete de page  --}}
  @include('headadmin')
  {{-- fin entete de page  --}}
</head>

<body>
    <div id="wrapper">

         @include('menu')
         @include('menulateral')
            @yield('content')
    @include('footer')

  <!-- /Container -->
</body>
@include('script')

</html>

