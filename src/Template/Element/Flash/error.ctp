<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div>

<!-- 
For : Bootstrap Error Message
<div class="alert alert-danger alert-dismissable fade show" onclick="this.classList.add('hidden');">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<?= $message ?>
</div>
 -->