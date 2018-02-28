<!-- File: src/Template/Articles/add.ctp -->

<br>

<div class="container-fluid">

	<h2 class="text-muted page-heading">

	 Articles tagged with
	    <?= $this->Text->toList(h($tags), 'or') ?>
	</h2>

	<section>
	<?php foreach ($articles as $article): ?>
	    <article>
	        <!-- Use the HtmlHelper to create a link -->
	        <h4><?= $this->Html->link(
	            $article->title,
	            ['controller' => 'Articles', 'action' => 'view', $article->slug]
	        ) ?></h4>
	        <span><?= h($article->created) ?>
	    </article>
	<?php endforeach; ?>
	</section>
	
</div>

