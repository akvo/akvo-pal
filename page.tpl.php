<?php
// $Id: page.tpl.php,v 1.28.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html>
<html lang="<?php print $language->language ?>">
<head>
    <?php print $head ?>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="<?php print base_path() . path_to_theme() .'/' ?>img/base/favicon.ico" />

	<title><?php print $head_title ?></title>

	<?php print $styles ?>
	<?php print $scripts ?>
	
	<script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
	
	<link rel="alternate" type="application/rss+xml" title="Blog entries" href="/blog/?feed=rss2" />
	<link rel="alternate" type="application/rss+xml" title="Project updates" href="/rsr/rss/all-updates" />
	
</head>
<body>
<div id="header">
	<div id="header_container" class="container">
	    <a href="/" id="main_nav_logo">
	        <span>
    		    <img src="<?php print $logo ?>"
    			    alt="<?php print $site_name ?>">
    			</img>
    		</span>
    	</a>
    	<?php if (isset($primary_links)) { ?>
    		<?php print theme('links', $primary_links, array('id' => 'main_nav')) ?>
    	<?php } ?>
	</div>
</div>

<div id="main_container" class="container">
	<div class="span-4 first">
		<?php if ($left) { ?>
  			<?php print $left ?>
		<?php } ?>
	</div>
	<div class="span-14 last">
		<div class="white_box">
			<div class="space20">
				<?php print $tabs ?>
				<?php print $content; ?>
			</div>
		</div>
		<?php 
		/* if ($show_messages) { print $messages; } ?>
        <?php print $help ?>
        
        <?php print $feed_icons; */ 
		?>
	</div>
	<div class="span-18" style="display:none;">
		<?php print $footer_message ?>
		<?php print $footer ?>
	</div>
	<?php print $closure ?>
</div>
<br />
<div id="footer">
	<div id="footer_container" class="container">
		<div class="span-18">
			<h2>About Akvo.org</h2>
			<p>
				We help donors and doers reach out to fund many thousands of new water and sanitation projects. Money flows quickly because donors choose what to fund and follow progress online. People can use these storylines to build exciting new campaigns and networks. Our partners lead the world in sharing updates using Akvo tools. Better feedback means happy donors, and dialogue between field workers builds skills and improves quality. Time and money are saved while people across the world get safe drinking water and proper sanitation.
			</p>
		</div>
		<div class="span-18">
			<div class="span-3 first">
				<h3>Policies</h3>
				<p class="small">
					<a href="/web/terms_of_use">Terms of use</a><br />
					<a href="/web/donation_policy">Donations</a><br />
					<a href="/web/partners_and_projects_policy">Partners</a><br />
					<a href="/web/user_contribution_policy">User Contribution Policy</a><br />
					<a href="/web/open_license">Akvo licensing and copyrights</a><br />
					<a href="/web/privacy_policy">Privacy</a><br />
					<a href="/web/akvo-rsr-api-code-of-conduct">Akvo RSR API Code of Conduct</a><br />
				</p>
			</div>
			<div class="span-3">
				<h3>About</h3>
				<p class="small">
					<a href="/web/what_we_do">What we do</a><br />
					<a href="/web/how_akvo_works">How Akvo works</a><br />
					<a href="/web/why_we_do_it">Why we do it</a><br />
					<a href="/web/faq">Akvo Frequently Asked Questions</a><br />
					<a href="/web/map_partners_projects">Map</a><br />
					<a href="/web/team">Team</a><br />
					<a href="/web/jobs">Working at Akvo</a><br />
					<a href="/web/press">Press</a><br />
					<a href="/web/annual_reports">Akvo annual reports & Articles of incorporation</a><br />
				</p>
			</div>
			<div class="span-3">
				<h3>Partners</h3>
				<p class="small">
					<a href="/web/partners">Strategic partners</a><br />
					<a href="/rsr/organisations/">Project partners</a><br />
					<a href="/web/commercial_partners">Commercial partners</a><br />
					<a href="/web/knowledge_institute_partners">Knowledge institute partners</a><br />
					<a href="/web/akvo_investors">Akvo investors</a><br />
				</p>
			</div>
			<div class="span-3">
				<h3>Developers</h3>
				<p class="small">
					<a href="/labs/index.php/Main_Page">Akvo Labs</a><br />
					<a href="http://github.com/akvo/">Source Code</a><br />
				</p>
			</div>
			<div class="span-3">
				<h3>Contact us</h3>
				<p class="small">
					<a href="http://help.akvo.org/">Help &amp; Support</a><br />
					<a href="/web/contact_us">Contact us</a><br />
				</p>
			</div>
			<div class="span-3">
				&nbsp;
			</div>
			<div class="span-3 last">

			</div>
		</div>
	</div>
</div>
	
	<?php /*
	<div id="footer_area">
		<div id="footer" class="container">
			<div class="span-14 first">
				<p class="grey small"> 
					Site content under
					<a href="/web/open_license">Open Licence</a> | 
					<a href="/web/terms_of_use">Terms of use</a> | 
					<a href="/web/privacy_policy">Privacy policy</a> | 
					<a href="/web/?q=user">Admin</a>
				</p>
			</div>
			<div class="span-4 last" style="text-align:right;">
				<p class="grey small"> 
					<a href="/web/contact">Contact us</a> 
				</p>
			</div>
		</div>
	</div>
	*/?>
<?php print $closure ?>
</body>
</html>