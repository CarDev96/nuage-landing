<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/x-icon" href="{{ env('APP_URL') . '/favicon.ico' }}">
	<title>{{ env('APP_NAME')  }}</title>
	{{ Html::style('css/landing.css') }}
</head>
<body>
	@include('homepage.navbar')
	@include('homepage.about-us')
	@include('homepage.products')
	@include('homepage.more-info')
	@include('homepage.banner_salon')
	@include('homepage.description')
	@include('homepage.spa')
	@include('homepage.job')
	@include('homepage.barber')
	@include('homepage.footer')
</body>
{{ Html::script('js/navMobile.js') }}
{{ Html::script('js/scroll-reveal.js') }}
</html>


