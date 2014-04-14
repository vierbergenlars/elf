<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>ELF! ~ Working our magic</title>
<meta name="description" content="<?=$data['meta']['description']?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="profile" href="http://microformats.org/profile/hcalendar">
<!-- Facebook graph metadata -->
<meta property="og:title" content="ELF!">
<meta property="og:type" content="website">
<meta property="og:image" content="<?=$data['meta']['root_url']?>img/elf-social.png">
<meta property="og:description" content="<?=$data['meta']['description']?>">
<meta proptery="fb:admins" content="<?=$data['meta']['fb_admins']?>">

<!-- Twitter cards metadata -->
<meta property="twitter:card" content="summary">
<meta property="twitter:title" content="ELF!">
<meta property="twitter:description" content="<?=$data['meta']['description']?>">
<meta property="twitter:image" content="<?=$data['meta']['root_url']?>img/elf-social.png">
<meta property="twitter:site" content="<?=$data['meta']['twitter_account']?>">

<link rel="stylesheet" href="css/main.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<!-- <link rel="stylesheet/less" href="less/main.less">
<script src="js/vendor/less-1.7.0.min.js"></script> -->

<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body id="top" data-spy="scroll" data-target="#main-navigation">
	<!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#main-navigation">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#top">ELF!</a>
			</div>
			<div class="collapse navbar-collapse" id="main-navigation">
				<ul class="nav navbar-nav">
					<li><a href="#team"><?=$data['title']['team']?></a></li>
					<li><a href="#prog"><?=$data['title']['prog']?></a></li>
					<li><a href="#act"><?=$data['title']['act']?></a></li>
				</ul>
			</div>
		</div>

	</nav>
	<header>
		<table><!-- Sorry, I had to :( -->
			<tr>
				<td><img class="header-logo" src="img/elf-header.png"></td>
			</tr>
		</table>
		<h1 class="sr-only">ELF! <small>Working our magic</small></h1>
	</header>
	<article id="sec-team">
		<div class="anchor-position-fixer" id="team"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>
						<a href="#team"><?=$data['title']['team']?></a>
					</h2>
				</div>
			</div>
			<div class="row">
				<?php foreach($data['teams'] as $id=>$team) { ?>
					<div class="col-xs-12 col-sm-6 col-md-4 team-pic-<?=$id;?> team-pic">
						<div class="flip-container row">
							<div class="flipper">
								<div class="flip-frontside col-xxs-12 col-xs-6 col-sm-12">
								<h3><?=$team['title'];?></h3>
								</div>
								<div class="flip-backside col-xxs-12 col-xs-6 col-sm-12">
									<h3><?=$team['names'];?></h3>
									<?=$team['text']; ?>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</article>

	<article id="sec-prog">
		<div class="anchor-position-fixer" id="prog"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>
						<a href="#prog"><?=$data['title']['prog']?></a>
					</h2>
				</div>
			</div>
			<div class="row">
				<?php foreach($data['prog'] as $num=>$p) { $num++;?>
					<div class="col-xxs-12 col-xs-6 col-sm-4 col-md-3">
						<p><?=$p;?></p>
					</div>
					<?php if($num%2 == 0) { ?>
						<div class="clearfix visible-xs"></div>
					<?php } ?>
					<?php if($num%3 == 0) { ?>
						<div class="clearfix visible-sm"></div>
					<?php } ?>
					<?php if($num%4 == 0) { ?>
						<div class="clearfix visible-md"></div>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	</article>

	<article id="sec-act">
		<div class="anchor-position-fixer" id="act"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>
						<a href="#act"><?=$data['title']['act']?></a>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="row activity-list">
						<?php foreach($data['act'] as $act) { ?>
							<div class="col-xs-12 vevent" data-location="<?=$act['location']?>">
								<h3 class="summary"><?=$act['title']?></h3>
								<p>
								<?php list($start_fmt, $end_fmt) = format_activity_date($act, $data) ?>
									<time class="dtstart" datetime="<?=$act['start']->format('Y-m-d\TH:i')?>+02:00"><?=$start_fmt?></time> - <time class="dtend" datetime="<?=$act['end']->format('Y-m-d\TH:i')?>+02:00"><?=$end_fmt?></time>
								</p>
								<p class="description"><?=$act['desc']?></p>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="col-sm-6">
					<div>
						<div id="map-canvas"></div>
					</div>
				</div>
			</div>
		</div>
	</article>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<p>&copy; 2014 ELF!</p>
					<p><div class="fb-like" data-href="https://www.facebook.com/<?=$data['meta']['fb_account']?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div></p>
				</div>
				<div class="col-xs-6">
					<p>
						<a
							href="https://twitter.com/<?=$data['meta']['twitter_account']?>"><i
							class="fa fa-twitter"></i> @<?=$data['meta']['twitter_account']?>
						</a>
					</p>
					<p>
						<a href="https://facebook.com/<?=$data['meta']['fb_account']?>"><i
							class="fa fa-facebook"></i> /<?=$data['meta']['fb_account']?> </a>
					</p>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/vendor/jquery-1.11.0.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/jquery.scrollTo.min.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbtcKJ6eM2yF8SS6E5j5wVUnoSmMc93-E&sensor=true"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>

	<!-- Google analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-49996245-1', 'vierbergenlars.github.io');
	  ga('send', 'pageview');
	</script>
	<!-- Facebook SDK -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
