<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="description" content="{{csrf_field()}}">
	<meta name="author" content="{{csrf_field()}}">
	<meta name="keyword" content="{{csrf_field()}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

      @include('backend.layout.css')
  </head>

 <body id="mimin" class="dashboard">

   @include('backend.layout.header')

      <div class="container-fluid mimin-wrapper">


            @include('backend.layout.side_menu')
          @yield('content')


      </div>


      @include('backend.layout.mobile')
     @include('backend.layout.script')

  </body>
</html>
