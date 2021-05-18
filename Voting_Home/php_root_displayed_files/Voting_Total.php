<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>UNOtaku Voting Totals</title>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="scripts/jquery.maskedinput-1.4.1.min.js?cachebreak=01-18-2015" type="text/javascript"></script>
<script src="scripts/jquery.scombobox.js?cachebreak=01-18-2015" type="text/javascript"></script>
<script type="text/javascript" src="scripts/Voting.js?cachebreak=01-18-2015"></script> 
<script type="text/javascript" src="scripts/general.js?cachebreak=01-18-2015"></script> 
<link rel="stylesheet" type="text/css" href="styles/anime.css?cachebreak=02-04-2016" />
<link rel="stylesheet" type="text/css" href="styles/jquery.scombobox.min.css?cachebreak=01-18-2015" />
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/ui-darkness/jquery-ui.css" />
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

<table id="animeTable" width="100%">
	<tr>
		<th>Anime</th><th>(+)</th><th>(-)</th><th>Total</th><th>Last Ep</th>
	</tr>
	<!--<tr>
		<td>VOTING IS RIGGED!</td>
		<td>(Hidden)</td>
		<td>-&#8734;</td>
		<td>(Hidden)</td>
		<td>Eh?</td>
	</tr>-->
	</table>

<table id="voterTable" width="100%">
	<tr>
		<th>Voter</th><th>Votes</th>
	</tr>
	<tr><td><b>Total voters: 0</b></td><td><b>Total votes: 0</b></td></tr>
</table>

</div>
<!---End content--->
</div>
<!---End conentHolder--->
</body>
</html>