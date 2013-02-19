<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Giftology: The social gifting company');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php echo $this->Facebook->html(); ?>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('http://cdn.webrupee.com/font');
		echo $this->Html->css('style');
		echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
		echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js');
		echo $this->Html->script('giftology');
		echo $this->Html->script('jquery.ias.min');		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
<style>
	
ul.left-menu{list-style:none; padding:0px; margin:50px 10px 10px 20px}
ul.left-menu li {margin:5px 0px; border-bottom:1px dashed #fad5ff; padding:2px 0px 6px 0px; }
ul.left-menu li a { font-size:13px;  color:#fff}

</style>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24851185-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div class="mainpage">
	<div class="header">
		<a href=<?= FULL_BASE_URL; ?>>
		<img class="mt-20 float-l" src="<?= IMAGE_ROOT; ?>brand-logo.jpg" />
		</a>
		
		<ul class="nav float-l">
			<li><a href=<?= $this->Html->url(array('controller'=>'reminders',  'action'=>'view_friends')); ?> class="events <?= isset($celebrations_active) ? $celebrations_active:''; ?>"><span>Events</span></a></li>
			<li><a href=<?= $this->Html->url(array('controller'=>'reminders',  'action'=>'view_friends', 'all')); ?> class="friends <?= isset($friends_active) ? $friends_active:''; ?>"><span>Friends</span></a></li>
			<li><a href=<?= $this->Html->url(array('controller'=>'gifts',  'action'=>'view_gifts')); ?> class="wallet <?= isset($gifts_active) ? $gifts_active:''; ?>"><span>My Gifts</span></a></li>
		</ul>
		
		<div class="controls">
			<div class="shadow-wrapper">
				<div class="frame">
					<div class="img-placeholder male">
						<?php $photo_url = "https://graph.facebook.com/".$facebook_user['id']."/picture"; ?>
						<img src=<?= $photo_url; ?>>
					</div>
				</div>
			</div>
			<div class="current-user">
				<p><?= $facebook_user['first_name']; ?></p>
				<?php echo $this->Facebook->logout(array('label' => 'Logout',
									 'redirect' => array('controller' => 'users',
											     'action' => 'logout'))); ?>
		     <a href=<?= $this->Html->url(array('controller'=>'users', 'action'=>'setting')); ?>><span>Settings</span></a>
			</div>
		</div>
		
	</div>
				
		<!--div class="transbox"><img class="spinner" src="<?echo IMAGE_ROOT.'/spinner.gif'; ?>"/></div-->

		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		
		<div id="footer">
			<div class="footer-line"></div>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
	<?= $this->Facebook->init(); ?>
	<script type="text/javascript">
		var clicky_custom = {};
		clicky_custom.session = {
		   username: '<?= $facebook_user['name']; ?>',
	           fb_id: '<?= $facebook_user['id']; ?>'
		};
	</script>

	<script type="text/javascript">
		var clicky_site_ids = clicky_site_ids || [];
		clicky_site_ids.push(66489932);
		(function() {
			var s = document.createElement('script');
			s.type = 'text/javascript';
			s.async = true;
			s.src = '//static.getclicky.com/js';
			( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
})();
	</script>
<script type="text/javascript"> 
var _urq = _urq || []; 
_urq.push(['setPerformInitialShorctutAnimation', false]); 
_urq.push(['initSite', '5fca15d4-fe52-4122-8671-dbac1fd0847a']); 

(function() { 
var ur = document.createElement('script'); ur.type = 'text/javascript'; ur.async = true; 
ur.src = 'http://sdscdn.userreport.com/userreport.js'; 
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ur, s); 
})(); 
</script> 

<?php echo $this->Mixpanel->embed(); ?>
</body>
</html>
