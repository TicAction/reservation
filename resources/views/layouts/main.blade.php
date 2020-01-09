<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>{{ config('app.name', 'Laravel') }}</title>

 <script src="{{ asset('js/app.js') }}" defer></script>
 <script src="{{asset('js/my.js')}}" defer></script>
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="{{asset('css/my.css')}}">

</head>
<body>
<div class="jumbotron jumbotron-fluid" style= 'margin-bottom: 55px;'>
  <div class="container">
    <h1 class="display-4 text-white">École Plein-Soleil</h1>
    <p class="lead text-white">Gestion des réservations</p>
  </div>
</div>

	<div class="container">
		@yield('navbar')

		<div class="row">
			
			<div class="col-md-8">
			@yield('content')
		</div>

		<div class="col-md-4">
			@yield('sidebar')
		</div>

		</div>
		
		
	</div>
		

</body>
</html>