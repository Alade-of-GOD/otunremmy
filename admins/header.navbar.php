<?php
    session_start();
    if(!$_SESSION['id'])
    {
        header("Location: login.html");//redirect to login page to secure the welcome page without login access.
    }
    include ('phpfunc/alerts.php');
?>

<!DOCTYPE html>
<html lang="en-US"> <!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="otun-content/themes/voice/js/html5.js"></script>

	<title>otun writes &#8211; otunremmy blog</title>
	<link rel="shortcut icon" href="../otun-content/themes/voice/favicon.ico" type="image/x-icon" />
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel='stylesheet' href='admin.css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
<html>
<body class="glossed">
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42863888-4', 'pinsupreme.com');
    ga('send', 'pageview');

</script>
<div class="all-wrapper fixed-header left-menu">
    <div class="page-header">
        <div class="header-links hidden-xs">
            <div class="top-search-w pull-right">
                <input type="text" class="top-search" placeholder="Search"/>
            </div>
            <div class="dropdown hidden-sm hidden-xs">
                <a href="#" data-toggle="dropdown" class="header-link"><i class="fa fa-bolt"></i> Alerts <span class="badge alert-animated"><?php echo $_SESSION['newBroadCast']; ?></span></a>
                <ul class="dropdown-menu dropdown-inbar dropdown-wide">
                    <li><a href="profile.php#broadwidget"><span class="label label-warning"><?php echo $_SESSION['newBroadCast']." BC"; ?></span> <i class="fa fa-bell"></i>Received Broadcast</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a href="#" class="header-link clearfix" data-toggle="dropdown">
                    <div class="avatar">
                        <img src="../blog/otun-admin/authors/img/<?php echo $_SESSION['avatar'];?>" alt="">'
                    </div>
                    <div class="user-name-w">
                        <?php echo $_SESSION['userN'];?> <i class="fa fa-caret-down"></i>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-inbar">
                    <li><a href="#"><span class="label label-warning">2</span> <i class="fa fa-envelope"></i> Messages</a></li>
                    <li><a href="#"><span class="label label-warning">4</span> <i class="fa fa-users"></i> Friends</a></li>
                    <li><a href="profile.php"><i class="fa fa-cog"></i>Profile Account</a></li>
                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
      <a class="menu-toggler" href="#"><i class="fa fa-bars"></i></a>
</div>
<div class="side">
    <div class="sidebar-wrapper">
        <ul>
            <li>
                <a href="index.php" data-toggle="tooltip" data-placement="right" title="" data-original-title="Home">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li>
                <a href="profile.php#post" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add New Post">
                    <i class="fa fa-font"></i>
                </a>
            </li>
            <li>
                <a href="index.php#postview" data-toggle="tooltip" data-placement="right" title="" data-original-title="Posts">
                    <i class="fa fa-file-text-o"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="sub-sidebar-wrapper">
        <ul class="nav">
            <li><a href="index.php#statistics">Statistics</a></li>
            <li><a href="profile.php#broadwidget">New Broadcast</a></li>
        </ul>
    </div>
</div>
