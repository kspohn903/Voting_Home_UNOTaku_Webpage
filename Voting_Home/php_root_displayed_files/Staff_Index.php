<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<br />
<b>Notice</b>:  Constant IS_IN_SCRIPT already defined in <b>/home/ams9u54hy30j/public_html/Voting/header.php</b> on line <b>5</b><br />
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title><br />
<b>Notice</b>:  Undefined variable: pageTitle in <b>/home/ams9u54hy30j/public_html/Voting/header.php</b> on line <b>10</b><br />
</title>
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
<div id="content"><center><a href="https://unotaku.com/wordpress/wp-login.php?redirect_to=%2F%2Funotaku.com%2FVoting%2FStaff_Index.php&reauth=1">WordPress Login</a></center></div>
<!---End content--->
</div>
<!---End conentHolder--->
</body>
</html>