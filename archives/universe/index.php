
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Gentoo Universe Archives</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="image/x-icon" href="/favicon.ico" rel="shortcut icon">
<link rel="stylesheet" href="/planet.css" type="text/css">
<link rel="alternate" type="application/rss+xml" title="Planet Gentoo" href="rss20.xml">
</head>

<body>
<table cellpadding="0" cellspacing="0" width="100%" border="0">
<tbody><tr>


<td class="logobox">
<a href="https://www.gentoo.org/"><img alt="Gentoo Logo" src="/images/gtop-s.jpg" width="193" height="88"></a><br>
<a href="https://www.gentoo.org/"><img alt="Gentoo Logo Side" src="/images/gbot-s.gif" width="193" height="31"></a>
</td>


<td class="linkbar">
<div class="menu">
<a href="https://www.gentoo.org/get-started/about/" class="menulink">About</a> |
          <a href="https://wiki.gentoo.org/wiki/Project:Gentoo" class="menulink">Projects</a> |
          <a href="https://www.gentoo.org/support/documentation" class="menulink">Docs</a> |
          <a href="https://forums.gentoo.org/" class="menulink">Forums</a> |
          <a href="https://www.gentoo.org/get-involved/mailing-lists/" class="menulink">Lists</a> |
          <a href="https://bugs.gentoo.org/" class="menulink">Bugs</a> |
          <a href="https://www.gentoo.org/downloads/" class="menulink">Get Gentoo!</a> |
          <a href="https://www.gentoo.org/support/" class="menulink">Support</a> |
          <a href="https://wiki.gentoo.org/wiki/Main_Page" class="menulink">Wiki</a> |
          <a href="https://planet.gentoo.org/" class="menulink">Planet</a>
</div></td>


</tr>
<tr>


<td class="leftmenu">
<img alt="Gentoo Spaceship" src="/images/gridtest.gif" align="right" height="96" width="132"><br clear="all"><br>

<div class='altmenu'>
<br>Bugs? Comments? Suggestions? <a href="https://wiki.gentoo.org/wiki/Project:Planet">Contact us!</a>

<br><br><b>Powered by:</b><br>
<a href="http://www.intertwingly.net/code/venus/">Planet Venus</a>

</div>
</td>


<td class="content">

<div id="intro">
<img src="/images/gentoo.gif"><p>Welcome to the <b>Gentoo Universe</b> archives.  Also available for <a href="http://planet.gentoo.org/archives/">Planet Gentoo</a>.</p>
</div>

<?php
	$scandir = scandir('./', 1);
	echo "<ul>";
	foreach ($scandir as $curdir) {
		if ( substr($curdir,0,5) == "index" || $curdir == ".." || $curdir == "." ) continue;
		$cscan = scandir('./' . $curdir, 1);
		foreach($cscan as $filename) {
			if ( $filename == "." || $filename == ".." ) continue;
			echo "<li> <a href='$curdir/$filename'>$filename</a></li>\n";
		}
	}
	echo "</ul>";
?>

</td></tr>


<tr><td colspan="2" class="footer">
Gentoo Design, Copyright 2001-2018 Gentoo Foundation, Inc.<br>
Views expressed in the content shown above do not necessarily represent the views of Gentoo Linux or the Gentoo Foundation.
</td></tr>
</tbody></table></body></html>
