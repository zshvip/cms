<!DOCTYPE html>
<html lang="zh_CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="{{ url('images/favicon.png') }}">

    <title><?php echo $_t->_("common")['title']; ?> - <?php echo $_t->_("login")['title']; ?></title>

    <!-- Bootstrap core CSS -->
    {{ stylesheet_link("js/bootstrap/dist/css/bootstrap.css") }}

    {{ stylesheet_link("fonts/font-awesome-4/css/font-awesome.min.css") }}

    <!-- Custom styles for this template -->
    {{ stylesheet_link("css/style.css") }}

</head>

<body class="texture">

<div id="cl-wrapper" class="login-container">

    <div class="middle-login">
        <div class="block-flat">
            <div class="header">
                <h3 class="text-center"><img class="logo-img" src="{{ url('images/logo.png') }}" alt="logo"/><?php echo $_t->_("common")['site_name']; ?></h3>
            </div>
            <div>
                <form style="margin-bottom: 0px !important;" class="form-horizontal" action="{{ url('user/login') }}">
                    <div class="content">
                        {{ content() }}
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" placeholder="<?php echo $_t->_("login")['txt_username_placeholder']; ?>" id="username" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" placeholder="<?php echo $_t->_("login")['txt_password_placeholder']; ?>" id="password" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="foot">
                        <button class="btn btn-primary" data-dismiss="modal" type="submit"><?php echo $_t->_("login")['btn_login']; ?></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center out-links"><a href="#">&copy; 2014 IOD coperation</a></div>
    </div>

</div>

{{ javascript_include('js/jquery.js') }}
{{ javascript_include('js/behaviour/general.js') }}

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{ javascript_include('js/behaviour/voice-commands.js') }}
{{ javascript_include('js/bootstrap/dist/js/bootstrap.min.js') }}
{{ javascript_include('js/jquery.flot/jquery.flot.js') }}
{{ javascript_include('js/jquery.flot/jquery.flot.pie.js') }}
{{ javascript_include('js/jquery.flot/jquery.flot.resize.js') }}
{{ javascript_include('js/jquery.flot/jquery.flot.labels.js') }}

</body>
</html>
