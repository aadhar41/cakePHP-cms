<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div>

<!-- 
For : Bootstrap Success Message
<div class="alert alert-success alert-dismissable fade show" onclick="this.classList.add('hidden')">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>Success!</strong> <?= $message ?>
</div>
-->
