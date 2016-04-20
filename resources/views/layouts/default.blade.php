<!-- Developed by Joko Irianto -->
<!-- irianto94@outlook.com -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>@yield('htmlheader_title', 'BEM UNAIR 2016') </title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="front/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="front/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="shortcut icon" href="http://unair.ac.id/assets/img/icon/favicon.png" type="image/x-icon" /> 
</head>
<body>
  @include('partials.front.header')

  @yield('main-content')

  @include('partials.front.hubungi-kami')

  @include('partials.front.footer')

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="front/js/materialize.js"></script>
  <script src="front/js/init.js"></script>

  @yield('script_footer')

</body>
</html>
