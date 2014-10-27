<!DOCTYPE html>
<html lang="zh_CN">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="{{ url('images/favicon.png') }}">

    <title><?php echo $_t->_("common")['title']; ?> - <?php echo $_t->_("errors")['title']; ?></title>
    {{ stylesheet_link("js/bootstrap/dist/css/bootstrap.css") }}
    {{ stylesheet_link("fonts/font-awesome-4/css/font-awesome.min.css") }}

	<!-- Bootstrap core CSS -->
    {{ stylesheet_link("js/bootstrap/dist/css/bootstrap.css") }}
    {{ stylesheet_link("fonts/font-awesome-4/css/font-awesome.min.css") }}

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
    {{ javascript_include('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
	<![endif]-->

	<!-- Custom styles for this template -->
    {{ stylesheet_link("css/style.css") }}

</head>

<body class="texture">

<div id="cl-wrapper" class="error-container">
	<div class="page-error">
		<h1 class="number text-center">404</h1>
		<h2 class="description text-center">访问的页面不存在。</h2>
	</div>
</div>

{{ javascript_include('js/jquery.js') }}
{{ javascript_include('js/behaviour/general.js') }}

<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
{{ javascript_include('js/behaviour/voice-commands.js') }}
{{ javascript_include('js/bootstrap/dist/js/bootstrap.min.js') }}
{{ javascript_include('js/jquery.flot/jquery.flot.js') }}
{{ javascript_include('js/jquery.flot/jquery.flot.pie.js') }}
{{ javascript_include('js/jquery.flot/jquery.flot.resize.js') }}
{{ javascript_include('js/jquery.flot/jquery.flot.labels.js') }}
</body>
</html>
