<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
        <link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>

		 <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700"> 
         <!-- <link rel="stylesheet" href="{{ URL::asset('/css/lpstyle.css') }}"> -->

		<link rel="stylesheet" href="{{ URL::asset('/icons/fontawesome/css/fontawesome-all.min.css') }}"><!-- FontAwesome Icons -->
		<link rel="stylesheet" href="{{ URL::asset('/icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css') }}"><!-- iconsmind.com Icons -->

		<title>AfroFlix</title>
</head>
<body>
	<header id="masthead-pro">
		@include('front.layout.signup_header')
	<header>

		@include('front.layout.signup2_reg')

	<footer>
		@include('front.layout.signup_footer')
	</footer>

	<script>
		@include('front.layout.signup_script')
	</script>
</body>
</html>

