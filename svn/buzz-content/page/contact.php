<h2>Send me an email!</h2>

<?php if(isset($hasError)) { //If errors are found ?>
	<p class="error">Please check if you've filled all the fields with valid information. Thank you.</p>
<?php } ?>

<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
	<br/><div class="success">
		<p><strong>Email Successfully Sent!</strong></p>
		<p>Thank you for emailing me. I have your name as <strong><?php echo $name;?></strong>, and your reply address as <strong><?php echo $email;?></strong>. Your email was successfully sent, and I will be in touch with you soon. If the previous information is incorrect, please feel free to send me another message.</p>
	</div><br/>
<?php } ?>
<?php $contact_wrapper->draw('alpha'); ?>
	<div id="contact-wrapper">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; echo ((html5) ? '?modern=1&amp;page=contact.php' : '?modern=0&amp;page=contact.php');?>" id="contactform">
			<fieldset>
				<?php echo $section->draw('alpha'); ?>
					<label for="contactname"><strong>Name:</strong></label>
					<input type="text" size="50" name="contactname" id="contactname" value="" class="required" />
				<?php echo $section->draw('omega'); ?>

				<?php echo $section->draw('alpha'); ?>
					<label for="email"><strong>Email:</strong></label>
					<input type="text" size="50" name="email" id="email" value="" class="required email" />
				<?php echo $section->draw('omega'); ?>

				<?php echo $section->draw('alpha'); ?>
					<label for="subject"><strong>Subject:</strong></label>
					<input type="text" size="50" name="subject" id="subject" value="" class="required" />
				<?php echo $section->draw('omega'); ?>

				<?php echo $section->draw('alpha'); ?>
					<label for="message"><strong>Message:</strong></label>
					<textarea rows="5" cols="50" name="message" id="message" class="required"></textarea>
				<?php echo $section->draw('omega'); ?>
				<input type="submit" value="Send Message" name="submit" />
			</fieldset>
		</form>
	</div>
<?php $contact_wrapper->draw('omega'); ?>