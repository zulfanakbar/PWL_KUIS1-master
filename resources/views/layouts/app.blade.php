<!DOCTYPE html>
<html lang="en">
<head>
<!--
Metro City Template
http://www.templatemo.com/tm-470-metro-city
-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Metro City - templatemo</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/templatemo-style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	<div class="container">
    @include('layouts.menu')
			
	</div>
	<div class="tm-banner tm-bn-1">
	@include('layouts.slider')		

	</div>	
	<div class="container">
    @yield('content')
		
		<div class="row">
			<div class="tm-block-2-container">			
				@include('layouts.footer')
						
			</div>				
		</div>			  			  	
	</div>
	
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
	<script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

</body>
</html>
