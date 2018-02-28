<!-- File: src/Template/Articles/edit.ctp -->

<div class="container-fluid">

<h2 class="text-muted page-heading">Edit Article</h2>

	<div class="col-lg-6">

		<?php
		    echo $this->Form->create($article);
		    echo $this->Form->control('user_id', ['type' => 'hidden']);
		    echo $this->Form->control('title',['class' => 'form-control']);
		    echo $this->Form->control('body', ['rows' => '3', 'class' => 'form-control']);
		    echo $this->Form->control('tags._ids', ['options' => $tags, 'class' => 'form-control']);
		    echo '<br>';
		    echo $this->Form->button(__('Save Article'),['class' => 'btn btn-info']);
		    echo $this->Form->end();
		?>

	</div>
	
</div>