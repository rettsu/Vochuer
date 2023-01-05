<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset("/css/bootstrap.min.css")}}">
</head>
	@include('layouts/style')
<body>
	<div class="container-fluid bg-image p-5 text-center" id="main-bg">
            {{-- <img src="{{asset("/images/bg.jpg")}}" class="rounded mx-auto d-block" alt="..."> --}}

		@include('layouts.navbar')

		@yield('content')

		@include('layouts/footer')
	</div>