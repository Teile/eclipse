<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2009-06-09
	#
	# Description: Eclipse project IP log main page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Project IP Logs";
	$pageKeywords	= "eclipse, IP, intellectual property";
	$pageAuthor		= "";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<p>Eclipse projects are required to maintain intellectual property (IP) logs for each release. This page
		contains all such logs for the <a href="http://eclipse.org/eclipse">Eclipse</a> top-level project. For
		more details on IP logs, see the <a href="http://www.eclipse.org/projects/dev_process/project-log.php">
		Eclipse Development Process</a> documentation.</p>
		<div class="homeitem3col">
			<h3>Current IP Log</h3>
			<p>To see a draft IP log for the Eclipse project release currently under development,
			view the <a href="http://www.eclipse.org/projects/ip_log.php?projectid=eclipse.platform,eclipse.jdt,eclipse.pde">auto-generated IP log</a>.
			Note the auto-generated log has not been reviewed for accuracy or approved by the Eclipse Foundation legal team.
		</div>
		<div class="homeitem3col">
			<h3>e4 IP Logs</h3>
			<p>IP log files for the e4 sub-project are found <a href="http://eclipse.org/e4/development/ip-logs/">here</a>.</p>
		</div>
		<div class="homeitem3col">
			<h3>IP Logs For Past Reviews</h3>
			<p>The following are approved IP logs for past Eclipse project reviews.</p>
			<ul>
				<li><a href="eclipse-project-4.2-log.html">Eclipse project Juno release (3.8 and 4.2)</a></li>
				<li><a href="eclipse-platform-ua-restructuring-log.pdf">Eclipse Platform User Assistance restructuring review (Feb 2012)</a></li>
				<li><a href="eclipse_project_3_7_log.pdf">Eclipse project Indigo release (3.7 and 4.1)</a></li>
				<li><a href="eclipse_4_0_log.pdf">Eclipse platform 4.0 release</a></li>
				<li><a href="eclipse_e4_move_review_20100630.pdf">e4 to Platform move review, June 2010</a></li>
				<li>Helios (3.6): 
					<a href="eclipse_platform_3_6_log.pdf">Platform</a>,
					<a href="eclipse_jdt_3_6_log.pdf">JDT</a>,
					<a href="eclipse_pde_3_6_log.pdf">PDE</a>
				</li>
				<li><a href="eclipse_project_3_5_log.html">Galileo (3.5)</a></li>
				<li><a href="eclipse_project_3_4_log.html">1.0 to 3.4</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h2>Orion project logs</h2>
			<p>The Orion project conducts releases independently from the rest of the Eclipse top-level projects.
			IP logs for the Orion project are found below.</p>
			<h4>Current IP Log</h4>
			<p>To see a draft IP log for the Eclipse project release currently under development,
			view the <a href="http://www.eclipse.org/projects/ip_log.php?projectid=eclipse.orion">auto-generated IP log</a>.
			Note the auto-generated log has not been reviewed for accuracy or approved by the Eclipse Foundation legal team.
			<h4>IP Logs For Past Releases</h4>
			<ul>
				<li><a href="eclipse-orion-0-4-log.html">Orion 0.4 release</a></li>
				<li><a href="eclipse-orion-0-3-log.pdf">Orion 0.3 release</a></li>
				<li><a href="eclipse-orion-creation-release-0-2-log.pdf">Orion creation and 0.2 release</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
