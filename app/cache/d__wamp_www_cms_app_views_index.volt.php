<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo $this->url->get('images/favicon.png'); ?>">

    <title><?php echo $_t->_("common")['title']; ?></title>
    <?php echo $this->tag->stylesheetLink('css/google-fonts-italic.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/google-fonts-raleway.css'); ?>

    <!-- Bootstrap core CSS -->
    <?php echo $this->tag->stylesheetLink('js/bootstrap/dist/css/bootstrap.css'); ?>
    <?php echo $this->tag->stylesheetLink('fonts/font-awesome-4/css/font-awesome.min.css'); ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <?php echo $this->tag->javascriptInclude('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'); ?>
    <![endif]-->
    <?php echo $this->tag->stylesheetLink('js/jquery.gritter/css/jquery.gritter.css'); ?>

    <?php echo $this->tag->stylesheetLink('js/jquery.nanoscroller/nanoscroller.css'); ?>
    <?php echo $this->tag->stylesheetLink('js/jquery.easypiechart/jquery.easy-pie-chart.css'); ?>
    <?php echo $this->tag->stylesheetLink('js/bootstrap.switch/bootstrap-switch.css'); ?>
    <?php echo $this->tag->stylesheetLink('js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css'); ?>
    <?php echo $this->tag->stylesheetLink('js/jquery.select2/select2.css'); ?>
    <?php echo $this->tag->stylesheetLink('js/bootstrap.slider/css/slider.css'); ?>
    <?php echo $this->tag->stylesheetLink('js/intro.js/introjs.css'); ?>
    <!-- Custom styles for this template -->
    <?php echo $this->tag->stylesheetLink('css/style.css'); ?>

</head>
<body>

<!-- Fixed navbar -->
<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="fa fa-gear"></span>
            </button>
            <a class="navbar-brand" href="#"><span>Clean Zone</span></a>
        </div>
    </div>
</div>

<!-- 左边菜单 -->
<div id="cl-wrapper" class="fixed-menu">
<div class="cl-sidebar" data-position="right" data-step="1" data-intro="<strong>Fixed Sidebar</strong> <br/> It adjust to your needs." >
    <div class="cl-toggle"><i class="fa fa-bars"></i></div>
    <div class="cl-navblock">
        <div class="text-right collapse-button" style="padding:7px 9px;">
            <input type="text" class="form-control search" placeholder="Search..." />
            <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
        </div>
    </div>
</div>

<div class="container-fluid" id="pcont">
<!-- 面包屑 -->
<div class="page-head">
    <h2>General Elements</h2>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">UI Elements</a></li>
        <li class="active">General</li>
    </ol>
</div>
<div class="cl-mcont">

</div>
</div>

</div>

<?php echo $this->tag->javascriptInclude('js/jquery.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery.gritter/js/jquery.gritter.js'); ?>

<?php echo $this->tag->javascriptInclude('js/jquery.nanoscroller/jquery.nanoscroller.js'); ?>
<?php echo $this->tag->javascriptInclude('js/behaviour/general.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery.ui/jquery-ui.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery.sparkline/jquery.sparkline.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery.easypiechart/jquery.easy-pie-chart.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery.nestable/jquery.nestable.js'); ?>
<?php echo $this->tag->javascriptInclude('js/bootstrap.switch/bootstrap-switch.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery.gritter/js/jquery.gritter.js'); ?>
<?php echo $this->tag->javascriptInclude('js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery.select2/select2.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/skycons/skycons.js'); ?>
<?php echo $this->tag->javascriptInclude('js/bootstrap.slider/js/bootstrap-slider.js'); ?>
<?php echo $this->tag->javascriptInclude('js/intro.js/intro.js'); ?>


<!-- Bootstrap core JavaScript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript">
    $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dashBoard();

        //introJs().setOption('showBullets', false).start();

    });
</script>
<?php echo $this->tag->javascriptInclude('js/behaviour/voice-commands.js'); ?>
<?php echo $this->tag->javascriptInclude('js/bootstrap/dist/js/bootstrap.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery.flot/jquery.flot.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery.flot/jquery.flot.pie.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery.flot/jquery.flot.resize.js'); ?>
<?php echo $this->tag->javascriptInclude('js/jquery.flot/jquery.flot.labels.js'); ?>
</body>
</html>
