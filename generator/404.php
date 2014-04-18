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
	<?php include __DIR__.'/ga.php'; ?>
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
					<a href="<?=$data['meta']['root_url']?>" class="btn btn-primary btn-block btn-lg"><i
						class="fa fa-home fa-fw"></i> Go home!</a>
				</div>
				<div class="col-xs-12 col-sm-6">
					<a href="<?=$data['meta']['root_url']?>#game"
						class="btn btn-default btn-block btn-lg"><i class="fa fa-gamepad fa-fw"></i> Go
						play a game!</a>
				</div>
			</div>
		</div>
	</article>
	<?php include __DIR__.'/footer.php'; ?>
</body>
</html>
