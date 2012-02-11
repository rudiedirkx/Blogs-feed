<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />

<title>Blogs feed</title>

<link rel="stylesheet" href="<?=baseUrl()?>base.css" />
<link rel="shortcut icon" href="<?=baseUrl()?>favicon.png" type="image/x-icon">

<?if( $messages = user::messages() ):?>
	<div class="messages">
		<ul>
			<?foreach( $messages AS $msg ):?>
				<li class="<?=$msg['type']?>"><?=$msg['text']?></li>
			<?endforeach?>
		</ul>
	</div>
<?endif?>

<div class="service-menu">
<?php

require user::logincheck() ? 'inc.menu-authenticated.php' : 'inc.menu-anonymous.php';

?>
</div>