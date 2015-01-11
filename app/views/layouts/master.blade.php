<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>{{{ $title }}}</title>
    {{ HTML::style('assets/vendor/pure/pure-min.css') }}
    {{ HTML::style('assets/vendor/font-awesome/css/font-awesome.min.css') }}
    {{ HTML::style('css/base.css') }}
    {{ HTML::style('css/inviters.css') }}
    <!--[if lte IE 8]>
      {{ HTML::style('assets/vendor/pure/grids-responsive-old-ie-min.css') }}
    <![endif]-->
    <!--[if gt IE 8]><!-->
      {{ HTML::style('assets/vendor/pure/grids-responsive-min.css') }}
    <!--<![endif]-->

    {{ HTML::script('assets/vendor/jquery/dist/jquery.min.js') }}
  </head>

  <body>
    @yield('body')
  </body>
</html>
