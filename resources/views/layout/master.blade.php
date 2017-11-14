<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/material-design/material.min.css') }}">
</head>
<body>
  @include('layout.head_nav')
<div class="container">
  
      @if (Session::has('error'))
      <div class="session-flash alert-danger">
      {{Session::get('error')}}
      </div>
      @endif
      @if (Session::has('notice'))
      <div class="session-flash alert-info">
      {{Session::get('notice')}}
      </div>
      @endif

      @yield("content")   
</div>

<script src="{{ asset('js/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/material-design/material.min.js') }}"></script>
</body>
</html>