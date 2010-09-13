
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Planet Gentoo Archives</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="image/x-icon" href="/favicon.ico" rel="shortcut icon">
<link rel="stylesheet" href="/planet.css" type="text/css">
<link rel="alternate" type="application/rss+xml" title="Planet Gentoo" href="rss20.xml">
</head>

<body>
<table cellpadding="0" cellspacing="0" width="100%" border="0">
<tbody><tr>


<td class="logobox">
<a href="http://www.gentoo.org/"><img alt="Gentoo Logo" src="/images/gtop-s.jpg" width="193" height="88"></a><br>
<a href="http://www.gentoo.org/"><img alt="Gentoo Logo Side" src="/images/gbot-s.gif" width="193" height="31"></a>
</td>


<td class="linkbar">
<div class="menu">
<a href="http://www.gentoo.org/main/en/about.xml" class="menulink">About</a> |
          <a href="http://www.gentoo.org/proj/en/metastructure/projects.xml?showlevel=1" class="menulink">Projects</a> |
          <a href="http://www.gentoo.org/main/en/philosophy.xml" class="menulink">Philosophy</a> |
          <a href="http://www.gentoo.org/doc/en/index.xml" class="menulink">Docs</a> |
          <a href="http://forums.gentoo.org/" class="menulink">Forums</a> |
          <a href="http://www.gentoo.org/main/en/lists.xml" class="menulink">Lists</a> |
          <a href="http://bugs.gentoo.org/" class="menulink">Bugs</a> |
          <a href="http://www.cafepress.com/officialgentoo/" class="menulink">Store</a> |
          <a href="http://www.gentoo.org/news/en/gmn/" class="menulink">GMN</a> |
          <a href="http://www.gentoo.org/main/en/where.xml" class="menulink">Get Gentoo!</a> |
          <a href="http://www.gentoo.org/main/en/sponsors.xml" class="menulink">Sponsors</a>
</div></td>


</tr>
<tr>


<td class="leftmenu">
<img alt="Gentoo Spaceship" src="/images/gridtest.gif" align="right" height="96" width="132"><br clear="all"><br>

<div class='altmenu'>
<br>Bugs? Comments? Suggestions? Contact us:
<a href="mailto:planet@gentoo.org">planet@gentoo.org</a>

<br><br><b>Powered by:</b><br>
<a href="http://www.planetplanet.org/">Planet</a>

</div>
</td>


<td class="content">

<div id="intro">
<img src="/images/gentoo.gif"><p>Welcome to the <b>Planet Gentoo</b> archives.  Also available for <a href="http://planet.gentoo.org/universe/archives/">Gentoo Universe</a>.</p>
</div>

<?
	$scandir = scandir('./', 1);
	$scandir = preg_grep('/html$/', $scandir);
	
	echo "<ul>\n";
	foreach($scandir as $filename) {
		echo "<li> <a href='$filename'>$filename</a></li>\n";
	}
	echo "</ul>";
?>


</td></tr>


<tr><td colspan="2" class="footer">
Gentoo Design, Copyright 2001-2006 Gentoo Foundation, Inc.<br>
Views expressed in the content shown above do not necessarily represent the views of Gentoo Linux or the Gentoo Foundation.
</td></tr>
</tbody></table></body></html>
