<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	# Author: 		Michael Rennie
	# Date:			
	#
	# Description: 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "JDT Debug Release Plan";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, release, plan";
	$pageAuthor		= "Debug Team";
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Overall  Plan</h3>
			
			<h4>Overall Themes for JDT Debug:</h4>
	        
	        <table>
				<tr> 
		          <td><img src="/eclipse/debug/images/defer.gif"> item is deferred</td>
		          <td> <img src="/eclipse/debug/images/progress.gif"> item is under development </td>
		          <td> <img src="/eclipse/debug/images/ok.gif" width="10" height="10"> item is finished </td>
		        </tr>
			</table>
	        <h4>Planned Items</h4>
	        <blockquote>	
			</blockquote>
			
			<h4>Deferred Items </h4>
	      	<blockquote>
	      	</blockquote>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="/eclipse/debug/documents.php">Articles & Documents</a></li>
				<li><a href="/eclipse/debug/get_involved.php">Get Involved!</a></li>
				<li><a href="/eclipse/debug/contribute.php">How To Contribute</a></li>
				<li><a href="/eclipse/debug/who.php">Who We Are</a></li>
				<li><a href="http://eclipse-debug.blogspot.com/">Debug Team Blog</a></li>
				<li><a href="/eclipse/debug/about.php">About this content</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Plugins</h6>
			<ul>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug" target="_blank">jdt.debug</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug.ui" target="_blank">jdt.debug.ui</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.launching" target="_blank">jdt.launching</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.launching.j9" target="_blank">jdt.launching.j9</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.launching.macosx" target="_blank">jdt.launching.macosx</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug.tests." target="_blank">jdt.debug.tests</a></li>
		        <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.debug.jdi.tests" target="_blank">jdt.debug.jdi.tests</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>