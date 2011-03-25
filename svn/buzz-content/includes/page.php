<div id="stripe"></div>
<div id="shift">
<?php echo $header_main->draw('alpha'); ?>
<?php echo $top_header->draw('alpha'); ?>
        <?php echo $logo->draw('alpha'); ?>
            <h1>Buzzedword</h1>
        <?php echo $logo->draw('omega'); ?>
        <?php echo $navigation_links->draw('alpha'); ?>
            <ul class="omega">
                <li class="curved"><a href="<?php echo ((html5) ? '/?modern=1&amp;page=home.php' : '/?modern=0&amp;page=home.php'); ?>" title="Home">Home</a></li>
                <li class="curved"><a href="<?php echo ((html5) ? '/?modern=1&amp;page=about.php' : '/?modern=0&amp;page=about.php'); ?>" title="About">About</a></li>
				<li class="curved"><a href="<?php echo ((html5) ? '/?modern=1&amp;page=blog.php' : '/?modern=0&amp;page=blog.php'); ?>" title="Blog">Blog</a></li>
				<li class="curved"><a href="<?php echo ((html5) ? '/?modern=1&amp;page=skills.php' : '/?modern=0&amp;page=skills.php'); ?>" title="Skills">Skills</a></li>
				<li class="curved"><a href="<?php echo ((html5) ? '/?modern=1&amp;page=profile.php' : '/?modern=0&amp;page=profile.php'); ?>" title="Profile">Profile</a></li>
                <li class="curved omega"><a href="<?php echo ((html5) ? '/?modern=1&amp;page=contact.php' : '/?modern=0&amp;page=contact.php'); ?>" title="Contact">Contact</a></li>
            </ul>
        <?php echo $navigation_links->draw('omega'); ?>
    <?php echo $top_header->draw('omega'); ?>
<?php echo $header_main->draw('omega'); ?>
<?php echo $main->draw('alpha'); ?>
    <?php echo $center_content->draw('alpha'); ?>
      <?php require_once($page->draw()); echo "\n"; ?>
    <?php echo $center_content->draw('omega'); ?>
	<?php echo $footer->draw('alpha'); ?>
		<?php echo $column_main->draw('alpha'); ?>
			&nbsp;
		<?php echo $column_main->draw('omega'); ?>
		<?php echo $column_main->draw('alpha'); ?>
			&nbsp;
		<?php echo $column_main->draw('omega'); ?>
		<?php echo $column_main->draw('alpha'); ?>
			&nbsp;
		<?php echo $column_main->draw('omega'); ?>
	<?php echo $footer->draw('omega'); ?>
  <?php echo $main->draw('omega'); ?>
  <?php echo $footer_main->draw('alpha'); ?>
	<?php if (html5): ?>
		<p>
			<a href="http://validator.w3.org/check?uri=referer">
				<img src="http://www.w3.org/QA/Tools/I_heart_validator_lg"
					alt="Valid HTML 5" height="31" width="88" />
			</a>
		</p>			
		<?php else: ?>
		<p>
			<a href="http://validator.w3.org/check?uri=referer">
				<img src="http://www.w3.org/Icons/valid-xhtml10"
					alt="Valid XHTML 1.0 Strict" height="31" width="88" />
			</a>
		</p>
	<?php endif; ?>
	<small class="php">
	<?php
		$time2 = round(microtime(), 3);
		$generation = $time2 - $time;
		echo "This page took $generation seconds to render";
	?>
	</small><br />
	<small class="php">
		<a href="http://code.google.com/p/buzzedword-hue/source/browse/#svn/trunk" title="HUE on Google Code">View the Source for this project</a>
	</small>
  <?php echo $footer_main->draw('omega'); ?>
  </div>