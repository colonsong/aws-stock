<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hello, world!</title>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>

  </head>
  <body>
    <div class="my-container container">
        <div class="col-xs-12" style="min-height: 600px;">
        </div>
      </div>
      <script src="{{ asset('js/broadcasting.js') }}" defer></script>
  </body>
</html>

