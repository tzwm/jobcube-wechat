<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{{ $title }}}</title>
    {{ HTML::style('assets/vendor/pure/pure-min.css') }}
    {{ HTML::style('css/inviters.css') }}
    <!--[if lte IE 8]>
      {{ HTML::style('assets/vendor/pure/grids-responsive-old-ie-min.css') }}
    <![endif]-->
    <!--[if gt IE 8]><!-->
      {{ HTML::style('assets/vendor/pure/grids-responsive-min.css') }}
    <!--<![endif]-->
  </head>

  <body>
    @yield('body')
  </body>
</html>
