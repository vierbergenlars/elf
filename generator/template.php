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
<title>ELF! ~ Engineer Liberation Front</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://microformats.org/profile/hcalendar">

<link rel="stylesheet" href="css/main.css">
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
					<li><a href="#team">Team</a></li>
					<li><a href="#prog">Programma</a></li>
					<li><a href="#act">Activiteiten</a></li>
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
						<a href="#team"> Team</a>
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
						<a href="#prog">Programma</a>
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
						<a href="#act">Activiteiten</a>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="row activity-list">
						<div class="col-xs-12 vevent" data-location="50.874799,4.708097">
							<h3 class="summary">Azamat</h3>
							<p>
								<time class="dtstart" datetime="2014-04-01T08:30+02:00">Di 1/4 @ 8:30</time> - <time class="dtend" datetime="2014-04-01T12:00+02:00">12:00</time>
							</p>
							<p class="description">I had no car, no money, and no Azamat. The only thing
								keeping me going was my dream of one day holding Pamela in my
								arms and then making romantic explosion on her stomach.</p>

						</div>
						<div class="col-xs-12 vevent" data-location="50.8783735,4.707421">
							<h3 class="summary">Greatest country</h3>
							<p>
								<time class="dtstart" datetime="2014-04-09T20:00+02:00">Wo 9/4 @ 20:00</time> - <time class="dtend" datetime="2014-04-10T05:00+02:00">Do 10/4 @ 05:00</time>
							</p>

							<p class="description">Kazakhstan is the greatest country in the world. All other
								countries are run by little girls. Kazakhstan is number one
								exporter of potassium. Other Central Asian countries have
								inferior potassium. Kazakhstan is the greatest country in the
								world. All other countries is the home of the gays.</p>
						</div>
						<div class="col-xs-12 vevent" data-location="50.8784772,4.7115124">
							<h3 class="summary">Korki</h3>
							<p>
								<time class="dtstart" datetime="2014-04-14T10:00+02:00">Ma 14/4 @ 10:00</time> - <time class="dtend" datetime="2014-04-14T15:00+02:00">15:00</time>
							</p>
							<p class="description">I, uh, like a very much Korki Buchek. You know Korki
								Buchek? Bing-bang-bing-bang-bing-dl-dl-ding-ding *click* *click*
								*click-click* bing-bang-bing-bang-bing-dl-dl-ding-ding *click*
								*click*</p>
						</div>
						<div class="col-xs-12 vevent" data-location="50.8738797,4.7098243">
							<h3 class="summary">Woman</h3>
							<p>
								<time class="dtstart" datetime="2014-04-14T12:00+02:00">Ma 14/4 @ 14:00</time> - <time class="dtend" datetime="2014-04-14T18:00+02:00">18:00</time>
							</p>
							<p class="description">In Kazakhstan, it is illegal for more than five woman to
								be in the same place except for in brothel or in grave. In US
								and A, many womens meet in a groups called feminists.</p>
						</div>
						<div class="col-xs-12 vevent" data-location="50.8738797,4.7098243">
							<h3 class="summary">Always party</h3>
							<p>
								<time class="dtstart" datetime="2014-04-10T20:06+02:00">Now</time> - <time class="dtend" datetime="2020-01-01T00:00+02:00">2020</time>
							</p>
							<p class="description">
								Party, always.
								I like!
							</p>
						</div>
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
				<div class="col-xs-12">Footer</div>
			</div>
		</div>
	</footer>

	<script src="js/vendor/jquery-1.11.0.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/jquery.scrollTo.min.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbtcKJ6eM2yF8SS6E5j5wVUnoSmMc93-E&sensor=true"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<!-- <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->
</body>
</html>
