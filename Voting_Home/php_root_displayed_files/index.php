<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>UNOtaku Anime Voting Login!</title>
<script src="https://code.jquery.com/jquery-1.9.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.1.1.js"></script>
<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
<script src="scripts/jquery.maskedinput-1.3.min.js?cachebreak=01-18-2015" type="text/javascript"></script>
<script src="scripts/jquery.scombobox.js?cachebreak=01-18-2015" type="text/javascript"></script>
<script type="text/javascript" src="scripts/Voting.js?cachebreak=01-18-2015"></script> 
<script type="text/javascript" src="scripts/general.js?cachebreak=01-18-2015"></script> 
<link rel="stylesheet" type="text/css" href="styles/anime.css?cachebreak=02-04-2016" />
<link rel="stylesheet" type="text/css" href="styles/jquery.scombobox.min.css?cachebreak=01-18-2015" />
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.11.2/themes/ui-darkness/jquery-ui.css" />
<style>
#top {
background-image: url('images/top-middle.png');}
.reverse {
	-moz-transform: scaleX(-1); /* Gecko */
	-o-transform: scaleX(-1); /* Operah */
	-webkit-transform: scaleX(-1); /* webkit */
	transform: scaleX(-1); /* standard */
	filter: FlipH; /* IE 6/7/8 */
}
</style>
</head>
<body>
<div id="top">
	<div id="topRight">
		<ul class="dropMenu">
			<li><a href="https://unotaku.com/wordpress">UNOtaku</a>
				<ul>
					<li><a href="https://unotaku.com/wordpress" title="UNOtaku Home">UNOtaku Home</a></li>
					<li><a href="http://www.facebook.com/pages/UNOtaku-Anime-Club/202429979777139">Facebook</a></li>
					<li><a href="https://unotaku.com/wordpress/?page_id=28" title="Member Bios">Member Bios</a></li>
					<li><a href="https://unotaku.com/wordpress/?page_id=11" title="日本語">日本語</a></li>
				</ul>
			</li>
			<li><a href="index.php">Voting</a>
				<ul>
					<li><a href="index.php">Voting Home</a></li>
					<li><a href="Voting_Total.php">Leaderboard</a></li>
					<li><a href="Voting_Random.php">Random Pick</a></li>
					<li><a href="Voting_Stats.php">Statistics</a></li>
				</ul>
			</li>
						<li><a href="Staff_Index.php">Staff Login</a><li>
									<!--<li><a href="" onclick="toggleCookie('unflip','true',7);" class="reverse">Flip</a></li>-->
		</ul>
	</div>
	<div id="topLeft">
	<div id="curVotes"><table></table></div>
	<div id="error"></div>
	</div>
	<div style="clear: both;"></div>
</div>

<div id="contentHolder">
<div id="content">
<div id="login">
	<div style="background-color: #6666aa; color: #ffffff; margin: 15px; text-align: left;">
		<ul>
			<li>Enter a (user) name below to begin voting for tonights anime.</li>
			<li>Left side of the top bar shows your current anime selection.</li>
			<li>Once done you may leave the page. Voting is instant, no need to 'submit'.</li>
			<li>For further help and information: 
				<a href="https://www.facebook.com/pages/UNOtaku-Anime-Club/202429979777139">Unotaku Facebook</a>, 
				<a href="https://www.facebook.com/picano">Your all powerful, all knowing, infinitely lazy webmaster</a>
			</li>
		</ul>
	</div>

	<table id="tblAnnouncement" style="width: 100%;">
		<tr>
			<td>
				
					<div id="divVoteNotice" style="color: #000000; margin: 15px; text-align: left; height: 400px;">
					<div style="text-align: center;"><a href="http://picanogfx.unotaku.com/3D-wallpapers.php?wall=357" style="text-decoration: none;">
<img src="//picanogfx.unotaku.com/graphics/Renders/Wallpapers/Cyan-1280x800.png" height="200" />
</a>
</div>

<div style="font-size: 2em; background: white none repeat scroll 0% 0%; font-weight: bold; margin: auto; display: block; text-align: center;"><!--We'll meet in <a href="http://www.unomaha.edu/maps/docs/uno-visitors-map-2013-8.pdf">Allwine Hall</a> 303 while the Milo Bail Student Center is under construction.--><span style="font-weight: bold;"><span style="font-weight: normal;"> </span><span style="font-weight: normal;">School hours 6PM to 10PM.
Meeting in Milo Bail 222, please note electronic signs for changes.
</span></span></div>
<style type="text/css">
#divVoteNoticeq
{
background:url('https://25.media.tumblr.com/tumblr_lu1stgOGj91r0d8weo1_400.jpg');
height: 350px;
}
</style><div style="text-align: center;"></div>
					</div>
								</td>
			<td>
				<iframe src="https://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FUNOtaku.club&width=600&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=435" 
				scrolling="yes" allowtransparency="true" frameborder="0" style="width: 500px; height: 400px;"></iframe>
			</td>
		</tr>
	</table>

	<br /><br />
	
	<hr />

	<table width="100%" >
		<tr>
			<th style="text-align: center;">Standard Login (3 vote(s))</th>
			<!--<th style="text-align: center;">Wordpress Login (3 vote(s))</th>-->
		</tr>
		<td colspan="2">
			<hr />
		</td>
		<tr>
			<td style="text-align: center; vertical-align: top;">
				<div style="margin-left: auto; margin-right: auto; width: 300px;">

					<form action="Voting_Anime.php" method="POST" id="frmGuestVoting">
						<div>Your (nick)name</div>
						<br />
						<input type="text" name="Name" id="LoginName"  stle="width: 100%"; />
						<br />
						<input type="submit" value="Start Voting!" onClick="return checkLogin();" />
											</form>

					<img src="images/ToukaSlash.gif" style="padding-top: 10px;" />
				</div>
			</td>
			<td style="text-align: center;  vertical-align: top;">
				<div style="margin-left: auto; margin-right: auto; width: 300px;">
										<a href="https://unotaku.com/wordpress/wp-login.php?redirect_to=https%3A%2F%2Funotaku.com%2FVoting&reauth=1">WordPress Login</a>
					 
					 
									</div>
			</td>
		</tr>
	</table>


	<hr />
	
	<div align="center">
		<a href="Voting_Anime.php">View anime list without voting.</a>
	</div>

	<br />
	<br />

</div>
<!---End content--->
</div>
<!---End conentHolder--->
</body>
</html>