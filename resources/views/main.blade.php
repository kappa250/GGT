<!DOCTYPE html>
<html>
	@include('partials._head')
	<body style="background-color: whitesmoke">

		@include('partials._navbar')

		@include('partials._messages')
		
		<!-- Content HERE ! -->
		@yield('content')
		<!-- END Content -->
		
		@include('partials._footer')
		
		@include('partials._js')

		@yield('script')

	</body>
</html>
