<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>ELF ~ Page not found</title>
<link rel="stylesheet" href="css/404.css">
<link
	href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
	rel="stylesheet">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<img src="http://httpcats.herokuapp.com/404">
				</div>
			</div>
		</div>
	</header>
	<article id="sec-err">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>Server not happy</h2>
				</div>
				<div class="col-xs-12 col-sm-6 col-sm-offset-3">
					<ul class="fa-ul">
						<li><i class="fa fa-search fa-li"></i> Server looking for
							interwebz kitteh.</li>
						<li><i class="fa fa-ban fa-li"></i> Kitteh not find.</li>
						<li><i class="fa fa-frown-o fa-li"></i> Server sad.</li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6">
					<a href="<?=$data['meta']['root_url']?>" class="go go-home"><i
						class="fa fa-home fa-fw"></i> Go home!</a>
				</div>
				<div class="col-xs-12 col-sm-6">
					<a href="<?=$data['meta']['root_url']?>#game"
						class="go go-play-a-game"><i class="fa fa-gamepad fa-fw"></i> Go
						play a game!</a>
				</div>
			</div>
		</div>
	</article>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<p>


					<div class="fb-like" data-colorscheme="dark"
						data-href="https://www.facebook.com/<?=$data['meta']['fb_account']?>"
						data-layout="standard" data-action="like" data-show-faces="true"
						data-share="true"></div>
					</p>
					<p>&copy; 2014 ELF!</p>
				</div>
				<div class="col-xs-6">
					<p>
						<a
							href="https://twitter.com/<?=$data['meta']['twitter_account']?>"
							target="_blank"><i class="fa fa-twitter fa-fw"></i> @<?=$data['meta']['twitter_account']?>
						</a>
					</p>
					<p>
						<a href="https://facebook.com/<?=$data['meta']['fb_account']?>"
							target="_blank"><i class="fa fa-facebook fa-fw"></i> /<?=$data['meta']['fb_account']?>
						</a>
					</p>
				</div>
			</div>
		</div>
	</footer>


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
	  js.src = "http://connect.facebook.net/en_GB/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>