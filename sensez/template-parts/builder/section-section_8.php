<?php 
if($args):
	foreach($args as $key=>$arg) $$key = $arg; ?>

	<?php if ($text): ?>
		<div class="section support fp-auto-height">
			<div class="container"><?= $text ?></div>
		</div>
	<?php endif ?>
	
	<?php endif; ?>