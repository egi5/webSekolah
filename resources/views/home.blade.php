<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>SMK YP 17 | {{ $title }}</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="menuHome/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="menuHome/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="menuHome/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="menuHome/style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="menuHome/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="menuHome/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="menuHome/css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="menuHome/js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	@include('layouts.navbar')

	@yield('containerMenuUtama')

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
	@include('layouts.footer')
    <!-- ALL JS FILES -->
    <script src="menuHome/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="menuHome/js/custom.js"></script>
	<script src="menuHome/js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>