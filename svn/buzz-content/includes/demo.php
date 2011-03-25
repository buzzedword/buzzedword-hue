<div class="container_16" id="main">
	<?php echo $header->draw('alpha'); ?>
		<p>This should be the header</p>
		<?php echo $nav->draw('alpha'); ?>
			<p>This is a nav</p>
		<?php echo $nav->draw('omega'); ?>
	<?php echo $header->draw('omega'); ?>
	<?php echo $article->draw('alpha'); ?>
		<p>This is an article</p>
		<?php echo $nav->draw('alpha'); ?>
			<p>This is another nav</p>
		<?php echo $nav->draw('omega'); ?>
	<?php echo $article->draw('omega'); ?>
	<?php echo $section->draw('alpha'); ?>
		<p>This is a section</p>
		<?php echo $sidebar->draw('alpha'); ?>
			<p>This is a sidebar, and in HTML5 is still a nav</p>
		<?php echo $sidebar->draw('omega'); ?>
	<?php echo $section->draw('omega'); ?>
	<?php echo $footer->draw('alpha'); ?>
		<p>This is a footer</p>
	<?php echo $footer->draw('omega'); ?>
</div>
<div class="container_16" id="console">
  <?php require_once($page->draw()); ?>
</div>