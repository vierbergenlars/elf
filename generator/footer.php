	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<p><div class="fb-like" data-colorscheme="dark" data-href="https://www.facebook.com/<?=$data['meta']['fb_account']?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div></p>
					<p>&copy; 2014 ELF!</p>
				</div>
				<div class="col-xs-6">
					<p>
						<a
							href="https://twitter.com/<?=$data['meta']['twitter_account']?>" target="_blank"><i
							class="fa fa-twitter fa-fw"></i> @<?=$data['meta']['twitter_account']?>
						</a>
					</p>
					<p>
						<a href="https://facebook.com/<?=$data['meta']['fb_account']?>" target="_blank"><i
							class="fa fa-facebook fa-fw"></i> /<?=$data['meta']['fb_account']?> </a>
					</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- Facebook SDK -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "http://connect.facebook.net/en_GB/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
