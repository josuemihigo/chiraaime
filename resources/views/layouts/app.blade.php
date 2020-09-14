<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  {{-- entete de page  --}}
  @include('head')
  {{-- fin entete de page  --}}
</head>

<body>

          @yield('content')


  <!-- /Container -->
</body>
@include('script')

</html>









