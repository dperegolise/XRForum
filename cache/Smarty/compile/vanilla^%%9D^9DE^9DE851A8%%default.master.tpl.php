<?php /* Smarty version 2.6.29, created on 2017-02-03 16:07:25
         compiled from /var/www/html/forum/themes/bittersweet/views/default.master.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'asset', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 5, false),array('function', 'searchbox', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 71, false),array('function', 'dashboard_link', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 73, false),array('function', 'discussions_link', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 74, false),array('function', 'activity_link', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 75, false),array('function', 'inbox_link', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 76, false),array('function', 'custom_menu', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 77, false),array('function', 'profile_link', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 78, false),array('function', 'signinout_link', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 79, false),array('function', 'breadcrumbs', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 85, false),array('function', 'module', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 91, false),array('function', 'vanillaurl', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 99, false),array('function', 'event', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 104, false),)), $this); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../assets/css/APP_NAME-0.1.0.css">
    <?php echo smarty_function_asset(array('name' => 'Head'), $this);?>

     <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->
    <script type="text/javascript" src="../vendor/bootstrap.min.js"></script>
</head>
<body id="<?php echo $this->_tpl_vars['BodyID']; ?>
" class="<?php echo $this->_tpl_vars['BodyClass']; ?>
">
    <!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Donate</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Forum</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">Download</a>
                </li>
                <li>
                    <a class="page-scroll" href="#team">High Scores</a>
                </li>
                <li>
                    <a class="page-scroll" href="#main">News</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <img src="../assets/images/logo.png">
        </div>
    </div>
</header>
<div id="Frame">
    
    <div id="Head">
        <div class="Row">
            <div class="SiteSearch"><?php echo smarty_function_searchbox(array(), $this);?>
</div>
            <ul class="SiteMenu">
                <?php echo smarty_function_dashboard_link(array(), $this);?>

                <?php echo smarty_function_discussions_link(array(), $this);?>

                <?php echo smarty_function_activity_link(array(), $this);?>

                <?php echo smarty_function_inbox_link(array(), $this);?>

                <?php echo smarty_function_custom_menu(array(), $this);?>

                <?php echo smarty_function_profile_link(array(), $this);?>

                <?php echo smarty_function_signinout_link(array(), $this);?>

            </ul>
        </div>
    </div>
    <div class="BreadcrumbsWrapper">
        <div class="Row">
            <?php echo smarty_function_breadcrumbs(array(), $this);?>

        </div>
    </div>
    <div id="Body">
        <div class="Row">
            <div class="Column PanelColumn" id="Panel">
                <?php echo smarty_function_module(array('name' => 'MeModule'), $this);?>

                <?php echo smarty_function_asset(array('name' => 'Panel'), $this);?>

            </div>
            <div class="Column ContentColumn" id="Content"><?php echo smarty_function_asset(array('name' => 'Content'), $this);?>
</div>
        </div>
    </div>
    <div id="Foot">
        <div class="Row">
            <a href="<?php echo smarty_function_vanillaurl(array(), $this);?>
" class="PoweredByVanilla">Powered by Vanilla</a>
            <?php echo smarty_function_asset(array('name' => 'Foot'), $this);?>

        </div>
    </div>
</div>
<?php echo smarty_function_event(array('name' => 'AfterBody'), $this);?>

</body>
</html>