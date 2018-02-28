<!-- File: src/Template/Articles/view.ctp -->

<br>

<div class="container-fluid">

	<div class="row text-justify">

		<div class="col-lg-12">

			<h2 class="text-muted page-heading"><?= h($article->title) ?></h2>

			<p><?= h($article->body) ?></p>

			<p><small><b>Created :</b> <?= $article->created->format(DATE_RFC850) ?></small></p>

			<p><?= $this->Html->link('Edit', ['action' => 'edit', $article->slug], ['class' => 'btn btn-info']) ?></p>

		</div>

	</div>

</div>