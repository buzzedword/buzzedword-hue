<?php echo $tab_container->draw('alpha'); ?>
<ul>
	<li><a href="#tab-box-1">Skills and Experience</a></li>
	<li><a href="#tab-box-2">Programming Languages</a></li>
	<li><a href="#tab-box-3">Frameworks and Software</a></li>
</ul>
	<?php echo $tab_box_1->draw('alpha'); ?>
		<p>Over the past few years I've worked full time using Microsoft desktop and web technologies as my primary field of focus. Here are some of the highlights:</p>
		<ul class="details">
			<li>Microsoft Exchange
				<ul>
					<li>Live@EDU Educational Services</li>
					<li>Provisioned over 12,000 users via Powershell and Identity Lifecycle Manager/Forefront</li>
				</ul>
			</li>
			<li>Microsoft SQL Server 2005/2008
				<ul>
					<li>Database of choice while dealing with ASP.NET applications, both in house and outsourced</li>
					<li>Experienced with T-SQL for creating stored procedures, as well as scalar implementations in the .NET languages</li>
					<li>Assisted in farm migrations and scaling from seperate SQLEXPRESS/ACCESS instances to a full virtual SQL Farm, preserving relations and database linking.</li>
				</ul>
			</li>
			<li>Microsoft ASP.NET
				<ul>
					<li>Web Forms, MVC, Web Services</li>
					<li>Primary responsibilities have involved creating intranet applications for use with small departmental tasks. Prior to implementing SharePoint, this was accomplished through ASP.NET Master Pages and SVN to rapidly deploy similar instances.</li>
					<li>Created Web Service endpoints to interconnect desktop applications with production systems without the use of volatile credentials as was previously implemented</li>
				</ul>
			</li>
			<li>Wordpress MU and 3.0 Multisites
				<ul>
					<li>Successfully migrated FrontPage/FTP intranet sites to a Wordpress MU setup, and later migrated into the new 3.0 Multisites functionality.</li>
					<li>Self explanatory. Nobody likes FrontPage.</li>
					<li>Successful implementation of Wordpress in a Windows + IIS + MySQL + PHP configuration. (WIMP?)</li>
					<li>Later obtained clearance to migrate from IIS to Apache, providing a stable WAMP configuration.</li>
				</ul>
			</li>
			<li>Javascript
				<ul>
					<li>First introduced for Windows batch scripts and event log recursions</li>
					<li>Gradually used more when updating classic ASP applications</li>
					<li>Broadly implemented with transition to ASP.NET</li>
					<li>After implementing ASP.NET MVC, gained a progressive knowledge of how to interface jQuery with backend services (as jQuery is the primary transport mechanism for all methods in the MVC framework)</li>
				</ul>
			</li>
		</ul>
	<?php echo $tab_box_1->draw('omega'); ?>
	<?php echo $tab_box_2->draw('alpha'); ?>
	<p>Below you'll find a list of the different programming languages I've used, that I have a working knowledge of, and that I'm experienced using. I do not list languages for the sake of having them on this page: if you see a language on this list, it has been used to some feasible level on a project.</p>
		<ul class="details">
			<li class="experienced">PowerShell</li>
			<li>VB</li>
			<li class="experienced">VB.NET</li>
			<li class="working-knowledge">C++</li>
			<li class="experienced">C#</li>
			<li class="working-knowledge">F#</li>
			<li>ASP</li>
			<li class="experienced">ASP.NET</li>
			<li>JAVA</li>
			<li class="experienced">PHP</li>
			<li class="experienced">JavaScript</li>
			<li class="experienced">CSS</li>
		</ul>
	<?php echo $tab_box_2->draw('omega'); ?>
	<?php echo $tab_box_3->draw('alpha'); ?>
		<ul class="details">
			<li class="experienced">jQuery
				<ul>
					<li class="experienced">jQueryUI</li>
					</ul></li>
			<li>Mootools</li>
			<li>PrototypeJS
				<ul>
					<li>script.aculo.us</li>
				</ul></li>
			<li class="experienced">Microsoft AJAX Toolkit</li>
			<li class="experienced">Microsoft Silverlight</li>
			<li class="working-knowledge">NodeJS</li>
		</ul><br/>
		<ul class="details">
			<li class="experienced">Microsoft Sharepoint</li>
			<li class="working-knowledge">Microsoft Infopath Web</li>
			<li class="experienced">GraffitiCMS</li>
			<li>CakePHP</li>
			<li class="experienced">Wordpress</li>
			<li>Joomla</li>
			<li class="experienced">Drupal</li>
			<li class="working-knowledge">MongoDB</li>
		</ul>
	<?php echo $tab_box_3->draw('omega'); ?>
<?php echo $tab_container->draw('omega'); ?>
<p>Items in <span class="experienced">red</span> are experienced languages</p>
<p>Items in <span class="working-knowledge">green</span> are languages with a working knowledge</p>