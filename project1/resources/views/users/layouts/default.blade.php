<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/jquery.js')  }}"></script>
    <script src="{{ asset('js/jquery2.min.js')}}"></script>
  	<script src="{{ asset('js/bootstrap2.min.js')}}"></script>
</head>
<body>
<div class="content">
	@include('users.includes.subheader')
	@include('users.includes.header')

	@yield('content')


</div>
</body>
</html>