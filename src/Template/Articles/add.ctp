<!-- File: src/Template/Articles/add.ctp -->

<br>

<div class="container-fluid">

<h2 class="text-muted page-heading">Add Article</h2>

	<div class="col-lg-6">
		<?php
		    echo $this->Form->create($article);

		    // Hard code the user for now.
		    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
		    echo $this->Form->control('title',['class' => 'form-control']);
		    echo $this->Form->control('body', ['rows' => '3', 'class' => 'form-control']);
		    //echo $this->Form->control('tags._ids', ['options' => $tags, 'class' => 'form-control']);
		    echo $this->Form->control('tag_string', ['type' => 'text']);
		    echo '<br>';
		    echo $this->Form->button(__('Save Article'),['class' => 'btn btn-primary']);
		    echo $this->Form->end();
		?>
	</div>
</div>