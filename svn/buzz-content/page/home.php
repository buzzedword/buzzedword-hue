<?php echo $wrapper->draw('alpha'); ?>
	<?php echo $left_content->draw('alpha'); ?>
		<h3><a href="#">What am I looking at?</a></h3>
		<?php $article->draw('alpha'); ?>
			<p>You're looking at a project called "HUE", or HTML Upsizing Engine. HUE is a tranformational engine, allowing a developer to create a template that can be served in both standards compliant XHTML 1.0 Strict, and HTML5. Upsizing is performed by the server, which can then dynamically shift modes through either a query string or a global value predefined.</p>
		<?php $article->draw('omega'); ?>
		<h3><a href="#">What modes are you talking about?</a></h3>
		<?php $article->draw('alpha'); ?>
			<p>HUE enables developers to write code once, and upsize their XHTML to HTML5 without writing extra code. In XHTML mode, all tags are classed semantically, according to standards established by <a href="http://www.microformats.org" title="Microformats">microformats.org</a>. In HTML5 mode, HUE takes these semantic DIVs, ULs, and other elements, and upsizes them to their proper HTML5 equivalent as of the most recent draft from <a href="http://www.w3c.org" title="W3C">W3C.org</a>.</p>
		<?php $article->draw('omega'); ?>
		<h3><a href="#">Why was HUE made?</a></h3>
		<?php $article->draw('alpha'); ?>
			<p>This is a niche engine, geared towards the individuals who want total control over how their content is displayed. Many designers and developers don't know how to style or even structure the newer HTML5 constructs. HUE aims to bridge this gap by keeping to a familiar XHTML + class venacular, and automatically transforming it into the proper HTML5 equivalent. This allows both developers and designers to test their code and use modern constructs with minimal effort.</p>
		<?php $article->draw('omega'); ?>
		<h3><a href="#">Can I see an example of how this works?</a></h3>
		<?php $article->draw('alpha'); ?>
			<p>Absolutely. This entire site is built on HUE, and you can switch modes at any time by updating the "modern" querystring, or clicking one of the links below. This will shift the entire site into HTML5 or XHTML 1.0 mode. <strong>Please note, if your browser does not support HTML5 markup, you will not be able to see the site correctly after switching modes.</strong> Simply switch "modern" back to 0, and you'll be viewing the site again in XHTML mode. You won't notice a visible difference between either mode (isn't that neat?) so make sure you view the source of both modes to see HUE in action.<br/>
				&nbsp;&nbsp;&nbsp;XHTML 1.0 Mode: <a href="http://www.buzzedword.org/?modern=0" title="XHTML 1.0 Mode">?modern=0</a><br/>
				&nbsp;&nbsp;&nbsp;HTML 5 Mode: <a href="http://www.buzzedword.org/?modern=1" title="HTML 5 Mode">?modern=1</a><br/>
			</p>
		<?php $article->draw('omega'); ?>
	<?php echo $left_content->draw('omega'); ?>
	<?php echo $right_content->draw('alpha'); ?>
		<img src="<?php echo (approot . 'images/HUE.png');?>" alt="HUE Screenshot" />
	<?php echo $right_content->draw('omega'); ?>
<?php echo $wrapper->draw('omega'); ?>
<?php echo $wrapper->draw('alpha'); ?>
	<h2>Social Media</h2>
	<?php echo $outer_alpha->draw('alpha'); ?>
		<ul id="twitter_container">
			<li>No data... yet.</li>
		</ul>&nbsp;
	<?php echo $outer_alpha->draw('omega'); ?>
	<?php echo $large_omega->draw('alpha'); ?>
		<a href="http://www.facebook.com/buzzedword" id="facebook" title="Daniel Garcia"><img src="http://badge.facebook.com/badge/27904633.511.871883116.png" width="552" height="84" style="border: 0px;" alt="Daniel Garcia" /></a>
	<?php echo $large_omega->draw('omega'); ?>
<?php echo $wrapper->draw('omega'); ?>