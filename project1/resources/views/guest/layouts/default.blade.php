<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <script src="{{ asset('js/bootstrap.min.js')  }}"></script>
    <script src="{{ asset('js/jquery.min.js')  }}"></script>
    <script src="{{ asset('js/jquery.js')  }}"></script>
</head>
<body>
<div class="content">
	@include('guest.includes.subheader')
	@include('guest.includes.header')

	@yield('content')


</div>
</body>
</html>