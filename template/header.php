<html lang="en">

<head>
    <?php
    error_reporting(0);
    $baseurl = 'http://localhost/our';
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Our Church is a premium HTML5 Church Website Template with Responsive design. Church Template includes many <?= $baseurl ?>/pages like Bulletin, Programs, events, sermons, ministries, working church contact form etc..">
    <meta name="keywords"
        content="Church, Website, Template, Bulletin, Programs, Events, Themeforest, Premium, Charity, Non Profit ">
    <meta name="author" content="Surjith SM">
    <title>Church Website Template - Our Church Responsive HTML5</title>

    <script src="../../cdn-cgi/apps/head/C484em-bjcyOw4grJ6SRyHJ29c8.js"></script>
    <link href="<?= $baseurl ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= $baseurl ?>/assets/css/church.css" rel="stylesheet">
    <link href="<?= $baseurl ?>/assets/css/fancybox.css" rel="stylesheet">

    <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

    <link rel="shortcut icon" href="<?= $baseurl ?>/pages//favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span
                        class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="<?= $baseurl ?>/pages/index-2.php"> <img
                        src="<?= $baseurl ?>/assets/images/church-logo.png" alt="church logo"
                        class="img-responsive"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-left" role="menu">
                            <li><a href="/pages/index-2.php">Home Default</a></li>
                            <li><a href="/pages/index-slider-alt.php">Home Animated Slider</a></li>
                        </ul>
                    </li> -->
                    <li class="active"><a href="<?= $baseurl;?>">HOME</a></li>
                    <li><a href="<?= $baseurl ?>/pages/about.php">ABOUT</a></li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">MINISTRY <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-left" role="menu">
                            <li><a href="<?= $baseurl ?>/pages/ministry.php">Childrens Ministry</a></li>
                            <li><a href="<?= $baseurl ?>/pages/ministry.php">Students Ministry</a></li>
                            <li><a href="<?= $baseurl ?>/pages/ministry.php">Groups</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERMONS <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-left" role="menu">
                            <li><a href="<?= $baseurl ?>/pages/sermons.php">Christ-Occupied</a></li>
                            <li><a href="<?= $baseurl ?>/pages/sermons.php">God's Love</a></li>
                            <li><a href="<?= $baseurl ?>/pages/sermons.php">Faithfulness</a></li>
                            <li><a href="<?= $baseurl ?>/pages/sermons.php">Praise Him</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">pages <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-left" role="menu">
                            <li><a href="<?= $baseurl ?>/pages/image-gallery.php">Image Gallery</a></li>
                            <li><a href="<?= $baseurl ?>/pages/video-gallery.php">Video Gallery</a></li>
                            <li><a href="<?= $baseurl ?>/pages/blog.php">Blog list</a></li>
                            <li><a href="<?= $baseurl ?>/pages/blog-single.php">Blog Single</a></li>
                            <li><a href="<?= $baseurl ?>/pages/events-programs.php">Events &amp; Programs</a></li>
                            <li><a href="<?= $baseurl ?>/pages/event-single.php">Event Single</a></li>
                            <li><a href="<?= $baseurl ?>/pages/event-calendar.php">Event Calendar</a></li>
                            <li><a href="<?= $baseurl ?>/pages/charity-donation.php">Charity &amp; Donations</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">OTHER pages</li>
                            <li><a href="<?= $baseurl ?>/pages/prayers.php">Prayers</a></li>
                            <li><a href="<?= $baseurl ?>/pages/faq.php">FAQ</a></li>
                            <li><a href="<?= $baseurl ?>/pages/shortcodes.php">Shortcodes</a></li>
                            <li><a href="<?= $baseurl ?>/pages/full-width.php">Full Width</a></li>
                            <li><a href="<?= $baseurl ?>/pages/left-sidebar.php">Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= $baseurl ?>/pages/contact.php">CONTACT</a></li>
                    <li><a href="<?= $baseurl ?>/pages/display.php">VIEW</a></li>
                </ul>
            </div>
        </div>
    </div>