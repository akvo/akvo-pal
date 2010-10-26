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
    <div class="span-18" style="margin-bottom:20px;">
        <div id="breadcrum_back">			
		    <?php print $breadcrumb ?>
		    <div class="clear"></div>
	    </div>
    </div>
    
	<div class="span-14 first">
		<div class="white_box">
			<div class="space20">
				<?php print $tabs ?>
				<?php print $content; ?>
			</div>
		</div>
	</div>
	<div class="span-4 last">
		<?php if ($right) { ?>
  			<?php print $right ?>
		<?php } ?>
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
			<div class="span-3 first">
				<h3>Policies</h3>
				<p class="small">
					<a href="/web/terms_of_use">General terms of use</a><br />
					<a href="/web/privacy_policy">Privacy</a><br />
					<a href="/web/donation_policy">Donations</a><br />
					<a href="/web/partners_and_projects_policy">Partners</a><br />
					<a href="/web/akvo-rsr-api-code-of-conduct">
						Akvo API code of conduct
					</a><br />
					<a href="/web/user_contribution_policy">User submitted content</a><br />	
					<a href="/web/open_license">Licensing and copyrights</a><br />
				</p>
			</div>
			<div class="span-3">
				<h3>About</h3>
				<p class="small">
					<a href="/web/about">About us</a><br />
					<a href="/web/how-it-works">How it works</a><br />
					<a href="/web/team">Team</a><br />
					<a href="/web/jobs">Working at Akvo</a><br />
					<a href="/web/faq">Akvo FAQ</a><br />
					<br />
					<a href="/web/press">Press</a><br />
					<a href="/web/annual_reports">Annual reports</a><br />
					<a href="/web/articles_of_incorporation">Articles of incorporation</a><br />											
				</p>
			</div>
			<div class="span-3">
				<h3>Partners</h3>
				<p class="small">
					<a href="/web/partners">Strategic</a><br />
					<a href="/rsr/organisations/">Project</a><br />
					<a href="/web/commercial_partners">Commercial</a><br />
					<a href="/web/knowledge_institute_partners">Knowledge institutes</a><br />
					<a href="/web/akvo_investors">Akvo investors</a><br />
				</p>
			</div>
			<div class="span-3">
				<h3>Developers</h3>
				<p class="small">
					<a href="/labs/">AkvoLabs</a><br />
					<a href="http://github.com/akvo/">Source code</a><br />
				</p>
			</div>
			<div class="span-3">
				<h3>Admin</h3>
				<p class="small">
					<a href="/rsr/admin">Akvo RSR login</a><br />
					<a href="/blog/wp-login.php">Blog</a><br />
					<a href="/web/?q=node/24">CMS</a><br />
				</p>
			</div>
			<div class="span-3 last">
				<h3>Contact us</h3>
				<p class="small">
					<a href="http://help.akvo.org/">Help + support</a><br />
					<a href="/web/contact_us">Contact info</a><br />
					<br />
					<a class="red" href="http://help.akvo.org/discussion/new">Report a problem</a><br />
				</p>
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