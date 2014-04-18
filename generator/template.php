<?php include __DIR__.'/header.php'; ?>
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
					<?php foreach($data['title'] as $anchor=>$title) { ?>
					<li><a href="#<?=$anchor?>"><?=$title?> </a></li>
					<?php } ?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php foreach($data['languages'] as $name=>$link) {?>
					<li><a href="<?=$link;?>"><?=$name?> </a></li>
					<?php } ?>
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
					<div class="col-xxs-12 col-xs-6 col-sm-4">
						<h3><?=$p['title']?></h3>
						<?=$p['text'];?>
					</div>
					<?php if($num%2 == 0) { ?>
						<div class="clearfix visible-xs"></div>
					<?php } ?>
					<?php if($num%3 == 0) { ?>
						<div class="clearfix hidden-xs"></div>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	</article>
	<article id="sec-game">
		<div class="anchor-position-fixer" id="game"></div>
		<div class="game-2048 game-container">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<button class="btn btn-default btn-block btn-lg expand-game"
							data-toggle="collapse" data-target="#game-2048">
							<?=$data['game']['play_2048']?>
						</button>
					</div>
				</div>
			</div>
			<div class="collapse" id="game-2048">
				<iframe src="2048/index.html" class="gameframe"></iframe>
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
								<h3 class="summary"><?=$act['title']?>&emsp;<a href="https://facebook.com/events/<?=$act['fb_id']?>/" title="To facebook event" target="_blank"><i class="fa fa-facebook-square"></i></a></h3>
								<p class="time">
								<?php list($start_fmt, $end_fmt) = format_activity_date($act, $data) ?>
									<i class="fa fa-clock-o fa-fw"></i> <time class="dtstart" datetime="<?=$act['start']->format('Y-m-d\TH:i')?>+02:00"><?=$start_fmt?></time> - <time class="dtend" datetime="<?=$act['end']->format('Y-m-d\TH:i')?>+02:00"><?=$end_fmt?></time>
								</p>
								<p class="location"><i class="fa fa-map-marker fa-fw"></i> <?=$act['location_text']?></p>
								<div class="description"><?=$act['desc']?></div>
							</div>
						<?php } ?>
							<div class="col-xs-12 vevent">
								<p>Activiteiten in de kiesweek binnenkort beschikbaar</p>
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

	<?php include __DIR__.'/footer.php'; ?>
	<script src="js/vendor/jquery-1.11.0.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/jquery.scrollTo.min.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbtcKJ6eM2yF8SS6E5j5wVUnoSmMc93-E&sensor=true"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
